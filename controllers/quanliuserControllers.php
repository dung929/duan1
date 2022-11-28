<?php
function  quanliuser()
{
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    } else if (isset($_SESSION['user'])) {
       
    
    include_once './views/admin/quanliuser.php';
    }
}