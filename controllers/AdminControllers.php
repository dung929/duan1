<?php
require_once('models/dashboard.php');
function firstDay($month = '', $year = '')
{
    if (empty($month)) {
        $month = date('m');
    }
    if (empty($year)) {
        $year = date('Y');
    }
    $result = strtotime("{$year}-{$month}-01");
    return date('Y-m-d', $result);
}
function lastday($month = '', $year = '')
{
    if (empty($month)) {
        $month = date('m');
    }
    if (empty($year)) {
        $year = date('Y');
    }
    $result = strtotime("{$year}-{$month}-01");
    $result = strtotime('-1 second', strtotime('+1 month', $result));
    return date('Y-m-d', $result);
}
function getChartData()
{
    switch ($_GET['type']) {
        case 'month':
            $data = [];
            for ($i = 1; $i <= 12; $i++) {
                $data[] = getSumBookingTime(firstDay($i, date("Y")), lastday($i, date("Y")))['TourBooking'];
            }
            print_r(json_encode($data));
            break;
        default:
            print_r(json_encode([]));
    }
}
function  index()
{
    session_start();
    if (!isset($_SESSION['user_admin'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    } else if (isset($_SESSION['user_admin'])) {
        $countClient = getCountClient();
        $countBooking = getCountBooking();
        $sumBooking  = getSumBooking()['TourBooking'];
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
