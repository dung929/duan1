<?php
require_once('../model/db.php');
$sql = "SELECT products.id,price,number,products.name,content,image,time_start,book_tour.id as tour_id,city.name as name_city FROM book_tour JOIN products ON book_tour.id_tour=products.id JOIN detail ON detail.id_products=products.id JOIN city ON city.id=detail.id_city";
$statement = $connect->prepare($sql);
$statement->execute();
$book_tour = $statement->fetchAll();
$status = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/travel.css">
  <link rel="stylesheet" href="./style/home.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
</head>

<body>

  <header>
    <div class=" flex justify-between items-center max-w-7xl mx-auto">
      <div class="">
        <img src="./image/logo.png" alt="" class="w-[100px]" />
      </div>
      <div class="">
        <ul class=" flex ">
          <li class="p-5 text-[20px] hover:underline hover:text-red-300 "><a href="">HOME</a></li>
          <li class="p-5 text-[20px]  hover:underline hover:text-red-300"><a href="">TRAVEL</a></li>
          <li class="p-5 text-[20px] hover:underline hover:text-red-300"><a href="">BLOG</a></li>
          <li class="p-5 text-[20px] hover:underline hover:text-red-300"><a href="">CONTACT</a></li>
        </ul>
      </div>
      <div class="w-[250px]">
        <form action="">
          <select name="" id="" class="border-2 p-3 rounded-l-2xl w-[200px]   ">
            <option value="1">Hà Nội</option>
            <option value="2">Thành phố HCM</option>
          </select>
          <button class="border-2 p-3 rounded-r-2xl text-white font-bold bg-black hover:bg-red-500"><i class="fas fa-search"></i></button>
        </form>
      </div>
      <div class="flex items-center">
        <button><a href="../model/logout.php" class="font-bold text-pink-500">Đăng xuất</a></button>
        <i class="fas fa-user ml-[5px]"></i>
      </div>
    </div>
  </header>
  <div class="max-w-7xl mx-auto">
    <h1>Du lịch giá rẻ</h1>
    <div class="grid grid-cols-3 gap-8">
      <?php foreach ($book_tour as $key =>  $value) :
        if ($value['number'] > 0) {
          $status = "Còn vé";
        } else {
          $status = "Hết vé";
        } ?>
        <div>
          <form action="dat_tour.php?id=<?= $value['id'] ?>" method="POST" enctype="multipart/form-data">
            <img src="<?= './image/' . $value['image'] ?>" alt="">
            <h2><?= $value['time_start'] ?></h2>
            <h2><?= $value['name'] ?></h2>
            <h2>Mã Tour:<?= $value['tour_id'] ?></h2>
            <h2>Địa điểm xuất phát:<?= $value['name_city'] ?></h2>
            <h2>Giá: <?= $value['price'] ?>$</h2>
            <input name="number" value="<?= "Số vé: " . $value['number'] ?>"></input>
            <input type="text" name="status" value="<?= $status ?>" disabled>
            <br>
            <button>Xem chi tiết</button>
          </form>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <footer class="footer">
    <div class="row">
      <div class="footer-col">
        <h4>Thông Tin Liên Hệ</h4>
        <ul>
          <li>
            <a href="#"><i class="fas fa-home"></i> Công ty du lịch VIVU</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-map-marker-alt"></i> Số 1 Trịnh Văn Bô, Phương
              Canh, Nam Từ Liêm, Hà Nội</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-phone-alt"></i> Hotline: 0889915299</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-envelope"></i> damvnph24792@fpt.edu.vn</a>
          </li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Thông Tin Cần Biết</h4>
        <ul>
          <li><a href="#">Điều kiện điều khoản</a></li>
          <li><a href="#">Phương thức thanh toán</a></li>
          <li><a href="#">Bảo mật thông tin khách hàng</a></li>
          <li><a href="#">Chính sách quy định</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Hỗ Trợ Tư Vấn</h4>
        <ul>
          <li><a href="#"> Cần tư vấn gọi ngay</a></li>
          <li><a href="#"> Tiến Bịp: 09988776655</a></li>
          <li><a href="#"> Phúc Du: 09988776655</a></li>
        </ul>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fas fa-yin-yang"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
        </div>
      </div>
      <div class="footer-col address">
        <h4>Bản đồ vị trí</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8838218991286!2d105.74678875050316!3d21.037334085924957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134558d9a8a3735%3A0xd3ee0c5775a27365!2zMSBQLiBUcuG7i25oIFbEg24gQsO0LCBYdcOibiBQaMawxqFuZywgTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1667584047461!5m2!1svi!2s" width="300" height="220" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </footer>
</body>

</html>