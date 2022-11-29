<?php
require_once('models/products.php');
require_once('models/categories.php');

function  quanlitour()
{
    $search = isset($_POST['search']) ? $_POST['search'] : '';
    $products = getAllProducts($search);
    $categories = getAllCategories();
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    } else if (isset($_SESSION['user'])) {
        include_once './views/admin/quanlitour.php';
    }
}
function taotour()
{
    $taotour = createTour();
}
