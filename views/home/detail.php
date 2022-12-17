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
                        <a href="index.php?url=home" class="nav-item nav-link">TRANG CHỦ</a>
                        <a href="index.php?url=about" class="nav-item nav-link">GIỚI THIỆU</a>
                        <a href="index.php?url=list_products" class="nav-item nav-link active">DU LỊCH</a>
                        <a href="index.php?url=blog" class="nav-item nav-link">TIN TỨC</a>
                        <a href="index.php?url=contact" class="nav-item nav-link">LIÊN HỆ</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Booking Start -->
    <div class="container">
        <form action="index.php?url=dat_tour&id=<?php echo $details['id'] ?>" method="POST">
            <div class="flex">
                <div class="carousel-item">
                    <img class="w-100" src="template_client/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->

    <!-- Booking End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= $details['image'] ?>" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">
                                    <h2 class="name_detail"><?= $details['name'] ?></h2>
                                </a>
                            </div>
                            <p class="mb-3"><?= $details['content'] ?></p>
                        </div>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment List Start -->
                    <?php foreach ($comment as $key => $value) : ?>
                        <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                            <div class="media mb-4">
                                <img src="<?= $value['client_image'] ?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href=""><?= $value['client_name'] ?></a> <small><i><?= $value['time'] ?></i></small></h6>
                                    <p><?= $value['content'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <div class="bg-white mb-3" style="padding: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Comment</h4>
                        <form method="POST" action="index.php?url=detail&id=<?= $details['id'] ?>">
                            <div class="form-group">
                                <label for="message">Comment</label>
                                <input type="hidden" name="productId" value="<?= $details['id'] ?>">
                                <textarea id="message" name="content" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary font-weight-semi-bold py-2 px-3">Gửi bình luận</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <!-- Search Form -->
                    <!-- Category List -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <!-- Booking Start -->
                            <div class="container">
                                <form action="index.php?url=dat_tour&id=<?php echo $details['id'] ?>" method="POST">
                                    <div class="flex">
                                        <div>
                                            <div class="submit">
                                                <button class="btn btn-primary w-100">Đặt tour</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Booking End -->
                        </div>
                    </div>
                    <!-- Recent Post -->
                    <!-- Tag Cloud -->
                </div>
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