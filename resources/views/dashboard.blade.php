@extends('layouts.theme')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $controller_name }}
            <small>{{ config('app.name') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ $controller_name }}</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
        @foreach ($dash_opd as $data)
        @php
          $ptm_opd_hn = $data->ptm_opd_hn;
          $ptm_opd_vn = $data->ptm_opd_vn;
          $pt_opd_today = $data->pt_opd_today;
        @endphp
        @endforeach
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ number_format($pt_opd_today,0) }}</h3>
              <p>ผู้รับบริการวันนี้ <br>(เดือนนี้ {{ number_format($ptm_opd_hn,0) }} คน / {{ number_format($ptm_opd_vn,0) }} ครั้ง)</p>
            </div>
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <a href="?stat=opd" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        @foreach ($dash_ipd as $data)
        @php
          $ptm_ipd_hn = $data->ptm_ipd_hn;
          $ptm_ipd_an = $data->ptm_ipd_an;
          $pt_ipd_today = $data->pt_ipd_today;
        @endphp
        @endforeach
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ number_format($pt_ipd_today,0) }}</h3>
              <p>Admit วันนี้ <br>(เดือนนี้ {{ number_format($ptm_ipd_hn,0) }} คน / {{ number_format($ptm_ipd_an,0) }} ครั้ง)</p>
            </div>
            <div class="icon">
              <i class="fa fa-bed"></i>
            </div>
            <a href="?stat=ipd" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        @foreach ($dash_ptm as $data)
        @php
          $ptm_ttm_hn = $data->ptm_ttm_hn;
          $ptm_ttm_vn = $data->ptm_ttm_vn;
          $pt_ttm_today = $data->pt_ttm_today;
        @endphp
        @endforeach
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ number_format($pt_ttm_today,0) }}</h3>
              <p>แพทย์แผนไทย วันนี้ <br>(เดือนนี้ {{ number_format($ptm_ttm_hn,0) }} คน / {{ number_format($ptm_ttm_vn,0) }} ครั้ง)</p>
            </div>
            <div class="icon">
              <i class="fa fa-hand-paper-o"></i>
            </div>
            <a href="?stat=ppt" class="small-box-footer">รายละเอียด  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        @foreach ($dash_dent as $data)
        @php
          $ptm_dent_hn = $data->ptm_dent_hn;
          $ptm_dent_vn = $data->ptm_dent_vn;
          $pt_dent_today = $data->pt_dent_today;
        @endphp
        @endforeach
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ number_format($pt_dent_today,0) }}</h3>
              <p>ทันตกรรม วันนี้ <br>(เดือนนี้ {{ number_format($ptm_dent_hn,0) }} คน / {{ number_format($ptm_dent_vn,0) }} ครั้ง)</p>
            </div>
            <div class="icon">
              <i class="fa fa-quote-left"></i>
            </div>
            <a href="?stat=dent" class="small-box-footer">รายละเอียด  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Info boxes -->
      <div class="row">

        @foreach ($dash_xray as $data)
        @php
          $ptm_xray_hn = $data->ptm_xray_hn;
          $ptm_xray_vn = $data->ptm_xray_vn;
          $pt_xray_today = $data->pt_xray_today;
        @endphp
        @endforeach
        <div class="col-md-3 col-sm-6 col-xs-12">
		    <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> X-RAY" style="color:black;" href="?stat=xray">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-times"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">วันนี้ {{ number_format($pt_xray_today,0) }}</span>
              <span class="info-box-text">X-RAY <br>เดือนนี้ {{ number_format($ptm_xray_hn,0) }} คน / {{ number_format($ptm_xray_vn,0) }} ครั้ง</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        @foreach ($dash_er as $data)
        @php
          $ptm_er_hn = $data->ptm_er_hn;
          $ptm_er_vn = $data->ptm_er_vn;
          $pt_er_today = $data->pt_er_today;
        @endphp
        @endforeach
        <div class="col-md-3 col-sm-6 col-xs-12">
		    <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> อุบัติเหตุ" style="color:black;" href="?stat=er">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-ambulance"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">วันนี้ {{ number_format($pt_er_today,0) }}</span>
              <span class="info-box-text">อุบัติเหตุ <br>เดือนนี้ {{ number_format($ptm_er_hn,0) }} คน / {{ number_format($ptm_er_vn,0) }} ครั้ง</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        @foreach ($dash_phy as $data)
        @php
          $ptm_phy_hn = $data->ptm_phy_hn;
          $ptm_phy_vn = $data->ptm_phy_vn;
          $pt_phy_today = $data->pt_phy_today;
        @endphp
        @endforeach
        <div class="col-md-3 col-sm-6 col-xs-12">
		    <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> กายภาพบำบัด" style="color:black;" href="?stat=pts">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-wheelchair"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">วันนี้ {{ number_format($pt_phy_today,0) }}</span>
              <span class="info-box-text">กายภาพบำบัด <br>เดือนนี้ {{ number_format($ptm_phy_hn,0) }} คน / {{ number_format($ptm_phy_vn,0) }} ครั้ง</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        @foreach ($dash_or as $data)
        @php
          $ptm_or_hn = $data->ptm_or_hn;
          $ptm_or_vn = $data->ptm_or_vn;
          $ptm_or_opd = $data->ptm_or_opd;
          $ptm_or_ipd = $data->ptm_or_ipd;
          $pt_or_today = $data->pt_or_today;
        @endphp
        @endforeach
        <div class="col-md-3 col-sm-6 col-xs-12">
		    <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> ผู้ป่วยผ่าตัด" style="color:black;" href="?stat=or">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-heartbeat"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">วันนี้ {{ number_format($pt_or_today,0) }}</span>
              <span class="info-box-text">ผู้ป่วยผ่าตัด <br>เดือนนี้ {{ number_format($ptm_or_hn,0) }} คน / {{ number_format($ptm_or_vn,0) }} ครั้ง (OPD {{ number_format($ptm_or_opd,0) }} / IPD {{ number_format($ptm_or_ipd,0) }})</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

    



