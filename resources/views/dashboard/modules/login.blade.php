<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hệ quản trị nội dung">
    <meta name="author" content="Lê Ngọc Long">

    <link rel="shortcut icon" href="{!! asset('backend/assets/images/favicon_1.ico') !!}">

    <title>Ubold - Đăng nhập</title>

    <link href="{!! asset('backend/assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/core.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/components.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/icons.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/pages.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/responsive.css') !!}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{!! asset('backend/assets/js/modernizr.min.js') !!}"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Đăng nhập vào <strong class="text-custom">UBold</strong> </h3>
        </div>
        @include('dashboard.notifications.error')
        <div class="panel-body">
            {!! Form::open(['class' => 'form-horizontal m-t-20']) !!}
            @include('dashboard.notifications.error')
            <div class="form-group ">
                <div class="col-xs-12">
                    {!! Form::email('login_email', old('login_email'), ['class' => 'form-control', 'placeholder' => 'Địa chỉ Email', 'required']) !!}
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    {!! Form::password('login_password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu', 'required']) !!}
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-primary">
                        {!! Form::checkbox('remember_me') !!}
                        {!! Form::label('remember_me', 'Ghi nhớ') !!}
                    </div>
                </div>
            </div>
            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    {!! Form::button('Đăng nhập', ['class' => 'btn btn-pink btn-block text-uppercase waves-effect waves-light', 'type' => 'submit']) !!}
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>




<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{!! asset('backend/assets/js/jquery.min.js') !!}"></script>
<script src="{!! asset('backend/assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('backend/assets/js/detect.js') !!}"></script>
<script src="{!! asset('backend/assets/js/fastclick.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.slimscroll.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.blockUI.js') !!}"></script>
<script src="{!! asset('backend/assets/js/waves.js') !!}"></script>
<script src="{!! asset('backend/assets/js/wow.min.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.nicescroll.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.scrollTo.min.js') !!}"></script>


<script src="{!! asset('backend/assets/js/jquery.core.js') !!}"></script>
<script src="{!! asset('backend/assets/js/jquery.app.js') !!}"></script>

</body>
</html>