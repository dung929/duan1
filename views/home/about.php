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
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php?url=home" class="nav-item nav-link ">TRANG CHỦ</a>
                        <a href="index.php?url=about" class="nav-item nav-link active">GIỚI THIỆU</a>
                        <a href="index.php?url=list_products" class="nav-item nav-link">DU LỊCH</a>
                        <a href="index.php?url=blog" class="nav-item nav-link">TIN TỨC</a>
                        <a href="index.php?url=contact" class="nav-item nav-link">LIÊN HỆ</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navbar End -->
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Giới thiệu</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Trang chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Giới thiệu</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->

    <!-- Booking End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="template_client/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">DU LỊCH</h6>
                        <h1 class="mb-3">Chúng tôi cung cấp các gói tour tốt nhất cho bạn</h1>
                        <p>Du lịch là ngành không khói, ít gây ô nhiễm môi trường, giúp khách du lịch vừa được nghỉ ngơi, giảm stress vừa biết thêm nhiều điều hay mới lạ mà khách chưa biết. Du lịch còn góp phần phát triển kinh tế của đất nước, tạo việc làm và tăng thu nhập cho người lao động</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="template_client/img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="template_client/img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="index.php?url=list_products" class="btn btn-primary mt-1">Đặt Tuor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Giá cả cạnh tranh</h5>
                            <p class="m-0">Chúng tôi cung cấp cho bạn những tuor với giá cả hợp lý nhất hiện nay</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Dịch vụ tốt nhất</h5>
                            <p class="m-0">Chúng tôi cam kết đem đến cho các bạn những dịch vụ tốt và chất lượng nhất</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Bảo hiểm toàn cầu</h5>
                            <p class="m-0">Chúng tôi cam kết luôn đặt sự an toàn của khách hàng lên hàng đầu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Registration Start -->
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">HƯỚNG DẪN</h6>
                <h1>Hướng dẫn du lịch của chúng tôi</h1>
            </div>
            <div class="row">
                <?php foreach ($guide as $key => $value) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?= $value['image'] ?>" alt="">

                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate"><?= $value['name'] ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
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