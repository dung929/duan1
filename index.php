<?php
require_once 'Controllers/AuthControllers.php';
require_once 'Controllers/AdminControllers.php';
require_once 'Controllers/quanlitourControllers.php';
require_once 'Controllers/quanlibookingControllers.php';
require_once 'Controllers/quanliuserControllers.php';
require_once 'Controllers/TourControllers.php';
require_once 'Controllers/HomeControllers.php';
require_once 'Controllers/quanlycategory.php';
require_once 'Controllers/quanlycontact.php';
require_once 'Controllers/quanlycomment.php';
require_once 'Controllers/quanlyblog.php';
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case 'login':
        login();
        break;
    case '403':
        loi();
        break;
    case 'profileUser':
        profileUser();
        break;
    case 'updateStatus':
        updateStatus();
        break;
    case 'updateContact':
        updateContact();
        break;
    case 'get_chart_data':
        getChartData();
        break;
    case 'register':
        register();
        break;
    case 'tao_register':
        tao_register();
        break;
    case 'contact':
        contact();
        break;
    case 'blog':
        blog();
        break;
    case 'about':
        about();
        break;
    case 'list_products':
        list_products();
        break;
    case 'home':
        home();
        break;
    case 'login_user':
        login_user();
        break;
    case 'taotour':
        taotour();
        break;
    case 'admin_index':
        index();
        break;
    case 'qlbooking_index':
        quanlibooking();
        break;
    case 'tao_booking':
        taoBooking();
        break;
    case 'qluser_index':
        quanliuser();
        break;
    case 'qltour_index':
        quanlitour();
        break;
    case 'qlcate_index':
        quanlicategory();
        break;
    case 'qlcontact_index':
        quanlicontact();
        break;
    case 'qlcomment_index':
        quanlicomment();
        break;
    case 'qlblog_index':
        qlblog_index();
        break;
    case 'travel':
        travel();
        break;
    case 'detail':
        $id = $_GET['id'];
        getDetail_productOne($id);
        break;
    case 'dat_tour':
        $id = $_GET['id'];
        dat_tour($id);
        break;
    case 'history_tour':
        history_tour();
        break;
    case 'logout':
        logout();
        break;
    case 'logout_user':
        logout_user();
        break;
    case 'contactt':
        contactt();
        break;
    case 'thankyou':
        thankyou();
        break;
    case 'editTour':
        $id = $_GET['id'];
        editTour($id);
        break;
    case 'editCate':
        $id = $_GET['id'];
        editCate($id);
        break;
    case 'updateTour':
        updateTour();
        break;
    case 'updateCate':
        updateCate();
        break;
    case 'updatePass':
        updatePass();
        break;
    case 'newCate':
        newCate();
        break;
    case 'deleteContact':
        $id = $_GET['id'];
        deleteContact($id);
        break;
    case 'deleteBooking':
        deleteBooking();
        break;
    case 'taoBlog':
        taoBlog();
        break;
    case 'deleteComment':
        $id = $_GET['id'];
        deleteComment($id);
        break;
    case 'deleteBlog':
        $id = $_GET['id'];
        deleteBlogg($id);
        break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
