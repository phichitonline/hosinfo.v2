<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dash_opd = DB::connection('mysql_hos')->select('SELECT COUNT(DISTINCT hn) AS ptm_opd_hn,COUNT(DISTINCT vn) AS ptm_opd_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),"%Y-%m-%d"),vn,NULL)) AS pt_opd_today
        FROM ovst
        WHERE vstdate BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_ipd = DB::connection('mysql_hos')->select('SELECT COUNT(DISTINCT hn) AS ptm_ipd_hn,COUNT(DISTINCT an) AS ptm_ipd_an
        ,COUNT(DISTINCT IF(regdate = DATE_FORMAT(NOW(),"%Y-%m-%d"),an,NULL)) AS pt_ipd_today
        FROM ipt
        WHERE regdate BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_ptm = DB::connection('mysql_hos')->select('SELECT COUNT(DISTINCT hn) AS ptm_ttm_hn,COUNT(*) AS ptm_ttm_vn
        ,COUNT(DISTINCT IF(service_date = DATE_FORMAT(NOW(),"%Y-%m-%d"),vn,NULL)) AS pt_ttm_today
        FROM health_med_service
        WHERE service_date BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_dent = DB::connection('mysql_hos')->select('SELECT COUNT(DISTINCT hn) AS ptm_dent_hn,COUNT(DISTINCT vn) AS ptm_dent_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),"%Y-%m-%d"),vn,NULL)) AS pt_dent_today
        FROM dtmain
        WHERE vstdate BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_xray = DB::connection('mysql_hos')->select('SELECT COUNT(DISTINCT hn) AS ptm_xray_hn,COUNT(vn) AS ptm_xray_vn
        ,COUNT(IF(examined_date = DATE_FORMAT(NOW(),"%Y-%m-%d"),vn,NULL)) AS pt_xray_today
        FROM xray_report
        WHERE examined_date BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_er = DB::connection('mysql_hos')->select('SELECT COUNT(DISTINCT o.hn) AS ptm_er_hn,COUNT(DISTINCT o.vn) AS ptm_er_vn
        ,COUNT(DISTINCT IF(er.vstdate = DATE_FORMAT(NOW(),"%Y-%m-%d"),o.vn,NULL)) AS pt_er_today
            FROM er_regist er
            LEFT OUTER JOIN ovst o ON o.vn = er.vn
            LEFT OUTER JOIN er_pt_type et ON et.er_pt_type = er.er_pt_type
            WHERE er.vstdate BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")
            AND er.er_pt_type IN (SELECT er_pt_type FROM er_pt_type WHERE accident_code = "Y") ');

        $dash_phy = DB::connection('mysql_hos')->select('SELECT COUNT(DISTINCT hn) AS ptm_phy_hn,COUNT(DISTINCT vn) AS ptm_phy_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),"%Y-%m-%d"),vn,NULL)) AS pt_phy_today
        FROM physic_main
        WHERE vstdate BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_or = DB::connection('mysql_hos')->select('SELECT COUNT(DISTINCT hn) AS ptm_or_hn
        ,COUNT(hn) AS ptm_or_vn
        ,COUNT(IF(patient_department = "OPD",vn,NULL)) AS ptm_or_opd
        ,COUNT(IF(patient_department = "IPD",an,NULL)) AS ptm_or_ipd
        ,COUNT(IF(operation_date = DATE_FORMAT(NOW(),"%Y-%m-%d"),hn,NULL)) AS pt_or_today
        FROM operation_list
        WHERE operation_date BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")');


        $dash_ward_wtotal = DB::connection('mysql_hos')->select('SELECT COUNT(*) AS wtotal
        ,(SELECT SUM(bedcount) FROM ward WHERE ward_active = "Y")-COUNT(*) AS wblank
        FROM ipt WHERE dchdate IS NULL');

        $dash_ward_pttype = DB::connection('mysql_hos')->select('SELECT COUNT(IF(pttype IN (SELECT pttype FROM pttype WHERE pcode IN (SELECT `code` FROM pcode WHERE tph_pttype_group = "UC")),an,NULL)) AS "uc"
        ,COUNT(IF(pttype IN (SELECT pttype FROM pttype WHERE pcode IN ("A1","A2")),an,NULL)) AS "mo"
        ,COUNT(IF(pttype NOT IN (
        SELECT pttype FROM pttype WHERE pcode IN (SELECT `code` FROM pcode WHERE tph_pttype_group = "UC")
        UNION
        SELECT pttype FROM pttype WHERE pcode IN ("A1","A2")
        ),an,NULL)) AS "ot"
        FROM ipt WHERE dchdate IS NULL');

        $dash_ward_admittoday = DB::connection('mysql_hos')->select('SELECT COUNT(*) AS admittoday FROM ipt WHERE regdate = DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_ward_dchtoday = DB::connection('mysql_hos')->select('SELECT COUNT(*) AS dchtoday FROM ipt WHERE dchdate = DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_ward_movetoday = DB::connection('mysql_hos')->select('SELECT COUNT(*) AS movetoday FROM iptbedmove WHERE movedate = DATE_FORMAT(NOW(),"%Y-%m-%d")');

        $dash_ward_bedcount = DB::connection('mysql_hos')->select('SELECT SUM(bedcount) AS bedcount FROM ward WHERE ward_active = "Y"');

        $dash_ward_admsum = DB::connection('mysql_hos')->select('SELECT (SUM(i.admdate)*100)/((SELECT SUM(bedcount) FROM ward WHERE ward_active = "Y")*DATEDIFF(NOW(),"2019-10-01")+1) AS admsum
        FROM an_stat i
        WHERE i.dchdate BETWEEN "2019-10-01" AND NOW()');

        $dash_ward = DB::connection('mysql_hos')->select('SELECT w.ward,w.name,w.bedcount,COUNT(*) AS admitnow
        FROM ipt i
        LEFT OUTER JOIN ward w ON w.ward = i.ward
        WHERE dchdate IS NULL
        GROUP BY w.ward
        ORDER BY w.ward ASC ');

        return view('dashboard', [
            'controller_name' => "HOS-info V.2 Dashboard",
            'active_menu_dashboard' => "active",
            'dash_opd' => $dash_opd,
            'dash_ipd' => $dash_ipd,
            'dash_ptm' => $dash_ptm,
            'dash_dent' => $dash_dent,
            'dash_xray' => $dash_xray,
            'dash_er' => $dash_er,
            'dash_phy' => $dash_phy,
            'dash_or' => $dash_or,
            'dash_ward_wtotal' => $dash_ward_wtotal,
            'dash_ward_pttype' => $dash_ward_pttype,
            'dash_ward_admittoday' => $dash_ward_admittoday,
            'dash_ward_dchtoday' => $dash_ward_dchtoday,
            'dash_ward_movetoday' => $dash_ward_movetoday,
            'dash_ward_bedcount' => $dash_ward_bedcount,
            'dash_ward_admsum' => $dash_ward_admsum,
            'dash_ward' => $dash_ward,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
