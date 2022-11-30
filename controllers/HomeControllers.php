<?php
require_once('models/categories.php');
require_once('models/products.php');

function home(){
    $categories = getAllCategories();
    $products = getProductsTrending();
    include_once './views/home/index.php';
}
function detail(){

}
function list_products(){
    $category = isset($_GET['category']) ? trim($_GET['category'] ) : '';
    $search = isset($_POST['search']) ? trim($_POST['search'] ) : '';
    $time_start = isset($_POST['time_start']) ? trim($_POST['time_start'] ) : '';
    $time_end = isset($_POST['time_end']) ? trim($_POST['time_end'] ) : '';
    $days = isset($_POST['days']) ? trim($_POST['days'] ) : '';
    $products = listProducts($search, $time_start, $time_end, $days, $category);
    include_once './views/home/list_products.php';
}
