<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LineoaController extends Controller
{
    public function __construct()
	{
	    $this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('lineoa.index', [
            'controller_name' => "LineOA",
            'active_menu_lineoa' => "active",
        ]);
    }

    public function flex1()
    {
        return view('lineoa.flex1', [
            'controller_name' => "LineOA",
            'active_menu_lineoa' => "active",
        ]);
    }

    public function flex2()
    {
        return view('lineoa.flex2', [
            'controller_name' => "LineOA",
            'active_menu_lineoa' => "active",
        ]);
    }

    public function flex3()
    {
        return view('lineoa.flex3', [
            'controller_name' => "LineOA",
            'active_menu_lineoa' => "active",
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function flex1send(Request $request)
    {
        $msg_target = $request->msg_target;
        $msg_head = $request->msg_head;
        $msg_picture = $request->msg_picture;
        $msg_pw = $request->msg_pw;
        $msg_ph = $request->msg_ph;
        $msg_link = $request->msg_link;
        $msg_text = $request->msg_text;
        $msg_size = $request->msg_size;
        $msg_other = $request->msg_other;

        $idline_target = DB::connection('mysql_lineoa')->select('SELECT lineid AS line_id,hn FROM patientusers WHERE hn IN ("000035634") ');

        return view('lineoa.flex1send', [
            'controller_name' => "LineOA",
            'active_menu_lineoa' => "active",
            'msg_target' => $msg_target,
            'msg_head' => $msg_head,
            'msg_picture' => $msg_picture,
            'msg_pw' => $msg_pw,
            'msg_ph' => $msg_ph,
            'msg_link' => $msg_link,
            'msg_text' => $msg_text,
            'msg_size' => $msg_size,
            'msg_other' => $msg_other,
            'idline_target' => $idline_target,
        ]);
    }

    public function flex2send(Request $request)
    {
        $msg_target = $request->msg_target;
        $msg_head = $request->msg_head;
        $msg_picture = $request->msg_picture;
        $msg_pw = $request->msg_pw;
        $msg_ph = $request->msg_ph;
        $msg_link = $request->msg_link;

        $idline_target = DB::connection('mysql_lineoa')->select('SELECT lineid AS line_id,hn FROM patientusers WHERE hn IN ("000035634") ');

        return view('lineoa.flex2send', [
            'controller_name' => "LineOA",
            'active_menu_lineoa' => "active",
            'msg_target' => $msg_target,
            'msg_head' => $msg_head,
            'msg_picture' => $msg_picture,
            'msg_pw' => $msg_pw,
            'msg_ph' => $msg_ph,
            'msg_link' => $msg_link,
            'idline_target' => $idline_target,
        ]);
    }

    public function flex3send(Request $request)
    {
        $msg_target = $request->msg_target;
        $msg_head = $request->msg_head;
        $msg_picture = $request->msg_picture;
        $msg_pw = $request->msg_pw;
        $msg_ph = $request->msg_ph;
        $msg_link = $request->msg_link;
        $msg_text = $request->msg_text;
        $msg_size = $request->msg_size;
        $msg_other = $request->msg_other;

        $idline_target = DB::connection('mysql_lineoa')->select('SELECT lineid AS line_id,hn FROM patientusers WHERE hn IN ("000035634") ');

        return view('lineoa.flex3send', [
            'controller_name' => "LineOA",
            'active_menu_lineoa' => "active",
            'msg_target' => $msg_target,
            'msg_head' => $msg_head,
            'msg_picture' => $msg_picture,
            'msg_pw' => $msg_pw,
            'msg_ph' => $msg_ph,
            'msg_link' => $msg_link,
            'msg_text' => $msg_text,
            'msg_size' => $msg_size,
            'msg_other' => $msg_other,
            'idline_target' => $idline_target,
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
