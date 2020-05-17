

<!DOCTYPE html>
<html>
@if(Auth::check())







<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
      @include("admin.url")
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset("css/bootstrap-theme.css")}}">
    <link href="{{asset("css/simple-l.css")}}" rel="stylesheet">
  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="{{asset("css/rtl.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset("bower_components/jvectormap/jquery-jvectormap.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("css/AdminLTE.css")}}">
  <link rel="stylesheet" href="{{asset("css/fonts.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset("css/skins/_all-skins.min.css")}}">
    <link rel="stylesheet" href="{{asset("bower_components/select2/dist/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{asset("/css/persian-datepicker-0.4.5.min.css")}}" />
    <link rel="stylesheet" href="{{asset("bower_components/bootstrap-daterangepicker/daterangepicker.css")}}">
    <link rel="stylesheet" href="{{asset("bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/iCheck/all.css")}}">
    <link rel="stylesheet" href="{{asset("bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/timepicker/bootstrap-timepicker.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include("admin.fragments.header")
  <!-- right side column. contains the logo and sidebar -->
@include("admin.fragments.menu")
@include("admin.fragments.sure_you")
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield("content")
    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-left">
    <strong>CopyRight &copy; 2020-2024  <a>Peyman Nasirian</a></strong>
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include("admin.fragments.aside")
<!-- jQuery 3 -->
<script>

    documentRoot = '{{url('/')}}'
</script>
<script src="{{asset("bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("bower_components/fastclick/lib/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("js/adminlte.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")}}"></script>
<!-- jvectormap  -->
<script src="{{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
<script src="{{asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- ChartJS -->
<script src="{{asset("bower_components/Chart.js/Chart.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("js/pages/dashboard2.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("js/demo.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>

<script src="{{asset("bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
<script src="{{asset("bower_components/ckeditor/ckeditor.js")}}"></script>
<script src="{{asset("bower_components/tinymce/tinymce.min.js")}}"></script>


<script src="{{asset("bower_components/select2/dist/js/select2.full.min.js")}}"></script>
<!-- InputMask -->
<script src="{{asset("plugins/input-mask/jquery.inputmask.js")}}"></script>
<script src="{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
<script src="{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>
<!-- date-range-picker -->
<script src="{{asset("bower_components/moment/min/moment.min.js")}}"></script>
<script src="{{asset("bower_components/bootstrap-daterangepicker/daterangepicker.js")}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset("bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset("bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js")}}"></script>
<!-- bootstrap time picker -->
<script src="{{asset("plugins/timepicker/bootstrap-timepicker.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset("plugins/iCheck/icheck.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("bower_components/fastclick/lib/fastclick.js")}}"></script>

<!-- babakhani datepicker -->
<script src="{{asset("js/persian-date-0.1.8.min.js")}}"></script>
<script src="{{asset("js/persian-datepicker-0.4.5.min.js")}}"></script>


















<script>
    tinymce.init({
        selector: 'textarea#mytextarea',
        plugins : 'advlist autolink link lists preview table code pagebreak',
        menubar: false,
        language: 'fa',
        height: 300,
        relative_urls: false,
        toolbar: 'undo redo | removeformat preview code | fontsizeselect bullist numlist | alignleft aligncenter alignright alignjustify | bold italic | pagebreak table link',
    });
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
<script>
    $(document).ready(function () {
        $('#tarikh').persianDatepicker({
            altField: '#tarikhAlt',
            altFormat: 'X',
            format: 'D MMMM YYYY HH:mm a',
            observer: true,
            timePicker: {
                enabled: true
            },
        });
    });
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
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
@else
<script>window.location = "/login";</script>
@endif
</body>
</html>
