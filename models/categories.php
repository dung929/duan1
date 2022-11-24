<?php
require_once 'models/db.php';
function getAllCategories(){
    $sql = "SELECT * FROM categories ";

    return getData($sql, FETCH_ALL);
}

