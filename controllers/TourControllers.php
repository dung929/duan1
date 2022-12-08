<?php
require_once('models/products.php');
require_once('models/client.php');
function travel()
{
  $travels = getTravel();
  include_once './views/backup/travel.php';
}
function getDetail_productOne()
{
  session_start();
  $id = $_GET['id'];
  $details = getDetail_productOnecc($id);
  $products = getAllProducts();
  include_once './views/home/detail.php';
}
function dat_tour()
{
  session_start();
  if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: index.php?url=login&errors=$errors");
  } else if (isset($_SESSION['user'])) {
    $client = getAllClient();
    $id = $_GET['id'];
    $details = getDetail_productOnecc($id);
    $dat_tour = getDattour($id);
    include_once './views/home/dat_tour.php';
  }
}
function contact_client()
{
  $id = $_GET['id'];
  $contact_client = getContact_client($id);
  include_once './views/backup/contact_client.php';
}
