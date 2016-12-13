@extends('dashboard.master')
@section('title', 'Tạo tài khoản')
@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Tài khoản</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Ubold</a>
                </li>
                <li>
                    <a href="#">Tài khoản</a>
                </li>
                <li class="active">
                    Thêm mới
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Tạo tài khoản mới</b></h4>
                <p class="text-muted font-13 m-b-30">
                    Tạo một người dùng mới trong hệ thống
                </p>

                @include('dashboard.notifications.error')
                @include('dashboard.notifications.flash')

                {!! Form::open(['files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('userName', 'Họ và tên*') !!}
                    {!! Form::text('username', old('username'), ['class' => 'form-control', 'placeholder' => 'Nhập họ tên người dùng', 'id' => 'userName', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('emailAddress', 'Địa chỉ Email*') !!}
                    {!! Form::email('useremail', old('useremail'), ['class' => 'form-control', 'id' => 'emailAddress', 'placeholder' => 'Nhập địa chỉ Email người dùng', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('pass1', 'Mật khẩu*') !!}
                    {!! Form::password('userpassword1', ['class' => 'form-control', 'id' => 'pass1', 'placeholder' => 'Nhật mật khẩu', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('passWord2', 'Mật khẩu*') !!}
                    {!! Form::password('userpassword2', ['class' => 'form-control', 'id' => 'passWord2', 'placeholder' => 'Nhật mật lại khẩu', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('userLevel', 'Vai trò*') !!}
                    {!! Form::select('userlevel', ['1' => 'Quản trị cao cấp', '2' => 'Biên tập viên', '3' => 'Người dùng'], null, ['placeholder' => 'Chọn cấp độ cho tài khoản...', 'class' => 'form-control', 'id' => 'userLevel']) !!}
                </div>
                <div class="form-group" style="max-width: 350px">
                    {!! Form::label('userAvatar', 'Ảnh đại diện') !!}
                    {!! Form::file('userAvatar', ['class' => 'filestyle', 'data-buttonname' => 'btn-primary']) !!}
                </div>
                <div class="form-group text-right m-b-0">
                    {!! Form::button('Tạo tài khoản', ['class' => 'btn btn-primary waves-effect waves-light', 'type' => 'submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection