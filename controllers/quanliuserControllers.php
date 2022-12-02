<?php
require_once('models/client.php');
function  quanliuser()
{
    session_start();
    $client = getAllClient();
    if (!isset($_SESSION['user_admin'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    } else if (isset($_SESSION['user_admin'])) {
    $client = getAllClient();
    include_once './views/admin/quanliuser.php';
    }
}
