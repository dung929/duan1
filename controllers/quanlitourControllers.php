<?php
require_once('models/products.php');
require_once('models/categories.php');

function  quanlitour()
{
    $search = isset($_POST['search']) ? $_POST['search'] : '';
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login&errors=$errors");
    } else if ($_SESSION['user']['role_id'] != 1) {
        header("location: index.php?url=403");
    } else if (isset($_SESSION['user'])) {
        $products = getAllProducts($search);
        $categories = getAllCategories();
        $coach =  getAllCoach();
        $city = getAllCity();
        $hotel = getAllHotel();
        $guide = getAllGuide();
        include_once './views/admin/quanlitour.php';
    }
}
function taotour()
{
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login&errors=$errors");
    } else if (isset($_SESSION['user'])) {
        $taotour = createTour();
        $products = getAllProducts();
        $categories = getAllCategories();
        include_once './views/admin/quanlitour.php';
    }
}
function  editTour()
{
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login&errors=$errors");
    } else if (isset($_SESSION['user'])) {
        $id = $_GET['id'];
        $details = getDetail_productOnecc($id);
        $categories = getAllCategories();
        $coach = getAllCoachh();
        $city = getAllCityy();
        $hotel = getAllHotell();
        $guide = getAllGuidee();
        $dat_tour = getDattour($id);
        include_once './views/admin/editTour.php';
    }
}
function updateTour()
{
    $update = updateTourNew();
    header('location:index.php?url=qltour_index');
}
