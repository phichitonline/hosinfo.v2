@extends('layouts.theme')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

                  <div class="login-box">
                    {{-- <div class="login-logo">
                      <a><b>MIS HOS-info </b>V.2</a>
                    </div> --}}
                    <!-- /.login-logo -->
                    <div class="login-box-body">
                      <p class="login-box-msg">ลืมรหัสผ่าน</p>

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                      <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group has-feedback">
                          <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="กรอกอีเมล์ของคุณ" required autofocus>
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <button type="submit" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-key"></i> ขอรหัสผ่านใหม่</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      <div class="social-auth-links text-center">
                    </form>

                    </div>
                    <!-- /.login-box-body -->
                  </div>
                  <!-- /.login-box -->

                  <!-- jQuery 3 -->
                  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
                  <!-- Bootstrap 3.3.7 -->
                  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
                  <!-- iCheck -->
                  <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
                  <script>
                    $(function () {
                      $('input').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
                        increaseArea: '20%' /* optional */
                      });
                    });
                  </script>

      <!-- Info boxes -->
    </section>

</div>
<!-- ./wrapper -->

@endsection
