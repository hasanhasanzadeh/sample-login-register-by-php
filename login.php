<?php
session_start();
if (isset($_SESSION['auth'])) {
    $_SESSION['errors'][] = 'شما قبلا وارد سایت شده اید';
    header('Location: ../index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود به سایت</title>

    <!-- link css in static css -->
    <link rel="stylesheet" href="static/css/style.css">


</head>
<body>

<div class="container">


    <?php require_once __DIR__.'/layouts/header.php'; ?>

    <!-- banner image in div -->
    <div class="content">
        <form action="auth/auth_login.php" method="post">
            <div>
                <label for="email">ایمیل</label>
                <input type="email" id="email" name="email" placeholder="ایمیل"  class="block input">
            </div>
            <div>
                <label for="password">کلمه عبور</label>
                <input type="password" id="password" name="password" placeholder="کلمه عبور" class="block input">
            </div>
            <div>
                <button type="submit" class="link-card" style="width: 100% ;margin: auto;text-align: center;">ورود</button>
            </div>
        </form>
    </div>

    <?php require_once __DIR__.'/layouts/footer.php'; ?>
</div>




</body>
</html>