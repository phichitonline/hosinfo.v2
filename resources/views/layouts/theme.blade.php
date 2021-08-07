<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/logo/mistphcp-favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HOS-info : {{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery File Select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('plugins/jQuery-file-select/bootstrap-fileselect.js') }}"></script>

</head>
<body class="hold-transition skin-green fixed sidebar-mini">

<div class="wrapper">

        <!-- fixed-top-->
        @include('layouts.header')
        <!-- main-menu-->
        @include('layouts.menu')

        @yield('content')

    <!-- =============================================== -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>HOS</b>-Info V.2
        </div>
        <strong>Copyright &copy; 2021-<?php echo date("Y");?> <a>{{ config('app.name') }}</a></strong>
    </footer>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


    <!-- WhatsHelp.io widget -->
    <!-- <script type="text/javascript">
        (function () {
            var options = {
                line: "//line.me/R/ti/p/%40jpm9043y", // Line QR code URL
                call: "061-992-1666", // Call phone number
                call_to_action: "ติดต่อสอบถาม", // Call to action
                button_color: "#FF6550", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "line,call", // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script> -->
    <!-- /WhatsHelp.io widget -->



<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'DD/MM/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'วันนี้'       : [moment(), moment()],
          'เมื่อวาน'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          '7 วันที่ผ่านมา' : [moment().subtract(6, 'days'), moment()],
          '30 วันที่ผ่านมา': [moment().subtract(29, 'days'), moment()],
          'เดือนนี้'  : [moment().startOf('month'), moment().endOf('month')],
          'เดือนที่แล้ว'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'))
      }
    )
    //Date range as a button
    $('#daterange2-btn').daterangepicker(
      {
        ranges   : {
          'วันนี้'       : [moment(), moment()],
          'เมื่อวาน'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          '7 วันที่ผ่านมา' : [moment().subtract(6, 'days'), moment()],
          '30 วันที่ผ่านมา': [moment().subtract(29, 'days'), moment()],
          'เดือนนี้'  : [moment().startOf('month'), moment().endOf('month')],
          'เดือนที่แล้ว'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'))
      }
    )

    //Date range as a button
    $('#daterange3-btn').daterangepicker(
      {
        ranges   : {
          'วันนี้'       : [moment(), moment()],
          'เมื่อวาน'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          '7 วันที่ผ่านมา' : [moment().subtract(6, 'days'), moment()],
          '30 วันที่ผ่านมา': [moment().subtract(29, 'days'), moment()],
          'เดือนนี้'  : [moment().startOf('month'), moment().endOf('month')],
          'เดือนที่แล้ว'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<!-- // DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
<!-- page script -->

<script type="text/javascript">
$(document).ready(function() {

	$('#DataTable').DataTable({
			"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
	});

	$('#DataTableT1').DataTable({
			"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
	});
	$('#DataTableT2').DataTable({
			"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
	});
	$('#DataTableT3').DataTable({
			"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
	});
	$('#DataTableT4').DataTable({
			"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
	});
	$('#DataTableT5').DataTable({
			"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
	});

	$('#DataTableNoSel').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
		"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
    });

  $('#DataTableNoSel8').DataTable({
      'pageLength'  : 5,
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
		"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
    });

	$('#DataTableExport').DataTable({
		"pageLength": 10,
		"dom": "Bfrtip",
		"buttons": ["excel","print"],
		"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
    });

	$('#DataTableExport2').DataTable({
		"pageLength": 10,
		"dom": "Bfrtip",
		"buttons": ["excel","print"],
		"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
    });

	$('#DataTablePageLimit25').DataTable({
      'pageLength': 25,
		"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		}
    });

});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#DataTableServerProcessing').DataTable( {
      "pageLength": 10,
//	    "dom": 'Bfrtip',
			"bProcessing": true,
			"serverSide": true,
//      "buttons": ["excel","print"],
		"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		},
			"ajax": {
				url : "ex_person_ssp_processing.php",
				type : "POST",
				error : function() {
					$("#post_list_processing").css("display","none");
				}
			}

    } );
} );
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#DataTableServerProcessingPt').DataTable( {
            "pageLength": 10,
