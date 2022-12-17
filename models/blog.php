<?php
require_once 'models/db.php';
function getAllBlog(){
    $sql = "SELECT * FROM blog ";
    return getData($sql, FETCH_ALL);
}
function getBlog(){
    $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";
    return getData($sql, FETCH_ALL);
}

function getNewBlog(){
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $save = 'template_client/img/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $save);
    $sql = "INSERT INTO blog (name,image) VALUES ('$name','$save') ";
    return getData($sql, NOT_FETCH);
}
function deleteBlog($id){
    $sql = "DELETE FROM blog WHERE id=$id";
    return getData($sql,NOT_FETCH);
}
function editBlog($id){
}
