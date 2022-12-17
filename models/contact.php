<?php
require_once 'models/db.php';
function  getContact()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $content = $_POST['content'];
    $sql = "INSERT INTO contact  "
        . "(name, email,phone,content)"
        . " VALUES ('$name', '$email', '$phone', '$content')";
    return getData($sql, NOT_FETCH);
}
function getAllcontact()
{
    $sql = "SELECT * FROM contact";
    return getData($sql, FETCH_ALL);
}
function updateStatusContact($id, $status)
{
    $sql = " UPDATE contact SET status='$status' where id=$id ";
    return getData($sql, NOT_FETCH);
}
function deleteCon()
{
    $sql = "DELETE FROM contact";
    return getData($sql, NOT_FETCH);
}
