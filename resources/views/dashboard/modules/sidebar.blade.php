<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Thanh điều hướng</li>

                <li><a href="" class="waves-effect"><i class="ti-home"></i> <span> Bảng điều khiển </span> </a></li>
                @if (Auth::user()->level < 2)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-user"></i> <span> Tài khoản </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{!! route('getListUsers') !!}">Danh sách tài khoản</a></li>
                        <li><a href="{!! route('getAddUser') !!}">Tạo mới</a></li>
                        <li><a href="{!! route('getEditUser', array('id' => Auth::id())) !!}">Hồ sơ của bạn</a></li>
                    </ul>
                </li>
                @endif

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-pencil-alt"></i> <span> Bài viết </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="">Danh sách bài viết</a></li>
                        <li><a href="">Tạo bài viết mới</a></li>
                        <li><a href="{!! route('getListTaxonomies') !!}">Chuyên mục</a></li>
                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->