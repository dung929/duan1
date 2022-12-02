<?php
require_once 'models/db.php';
function clientCheckExist($username)
{
    $sql = "SELECT * FROM client WHERE username='$username'";

    return getData($sql, FETCH_ONE);
}
function getAllClient()
{
    $sql = "SELECT * FROM client";
    return getData($sql, FETCH_ALL);
}
function getTaoRegister()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $image = $_FILES['image'];
    $save = './template_client/img/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $save);
    $username = $_POST['username'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    $errors = '';
    if ($password_1 != $password_2) {
        $errors = 'Mật khẩu  nhập lại không đúng !';
        header("location:index.php?url=register&errors=$errors");
    }
    if ($image['size'] >= 2 * 1024 * 1024) {
        $errors = 'Kich co anh khong duoc qua 2mb!';
        header("location:index.php?url=register&errors=$errors");
    }
    $password_hashed = password_hash($password_1, PASSWORD_BCRYPT);
    $sql = "INSERT INTO client (name,email,password,address,image,phone,username) VALUES ('$name','$email','$password_hashed','$address','$save','$phone','$username')";
    return getData($sql, NOT_FETCH);
}
