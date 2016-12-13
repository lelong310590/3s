@extends('dashboard.master')
@section('title', 'Danh mục bài viết')
@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Tài khoản</h4>
        <ol class="breadcrumb">
            <li>
                <a href="#">Ubold</a>
            </li>
            <li class="active">
                Danh mục bài viết
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="m-t-0 header-title"><b>Quản lý danh mục bài viết</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        Sửa tài khoản đối với tài khoản
                    </p>
                    @include('dashboard.notifications.flash')
                    @include('dashboard.notifications.error')
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::open() !!}
                            <div class="form-group">
                                {!! Form::label('termname', 'Tên chuyên mục') !!}
                                {!! Form::text('termname', old('termname'), ['class' => 'form-control', 'placeholder' => '', 'id' => 'termname']) !!}
                                <h6><i class="text-muted font-13 m-b-30">
                                    Tên riêng sẽ hiển thị trên trang mạng của bạn.
                                </i></h6>
                            </div>

                            <div class="form-group">
                                {!! Form::label('termslug', 'Chuỗi cho đường dẫn tĩnh') !!}
                                {!! Form::text('termslug', old('termslug'), ['class' => 'form-control', 'placeholder' => '', 'id' => 'termslug']) !!}
                                <h6><i class="text-muted font-13 m-b-30">
                                    Chuỗi cho đường dẫn tĩnh là phiên bản của tên hợp chuẩn với Đường dẫn (URL). Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).
                                </i></h6>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection