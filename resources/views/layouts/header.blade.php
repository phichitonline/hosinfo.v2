      <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="{{ asset('images/logo/tphcp-logo-small.png') }}" border="0" alt=""></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="{{ asset('images/logo/tphcp-logo-light.png') }}" border="0" alt=""></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"></a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <ul class="menu">
                      <li>
                        <a href="#chat">
                          <i class="fa fa-users text-green"></i> กำลังใช้งาน <span class="label label-success">3</span> คน
                        </a>
                      </li>
                      <li>
                        <a href="#chat">
                          <i class="fa fa-users text-aqua"></i> ลงทะเบียนใหม่วันนี้ <span class="label label-warning">5</span> คน
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">จัดการสมาชิก</a></li>
                </ul>
              </li>
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-danger">5</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><i class="fa fa-comments-o"></i> แจ้งปัญหา/สอบถาม <span class="label label-danger"> 5 </span></li>
                  <li>
                    <ul class="menu">
                    <li>
                      <a href="#chat">
                        &nbsp; - แจ้งปัญหา/สอบถาม...(ณัฐพงศ์)
                      </a>
                    </li>
                  <!-- end task item -->
                </ul>
              </li>

            </ul>

              @guest
              <li class="dropdown user user-menu">
                {{-- หน้า Login ปกติ --}}
                {{-- <a href="{{ route('login') }}"> --}}

                {{-- หน้า Login แบบ Modal --}}
                <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#modal-login2">

                  <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="">
                  <span class="hidden-xs">สำหรับสมาชิก</span>
                </a>
              </li>
              @else
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="">
                    <p>
                        {{ Auth::user()->name }} - {{ Auth::user()->username }}
                      <small>{{ Auth::user()->email }}</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ route('home') }}" class="btn bg-olive btn-flat margin">ข้อมูลสมาชิก</a>
                    </div>
                    <div class="pull-right">
                      <a class="btn bg-maroon btn-flat margin" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('ออกจากระบบ') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>

                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              @endguest

              <li>
                {{-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> --}}
                <a><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>


      <!-- ======================= Login Modal ======================== -->
      @guest
            <div class="modal modal-success fade" id="modal-login2">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">MIS HOS-info </b>V.2</h4>
                    </div>
                    <div class="modal-body">
        <!-- /.login-logo -->
        <div class="login-box-body">
          {{-- <p class="login-box-msg">*** HOSxP User ***</p> --}}

          <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group has-feedback">
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="ชื่อผู้ใช้หรืออีเมล์" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
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


        </div>
        <!-- /.login-box-body -->

              </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-outline" data-dismiss="modal"> ปิด </button>
                    </div> -->
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
      @else
      @endguest
