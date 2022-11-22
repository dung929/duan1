<?php
require_once('controllers/base_controller.php');
require_once('models/client.php');

class AuthController extends BaseController
{
    function __construct()
    {
        $this->folder = 'auth';
    }

    public function index()
    {

    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $client = Client::checkExist($username);
            if (!$client) {
                $errors = 'Người dùng không tồn tại!';
                $this->render('login', ['errors' => $errors]);
            } else if (!password_verify($password, $client['password'])) {
                $errors = 'Mật khẩu không chính xác!';
                $this->render('login', ['errors' => $errors]);
            } else {
                // Khi người dùng nhập đúng email, password
                session_start(); // Khởi tạo session để lưu thông tin user
                // $_SESSION là 1 biến toàn cục, kiểu mảng, lưu thông tin trong phiên làm việc
                $_SESSION['user'] = $client; // lưu user = $loginUser vào phiên làm việc
                // Đăng nhập thành công, quay về màn login để chào
                header("location:index.php?controller=home");
            }
        }
        $this->render('login');
    }
}
