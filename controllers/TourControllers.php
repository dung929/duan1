<?php
require_once('models/products.php');
 function travel(){
    $travels = getTravel();
    include_once './views/backup/travel.php';
 }