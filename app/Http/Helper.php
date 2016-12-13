<?php

function rev_user_level($level)
{
    switch ($level) {
        case 1:
            return 'Quản trị cao cấp';
            break;
        case 2:
            return 'Biên tập viên';
            break;
        case 3:
            return 'Người dùng';
            break;
        default:
            return false;
    }
}

function rev_user_status($status)
{
    switch ($status) {
        case 1:
            $output = '<span class="label label-default">Đang kích hoạt</span>';
            return $output;
            break;
        case 0:
            $output = '<span class="label label-danger">Tạm khóa</span>';
            return $output;
            break;
        default:
            return false;
    }
}

?>