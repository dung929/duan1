
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>nhom11pro1014@hotmail.com</p>
                    <p class="text-body px-3">|</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+84 889915299</p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-3" href="https://github.com/dung929/duan1.git">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="text-primary px-3" href="https://trello.com/b/GxxN9aah/fa22pro1014we17312nhom11qltour">
                        <i class="fab fa-trello"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-3 pr-3" href="">
                        <i class="fab fa-soundcloud"></i>
                    </a>
                    <?php
                    if (!isset($_SESSION['user'])) { ?>
                        <a class="text-primary pl-3" href="index.php?url=login">
                            <i class="fas fa-user"></i>
                        </a>
                    <?php } else if (isset($_SESSION['user'])) { ?>
                       <a href="index.php?url=profileUser&id=<?= $_SESSION['user']['id']?>"><?= $_SESSION['user']['name'] ?><img style="width:70px;" class="template/img-profile rounded-circle " src="<?= $_SESSION['user']['image'] ?>"></a> 

                        <a class="text-primary pl-3 pr-3" href="index.php?url=logout"><button onclick="return confirm('Bạn có muốn đăng xuất không ?')"> Đăng xuất</button></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>