//	        dom: 'Bfrtip',
//		    buttons: ['excel','print'],
			"bProcessing": true,
			"serverSide": true,
		"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		},
			"ajax": {
				url : "ex_patient_ssp_processing.php",
				type : "POST",
				error : function() {
					$("#post_list_processing").css("display","none");
				}
			}

    } );
} );
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#DataTableServerProcessingService').DataTable( {
            "pageLength": 10,
//	        dom: 'Bfrtip',
//		    buttons: ['excel','print'],
			"bProcessing": true,
			"serverSide": true,
		"oLanguage": {
			"sProcessing": "กำลังประมวลผล...",
			"sLengthMenu": "แสดง _MENU_ รายการต่อหน้า",
			"sZeroRecords": "ไม่พบข้อมูล",
			"sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
			"sInfoFiltered": "(จากทั้งหมด _MAX_ รายการ)",
			"sSearch": "ค้นหา :",
			"oPaginate": {
				"sFirst": "เริ่มต้น",
				"sPrevious": "ก่อนหน้า",
				"sNext": "ถัดไป",
				"sLast": "สุดท้าย"
			}
		},
			"ajax": {
				url : "ex_service_ssp_processing.php",
				type : "POST",
				error : function() {
					$("#post_list_processing").css("display","none");
				}
			}

    } );
} );
</script>
<!-- DataTables // -->

<!-- ChartJS -->
<script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>

<!-- jQuery Knob -->
<script src="{{ asset('bower_components/jquery-knob/js/jquery.knob.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data());
    });

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines();
    drawMouseSpeedDemo();

  });
  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red'});


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline();

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
        {type: 'line', height: '2.5em', width: '4em'});

    // Customized line chart
    $('#linecustom').sparkline('html',
        {
          height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
          minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3
        });

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', {type: 'tristate'});
    $('.sparktristatecols').sparkline('html',
        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
    $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
    $('#normalExample').sparkline('html',
        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

    // Discrete charts
    $('.discrete1').sparkline('html',
        {type: 'discrete', lineColor: 'blue', xwidth: 18});
    $('#discrete2').sparkline('html',
        {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

    // Bullet charts
    $('.sparkbullet').sparkline('html', {type: 'bullet'});

    // Pie charts
    $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

    // Box plots
    $('.sparkboxplot').sparkline('html', {type: 'box'});
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
        {type: 'box', raw: true, showOutliers: true, target: 6});

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type: 'box',
      tooltipFormatFieldlist: ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    });

    // click event demo sparkline
    $('.clickdemo').sparkline();
    $('.clickdemo').bind('sparklineClick', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      alert("Clicked on x=" + region.x + " y=" + region.y);
    });

    // mouseover event demo sparkline
    $('.mouseoverdemo').sparkline();
    $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
    }).bind('mouseleave', function () {
      $('.mouseoverregion').text('');
    });
  }

  /**
   ** Draw the little mouse speed animated graph
   ** This just attaches a handler to the mousemove event to see
   ** (roughly) how far the mouse has moved
   ** and then updates the display a couple of times a second via
   ** setTimeout()
   **/
  function drawMouseSpeedDemo() {
    var mrefreshinterval = 500; // update display every 500ms
    var lastmousex = -1;
    var lastmousey = -1;
    var lastmousetime;
    var mousetravel = 0;
    var mpoints = [];
    var mpoints_max = 30;
    $('html').mousemove(function (e) {
      var mousex = e.pageX;
      var mousey = e.pageY;
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
      }
      lastmousex = mousex;
      lastmousey = mousey;
    });
    var mdraw = function () {
      var md = new Date();
      var timenow = md.getTime();
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
        mpoints.push(pps);
        if (mpoints.length > mpoints_max)
          mpoints.splice(0, 1);
        mousetravel = 0;
        $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
      }
      lastmousetime = timenow;
      setTimeout(mdraw, mrefreshinterval);
    };
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval);
  }
</script>

</body>
</html>
