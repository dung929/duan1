<?php
require_once 'models/db.php';
function getAllProducts()
{
    $sql = "SELECT products.*, categories.name as category_name FROM products join categories ON  products.category_id = categories.id ";

    return getData($sql, FETCH_ALL);
}

function getTaoBooking()
{
    $sum = isset($_POST['treem']) ? $_POST['treem'] : '';
    $date_dat_tour = isset($_POST['date_dat_tour']) ? $_POST['date_dat_tour'] : '';
    $sql = "INSERT INTO ql_booking  "
        . "(sum_tour,time_booktour)"
        . " VALUES ('$sum','$date_dat_tour')";
    return getData($sql, NOT_FETCH);
}
function getBooking()
{
    $sql = "SELECT * from ql_booking ";

    return getData($sql, FETCH_ALL);
}
function getTravel()
{
    $sql = "SELECT products.id,price,number,products.name,categories.name AS tendm,content,image,time_start,book_tour.id as tour_id,city.name as name_city FROM products
    JOIN book_tour ON book_tour.id_tour=products.id 
    JOIN detail ON detail.id_products=products.id
    JOIN categories ON categories.id =products.category_id 
    JOIN city ON city.id=detail.id_city";
    return getData($sql, FETCH_ALL);
}
function getDetail_productOnecc($id)
{
    $sql = "SELECT products.id,price,number,products.name,categories.name AS tendm,content,schedule,image,time_start,book_tour.id as tour_id,city.name as name_city, coach.name AS tenpt,hotel.name AS tenks, tour_guide.name AS tennv FROM products 
    JOIN book_tour ON book_tour.id_tour=products.id 
    JOIN categories ON categories.id =products.category_id
    JOIN detail ON detail.id_products=products.id 
    JOIN city ON city.id=detail.id_city 
    JOIN hotel ON detail.id_hotel = hotel.id 
    JOIN coach ON coach.id=detail.id_coach 
    JOIN tour_guide ON tour_guide.id=detail.id_tour_guide 
    WHERE products.id = $id";
    return getData($sql, FETCH_ONE);
}
function getDattour($id)
{
    $sql = "SELECT products.id,price,number,products.name,categories.name AS tendm,content,schedule,image,time_start,book_tour.id as tour_id,city.name as name_city, coach.name AS tenpt,hotel.name AS tenks, tour_guide.name AS tennv FROM products 
    JOIN book_tour ON book_tour.id_tour=products.id 
    JOIN categories ON categories.id =products.category_id
    JOIN detail ON detail.id_products=products.id 
    JOIN city ON city.id=detail.id_city 
    JOIN hotel ON detail.id_hotel = hotel.id 
    JOIN coach ON coach.id=detail.id_coach 
    JOIN tour_guide ON tour_guide.id=detail.id_tour_guide
    WHERE products.id = $id";
    return getData($sql, FETCH_ONE);
}
function createTour()
{
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $time_start = isset($_POST['time_start']) ? $_POST['time_start'] : '';
    $time_end = isset($_POST['time_end']) ? $_POST['time_end'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $category = isset($_POST['category_id']) ? $_POST['category_id'] : '';
    $sql = "INSERT INTO products  "
        . "(name, price, time_start, time_end, content, image, category_id)"
        . " VALUES ('$name', '$price', '$time_start', '$time_end', '$content', '$image', '$category')";
    return getData($sql, NOT_FETCH);
}
function getContact_client()
{
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $addr = isset($_POST['addr']) ? $_POST['addr'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $sql = "INSERT INTO client  "
        . "(name,address,phone,image)"
        . " VALUES ('$name', '$addr', '$phone', '$image')";
    return getData($sql, NOT_FETCH);
}
