<?php
require_once('models/comment.php');

function  quanlicomment(){
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login&errors=$errors");
    } else if ($_SESSION['user']['role_id'] != 1) {
        header("location: index.php?url=403");
    } else if (isset($_SESSION['user'])) {
        $comment = getAllComment();
        include_once './views/admin/quanlycomment.php';
    }
}
function  deleteComment(){
    $id = $_GET['id'];
    $delete = deleteCom($id);
    header('location:index.php?url=qlcomment_index');
}