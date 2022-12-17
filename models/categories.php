<?php
require_once 'models/db.php';
function getAllCategories()
{
    $sql = "SELECT * FROM categories ";
    return getData($sql, FETCH_ALL);
}
function getAllCoach()
{
    $sql = "SELECT * FROM coach ";

    return getData($sql, FETCH_ALL);
}
function getAllCity()
{
    $sql = "SELECT * FROM city ";

    return getData($sql, FETCH_ALL);
}
function getAllHotel()
{
    $sql = "SELECT * FROM hotel ";

    return getData($sql, FETCH_ALL);
}

function getOnceCate($id)
{
    $sql = "SELECT * FROM categories WHERE id = $id";
    return getData($sql, FETCH_ONE);
}
function updateCateNew()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $save = 'template_client/img/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $save);
    $sql = "UPDATE categories SET name='$name',img='$save' WHERE id= $id";
    return getData($sql, NOT_FETCH);
}
function newCatee(){
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $save = 'template_client/img/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $save);
    $sql = "INSERT INTO categories (name,img) VALUES ('$name','$save') ";
    return getData($sql, NOT_FETCH);
}