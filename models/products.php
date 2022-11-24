<?php
require_once 'models/db.php';
function getAllProducts(){
    $sql = "SELECT products.*, categories.name as category_name FROM products left join categories ON  products.category_id = categories.id ";

    return getData($sql, FETCH_ALL);
}
function createTour(){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $time_start = isset($_POST['time_start']) ? $_POST['time_start'] : '';
    $time_end = isset($_POST['time_end']) ? $_POST['time_end'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $category = isset($_POST['category_id']) ? $_POST['category_id'] : '';
    $sql = "INSERT INTO products  "
    . "(name, price, time_start, time_end, content, image, category_id)"
    ." VALUES ('$name', '$price', '$time_start', '$time_end', '$content', '$image', '$category')";
    return getData($sql, NOT_FETCH);
    
} 
