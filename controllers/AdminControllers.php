<?php
function  index()
{
    session_start();
    if (!isset($_SESSION['user_admin'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    } else if (isset($_SESSION['user_admin'])) {
        include_once './views/admin/dashboard.php';
    }
    
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
            $_SESSION['user_admin'] = $user; 
            header("location:index.php?url=admin_index");
        }
    }
    include_once './views/admin/login.php';
}
function logout_user()
{
    session_start();
    unset($_SESSION['user_admin']);
    header('location:index.php?url=login_user');
}
