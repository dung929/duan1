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
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taocomment = taoCommentProducts();
  }
  $id = $_GET['id'];
  $comment = getCommentProduct($id);
  $details = getDetail_productOnecc($id);
  $products = getAllProducts();
  include_once './views/home/detail.php';
}
function dat_tour()
{
  $client = getAllClient();
  $id = $_GET['id'];
  $details = getDetail_productOnecc($id);
  $dat_tour = getDattour($id);
  include_once './views/home/dat_tour.php';
}
function contact_client()
{
  $id = $_GET['id'];
  $contact_client = getContact_client($id);
  include_once './views/backup/contact_client.php';
}
