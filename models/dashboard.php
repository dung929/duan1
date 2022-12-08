<?php
require_once 'models/db.php';

function getCountClient()
{
    $sql = "SELECT COUNT(id) AS CountClient FROM client; ";
    return getData($sql, FETCH_COLUMN);
}
function getSumBooking()
{
    $sql = "SELECT SUM(sum_tour) AS TourBooking FROM ql_booking; ";
    return getData($sql, FETCH_SUM);
}
function getCountBooking()
{
    $sql = "SELECT COUNT(id) AS CountClient FROM ql_booking; ";
    return getData($sql, FETCH_COLUMN);
}
function getSumBookingTime($startTime, $endTime)
{
    $sql = "SELECT SUM(sum_tour) AS TourBooking FROM ql_booking where time_booktour >= '$startTime' and time_booktour <= '$endTime' ";
    return getData($sql, FETCH_SUM);
}
function getCountComment()
{
    $sql = "SELECT COUNT(id) AS CountClient FROM comment; ";
    return getData($sql, FETCH_COLUMN);
}