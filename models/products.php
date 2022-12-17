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
function getAllCoachh()
{
    $sql = "SELECT * FROM coach";
    return getData($sql, FETCH_ALL);
}
function getAllCityy()
{
    $sql = "SELECT * FROM city";
    return getData($sql, FETCH_ALL);
}
function getAllGuidee()
{
    $sql = "SELECT * FROM tour_guide";
    return getData($sql, FETCH_ALL);
}
function getAllHotell()
{
    $sql = "SELECT * FROM hotel";
    return getData($sql, FETCH_ALL);
}
function saveBooking()
{
    $date_dat_tour = date('Y-m-d H:i:s');
    $name = $_POST['name'];
    $id = $_POST['id'];
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
    $name_client = $_POST['name_client'];
    $sale = $_POST['ma_sale'];
    if ($sale == '123') {
        $sale1 = 0.45;
        $sale2 = 0.25;
        $sale3 = 0.05;
        $sale4 = 500000;
        $sum = ($treem1 * $price * $sale1 + $nguoilon * $price + $treem2 * $price * $sale2 + $treem3 * $price * $sale3) - $sale4;
        $sql = "INSERT INTO ql_booking  "
            . "(time_booktour,name_tour,number_client,guide_tour,coach_tour,hotel_tour,category_name,sum_tour,id_client,name_client,id_products)"
            . " VALUES ('$date_dat_tour','$name','$sum_client','$name_guide','$name_coach','$name_hotel','$name_cate','$sum','$id_client','$name_client','$id')";
        $result = getData($sql, NOT_FETCH);
    } else if ($sale == 'abc') {
        $sale1 = 0.45;
        $sale2 = 0.25;
        $sale3 = 0.05;
        $sale4 = 1000000;
        $sum = ($treem1 * $price * $sale1 + $nguoilon * $price + $treem2 * $price * $sale2 + $treem3 * $price * $sale3) - $sale4;
        $sql = "INSERT INTO ql_booking  "
            . "(time_booktour,name_tour,number_client,guide_tour,coach_tour,hotel_tour,category_name,sum_tour,id_client,name_client,id_products)"
            . " VALUES ('$date_dat_tour','$name','$sum_client','$name_guide','$name_coach','$name_hotel','$name_cate','$sum','$id_client','$name_client','$id')";
        $result = getData($sql, NOT_FETCH);
    } else {
        $sale1 = 0.45;
        $sale2 = 0.25;
        $sale3 = 0.05;
        $sum = ($treem1 * $price * $sale1 + $nguoilon * $price + $treem2 * $price * $sale2 + $treem3 * $price * $sale3);
        $sql = "INSERT INTO ql_booking  "
            . "(time_booktour,name_tour,number_client,guide_tour,coach_tour,hotel_tour,category_name,sum_tour,id_client,name_client,id_products)"
            . " VALUES ('$date_dat_tour','$name','$sum_client','$name_guide','$name_coach','$name_hotel','$name_cate','$sum','$id_client','$name_client','$id')";
        $result = getData($sql, NOT_FETCH);
    }
    $sql2 = " UPDATE book_tour SET number = number - $sum_client Where id_tour=$id";
    getData($sql2, NOT_FETCH);
    return $result;
}
function updateStatusBooking($id, $status)
{
    $sql = " UPDATE ql_booking SET status='$status' where id=$id ";
    return getData($sql, NOT_FETCH);
}
function getBooking()
{
    $sql = "SELECT * FROM ql_booking ORDER BY id DESC ";

    return getData($sql, FETCH_ALL);
}
function deleteBook(){
    $id = $_POST['id'];
    $id_products = $_POST['id_products'];
    $number = $_POST['number'];
    $sql = "DELETE FROM ql_booking WHERE id=$id";
    $result=getData($sql,NOT_FETCH);
    $sql2 = "UPDATE book_tour SET number = number + $number Where id_tour=$id_products";
    getData($sql2, NOT_FETCH);
    return $result;
}
function getSubmittour($clientId)
{
    $sql = "SELECT * FROM ql_booking JOIN client ON client.id = ql_booking.id_client  JOIN products ON  products.id = ql_booking.id_products WHERE id_client = $clientId ORDER BY ql_booking.id DESC";

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
    $sql = "SELECT products.id,price,number,products.name,categories.name AS tendm,content,schedule,products.image,time_start,days,time_end,book_tour.id as tour_id,city.name as name_city, coach.name AS tenpt,hotel.name AS tenks, tour_guide.name AS tennv FROM products 
    JOIN book_tour ON book_tour.id_tour=products.id 
    LEFT JOIN categories ON categories.id =products.category_id
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
    $sql = "SELECT products.id,price,number,products.name,products.image,coach.name AS name_coach,hotel.name AS name_hotel,tour_guide.name AS guide_name,categories.name AS tendm,content,schedule,time_start,book_tour.id as tour_id,city.name as name_city, coach.name AS tenpt,hotel.name AS tenks, tour_guide.name AS tennv FROM products 
    JOIN book_tour ON book_tour.id_tour=products.id 
    LEFT JOIN categories ON categories.id =products.category_id
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
    $image = $_FILES['image'];
    $save = 'template_client/img/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $save);
    $category = $_POST['category_id'];

    $coach = $_POST['coach'];
    $city = $_POST['city'];
    $guide = $_POST['guide'];
    $hotel = $_POST['hotel'];
    $number = $_POST['number'];
    $day = $_POST['day'];
    $istrending = $_POST['istrending'];
    $schedule = $_POST['schedule'];

    $name_err = '';
    $image_err = '';
    $price_err = '';
    $cate_err = '';
    $times_err = '';
    $timee_err = '';
    $content_err = '';
    $coach_err = '';
    $city_err = '';
    $guide_err = '';
    $hotel_err = '';
    $number_err = '';
    $day_err = '';
    $schedule_err = '';


    if ($name == '') {
        $name_err = 'Vui lòng không để trống!';
    }
    if ($price == '') {
        $price_err = 'Vui lòng không để trống!';
    }else if($price <=0){
        $price_err = 'Vui lòng nhập giá lớn hơn 0!';
    }
    if ($time_start == '') {
        $times_err = 'Vui lòng không để trống!';
    }
    if ($time_end == '') {
        $timee_err = 'Vui lòng không để trống!';
    }
    if ($content == '') {
        $content_err ='Vui lòng không để trống!';
    }
    if ($category == '') {
        $cate_err = 'Vui lòng không để trống!';
    }
    if ($coach == '') {
        $coach_err = 'Vui lòng không để trống!';
    }
    if ($city == '') {
        $city_err = 'Vui lòng không để trống!';
    }
    if ($hotel == '') {
        $hotel_err = 'Vui lòng không để trống!';
    }
    if ($guide == '') {
        $guide_err ='Vui lòng không để trống!';
    }
    if ($number == '') {
        $number_err = 'Vui lòng không để trống!';
    }
    else if($number <=0){
        $number_err = 'Vui lòng nhập giá lớn hơn 0!';
    }
    if ($day == '') {
        $day_err = 'Vui lòng không để trống!';
    }
    else if($day <=0){
        $day_err = 'Vui lòng nhập giá lớn hơn 0!';
    }
    if ($schedule == '') {
        $schedule_err = 'Vui lòng không để trống!';
    }
    if ($image['size'] <=0) {
        $image_err = 'Vui lòng không để trống!';
    }
    if ($image['size'] >= 2 * 1024 * 1024) {
        $image_err = 'Kích cỡ ảnh không được quá 2mb!';
    }


    if (!empty($name_err) || !empty($image_err) || !empty($price_err) || !empty($cate_err) || !empty($times_err) || !empty($timee_err) || !empty($content_err) || !empty($coach_err) || !empty($city_err) || !empty($hotel_err) || !empty($guide_err) || !empty($number_err)||!empty($day_err)||!empty($schedule_err)) {
        header("location:index.php?url=qltour_index&name_err=$name_err&image_err=$image_err&price_err=$price_err&cate_err=$cate_err & times_err=$times_err&timee_err=$timee_err&content_err=$content_err&coach_err=$coach_err&city_err=$city_err&hotel_err=$hotel_err& guide_err=$guide_err&number_err=$number_err&day_err=$day_err&schedule_err=$schedule_err");
        die;
    }
    $sql = "INSERT INTO products  "
        . "(name, price, time_start, time_end, content, image, category_id,days,is_trending,schedule)"
        . " VALUES ('$name', '$price', '$time_start', '$time_end', '$content', '$save',$category,$day,$istrending,'$schedule')";
    $result = getData($sql, NOT_FETCH);
    $sql2 = "SELECT id FROM products ORDER BY id DESC LIMIT 1";
    $lastProducts = getData($sql2, FETCH_ONE);
    $sql3 = "INSERT INTO detail (id_products,id_coach,id_city,id_hotel,id_tour_guide) VALUES ({$lastProducts['id']},$coach,$city,$hotel,$guide) ";
    $saveDetail = getData($sql3, NOT_FETCH);
    $sql4 = "INSERT INTO book_tour (id_tour,number) VALUES ({$lastProducts['id']},$number) ";
    getData($sql4, NOT_FETCH);
    return $result;
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
    $sql = "SELECT products.*, categories.name as category_name,number FROM products left join categories ON  products.category_id = categories.id join book_tour ON book_tour.id_tour = products.id where products.is_trending = 1 ";
    return getData($sql, FETCH_ALL);
}
function listProducts($search = '', $time_start = '', $time_end = '', $days = '',  $category = '', $number = '')
{
    $sql = "SELECT products.*, categories.name as category_name,number FROM products left join categories ON  products.category_id = categories.id join book_tour ON book_tour.id_tour = products.id";
    if ($search || $time_start || $time_end || $days || $category || $number) {
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
    if ($number) {
        $sql .= "{$and}book_tour.number = $number";
    }
    return getData($sql, FETCH_ALL);
}
function getCommentProduct($productId)
{
    $sql = "SELECT comment.*, client.name as client_name, client.image as client_image FROM comment left join client ON  comment.client_id = client.id where comment.product_id = $productId ";
    return getData($sql, FETCH_ALL);
}
function taoCommentProducts()
{
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $productId = isset($_POST['productId']) ? $_POST['productId'] : '';
    $clientId = isset($_SESSION['user']) ? $_SESSION['user']['id'] : '';
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO comment  "
        . "(content,product_id,client_id,time)"
        . " VALUES ('$content', '$productId', '$clientId', '$date')";
    return getData($sql, NOT_FETCH);
}
function  updateTourNew()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];
    $content = $_POST['content'];
    $image = $_FILES['image'];
    $save = 'template_client/img/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $save);
    $category = $_POST['category_id'];

    $coach = $_POST['coach'];
    $city = $_POST['city'];
    $guide = $_POST['guide'];
    $hotel = $_POST['hotel'];
    $number = $_POST['number'];

    $sql = " UPDATE products SET name='$name',price='$price',time_start='$time_start',time_end='$time_end',content='$content',image='$save',category_id=$category where id=$id ";
    $result = getData($sql, NOT_FETCH);
    $sql3 = "UPDATE detail SET id_coach =$coach,id_city=$city,id_hotel=$hotel,id_tour_guide=$guide WHERE id_products=$id";
    $updateDetail = getData($sql3, NOT_FETCH);
    $sql4 = "UPDATE book_tour SET number='$number' WHERE id_tour = $id";
    getData($sql4, NOT_FETCH);
    return $result;
}
