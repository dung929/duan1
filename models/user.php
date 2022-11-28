<?php
require_once 'models/db.php';
function clientCheckt($username)
{
    $sql = "SELECT * FROM controller WHERE username='$username'";

    return getData($sql, FETCH_ONE);
}
