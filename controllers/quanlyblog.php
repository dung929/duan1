<?php
require_once('models/blog.php');
function  qlblog_index(){
   
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login&errors=$errors");
    }    else if($_SESSION['user']['role_id'] != 1){
        header("location: index.php?url=403");
    } 
    else if (isset($_SESSION['user'])) {
        $blog = getAllBlog();
        include_once './views/admin/quanlyblog.php';
    }
}
function taoBlog(){
    $newBlog = getNewBlog();
    header('location:index.php?url=qlblog_index');
}
function  deleteBlogg(){
    $id = $_GET['id'];
    $delete = deleteBlog($id);
    header('location:index.php?url=qlblog_index');
}