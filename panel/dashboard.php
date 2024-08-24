<?php
session_start();
if(!isset($_SESSION['auth'])){
    $_SESSION['errors'][]='شما اول وارد سایت شوید';
    header('Location: ../login.php');
    exit();
}elseif($_SESSION['auth']['email']!='sayeh@gmail.com'){
    $_SESSION['errors'][]='شما مدیر سایت نمی باشید';
    header('Location: ../profile.php');
    exit();
}

    // Database Connection.
    include '../db/connection.php';

    $sql = "Select * from users ";

    $result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پیشخوان</title>

    <!-- link css in static css -->
    <link rel="stylesheet" href="/static/css/style.css">


</head>
<body>

<div class="container">


    <?php require_once '../layouts/header.php'; ?>

    <div class="content">
        <?php
        if ($result->num_rows > 0) {
            echo "<table style='width: 100%;border:2px solid black;margin:10px;padding:10px;text-align: center;'><tr><th>ایمیل</th><th>کلمه عبور</th><th>حذف</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["email"]."</td><td>".$row["password"]."</td><td> <form action='/auth/delete.php' method='post'><input type='hidden' name='email' value='".$row['email']."'><button type='submit' style='color:red;'>حذف کاربر</button></form> </td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <?php require_once '../layouts/footer.php'; ?>
</div>




</body>
</html>
