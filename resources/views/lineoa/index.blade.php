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
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">ส่งข่าวประชาสัมพันธ์ LineOA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h5 class="box-title">เลือกรูปแบบ Flex message ที่ต้องการส่ง</h3>
              <div class="row">
                <div class="col-md-4">
                    <a href="{{ url('/lineoa/flex1') }}"><img class="img-responsive pad" src="../dist/img/flex1.png" alt=""></a>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('/lineoa/flex2') }}"><img class="img-responsive pad" src="../dist/img/flex2.png" alt=""></a>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('/lineoa/flex3') }}"><img class="img-responsive pad" src="../dist/img/flex3.png" alt=""></a>
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