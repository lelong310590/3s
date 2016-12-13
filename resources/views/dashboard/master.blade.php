<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hệ quản trị nội dung">
    <meta name="author" content="Lê Ngọc Long">

    <link rel="shortcut icon" href="{!! asset('backend/assets/images/favicon_1.ico') !!}">

    <title>Ubold - @yield('title')</title>

    <link href="{!! asset('backend/assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/core.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/components.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/icons.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/icons.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/responsive.css') !!}" rel="stylesheet" type="text/css" />

    @if (Route::is('getEditUser'))
    <link href="{!! asset('backend/assets/plugins/switchery/dist/switchery.min.css') !!}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{!! asset('backend/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css') !!}" />
    @endif

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{!! asset('backend/assets/js/modernizr.min.js') !!}"></script>

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

@include('dashboard.modules.topbar')
@include('dashboard.modules.sidebar')

<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                @yield('content')

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            2016 © Ubold.
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{!! asset('backend/assets/js/jquery.min.js') !!}"></script>
<script src="{!! asset('backend/assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('backend/assets/js/detect.js') !!}"></script>
<script src="{!! asset('backend/assets/js/fastclick.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.slimscroll.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.blockUI.js')  !!}"></script>
<script src="{!! asset('backend/assets/js/waves.js') !!}"></script>
<script src="{!! asset('backend/assets/js/wow.min.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.nicescroll.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.scrollTo.min.js') !!}"></script>

<script src="{!! asset('backend/assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js') !!}" type="text/javascript"></script>

@if (Route::is('getEditUser'))
<script src="{!! asset('backend/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js') !!}"></script>
<script src="{!! asset('backend/assets/plugins/switchery/dist/switchery.min.js') !!}"></script>
@endif

<script src="{!! asset('backend/assets/js/jquery.core.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.app.js') !!}"></script>



</body>
</html>