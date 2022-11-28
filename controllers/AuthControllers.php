<?php
require_once('models/Client.php');
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
            header("location:index.php?url=travel");
        }
    }
    include_once './views/auth/login.php';
}
function logout()
{
    session_start();
    unset($_SESSION['user']);
    header('location:index.php?url=travel');
}
