<?php
require_once('../db.php');
$username = $_POST['username'];
$password = $_POST['password'];
$errors = '';
if ($username == '') {
    $errors = $errors . 'User không được để trống!.';
}
if ($password == '') {
    $errors .= 'Password không được để trống!.';
}
if ($errors != '') {
    header("location:../../view/login-client/login.php?errors=$errors");
} else {
    $sql = "SELECT * FROM client WHERE username='$username'";
    $statement = $connect->prepare($sql);
    $statement->execute();
    $loginUser = $statement->fetch();
    if ($loginUser == false) {
        $errors = 'Người dùng không tồn tại!';
        
        header("location:../../view/login-client/login.php?errors=$errors");
    } else if (password_verify($password, $loginUser['password']) ==false) {
        $errors = 'Mật khẩu không chính xác!';
        header("location:../../view/login-client/login.php?errors=$errors");
    } else {
        // Khi người dùng nhập đúng email, password
        session_start(); // Khởi tạo session để lưu thông tin user
        // $_SESSION là 1 biến toàn cục, kiểu mảng, lưu thông tin trong phiên làm việc
        $_SESSION['user'] = $loginUser; // lưu user = $loginUser vào phiên làm việc
        // Đăng nhập thành công, quay về màn login để chào
        header("location:../../view/home.php");
    }
    $sql = "SELECT * FROM controller WHERE username='$username'";
    $statement = $connect->prepare($sql);
    $statement->execute();
    $loginUser = $statement->fetch();
    if ($loginUser == false) {
        $errors = 'Người dùng không tồn tại!';
        
        header("location:../../view/login-client/login.php?errors=$errors");
    } else if (password_verify($password, $loginUser['password']) ==false) {
        $errors = 'Mật khẩu không chính xác!';
        header("location:../../view/login-client/login.php?errors=$errors");
    } else {
        // Khi người dùng nhập đúng email, password
        session_start(); // Khởi tạo session để lưu thông tin user
        // $_SESSION là 1 biến toàn cục, kiểu mảng, lưu thông tin trong phiên làm việc
        $_SESSION['user'] = $loginUser; // lưu user = $loginUser vào phiên làm việc
        // Đăng nhập thành công, quay về màn login để chào
        header("location:../../view/home.php");
    }
}