<!DOCTYPE html>
<html lang="en">

<?php include_once './views/layout/client_head.php'; ?>


<body>
    <!-- Topbar Start -->
    <?php include_once './views/layout/client_topbar.php'; ?>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include_once './views/layout/client_navbar.php'; ?>
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
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">đặt vé</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="template_client/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Khám Phá Những Địa Điểm Tuyệt Vời với Chúng Tôi</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Đặt ngay</a>
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
    <?php include_once './views/layout/client_booking.php'; ?>

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
                            <img class="img-fluid" src="<?= 'template_client/img/' . $value['img'] ?>" alt="">
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
                <h1>tham quan & dịch vụ du lịch</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Hướng dẫn viên du lịch</h5>
                        <p class="m-0"> một hướng dẫn viên du lịch chuyên nghiệp ngoài việc dẫn tour, ngoại ngữ giỏi, giao tiếp tốt</p>
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
        <div class="container  pb-3">
            <div class="row">
                <?php foreach ($products as $key => $value) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="<?='template_client/img/'. $value['image'] ?>" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?= $value['schedule'] ?></small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?= $value['days'] ?>  Ngày</small>
                                </div>
                                <a class="h5 text-decoration-none" href="index.php?url=detail&id=<?= $value['id']?>"><?= $value['name'] ?></a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                       <h5 class="m-0"><?= $value['price'] ?>  VNĐ</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- Packages End -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">ƯU ĐÃI LỚN</h6>
                        <h1 class="text-white"><span class="text-primary">GIẢM GIÁ 30%</span>cho tuần trăng mật</h1>
                    </div>
                    <p class="text-white">Săn giá rẻ chùm tour khuyến mãi, du lịch hấp dẫn hằng tuần. Tour giá sốc, giá chót hằng tuần, tour giảm giá đặc biệt hằng tháng tại TRAVELER</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>mua tour nhận tour miễn phí</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>chùm tour giảm giá đến 50%</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>đi mapileng bắt vợ</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">ĐĂNG NHẬP</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Hướng dẫn du lịch của chúng tôi</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="template_client/img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Adam</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="template_client/img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Happy</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="template_client/img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">lee go</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="template_client/img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">hwoang hee</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
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
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="template_client/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">dịch vụ rất là tốt, mình khá hài lòng cho chuyến đi này
                        </p>
                        <h5 class="text-truncate">phúc</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="template_client/img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">đặt tour rất là nhanh gọn goodjob
                        </p>
                        <h5 class="text-truncate">tiến</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="template_client/img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">mình rất thích hướng dẫn viên cho chuyến du lịch lần này
                        </p>
                        <h5 class="text-truncate">đam</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="template_client/img/testimonial-4.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">lần tới mình sẽ đặt tiếp
                        </p>
                        <h5 class="text-truncate">hiếu</h5>
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
                <?php foreach ($blog as $key => $value) : ?>
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">   
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= 'template_client/img/' . $value['image']  ?>" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                            <div class="bg-white p-4">
                                <div class="d-flex mb-2">
                                    <a class="text-primary text-uppercase text-decoration-none" href=""><?= $value['name']  ?></a>
                                </div>
                                <a class="h5 m-0 text-decoration-none" href=""><?= $value['content_short']  ?></a>
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