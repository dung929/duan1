<?php
session_start();
$errors = isset($_GET['errors']) ? $_GET['errors'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login admin</title>
    <link rel="stylesheet" href="styleadm.css">
</head>

<body>
    <div class="">
        <form autocomplete="off" action="../../model/login-client/post_login.php" method="POST">
            <h2>Sign in</h2>
            <div class="">
                <span>Userame</span>
                <input type="text" required="required" name="username">
                <i></i>
            </div>
            <div class="">
                <span>Password</span>
                <input type="password" required="required" name="password">
                <i></i>
            </div>
            <div class="">
                <a href="">Đăng ký</a>
                <a href="">Đổi mật khẩu</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
    <div style="color: orange   ;">
        <?php echo $errors ?>
    </div>
</body>

</html>