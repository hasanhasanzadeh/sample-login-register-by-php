<?php
session_start();
if (!isset($_SESSION['auth'])) {
    $_SESSION['errors'][] = 'شما اول باید وارد سایت شوید';
    header('Location: ../login.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پرفایل</title>

    <!-- link css in static css -->
    <link rel="stylesheet" href="static/css/style.css">


</head>
<body>

<div class="container">


    <?php require_once __DIR__.'/layouts/header.php'; ?>

    <div class="content">
       <h1><?=$_SESSION['auth']['email']?></h1>
        <?php if ($_SESSION['auth']['email']=='sayeh@gmail.com'){ ?>
            <h1>
                <a href="/panel/dashboard.php">
                    لینک پیشخوان
                </a>
            </h1>
        <?php } ?>
    </div>

    <?php require_once __DIR__.'/layouts/footer.php'; ?>
</div>




</body>
</html>