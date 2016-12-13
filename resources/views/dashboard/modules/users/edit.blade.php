@extends('dashboard.master')
@section('title', 'Sửa tài khoản')
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
                    Sửa tài khoản
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Sửa tài khoản</b></h4>
                <p class="text-muted font-13 m-b-30">
                    Sửa tài khoản đối với tài khoản {!! $user['name'] !!}
                </p>

                @include('dashboard.notifications.error')

                {!! Form::open(['files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('userName', 'Họ và tên') !!}
                    {!! Form::text('username', $user['name'], ['class' => 'form-control', 'placeholder' => $user['name'], 'id' => 'userName']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('emailAddress', 'Địa chỉ Email') !!}
                    {!! Form::email('useremail', $user['email'], ['class' => 'form-control', 'id' => 'emailAddress', 'placeholder' => $user['email'], 'disabled']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('pass1', 'Mật khẩu') !!}
                    {!! Form::password('userpassword1', ['class' => 'form-control', 'id' => 'pass1', 'placeholder' => '******']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('passWord2', 'Mật khẩu nhắc lại') !!}
                    {!! Form::password('userpassword2', ['class' => 'form-control', 'id' => 'passWord2', 'placeholder' => '******']) !!}
                </div>

                @if (Auth::id() != $user['id'])
                <div class="form-group">
                    {!! Form::label('userLevel', 'Vai trò') !!}
                    {!! Form::select('userlevel', ['1' => 'Quản trị cao cấp', '2' => 'Biên tập viên', '3' => 'Người dùng'], $user['level'], ['placeholder' => 'Chọn cấp độ cho tài khoản...', 'class' => 'form-control', 'id' => 'userLevel']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('userstatus', 'Trạng thái') !!}
                    <div class="switchery-demo">
                        @if ($user['status'] == 1)
                        {!! Form::checkbox('userstatus', 'on', true, array('checked data-plugin' => 'switchery', 'data-color' => '#f05050')) !!}
                        @else
                        {!! Form::checkbox('userstatus', 'on', false, array('checked data-plugin' => 'switchery', 'data-color' => '#f05050')) !!}
                        @endif
                    </div>
                </div>
                @endif

                <div class="form-group" style="max-width: 350px">
                    {!! Form::label('userAvatar', 'Ảnh đại diện') !!}
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="height: 150px; margin: 0 auto 15px">
                            <?php
                                $info = $user['info'];
                                if (!empty($info)) {
                                    $avatar = json_decode($info)->avatar;
                                    $avatar_link = (!empty($avatar)) ? asset($avatar) : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image';
                                    echo '<img src="'.$avatar_link.'" alt="" />';
                                } else {
                                    echo '<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />';
                                }
                            ?>

                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-height: 150px; line-height: 20px; margin: 0 auto 30px"></div>
                        <div>
                        <span class="btn btn-white btn-file">
                        <span class="fileupload-new"><i class="icon-paper-clip"></i> Chọn ảnh</span>
                        <span class="fileupload-exists"><i class="icon-undo"></i> Đổi ảnh khác</span>
                        {!! Form::file('userAvatar', array('class' => 'default')) !!}
                        </span>
                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Bỏ ảnh này</a>
                        </div>
                    </div>
                </div>
                <div class="form-group text-right m-b-0">
                    {!! Form::button('Cập nhật tài khoản', ['class' => 'btn btn-primary waves-effect waves-light', 'type' => 'submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection