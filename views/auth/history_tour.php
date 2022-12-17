<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?url=home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="<?= $_SESSION['user']['image'] ?>" alt="" style="width: 50px;">
                </div>
                <div class="sidebar-brand-text mx-3"><?= $_SESSION['user']['name'] ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/duan1/index.php?url=home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Trang Chủ</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/duan1/index.php?url=submit_tour">
                    <i class="fas fa-plane"></i>
                    <span>Lịch sử đặt tour</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                        <!-- Nav Item - Alerts -->

                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['user']['name'] ?> </span>
                                <img class="template/img-profile rounded-circle" src="<?= $_SESSION['user']['image'] ?>" style="width: 50px;">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="index.php?url=profileUser">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?url=logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Lịch sử đặt tour</h1>
                    </div>

                    <!-- Content Row -->
                    <div>
                        <h1>Số lượng vé</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tên Tour</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Số Người Đi</th>
                                    <th>Thời gian đặt tour</th>
                                    <th>Phương tiện</th>
                                    <th>Nhân viên hướng dẫn</th>
                                    <th>Khách sạn</th>
                                    <th>Danh mục</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Tên Tour</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Số Người Đi</th>
                                    <th>Thời gian đặt tour</th>
                                    <th>Phương tiện</th>
                                    <th>Nhân viên hướng dẫn</th>
                                    <th>Khách sạn</th>
                                    <th>Danh mục</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($submit_tour as $key => $value) : ?>
                                    <tr>
                                        <td><?= $value['name_tour'] ?></td>
                                        <td><?= $value['name_client'] ?></td>
                                        <td><?= $value['number_client'] ?></td>
                                        <td><?= $value['time_booktour'] ?></td>
                                        <td><?= $value['coach_tour'] ?></td>
                                        <td><?= $value['guide_tour'] ?></td>
                                        <td><?= $value['hotel_tour'] ?></td>
                                        <td><?= $value['category_name'] ?></td>
                                        <td><?= $value['sum_tour'] ?> VND</td>
                                        <td>
                                            <?php
                                            if ($value['status'] == 'Chờ xác nhận') {
                                                echo '<span class="badge badge-warning">' . $value['status'] . '</span>';
                                            } else if ($value['status'] == 'Đã xác nhận') {
                                                echo '<span class="badge badge-primary">' . $value['status'] . '</span>';
                                            } else if ($value['status'] == 'Đã thanh toán') {
                                                echo '<span class="badge badge-success">' . $value['status'] . '</span>';
                                            } else if ($value['status'] == 'Đã checkin') {
                                                echo '<span class="badge badge-info">' . $value['status'] . '</span>';
                                            } else if ($value['status'] == 'Đã checkout') {
                                                echo '<span class="badge badge-secondary">' . $value['status'] . '</span>';
                                            } else if ($value['status'] == 'Hủy') {
                                                echo '<span class="badge badge-danger">' . $value['status'] . '</span>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="template/vendor/jquery/jquery.min.js"></script>
            <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="template/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="template/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="template/js/demo/chart-area-demo.js"></script>
            <script src="template/js/demo/chart-pie-demo.js"></script>

</body>

</html>