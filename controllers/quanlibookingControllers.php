<?php
require_once('models/products.php');
require_once('models/categories.php');
function  quanlibooking()
{
    $booking = getBooking();
    include_once './views/admin/quanlibooking.php';
}
function taoBooking(){
    $taobooking = getTaoBooking();
    header('location:index.php?url=travel');
}