<div class="row match-height">

@foreach ($dash_ward_wtotal as $data) @php $ipt_wtotal = $data->wtotal; $ipt_wblank = $data->wblank @endphp @endforeach
@foreach ($dash_ward_pttype as $data) @php $ipt_mo = $data->mo; $ipt_ot = $data->ot; $ipt_uc = $data->uc @endphp @endforeach
@foreach ($dash_ward_admittoday as $data) @php $ipt_admittoday = $data->admittoday @endphp @endforeach
@foreach ($dash_ward_dchtoday as $data) @php $ipt_dchtoday = $data->dchtoday @endphp @endforeach
@foreach ($dash_ward_movetoday as $data) @php $ipt_movetoday = $data->movetoday @endphp @endforeach
@foreach ($dash_ward_bedcount as $data) @php $ipt_bedcount = $data->bedcount @endphp @endforeach
@foreach ($dash_ward_admsum as $data) @php $ipt_admsum = $data->admsum @endphp @endforeach

  <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-red">
          <div class="widget-user-image">
            <img class="img-circle" src="dist/img/ipd_icon.png" alt="">
          </div>
          <!-- /.widget-user-image -->
          <h3 class="widget-user-username">สถิติผู้ป่วยในวันนี้</h3>
          <h5 class="widget-user-desc">จำนวนเตียงทั้งหมด {{ number_format($ipt_bedcount,0) }} เตียง</h5>
        </div>
        <div class="box-footer no-padding">
    <div class="row">
      <div class="col-sm-6">
          <ul class="nav nav-stacked">
            <li><a href="?stat=ipd">รับใหม่วันนี้ <span class="pull-right badge bg-red">{{ number_format($ipt_admittoday,0) }} เตียง</span></a></li>
            <li><a href="?stat=ipd">จำหน่ายวันนี้ <span class="pull-right badge bg-yellow">{{ number_format($ipt_dchtoday,0) }} เตียง</span></a></li>
            <li><a href="?stat=ipd">Admit อยู่ <span class="pull-right badge bg-blue">{{ number_format($ipt_wtotal,0) }} เตียง</span></a></li>
            <li><a href="?stat=ipd">เตียงว่าง <span class="pull-right badge bg-green">{{ number_format($ipt_wblank,0) }} เตียง</span></a></li>
          </ul>
      </div>
      <div class="col-sm-6">
          <ul class="nav nav-stacked">
            <li><a href="?stat=ipd">สิทธิ์ชำระเงินและเบิกได้ <span class="pull-right badge"> {{ number_format($ipt_mo,0) }} เตียง</span></a></li>
            <li><a href="?stat=ipd">สิทธิ์ UC<span class="pull-right badge"> {{ number_format($ipt_uc,0) }} เตียง</span></a></li>
            <li><a href="?stat=ipd">สิทธิอื่นๆ <span class="pull-right badge"> {{ number_format($ipt_ot,0) }} เตียง</span></a></li>
            <li><a href="?stat=ipd">อัตราการครองเตียง <span class="pull-right badge bg-red">{{ number_format($ipt_admsum,2) }} %</span></a></li>
          </ul>
      </div>
    </div>


        </div>
      </div>
    </div>
    <!-- /.col -->

    <!-- col -->
    <div class="col-md-8">
      <div class="row">

      @foreach ($dash_ward as $data)
        @php

          if ($data->admitnow*100/$data->bedcount >= 100) {
            $bg_info_color = "bg-red";
          } else if ($data->admitnow*100/$data->bedcount >= 75) {
            $bg_info_color = "bg-yellow";
          } else if ($data->admitnow*100/$data->bedcount >= 50) {
            $bg_info_color = "bg-aqua";
          } else {
            $bg_info_color = "bg-green";
          }
          if ($data->bedcount-$data->admitnow <= 0) {
            $bedblank = "เต็ม";
          } else {
            $bedblank1 = $data->bedcount-$data->admitnow;
            $bedblank = "ว่าง ".$bedblank1;
          }

        @endphp


        <!-- /.ward-box -->
        <div class="col-sm-6">
          <div class="info-box {{ $bg_info_color }}">
            <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> {{ $data->name }}" style="color:white;" href="#">
            <span class="info-box-icon"><i class="fa fa-bed"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">{{ $data->name }}</span>
              <span class="info-box-number">Admit {{ $data->admitnow }}/{{ $data->bedcount }} เตียง ({{ $bedblank }})</span>
              <div class="progress">
                <div class="progress-bar" style="width: {{ number_format($data->admitnow*100/$data->bedcount,2) }}%"></div>
              </div>
              <span class="progress-description">ครองเตียง {{ number_format($data->admitnow*100/$data->bedcount,2) }}% </span></a>
            </div>
          </div>
        </div>
        <!-- ward-box./ -->
        @endforeach

      </div>
  </div>
</div>
<!-- /.row -->

</section>

</div>
<!-- ./wrapper -->

@endsection