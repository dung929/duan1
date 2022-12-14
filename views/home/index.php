<!DOCTYPE html>
<html lang="en">

<?php include_once './views/layout/client_head.php'; ?>


<body>
    <!-- Topbar Start -->
    <?php include_once './views/layout/client_topbar.php'; ?>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">VIVU</span>TOUR</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php?url=home" class="nav-item nav-link active">TRANG CHỦ</a>
                        <a href="index.php?url=about" class="nav-item nav-link">GIỚI THIỆU</a>
                        <a href="index.php?url=list_products" class="nav-item nav-link">DU LỊCH</a>
                        <a href="index.php?url=blog" class="nav-item nav-link">TIN TỨC</a>
                        <a href="index.php?url=contact" class="nav-item nav-link">LIÊN HỆ</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="template_client/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Hãy cùng nhau khám phá thế giới</h1>
                            <a href="index.php?url=list_products" class="btn btn-primary py-md-3 px-md-5 mt-2">Đặt vé</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="template_client/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Khám Phá Những Địa Điểm Tuyệt Vời Với Chúng Tôi</h1>
                            <a href="index.php?url=list_products" class="btn btn-primary py-md-3 px-md-5 mt-2">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


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
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">Chúng tôi cung cấp các gói tour tốt nhất trong ngân sách của bạn</h1>
                        <p>Mùa đông qua đi mùa xuân lại đến, người người nhà nhà lại háo hức chào đón năm mới bình an, ấm áp. Bạn có muốn cùng gia đình, người thân du xuân tại một vùng đất mới mà bạn chưa bao giờ đặt chân đến hoặc là nơi mà bạn rất là yêu thích?</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="template_client/img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="template_client/img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="index.php?url=list_products" class="btn btn-primary mt-1">Đặt ngay</a>
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
                            <p class="m-0"> được hưởng mức giá tiết kiệm lên đến 50%. Với tiêu chí “giảm giá nhưng không giảm chất”</p>
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
                            <p class="m-0"> chất lượng dịch vụ từ việc ăn uống, nghỉ ngơi, di chuyển …đều được công ty chăm chút cẩn thận và chu đáo.</p>
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
                            <p class="m-0">dịch vụ bảo hiểm, an toàn đồ đặc, nhân thân</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Khám Phá</h6>
                <h1>Khu Vực</h1>
            </div>
            <div class="row">
                <?php foreach ($categories as $key => $value) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="destination-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="<?= $value['img'] ?>" alt="">
                            <a class="destination-overlay text-white text-decoration-none" href="index.php?url=list_products&category=<?= $value['id'] ?>">
                                <h5 class="text-white"><?= $value['name'] ?></h5>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tham quan & dịch vụ du lịch</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-user mx-auto mb-4"></i>
                        <h5 class="mb-2">Hướng dẫn viên du lịch</h5>
                        <p class="m-0">Một hướng dẫn viên du lịch chuyên nghiệp ngoài việc dẫn tour, ngoại ngữ giỏi, giao tiếp tốt</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-bus-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Đặt chỗ</h5>
                        <p class="m-0">Qúy khách có nhiều sự lựa chọn đa dạng, hấp dẫn có thể đáp ứng mọi nhu cầu của đa dạng</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Đặt phòng khách sạn</h5>
                        <p class="m-0">Với nhiều sự lựa chọn khách sạn, chắc chắn có thể đáp ứng tốt được cho khách hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Packages Start -->
    <div class="container-fluid ">
        <div class="container pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">TOUR</h6>
                <h1>TOUR NỔI BẬT</h1>
            </div>
            <div class="row">
                <?php foreach ($products as $key => $value) :
                    if ($value['number'] > 0) { ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="package-item bg-white mb-2">
                                <img class="img-fluid" src="<?= $value['image'] ?>" alt="">
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?= $value['schedule'] ?></small>
                                        <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?= $value['days'] ?> Ngày</small>
                                    </div>
                                    <a class="h5 text-decoration-none" href="index.php?url=detail&id=<?= $value['id'] ?>"><?= $value['name'] ?></a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0"><a href="index.php?url=detail&id=<?= $value['id'] ?>">Đặt tour</a></h6>
                                            <h5 class="m-0"><?= $value['price'] ?> VNĐ</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="package-item bg-white mb-2">
                                <img class="img-fluid" src="<?= $value['image'] ?>" alt="">
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?= $value['schedule'] ?></small>
                                        <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?= $value['days'] ?> Ngày</small>
                                    </div>
                                    <a class="h5 text-decoration-none"><?= $value['name'] ?></a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0">Hết vé</h6>
                                            <h5 class="m-0"><?= $value['price'] ?> VNĐ</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- Packages End -->


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


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>Khách hàng của chúng tôi nói gì</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <?php foreach($comment as $key => $value): ?>
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="template_client/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Dịch vụ rất là tốt, mình khá hài lòng cho chuyến đi này
                        </p>
                        <h5 class="text-truncate">Phúc</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <?php endforeach ?>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="template_client/img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Đặt tour rất là nhanh gọn goodjob
                        </p>
                        <h5 class="text-truncate">Tiến</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="template_client/img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Mình rất thích hướng dẫn viên cho chuyến du lịch lần này
                        </p>
                        <h5 class="text-truncate">Đam</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="template_client/img/testimonial-4.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Lần tới mình sẽ đặt tiếp
                        </p>
                        <h5 class="text-truncate">Hiếu</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
                <h1>TIN TỨC MỚI NHẤT </h1>
            </div>
            <div class="row pb-3">
                <?php foreach ($blog2 as $key => $value) : ?>
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= $value['image']  ?>" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                            <div class="bg-white p-4">
                                <div class="d-flex mb-2">
                                    <a class="text-primary text-uppercase text-decoration-none" href=""><?= $value['name']  ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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