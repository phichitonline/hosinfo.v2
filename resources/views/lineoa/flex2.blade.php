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
            <li><a href="{{ url('/lineoa') }}">{{ $controller_name }}</a></li>
            <li class="active">Flex1</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">ส่งข่าวประชาสัมพันธ์ LineOA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h5 class="box-title">ฟอร์มส่งข้อมูล Flex2</h3>
              <div class="row">
                <div class="col-md-4">
                    <a href="#"><img class="img-responsive pad" src="../dist/img/flex2.png" alt=""></a>
                </div>
                <div class="col-md-8">


          <!-- general form elements disabled -->
          <!--<div class="box box-warning">-->

            <!-- /.box-header -->
            <!--<div class="box-body">-->
              <form role="form" method="POST" action="/lineoa/flex2send" >
                  @csrf

                <div class="form-group">
                  <label>เลือกกลุ่มเป้าหมาย</label>
                  <select class="form-control" name="msg_target">
                    <option value="000035634" selected>ghost</option>
                    <option value="ทุกคนที่ลงทะเบียน">ทุกคนที่ลงทะเบียน</option>
                    <option value="เพศชาย">เพศชาย</option>
                    <option value="เพศหญิง">เพศหญิง</option>
                    <option value="อายุ 60 ปีขึ้นไป">อายุ 60 ปีขึ้นไป</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>หัวข้อข่าว/ประกาศ</label>
                  <input type="text" name="msg_head" class="form-control" placeholder="หัวข้อข่าว ..." required>
                </div>
                <div class="form-group">
                  <label>ลิงก์รูปภาพ</label>
                  <input type="text" name="msg_picture" class="form-control" value="https://hosinfo.tphcp.go.th/dist/img/flex2.png">
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-warning">
                          <label class="control-label" for="inputWarning">ความกว้าง pixel</label>
                          <input type="text" name="msg_pw" class="form-control" id="inputWarning" value="300">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-warning">
                          <label class="control-label" for="inputWarning">ความยาว pixel</label>
                          <input type="text" name="msg_ph" class="form-control" id="inputWarning" value="300">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                  <label>ลิงก์เว็บ</label>
                  <input type="text" name="msg_link" class="form-control" value="https://www.tphcp.go.th">
                </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary"> ส่งข้อความ Flex </button>
                  </div>
              </form>
            <!--</div>-->
            <!-- /.box-body -->
          <!--</div>-->
          <!-- /.box -->



                </div>

            </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- ./Main content -->

</div>
<!-- ./Content Wrapper -->

@endsection