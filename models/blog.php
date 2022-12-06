<?php
require_once 'models/db.php';
function getAllBlog(){
    $sql = "SELECT * FROM blog ";
    return getData($sql, FETCH_ALL);
}

