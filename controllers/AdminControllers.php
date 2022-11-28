<?php
function  index()
{
    include_once './views/admin/dashboard.php';
}
require_once('models/user.php');
function login_user()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = clientCheckt($username);
        if (!$user) {
            $errors = 'Người dùng không tồn tại!';
           
            header("location:index.php?url=login_user&errors=$errors");
        } else if (!password_verify($password, $user['password'])) {
            $errors = 'Mật khẩu không chính xác!';
            header("location:index.php?url=login_user&errors=$errors");
        } else {
            session_start(); 
            $_SESSION['user'] = $user; 
            header("location:index.php?url=admin_index");
        }
    }
    include_once './views/admin/login.php';
}