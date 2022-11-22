<?php
require_once('../model/db.php');
$id = $_GET['id'];
$sql = "SELECT products.id,price,products.name,content,image,time_start,book_tour.id as tour_id,city.name as name_city FROM book_tour JOIN products ON book_tour.id_tour=products.id JOIN detail ON detail.id_products=products.id JOIN city ON city.id=detail.id_city WHERE products.id= $id";
$statement = $connect->prepare($sql);
$statement->execute();
$value = $statement->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style/home.css">
</head>

<body>

  <head>
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
  </head>
  <div class="max-w-6xl mx-auto">

    <marquee behavior="#" direction="left">
      <p class="text-2xl font-bold text-red-500 mt-[30px] mb-[30px">
        <?= $value['name'] ?>
      </p>
    </marquee>

    <div class="grid grid-cols-2 gap-8">
      <div>
        <img src="<?= './image/' . $value['image'] ?>" alt="" class="w-[600px] mr-[30px] rounded-2xl">
        <div class="border-2 rounded-2xl  mt-[20px] bg-pink-300">
          <h1 class="text-center text-[20px] font-bold p-2">Thông tin Tour</h1>
          <hr>
          <div class="bg-pink-200 rounded-2xl p-2 font-bold mt-[10px] mb-[10px]">
            <h2><?= $value['name'] ?></h2>
          </div>
          <hr>
          <p class="p-3 h-[100%]"><?= $value['content'] ?></p>
        </div>
        <div class="border-2  rounded-2xl  mt-[20px]">
          <h2 class="text-center text-[20px] border-b-2 bg-blue-300 rounded-2xl p-2 text-white font-bold">Liên hệ tư vấn viên</h2>
          <p class="p-1 font-bold">Mọi thắc của Quý khách </p>
          <p class="p-1">Vui lòng gọi: <a href="" class="text-[20px] font-bold text-red-500 hover:text-[aqua]">Bùi Duy Dũng(+84 968630037)</a></p>
          <p class="p-1">Hỗ trợ: 25/24</p>
        </div>
      </div>
      <div>
        <div class="border-2 p-5 bg-neutral-700 rounded-2xl w-[600px]">
          <form action="">
            <h2 class="text-[30px] font-bold text-orange-500 mb-[20px]">Giá tour: <input type="text" id="price" class="bg-neutral-700" onchange="show()" value="<?= $value['price'] . '$/người' ?>" disabled></h2>
            <h2 class="inline-block text-white font-bold mb-[20px]">Người lớn</h2>
            <select name="nguoilon" id="nguoilon" onchange="show()" class="rounded-2xl w-[160px] p-2">
            <option value="0">--Please choose an option--</option>
              <option value="1">1 người</option>
              <option value="2">2 người</option>
              <option value="3">3 người</option>
              <option value="4">4 người</option>
            </select>
            <h2 class="inline-block text-white font-bold mb-[20px]">Trẻ em</h2>
            <select name="treem" id="treem" onchange="show()" class="rounded-2xl w-[160px] p-2">
            <option value="0">--Please choose an option--</option>
              <option value="1">1 người</option>
              <option value="2">2 người</option>
              <option value="3">3 người</option>
              <option value="4">4 người</option>
            </select>
            <br>
            <h2 class="inline-block text-white font-bold mb-[20px]">Ngày đặt</h2>
            <input type="date" name="date_dat_tour" id="" class="p-2 rounded-2xl text-center bg-white">
            <br>
            <h2 class="inline-block text-white font-bold mb-[20px]">Tổng tiền</h2>
            <span class="p-2 rounded-2xl text-center bg-white"><input type="text" id="sum">VNĐ</span>
            <br>
            <button class="border-2 rounded-2xl p-3 w-[200px] mx-auto block text-white font-bold hover:bg-[aqua]"><a href="index.php">Đặt tour</a></button>
          </form>
        </div>

        <div class="border-2  rounded-2xl w-[600px] mt-[50px]">
          <h2 class="text-center text-[20px] border-b-2 bg-blue-300 rounded-2xl p-2 text-white font-bold">Dịch vụ kèm theo</h2>
          <div class="flex justify-space-between p-3">
            <div>
              <i class="fas fa-user-shield"><a href="" class="ml-[5px]">Bảo hiểm</a></i>
            </div>
            <div>
              <i class="fas fa-utensils"><a href="" class="ml-[5px]">Bữa ăn</a></i>
            </div>
            <div>
              <i class="fas fa-users"><a href="" class="ml-[5px]">Hướng dẫn viên</a></i>
            </div>
          </div>
        </div>
        <div class="border-2 rounded-2xl mt-[30px] p-3">
          <h2 class="text-center font-bold text-[20px]">Ghi chú</h2>
          <hr>
          <h2 class="font-bold">Giá vé trẻ em</h2>
          <p>- Trẻ em dưới 05 tuổi: miễn phí giá tour. Cha, Mẹ hoặc người thân đi kèm tự lo các chi phí ăn, ngủ, tham quan (nếu có) cho bé. Hai người lớn chỉ kèm 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 trở lên phải mua ½ vé tour.</p>
          <p>- Trẻ em từ 05 – dưới 10 tuổi: tính 75% giá tour. Bao gồm các dịch vụ ăn uống, ghế ngồi trên xe và ngủ chung với gia đình. </p>
          <p>- Từ 10 tuổi trở lên: 100% giá tour và tiêu chuẩn như người lớn.</p>
          <h2 class="font-bold">Quy định thanh toán, hủy vé</h2>
          <p>- Ngay sau khi đặt cọc hoặc thanh toán hoặc trước 15 ngày: phí hủy 30% tiền tour</p>
          <p>- Hủy 10 ngày trước ngày khởi hành: phí hủy 50% tiền tour </p>
          <p>- Hủy 07 ngày trước ngày khởi hành: phí hủy 70% tiền tour </p>
          <p>- Hủy 05 ngày trước ngày khởi hành: phí hủy 100% tiền tour </p>
        </div>
      </div>
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
<script src="./js/home.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>

      var a =  document.getElementById('nguoilon').value;
      var b = document.getElementById('treem').value;
      var c = document.getElementById('price').value
      function show() {
        var sum = document.getElementById('sum')
            sum.value = parseInt(nguoilon.value) * parseInt(price.value)*23000 + parseInt(treem.value) * parseInt(price.value)*75/100*23000;
    }
</script>