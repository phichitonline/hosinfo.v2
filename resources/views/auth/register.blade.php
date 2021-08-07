@extends('layouts.theme')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

            <div class="register-box">

                    <div class="register-box-body">
                      <p class="login-box-msg">สมัครผู้ใช้งานใหม่</p>

                      <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group has-feedback">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="ชื่อ - นามสกุล">
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                          <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required placeholder="ชื่อผู้ใช้ (Username)">
                          @if ($errors->has('username'))
                          <span class="help-block">
                              <strong>{{ $errors->first('username') }}</strong>
                          </span>
                          @endif

                          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="อีเมล์">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="รหัสผ่าน">
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="password" class="form-control" name="password_confirmation" required placeholder="ยืนยันรหัสผ่านอีกครั้ง">
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="checkbox icheck">
                              <label>
                                <input type="checkbox"> ยอมรับ<a href="#">ข้อตกลง</a>
                              </label>
                            </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      </form>

                      <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-key"></i>
                            ลืมชื่อผู้ใช้หรือรหัสผ่าน</a>
                        @endif
                        <a href="{{ route('login') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-user"></i>
                            เข้าใช้งาน</a>
                      </div>

                    </div>
                    <!-- /.form-box -->
                  </div>
                  <!-- /.register-box -->

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
