@extends('dashboard.master')
@section('title', 'Danh sách tài khoản')
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
                Danh sách tài khoản
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="m-t-0 header-title"><b>Danh sách các tài khoản</b></h4>
                    <p class="text-muted font-13">
                        Tất cả các tài khoản đang <code>tồn tại</code> trong hệ thống
                    </p>
                    @include('dashboard.notifications.flash')
                    @include('dashboard.notifications.error')
                    <div class="p-20">
                        <table class="table table-striped m-0">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Email</th>
                                <th>Họ tên</th>
                                <th>Vai trò</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($data['data'] as $k => $v)
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $v['email'] ?></td>
                                    <td><?php echo $v['name'] ?></td>
                                    <td><?php echo rev_user_level($v['level']) ?></td>
                                    <td><?php echo rev_user_status($v['status']) ?></td>
                                    <td class="actions">
                                        @if (Auth::user()->level <= $v['level'])
                                        <a href="{!! route('getEditUser', $v['id']) !!}" class="btn btn-link waves-effect"><i class="fa fa-pencil"></i></a>
                                        @endif
                                        @if((Auth::id() != $v['id']) && (Auth::user()->level < 2))
                                        <a href="{!! route('getDeleteUser', $v['id']) !!}" class="btn btn-link waves-effect"><i class="fa fa-trash-o"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection