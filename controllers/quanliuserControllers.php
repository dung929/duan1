<?php
require_once('models/client.php');
function  quanliuser()
{
    session_start();
    $client = getAllClient();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login&errors=$errors");
    }    else if($_SESSION['user']['role_id'] != 1){
        header("location: index.php?url=403");
    }
     else if (isset($_SESSION['user'])) {
    $client = getAllClient();
    include_once './views/admin/quanliuser.php';
    }
}
