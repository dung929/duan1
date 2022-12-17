<?php
require_once('models/products.php');
require_once('models/categories.php');
function  quanlibooking()
{
    $booking = getBooking();
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login&errors=$errors");
    } else if ($_SESSION['user']['role_id'] != 1) {
        header("location: index.php?url=403");
    } else if (isset($_SESSION['user'])) {
        include_once './views/admin/quanlibooking.php';
    }
}
function updateStatus()
{
    $update = updateStatusBooking($_POST['id'], $_POST['status']);
    header("location: index.php?url=qlbooking_index");
}
function taoBooking()
{
    $taobooking = saveBooking();
    header('location:index.php?url=thankyou');
}
function history_tour()
{
    session_start();
    $clientId = $_SESSION['user']['id'];
    $submit_tour = getSubmittour($clientId);
    include './views/auth/history_tour.php';
}
function  thankyou(){
    include_once './views/auth/thankyou.php';
}
function deleteBooking(){
    $delete = deleteBook();
    header("location:index.php?url=qlbooking_index");
}