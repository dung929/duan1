<?php
require_once('models/Client.php');
function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $client = clientCheckExist($username);
        var_dump($client);
        if (!$client) {
            $errors = 'Người dùng không tồn tại!';
            var_dump(1);
            
        } else if (!password_verify($password, $client['password'])) {
            $errors = 'Mật khẩu không chính xác!';
          var_dump(2);
        } else {
            var_dump(3);
            // Khi người dùng nhập đúng email, password
            session_start(); // Khởi tạo session để lưu thông tin user
            // $_SESSION là 1 biến toàn cục, kiểu mảng, lưu thông tin trong phiên làm việc
            $_SESSION['user'] = $client; // lưu user = $loginUser vào phiên làm việc
            // Đăng nhập thành công, quay về màn login để chào
            header("location:index.php?url=admin_index");
        }
    }
    include_once './views/auth/login.php';
}
function login_post()
{

}