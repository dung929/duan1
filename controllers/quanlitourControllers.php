<?php
require_once('models/products.php');
require_once('models/categories.php');

function  quanlitour()
{
    $search = isset($_POST['search']) ? $_POST['search'] : '';
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    }    else if($_SESSION['user']['role_id'] != 1){
        header("location: index.php?url=403");
    }
     else if (isset($_SESSION['user'])) {
        $products = getAllProducts($search);
        $categories = getAllCategories();
        include_once './views/admin/quanlitour.php';
    }
}
function taotour()
{
    session_start();
    if (!isset($_SESSION['user_admin'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login_user&errors=$errors");
    } else if (isset($_SESSION['user_admin'])) {
        $taotour = createTour();
        $products = getAllProducts();
        $categories = getAllCategories();
        include_once './views/admin/quanlitour.php';
    }
}
