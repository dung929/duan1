<?php
require_once 'models/db.php';
function getAllProducts(){
    $sql = "SELECT products.*, categories.name as category_name FROM products join categories ON  products.category_id = categories.id ";

    return getData($sql, FETCH_ALL);
}
function getProducts(){
    $id = $_GET['id'];
    $sql = "SELECT products.*, categories.name as category_name FROM products join categories ON  products.category_id = categories.id WHERE id= $id";

    return getData($sql, FETCH_ONE);
}
function getTravel()
{
    $sql = "SELECT products.id,price,number,products.name,content,image,time_start,book_tour.id as tour_id,city.name as name_city FROM book_tour JOIN products ON book_tour.id_tour=products.id JOIN detail ON detail.id_products=products.id JOIN city ON city.id=detail.id_city";
    return getData($sql, FETCH_ALL);
    $travel = '';
}
function createTour(){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $time_start = isset($_POST['time_start']) ? $_POST['time_start'] : '';
    $time_end = isset($_POST['time_end']) ? $_POST['time_end'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $sql = "INSERT INTO products  "
    . "(name, price, time_start, time_end, content, image)"
    ." VALUES ('$name', '$price', '$time_start', '$time_end', '$content', '$image')";
    return getData($sql, NOT_FETCH);
    
} 
