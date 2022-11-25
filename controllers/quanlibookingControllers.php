<?php
require_once('models/products.php');
require_once('models/categories.php');
function  quanlibooking()
{
    $products = getProducts();
    $categories = getAllCategories();
    include_once './views/admin/quanlibooking.php';
}