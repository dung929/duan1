<?php
require_once 'models/db.php';
function getAllProducts($search = '')
{
    $sql = "SELECT products.*, categories.name as category_name FROM products left join categories ON  products.category_id = categories.id where products.name Like '%$search%' OR products.price LIKE '%$search%'  ";

    return getData($sql, FETCH_ALL);
}
function getAllProduct()
{
    $sql = "SELECT * FROM products";
    return getData($sql, FETCH_ALL);
}
function getTaoBooking()
{
    $date_dat_tour = $_POST['date_dat_tour'];
    $name = $_POST['name'];
    $treem1 = $_POST['treem1'];
    $treem2 = $_POST['treem2'];
    $treem3 = $_POST['treem3'];
    $nguoilon = $_POST['nguoilon'];
    $sum_client =  $treem1 + $nguoilon + $treem2 + $treem3;
    $name_guide = $_POST['guide'];
    $name_coach = $_POST['coach'];
    $name_hotel = $_POST['hotel'];
    $name_cate = $_POST['cate'];
    $price = $_POST['price'];
    $id_client = $_POST['id_client'];
    $sale1 = 0.45;
    $sale2 = 0.25;
    $sale3 = 0.05;
    $sum = $treem1 * $price * $sale1 + $nguoilon * $price + $treem2 * $price * $sale2 + $treem3 * $price * $sale3;
    $sql = "INSERT INTO ql_booking  "
        . "(time_booktour,name_tour,number_client,guide_tour,coach_tour,hotel_tour,category_name,sum_tour,name_client)"
        . " VALUES ('$date_dat_tour','$name','$sum_client','$name_guide','$name_coach','$name_hotel','$name_cate','$sum','$id_client')";
    return getData($sql, NOT_FETCH);
}
function getBooking()
{
    $sql = "SELECT * FROM ql_booking  ";

    return getData($sql, FETCH_ALL);
}
function getSubmittour()
{
    $sql = "SELECT * FROM ql_booking ";

    return getData($sql, FETCH_ALL);
}
function getTravel()
{
    $sql = "SELECT products.id,client.id AS id_cl,price,number,products.name,categories.name AS tendm,content,products.image,time_start,book_tour.id as tour_id,city.name as name_city FROM products
    JOIN book_tour ON book_tour.id_tour=products.id 
    JOIN client 
    JOIN categories ON categories.id =products.category_id
    JOIN detail ON detail.id_products=products.id 
    JOIN city ON city.id=detail.id_city 
    JOIN hotel ON detail.id_hotel = hotel.id 
    JOIN coach ON coach.id=detail.id_coach 
    JOIN tour_guide ON tour_guide.id=detail.id_tour_guide";
    return getData($sql, FETCH_ALL);
}
function getDetail_productOnecc($id)
{
    $sql = "SELECT products.id,price,number,products.name,categories.name AS tendm,content,schedule,image,time_start,days,time_end,book_tour.id as tour_id,city.name as name_city, coach.name AS tenpt,hotel.name AS tenks, tour_guide.name AS tennv FROM products 
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
    $sql = "SELECT products.id,price,number,products.name,coach.name AS name_coach,hotel.name AS name_hotel,tour_guide.name AS guide_name,categories.name AS tendm,content,schedule,image,time_start,book_tour.id as tour_id,city.name as name_city, coach.name AS tenpt,hotel.name AS tenks, tour_guide.name AS tennv FROM products 
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
    $sql = "INSERT INTO client  "
        . "(name,address,phone,image)"
        . " VALUES ('$name', '$addr', '$phone')";
    return getData($sql, NOT_FETCH);
}
function getProductsTrending()
{
    $sql = "SELECT products.*, categories.name as category_name FROM products left join categories ON  products.category_id = categories.id where products.is_trending = 1 ";
    return getData($sql, FETCH_ALL);
}
function listProducts($search = '', $time_start = '', $time_end = '', $days = '',  $category = '')
{
    $sql = "SELECT products.*, categories.name as category_name FROM products left join categories ON  products.category_id = categories.id";
    if ($search || $time_start || $time_end || $days || $category) {
        $sql .= ' where ';
    }
    $and = '';
    if ($search) {
        $sql .= "products.name Like '%$search%'";
        $and = ' and ';
    }
    if ($time_start) {
        $sql .= "{$and}products.time_start <= '$time_start'";
        $and = ' and ';
    }
    if ($time_end) {
        $sql .= "{$and}products.time_end >= '$time_end'";
        $and = ' and ';
    }
    if ($days) {
        $sql .= "{$and}products.days = $days";
        $and = ' and ';
    }
    if ($category) {
        $sql .= "{$and}products.category_id = $category";
    }
    return getData($sql, FETCH_ALL);
}
