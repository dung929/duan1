<?php
require_once('models/categories.php');
 function  quanlicategory(){
    $categories = getAllCategories();
    session_start();
    if (!isset($_SESSION['user_admin'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    } else if (isset($_SESSION['user_admin'])) {
        $categories = getAllCategories();
        include_once './views/admin/quanlicategory.php';
    }
 }