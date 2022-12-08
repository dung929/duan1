<?php
require_once('models/categories.php');
 function  quanlicategory(){
    $categories = getAllCategories();
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    }    else if($_SESSION['user']['role_id'] != 1){
        header("location: index.php?url=403");
    } 
    else if (isset($_SESSION['user'])) {
        $categories = getAllCategories();
        include_once './views/admin/quanlicategory.php';
    }
 }