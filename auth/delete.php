<?php
session_start();
if (!isset($_SESSION['auth'])) {
    $_SESSION['errors'][] = 'شما اول باید وارد سایت شوید';
    header('Location: ../login.php');
    exit();
}elseif($_SESSION['auth']['email']!='sayeh@gmail.com'){
    $_SESSION['errors'][] = 'شما دسترسی ندارید';
    header('Location: ../profile.php');
    exit();
}
    // Include file which makes the

    // Database Connection.
    include '../db/connection.php';

    $email = $_POST["email"];
    if ($email=='sayeh@gmail.com') {
        $_SESSION['errors'][]= "مدیر قابل حذف نمی باشد";
        header('Location: ../panel/dashboard.php');
        exit();
    }

    $sql = "delete from users where email='$email'";

    $result = mysqli_query($conn, $sql);
    if($result) {
        $_SESSION['success'] = "کاربر مورد نظر با موفقیت حذف شد";
        header('Location: ../panel/dashboard.php');
        exit();
    }else{
        $_SESSION['errors'][]= "کاربر مورد نظر قابل حذف نمی باشد";
        header('Location: ../login.php');
        exit();
    }