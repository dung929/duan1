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
    <style>
        .containern {
            max-width: 1300px;
            margin: 0 auto;
        }

        .name_detail {
            margin-bottom: 50px;
        }

        .flex {
            display: grid;
            grid-template-columns: 600px auto;
            grid-gap: 30px;
            margin-top: 50px;
        }

        .detail {
            border: 2px solid pink;
            padding: 15px;
            margin-bottom: 30px;
            border-radius: 8px;
        }
        .img_detail img{
            display: block;
            width: 600px;
        }

        .detail h2 {
            font-size: 25px;
        }

        h2.detail_name {
            font-size: 20px;
            font-weight: 700;
            color: red;
        }

        .submit {
            text-align: center;
            border: 2px solid pink;
            padding: 15px;
            border-radius: 8px;
        }

        .submit h2 {
            font-size: 25px;
            font-weight: 700;
            color: red;
            margin-bottom: 20px;
        }

        .submit button {
            width: 100%;
            border-radius: 8px;
            background-color: violet;
            padding: 5px;
            font-size: 25px;
            color: white;
            font-weight: 700;
        }

        .submit button:hover {
            background-color: aqua;
        }

        .p {
            margin-top: 30px;
        }

        .p h2 {
            font-size: 20px;
        }

        .chuy {
            color: red;
        }

        .price_detail {
            text-align: center;

        }

        .clienttt {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .clienttt input {
            width: 80%;
            border-radius: 8px;
            padding: 5px;
            margin-bottom: 10px;
        }

        input {
            border-radius: 8px;
            padding: 5px;
        }

        .soluong form {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            margin-top: 20px;
        }

        .soluong form input {
            border-radius: 8px;
            padding: 5px;
        }

        .pay {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .tong {
            text-align: center;
        }

        .tong input {
            font-size: 25px;
            color: red;
            display: inline-block;
            border: none;
        }

        .submit_tour {
            text-align: center;
            margin-top: 50px;
        }

        .submit_tour button {
            background-color: black;
            color: white;
            font-weight: 700;
            padding: 10px;
            border-radius: 8px;
            width: 200px;
        }
    </style>
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
                <h3 class="display-4 text-white text-uppercase">Tours</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Detail</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Tours</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <div class="containern">
        <div class="flex">
            <div>
                <div class="img_detail">
                    <img src="<?= $details['image'] ?>" alt="">
                </div>
            </div>
            <div>
                <div class="detail">
                    <h2 class="detail_name"><?= $details['name'] ?></h2>
                    <hr>
                    <h4>M?? tour:<?= ' ' . $details['id'] ?></h4>
                    <hr>
                    <h4>S??? l?????ng v??: <?= $details['number'] ?><input type="hidden" value="<?= $details['number'] ?>" id="number"></h4>
                    <hr>
                    <h4>Gi??: <?= $details['price'] . '  VN??' ?></h4>
                    <hr>
                    <h4>Th???i gian:<?= '  ' . $details['days'] . ' ng??y' ?> <?= ' ' . $details['days'] . '  ????m' ?></h3>
                        <hr>
                        <h4>Xu???t ph??t: <?= $details['name_city'] ?></h4>
                </div>
            </div>
        </div>
        <p class="chuy">*C??c kho???n ph?? ph??t sinh (n???u c??) nh??: ph??? thu d??nh cho kh??ch n?????c ngo??i, vi???t ki???u; ph??? thu ph??ng ????n; ph??? thu ch??nh l???ch gi?? tour??? Nh??n vi??n Du L???ch Vi???t s??? g???i ??i???n tho???i t?? v???n cho qu?? kh??ch ngay sau khi c?? phi???u x??c nh???n booking. (Trong gi??? h??nh ch??nh)
            Tr?????ng h???p qu?? kh??ch kh??ng ?????ng ?? c??c kho???n ph??t sinh, phi???u x??c nh???n booking c???a qu?? kh??ch s??? kh??ng c?? hi???u l???c.</p>
        <hr>
        <h3 class="price_detail">B???ng gi?? tour chi ti???t</h3>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Lo???i gi??/????? tu???i</th>
                        <th>Ng?????i l???n (Tr??n 11 tu???i)</th>
                        <th>Tr??? em(5 - 11 tu???i)</th>
                        <th>Tr??? nh???(2 - 5 tu???i</th>
                        <th>S?? sinh( < 2 tu???i)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gi??</td>
                        <td><?= $dat_tour['price'] . '  VN??' ?></td>
                        <td><?= $dat_tour['price'] * 45 / 100 . '  VN??' ?></td>
                        <td><?= $dat_tour['price'] * 25 / 100 . '  VN??' ?></td>
                        <td><?= $dat_tour['price'] * 5 / 100 . '  VN??' ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 class="price_detail">Th??ng tin li??n h???</h3>
        <div class="">
            <div class="client">
                <div class="clienttt">
                    <div>
                        <h4>H??? t??n*</h4>
                        <input type="text" value="<?= $_SESSION['user']['name'] ?>" disabled>
                    </div>
                    <div>
                        <h4>Email*</h4>
                        <input type="text" value="<?= $_SESSION['user']['email'] ?>" disabled>
                    </div>
                    <div>
                        <h4>S??? ??i???n tho???i*</h4>
                        <input type="text" value="<?= $_SESSION['user']['phone'] ?>" disabled>
                    </div>
                </div>
                <div>
                    <h4>?????a ch???*</h4>
                    <input type="text" value="<?= $_SESSION['user']['address'] ?>" disabled>
                </div>
            </div>
            <div class="soluong">
                <form action="index.php?url=tao_booking" method="POST">
                    <div>
                        <h4>Ng?????i l???n:</h4>
                        <input type="number" value="1" min=1 onchange="show()" id="nguoilon" name="nguoilon">
                    </div>
                    <div>
                        <h4>Tr??? em(5 - 11 tu???i):</h4>
                        <input type="number" value="0" onchange="show()" id="treem1" name="treem1" min=0>
                    </div>
                    <div>
                        <h4>Tr??? nh???(2 - 5 tu???i):</h4>
                        <input type="number" value="0" onchange="show()" id="treem2" name="treem2" min=0>
                    </div>
                    <div>
                        <h4>S?? sinh(nh??? h??n 2 tu???i):</h4>
                        <input type="number" value="0" onchange="show()" id="treem3" name="treem3" min=0>
                    </div>
                    <div>
                        <input type="hidden" id="price" name="" class="bg-neutral-700" onchange="show()" value="<?= $dat_tour['price'] ?>" disabled>
                        <input type="hidden" name="guide" value="<?= $dat_tour['guide_name'] ?>">
                        <input type="hidden" name="coach" value="<?= $dat_tour['name_coach'] ?>">
                        <input type="hidden" name="hotel" value="<?= $dat_tour['name_hotel'] ?>">
                        <input type="hidden" name="cate" value="<?= $dat_tour['tendm'] ?>">
                        <input type="hidden" name="price" value="<?= $dat_tour['price'] ?>">
                        <input type="hidden" name="name" value="<?= $dat_tour['name'] ?>">
                        <input type="hidden" name="id" value="<?= $dat_tour['id'] ?>">
                        <input type="hidden" name="name_client" value=" <?= $_SESSION['user']['name'] ?>">
                        <input type="hidden" name="id_client" value=" <?= $_SESSION['user']['id'] ?>">
                    </div>
            </div>
        </div>
        <hr>
        <h3>M?? gi???m gi??</h3>
        <div>
            <input type="text" placeholder="32589HJSD54" onchange="show()" id="sale" name="ma_sale">
            <span id="errors" style="color:red;"></span>
            <p>(*) Sau khi nh???p m?? voucher, m?? s??? c?? hi???u l???c ngay l???p t???c!.</p>
        </div>
        <hr>
        <div class="tong">
            <span>T???ng gi?? tr???:</span> <input type="text" id="sum" value="<?= $dat_tour['price'] ?>" name="sum" disabled>VN??
        </div>
        <hr>
        <h2>Ph????ng th???c thanh to??n</h2>
        <div class="pay">
            <div>
                <input type="radio" name="check" checked>Thanh to??n t???i qu???y Du L???ch Vi???t
            </div>
            <div class="submit_tour">
                <button>Ho??n th??nh</button>
            </div>
            </form>
        </div>
        <!-- Book -->
        <?php include_once './views/layout/client_footer.php'; ?>

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
    var b = document.getElementById('treem1').value;
    var d = document.getElementById('treem2').value;
    var e = document.getElementById('treem2').value;
    var c = document.getElementById('price').value;
    var f = document.getElementById('sale').value;
    var err = document.getElementById('errors').value;
    var l = document.getElementById('number').value;

    function show() {
        var sum = document.getElementById('sum');
        if ((sale.value == '123') && ((parseInt(nguoilon.value) * parseInt(price.value) + parseInt(treem1.value) * parseInt(price.value) * 45 / 100 + parseInt(treem2.value) * parseInt(price.value) * 25 / 100 + parseInt(treem3.value) * parseInt(price.value) * 5 / 100 - 500000) < 0)) {
            nguoilon.value = '1';
            treem1.value = '0';
            treem2.value = '0';
            treem3.value = '0';
            alert('Vui l??ng nh???p s??? ng?????i l???n h??n 0');
        } else if (sale.value == '123') {
            errors.innerText = '*S??? d???ng m?? gi???m gi?? th??nh c??ng!-B???n ???????c gi???m 500000 VN??';
            sum.value = parseInt(nguoilon.value) * parseInt(price.value) + parseInt(treem1.value) * parseInt(price.value) * 45 / 100 + parseInt(treem2.value) * parseInt(price.value) * 25 / 100 + parseInt(treem3.value) * parseInt(price.value) * 5 / 100 - 500000;
        } else if ((sale.value == 'abc') && ((parseInt(nguoilon.value) * parseInt(price.value) + parseInt(treem1.value) * parseInt(price.value) * 45 / 100 + parseInt(treem2.value) * parseInt(price.value) * 25 / 100 + parseInt(treem3.value) * parseInt(price.value) * 5 / 100 - 100000) < 0)) {
            nguoilon.value = '1';
            treem1.value = '0';
            treem2.value = '0';
            treem3.value = '0';
            alert('Vui l??ng nh???p s??? ng?????i l???n h??n 0');
        } else if (sale.value == 'abc') {
            errors.innerText = '*S??? d???ng m?? gi???m gi?? th??nh c??ng!-B???n ???????c gi???m 1000000 VN??';
            sum.value = parseInt(nguoilon.value) * parseInt(price.value) + parseInt(treem1.value) * parseInt(price.value) * 45 / 100 + parseInt(treem2.value) * parseInt(price.value) * 25 / 100 + parseInt(treem3.value) * parseInt(price.value) * 5 / 100 - 1000000;
        } else if ((parseInt(nguoilon.value) + parseInt(treem1.value) + parseInt(treem2.value) + parseInt(treem3.value)) > parseInt(number.value)) {
            nguoilon.value = '1';
            treem1.value = '0';
            treem2.value = '0';
            treem3.value = '0';
            alert('S??? v?? kh??ng ?????! Vui l??ng ch???n l???i s??? ng?????i!');
        } else if (parseInt(nguoilon.value) < 0 || parseInt(treem1.value) < 0 || parseInt(treem2.value) < 0 || parseInt(treem3.value) < 0) {
            nguoilon.value = '1';
            treem1.value = '0';
            treem2.value = '0';
            treem3.value = '0';
            alert('Vui l??ng nh???p s??? ng?????i l???n h??n 0');
        } else if ((parseInt(nguoilon.value) + parseInt(treem1.value) + parseInt(treem2.value) + parseInt(treem3.value)) == 0) {
            nguoilon.value = '1';
            treem1.value = '0';
            treem2.value = '0';
            treem3.value = '0';
            alert('Vui l??ng nh???p s??? ng?????i l???n h??n 0');
        } else if ((parseInt(nguoilon.value) * parseInt(price.value) + parseInt(treem1.value) * parseInt(price.value) * 45 / 100 + parseInt(treem2.value) * parseInt(price.value) * 25 / 100 + parseInt(treem3.value) * parseInt(price.value) * 5 / 100) < 0) {
            nguoilon.value = '1';
            treem1.value = '0';
            treem2.value = '0';
            treem3.value = '0';
            alert('Vui l??ng nh???p s??? ng?????i l???n h??n 0');
        } else {
            sum.value = parseInt(nguoilon.value) * parseInt(price.value) + parseInt(treem1.value) * parseInt(price.value) * 45 / 100 + parseInt(treem2.value) * parseInt(price.value) * 25 / 100 + parseInt(treem3.value) * parseInt(price.value) * 5 / 100;
            errors.innerText = '*M?? kh??ng ????ng';
        }
    }
</script>