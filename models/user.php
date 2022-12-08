<?php
require_once 'models/db.php';
function clientCheckt($username)
{
    $sql = "SELECT * FROM client WHERE username='$username' AND role_id = 1";

    return getData($sql, FETCH_ONE);
}
