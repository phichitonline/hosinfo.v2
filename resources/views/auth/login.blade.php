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
                      <p class="login-box-msg">Login เข้าใช้งาน</p>

                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group has-feedback">
                          <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="ชื่อผู้ใช้หรืออีเมล์" required autofocus>
                          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="form-group has-feedback">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน" required autocomplete="current-password">
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                          @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="checkbox icheck">
                              <label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> จำรหัสผ่าน
                              </label>
                            </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                          </div>
                          <!-- /.col -->
                        </div>

                      <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-key"></i>
                            ลืมชื่อผู้ใช้หรือรหัสผ่าน</a>
                        @endif
                        <a href="{{ route('register') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-user"></i>
                            สมัครสมาชิกใหม่</a>
                      </div>
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

