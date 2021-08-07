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


      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    27 มิ.ย.2562
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                
                <div class="timeline-body">
                  การตั้งค่าระบบ System setting, เพิ่มเติมรายละเอียดการดูข้อมูลตึกผู้ป่วยในการดูข้อมูลคนไข้ในตึก พร้อมรายการ IPD Med Profile, และงานทันตกรรม, ระบบค้นประวัติการตรวจ LAB (สามารถลิงค์ไปดูข้อมูลจาก HDC หากตั้งค่าเชื่อมต่อฐานข้อมูล HDC ได้), ค้นประวัติวัคซีน เพื่องานสนับสนุนเครือข่าย รพ.สต.
                </div>
                <div class="timeline-footer">
                  <a href="https://drive.google.com/drive/folders/1PP1kqqLQkIAlz7QW8PC6xmT9SyGywULk?usp=sharing" target="_blank" class="btn btn-primary btn-xs">ดาวน์โหลด MIS 4.0 ตัวติดตั้ง</a>  <a href="https://docs.google.com/presentation/d/1bYGH2NcS2VKfb2jyxK4mh7rfLX2uRG2duFs0QiWZnwo/edit?usp=sharing" target="_blank" class="btn btn-warning btn-xs">แนะนำการติดตั้ง</a>
                </div>

                <div class="timeline-body">

                </div>

              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    2 เม.ย.2562
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                
                <div class="timeline-body">
                  นำเสนอในงานประชุมวิชาการเครือข่ายระบบสรสนเทศ ครั้งที่ 12 ณ โรงพยาบาลสมเด็จพระยุพราชด่านซ้าย วันที่ 28-29 มี.ค.2562
                </div>
                <div class="timeline-footer">
                  <a href="https://drive.google.com/drive/folders/1PP1kqqLQkIAlz7QW8PC6xmT9SyGywULk?usp=sharing" target="_blank" class="btn btn-primary btn-xs">ดาวน์โหลด MIS 4.0 ตัวติดตั้ง</a>  <a href="https://docs.google.com/presentation/d/1bYGH2NcS2VKfb2jyxK4mh7rfLX2uRG2duFs0QiWZnwo/edit?usp=sharing" target="_blank" class="btn btn-warning btn-xs">แนะนำการติดตั้ง</a>
                </div>

                <div class="timeline-body">

                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="images/mis40/2019-04-04_12-11-59.jpg" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="images/mis40/2019-04-04_12-12-33.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="images/mis40/2019-04-04_12-12-52.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="images/mis40/2019-04-04_12-13-23.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="images/mis40/2019-04-04_12-14-12.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div></div>
                </div>

              </div>
            </li>
            <!-- END timeline item -->

            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    18 มี.ค.2562
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>

                <div class="timeline-body">
                  จัดทำ Dashboard ข้อมูลและสถิติต่างๆในงานให้บริการ
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    19 เม.ย. 2561
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                <div class="timeline-body">
					เพิ่มระบบรายงาน End User ประมวลจากฐานข้อมูล HOSxP ให้ทำได้ผ่านอินเตอร์เน็ต
				</div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    6 เม.ย. 2561
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                <div class="timeline-body">
					ปรับปรุง เพิ่มเติมระบบการแจ้งปัญหาและสอบถามการใช้งาน
				</div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    5 เม.ย. 2561
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                <div class="timeline-body">
					ปรับปรุงระบบแจ้งเตือนหน้าเว็บ
				</div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    26 มี.ค.2561
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                <div class="timeline-body">
					เริ่มทดสอบการใช้งาน
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    23 มี.ค.2561
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                <div class="timeline-body">
					ปรับปรุงระบบแสดงผลงานทั่วไปหน้าหลัก
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    16 มี.ค.2561
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                <div class="timeline-body">
					การจัดเก็บประวัติเข้าใช้งาน
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    12 มี.ค.2561
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                <div class="timeline-body">
					เชื่อมต่อระบบแจ้งเตือนเข้ากลุ่มไลน์โดย Line Notify
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    1 ม.ค.2561
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">ghost</a></h3>
                <div class="timeline-body">
					เริ่มจัดทำตามแผนคณะกรรมการ MIS
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

	
	  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection