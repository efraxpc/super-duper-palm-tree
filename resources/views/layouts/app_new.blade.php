<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Clear Admin Template | Clear Admin Template </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{ asset('light/css/app.css') }}" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <!-- Styles -->
    <link href="{{ asset('light/vendors/swiper/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('light/vendors/nvd3/css/nv.d3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('light/vendors/lcswitch/css/lc_switch.css') }}" rel="stylesheet">
    <link href="{{ asset('light/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('light/css/custom_css/dashboard1.css') }}" rel="stylesheet">
    <link href="{{ asset('light/css/custom_css/dashboard1_timeline.css') }}" rel="stylesheet">
    <!--end of page level css-->
</head>
<body class="skin-default">

<!-- header logo: style can be found in header-->
<header id="app" class="header">
    <topo titulo="{{ config('app.name', 'Laravel') }}" url="{{ url('/') }}"
          logo="{{ asset('light/img/logo.png') }}" avartar_perfil="{{ asset('light/img/authors/avatar1.jpg') }}" >
    </topo>
</header>
<div id="app_body" class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <menu_principal url_timeline="{{route('timeline.index')}}" url_publicar_contenido="{{route('publicar-contenido.index')}}" avatar="{{ asset('light/img/original.jpg') }}"></menu_principal>
    </aside>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Users List</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Users</a>
                </li>
                <li class="active">
                    Users List
                </li>
            </ol>
        </section>
        <!-- Main content -->

        @yield('content')
    </aside>

    <!-- /.right-side -->
</div>

<!-- ./wrapper -->
<!-- global js -->
<div id="qn"></div>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<!-- end of global js -->

<!-- begining of page level js -->
<!--Sparkline Chart-->
<script type="text/javascript" src="{{ asset('light/js/custom_js/sparkline/jquery.flot.spline.js') }}"></script>
<!-- flip --->
<script type="text/javascript" src="{{ asset('light/vendors/flip/js/jquery.flip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('light/vendors/lcswitch/js/lc_switch.min.js') }}"></script>
<!--flot chart-->

<!--swiper-->
<script type="text/javascript" src="{{ asset('light/vendors/swiper/js/swiper.min.js') }}"></script>
<!--chartjs-->
<script type="text/javascript" src="{{ asset('light/vendors/chartjs/js/Chart.js') }}"></script>
<!--nvd3 chart-->
<script type="text/javascript" src="{{ asset('light/js/nvd3/d3.v3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('light/vendors/nvd3/js/nv.d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('light/vendors/moment/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('light/vendors/advanced_newsTicker/js/newsTicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('light/src/js/dashboard1.js') }}"></script>
<!-- end of page level js -->
@if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
        //]]>
    </script>
@endif
</body>

</html>