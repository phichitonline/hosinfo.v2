      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="">
            </div>
            <div class="pull-left info">
              @guest
              <p><a href='#'>ไม่ระบุชื่อ</a></p>
              <a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
              @else
              <p><a href='#'>{{ Auth::user()->name }}</a></p>
              <a href="#"><i class="fa fa-circle text-green"></i> Online</a>
              @endguest
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">เมนูหลัก</li>
            <li class="@php if(isset($active_menu_dashboard)) { echo $active_menu_dashboard;} @endphp">
              <a href="{{ url('/') }}">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
            <li class="@php if(isset($active_menu_setting)) { echo $active_menu_setting;} @endphp">
              <a href="#">
                <i class="fa fa-gear"></i> <span>ตั้งค่าระบบ</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-red">A</small>
                </span>
              </a>
            </li>

            <li class="@php if(isset($active_menu_repman)) { echo $active_menu_repman;} @endphp">
              <a href="#">
                <i class="fa fa-th"></i> <span>จัดการรายงาน</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-red">A</small>
                </span>
              </a>
            </li>
            <li class="@php if(isset($active_menu_lineoa)) { echo $active_menu_lineoa;} @endphp">
              <a href="{{ url('/lineoa') }}">
                <i class="fa fa-folder"></i> <span>Line OA </span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-yellow">H</small>
                </span>
              </a>
            </li>
            <li class="@php if(isset($active_menu_report)) { echo $active_menu_report;} @endphp">
              <a href="{{ url('/reports') }}">
                <i class="fa fa-folder"></i> <span>รายงาน End User</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green">U</small>
                </span>
              </a>
            </li>

            <!--<li class="@php if(isset($active_menu_smartcard)) { echo $active_menu_smartcard;} @endphp">-->
            <!--  <a href="{{ url('/smartcard') }}">-->
            <!--    <i class="fa fa-folder"></i> <span>SmartCard Reader</span>-->
            <!--    <span class="pull-right-container">-->
            <!--      <small class="label pull-right bg-green">15</small>-->
            <!--    </span>-->
            <!--  </a>-->
            <!--</li>-->

            <!-- // สำหรับ Guest -->
            <li class="header"></li>

            <li class="treeview @php if(isset($active_menu_manual)) { echo $active_menu_manual;} @endphp">
              <a href="#">
                <i class="fa fa-book"></i>
                  <span>คู่มือใช้งาน</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i><span class="label label-primary pull-right">2</span>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-arrow-right"></i> <span>คู่มือ HOS-info V.2</span></a></li>
                <li class="@php if(isset($active_menu_lastupdate)) { echo $active_menu_lastupdate;} @endphp"><a href="{{ url('/') }}/lastupdate"><i class="fa fa-arrow-right"></i> <span>Last Update</span></a></li>
                <!--<li class="@php if(isset($active_menu_update)) { echo $active_menu_update;} @endphp"><a href="{{ url('/') }}/update"><i class="fa fa-arrow-right"></i> <span>Update</span></a></li>-->
              </ul>
            </li>

            <li class="header">&raquo; Create by GHOST &laquo;
            </li>
          </ul>
        </section>
      <!-- /.sidebar -->
      </aside>
