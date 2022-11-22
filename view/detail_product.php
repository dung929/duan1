<?php
require_once('../model/db.php');
session_start();
$sql = 'SELECT * FROM products ';
$statement = $connect->prepare($sql);
$statement->execute();
$subjects = $statement->fetchAll();
?>
<div>
  <!-- danh mục -->
  <h1 style="font-weight:bold; color:burlywood;">
    Miền Bắc
  </h1>
  <!-- grid 2 cột -->
  <div class="column">
    <div class="grid1">
      <!-- <input type="file" value=""> -->
      <img src="bg.jpg" alt="" width="600px" height="400px">
    </div>
    <div class="grid2">
      <!--name  -->
      <h1 style="margin-bottom: 10px;font-weight:bold;">Hà Giang</h1>
      <hr>
      <!-- price/time -->
      <h1 style="margin-bottom: 10px; color: brown; ">1.000.000đ/2 ngày</h1>
      <hr>
      <!-- content -->
      <p style="margin-bottom: 50px; ">Hà giang là một nơi có nhiều cảnh đẹp</p>
      <button>Đặt Tour</button>
    </div>
  </div>
  <div class="many_img">
    <img src="image/1.jpg" alt="" width="50px" height="100px"> <img src="image/1.jpg" alt="" width="50px" height="100px"> <img src="image/1.jpg" alt="" width="50px" height="100px">
  </div>
</div>
</div>


<style>
  .column {
    display: flex;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 50px;
  }

  .grid2 {
    padding-right: 150px;
  }

  button {
    justify-items: center;
  }
</style>