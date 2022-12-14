<?php
require_once('models/categories.php');
require_once('models/products.php');
require_once('models/blog.php');
require_once('models/tour_guide.php');
function home()
{
    $blog2 = getBlog();
    $categories = getAllCategories();
    $products = getProductsTrending();
    $guide =  getAllGuide();
    $comment = getAllComment();
    session_start();
    include_once './views/home/index.php';
}
function list_products()
{
    $category = isset($_GET['category']) ? trim($_GET['category']) : '';
    $search = isset($_POST['search']) ? trim($_POST['search']) : '';
    $time_start = isset($_POST['time_start']) ? trim($_POST['time_start']) : '';
    $time_end = isset($_POST['time_end']) ? trim($_POST['time_end']) : '';
    $days = isset($_POST['days']) ? trim($_POST['days']) : '';
    $number = isset($_POST['number']) ? trim($_POST['number']) : '';
    $products = listProducts($search, $time_start, $time_end, $days, $category, $number);
    $guide =  getAllGuide();
    $blog2 = getBlog();
    include_once './views/home/list_products.php';
}
function blog()
{
    $blog = getAllBlog();
    include_once './views/home/blog.php';
    session_start();
}
function about()
{
    $guide =  getAllGuide();
    include_once './views/home/about.php';
    session_start();
}
function contact()
{
    include_once './views/home/contact.php';
    session_start();
}
