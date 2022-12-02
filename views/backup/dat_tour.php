<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TRAVELER - Free Travel Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="template_client/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="template_client/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="template_client/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="template_client/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <?php include_once './views/layout/client_topbar.php'; ?>

  <!-- Topbar End -->


  <!-- Navbar Start -->
  <?php include_once './views/layout/client_navbar.php'; ?>

  <!-- Navbar End -->


  <!-- Header Start -->
  <div class="container-fluid page-header">
    <div class="container">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-4 text-white text-uppercase">About</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
          <i class="fa fa-angle-double-right pt-1 px-3"></i>
          <p class="m-0 text-uppercase">About</p>
        </div>
      </div>
    </div>
  </div>
  <div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-2 gap-8">
      <div>
        <img src="<?= 'views/backup/image/' . $dat_tour['image'] ?>" alt="" class="w-[600px] mr-[30px] rounded-2xl">
        <div class="border-2 rounded-2xl  mt-[20px] bg-pink-300">
          <h1 class="text-center text-[20px] font-bold p-2">Thông tin Tour</h1>
          <hr>
          <div class="bg-pink-200 rounded-2xl p-2 font-bold mt-[10px] mb-[10px]">
            <h2><?= $dat_tour['name'] ?></h2>
          </div>
          <hr>
          <p class="p-3 h-[100%]"><?= $dat_tour['content'] ?></p>
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
          <?php if (isset($_SESSION['user']['username'])) { ?>
            <form action="index.php?url=tao_booking" method="POST">
              <input type="hidden" name="name" value="<?= $dat_tour['name'] ?>">

              <h2 class="text-[30px] font-bold text-orange-500 mb-[20px]">Giá tour: <input type="text" id="price" name="" class="bg-neutral-700" onchange="show()" value="<?= $dat_tour['price'] ?>" disabled></h2>
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
              <span class="p-2 rounded-2xl text-center bg-white"><input type="text" id="sum" name="" disabled>$</span>
              <br>
              <button class="border-2 rounded-2xl p-3 w-[200px] mx-auto block text-white font-bold hover:bg-[aqua]"><a href="">Đặt tour</a></button>
              <input type="hidden" name="guide" value="<?= $dat_tour['guide_name'] ?>">
              <input type="hidden" name="coach" value="<?= $dat_tour['name_coach'] ?>">
              <input type="hidden" name="hotel" value="<?= $dat_tour['name_hotel'] ?>">
              <input type="hidden" name="cate" value="<?= $dat_tour['tendm'] ?>">
              <input type="hidden" name="price" value="<?= $dat_tour['price'] ?>">
              <input type="hidden" name="id_client" value=" <?= $_SESSION['user']['name'] ?>">
            </form>
            <button class="border-2 rounded-2xl p-3 w-[200px] mx-auto block text-white font-bold hover:bg-[aqua] mt-[10px]"><a href="index.php?url=travel">Hủy tour</a></button>
          <?php } else { ?>
            <button class="border-2 rounded-2xl p-3 w-[200px] mx-auto block text-white font-bold hover:bg-[aqua]"><a href="index.php?url=login">Đăng nhập</a></button>
          <?php } ?>
        </div>

        <div class="border-2  rounded-2xl w-[600px] mt-[50px]">
          <h2 class="text-center text-[20px] border-b-2 bg-blue-300 rounded-2xl p-2 text-white font-bold">Dịch vụ kèm theo</h2>
          <div class="flex justify-between p-3 text-center">
            <div>
              <i class="fas fa-hotel"><a href="" class="ml-[5px]">Khách sạn</a></i>
            </div>
            <div>
              <i class="fas fa-car"><a href="" class="ml-[5px]">Phương tiện</a></i>
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
  <?php include_once './views/layout/client_footer.php'; ?>


  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="template_client/lib/easing/easing.min.js"></script>
  <script src="template_client/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="template_client/lib/tempusdominus/js/moment.min.js"></script>
  <script src="template_client/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="template_client/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="template_client/mail/jqBootstrapValidation.min.js"></script>
  <script src="template_client/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="template_client/js/main.js"></script>
</body>

</html>
<script>
  var a = document.getElementById('nguoilon').value;
  var b = document.getElementById('treem').value;
  var c = document.getElementById('price').value

  function show() {
    var sum = document.getElementById('sum')
    sum.value = parseInt(nguoilon.value) * parseInt(price.value) + parseInt(treem.value) * parseInt(price.value) * 75 / 100;
  }
</script>