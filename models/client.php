<?php
require_once 'models/db.php';
function clientCheckExist($username)
{
    $sql = "SELECT * FROM client WHERE username='$username'";

    return getData($sql, FETCH_ONE);
}
function getAllClient(){
    $sql = "SELECT * FROM client";
    return getData($sql, FETCH_ALL);
}
