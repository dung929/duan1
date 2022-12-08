<?php
require_once 'models/db.php';
function getAllGuide()
{
    $sql = "SELECT * FROM tour_guide";

    return getData($sql, FETCH_ALL);
}
