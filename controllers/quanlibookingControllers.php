<?php
require_once('models/products.php');
require_once('models/categories.php');
function  quanlibooking()
{
    $booking = getBooking();
    session_start();
    if (!isset($_SESSION['user_admin'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    } else if (isset($_SESSION['user_admin'])) {
        include_once './views/admin/quanlibooking.php';
    }
}
function taoBooking()
{
    $taobooking = getTaoBooking();
    header('location:index.php?url=submit_tour');

}
function submit_tour(){
    session_start();
    $submit_tour = getSubmittour();
    include './views/auth/history_tour.php';
}
