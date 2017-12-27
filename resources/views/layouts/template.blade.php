<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NoteIT</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('admin_lte/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin_lte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admin_lte/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Note</b>IT</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            @include('layouts.right-side')
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.left-side')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.0.1
        </div>
        <strong>Copyright &copy; 2017 <a href="#">Try soft</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    @include('layouts.setting')

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>

<!-- jQuery 3 -->
<script src="{{ asset('admin_lte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin_lte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin_lte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin_lte/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin_lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ asset('admin_lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('admin_lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin_lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('admin_lte/bower_components/chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin_lte/dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin_lte/dist/js/demo.js') }}"></script>
@yield('js')
</body>
</html>

