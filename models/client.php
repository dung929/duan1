<?php
require_once 'models/db.php';
function clientCheckExist($username)
{
    print_r($username);
    exit;
    $sql = "SELECT * FROM client WHERE username='$username'";

    return getData($sql, FETCH_ONE);
}
