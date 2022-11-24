<?php
require_once('models/products.php');
require_once('models/categories.php');

function  quanlitour()
{
    $products = getAllProducts();
    $categories = getAllCategories();
    $createTour = createTour();

    include_once './views/admin/quanlitour.php';
}

