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
            
        } else if (!password_verify($password, $client['password'])) {
            $errors = 'Mật khẩu không chính xác!';
          
        } else {
            // Khi người dùng nhập đúng email, password
            session_start(); // Khởi tạo session để lưu thông tin user
            // $_SESSION là 1 biến toàn cục, kiểu mảng, lưu thông tin trong phiên làm việc
            $_SESSION['user'] = $client; // lưu user = $loginUser vào phiên làm việc
            // Đăng nhập thành công, quay về màn login để chào
            header("location:index.php?controller=home");
        }
    }
    include_once './views/auth/login.php';
}
