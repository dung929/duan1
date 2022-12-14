<?php
require_once('models/contact.php');
function  quanlicontact()
{
    $contact = getAllcontact();
    session_start();
    if (!isset($_SESSION['user'])) {
        $errors = 'Vui lòng đăng nhập để sử dụng';
        header("location: index.php?url=login&errors=$errors");
    } else if ($_SESSION['user']['role_id'] != 1) {
        header("location: index.php?url=403");
    } else if (isset($_SESSION['user'])) {
        include_once './views/admin/quanlycontact.php';
    }
}
function updateContact()
{
    $update = updateStatusContact($_POST['id'], $_POST['status']);
    header("location: index.php?url=qlcontact_index");
}
function contactt()
{
    $contactt = getContact();
    header('location:index.php?url=home');
}
