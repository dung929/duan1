<?php
require_once('models/products.php');
 function travel(){
    $travels = getTravel();
    include_once './views/backup/travel.php';
 }
 function getDetail_productOne(){
   $id = $_GET['id'];
   $details = getDetail_productOnecc($id);
   include_once './views/backup/detail_product.php';
 } 
 function dat_tour(){
   $id = $_GET['id'];
   $dat_tour  = getDattour($id);
   include_once './views/backup/dat_tour.php';
 }
 function contact_client(){
  $id = $_GET['id'];
  $contact_client = getContact_client($id);
  include_once './views/backup/contact_client.php';
 }