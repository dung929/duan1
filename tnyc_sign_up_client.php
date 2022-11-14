<?php
$username = $_POST['username'];
$password = $_POST['password'];
$password_hashed = password_hash($password, PASSWORD_BCRYPT);
require_once('model/db.php');
$sql = "INSERT INTO client (username, password)"
    . "VALUES ('$username', '$password_hashed')";
$statement = $connect -> prepare($sql);
$statement ->execute();