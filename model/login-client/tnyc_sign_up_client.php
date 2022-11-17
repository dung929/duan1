<?php
$username = $_POST['username'];
$password = $_POST['password'];
$username_err = '';
$password_err = '';

if ($username == '') {
    $username_err = 'Tài khoản không để trống !';
}
if ($password == '') {
    $password_err = 'Mật khẩu không để trống !';
}
if (!empty($username_err) || !empty($password_err)) {
    header("location:../../view/login-client/login.php?username_err=$username_err & password_err=$password_err");
    die;
}
$password_hashed = password_hash($password, PASSWORD_BCRYPT);
require_once('../db.php');
$sql = "INSERT INTO client (username, password)"
    . "VALUES ('$username', '$password_hashed')";
$statement = $connect->prepare($sql);
$statement->execute();
header('location:../../view/login-client/login.php');
