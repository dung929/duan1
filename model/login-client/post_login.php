<?php
require_once('../db.php');
$user = $_POST['username'];
$password = $_POST['password'];
$errors = '';
if ($user == '') {
    $errors = $errors . 'User không được để trống!.';
}
if ($password == '') {
    $errors .= 'Password không được để trống!.';
}
if ($errors != '') {
    header("location:../../view/login-client/login.php?errors=$errors");
} else {
    $sql = "SELECT * FROM client WHERE username='$user'";
    $statement = $connect->prepare($sql);
    $statement->execute();
    $loginUser = $statement->fetch();
    if ($loginUser == false) {
        $errors = 'Người dùng không tồn tại!';

        header("location:../../view/login-client/login.php?errors=$errors");
    } else if (password_verify($password, $loginUser['password']) == false) {
        $errors = 'Mật khẩu không chính xác!';
        header("location:../../view/login-client/login.php?errors=$errors");
    } else {
        session_start();
        $_SESSION['user'] = $loginUser;
        header("location:../../view/home.php");
    }
    $sql = "SELECT * FROM controller WHERE username='$user'";
$statement = $connect->prepare($sql);
$statement->execute();
$loginUser = $statement->fetch();
if ($loginUser == false) {
    $errors = 'Người dùng không tồn tại!';

    header("location:../../view/login-client/login.php?errors=$errors");
} else if (password_verify($password, $loginUser['password']) == false) {
    $errors = 'Mật khẩu không chính xác!';
    header("location:../../view/login-client/login.php?errors=$errors");
} else {
    session_start();
    $_SESSION['user'] = $loginUser;
    header("location:../../view/admin.php");
}
}

