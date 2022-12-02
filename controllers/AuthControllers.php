<?php
require_once('models/Client.php');
require_once('models/categories.php');
require_once('models/products.php');
require_once('models/blog.php');
function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $client = clientCheckExist($username);
        if (!$client) {
            $errors = 'Người dùng không tồn tại!';

            header("location:index.php?url=login&errors=$errors");
        } else if (!password_verify($password, $client['password'])) {
            $errors = 'Mật khẩu không chính xác!';
            header("location:index.php?url=login&errors=$errors");
        } else {
            session_start();
            $_SESSION['user'] = $client;
            header("location:index.php?url=home");
        }
    }
    include_once './views/auth/login.php';
}
function logout()
{
    session_start();
    unset($_SESSION['user']);
    header('location:index.php?url=home');
}
function register(){
    include_once './views/auth/register.php';
}
function profileUser(){
    $client = getAllClient();
    include_once './views/auth/profileUser.php';
}
function tao_register(){
    $tao_register = getTaoRegister();
    include_once './views/auth/login.php';
}
