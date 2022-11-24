<?php
require_once 'Controllers/AuthControllers.php';
require_once 'Controllers/AdminControllers.php';
require_once 'Controllers/quanlitourControllers.php';
require_once 'Controllers/quanlibookingControllers.php';
require_once 'Controllers/quanliuserControllers.php';
// http://localhost?ten_bien=giatri&ten_bien2=giatri2
// http://localhost?url=create_tour
// B1. Lấy thông tin đường dẫn muốn truy cập vào ở thanh địa chỉ
$url = isset($_GET['url']) ? $_GET['url'] : '/';
// B2. Kiểm tra xem người dùng đang muốn vào đâu
// Chức năng giống như điều hành đến các controller khác nhau
switch ($url) {
    case 'login':
        // Gọi controller TourController
        echo login();
        break;
    case 'admin_index':
        echo index();
        break;
    case 'qlbooking_index':
        quanlibooking();
        break;
    case 'qluser_index':
        quanliuser();
        break;
    case 'qltour_index':
        quanlitour();
        break;
    case 'create-tour':
        // Gọi controller tìm đến hàm hiển thị view tạo mới tour
        break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
