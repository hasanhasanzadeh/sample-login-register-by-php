<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['email'] ==null || $_POST['password']==null) {
        $_SESSION['errors']=[
            'ایمیل یا کلمه عبور نمی تواند خالی باشد',
        ];
        header('Location: ../login.php');
        exit();
    }
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']=[
            'ایمیل شما صحیح نمی باشد',
        ];
        header('Location: ../login.php');
        exit();
    }
    // Include file which makes the

    // Database Connection.
    include '../db/connection.php';

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "Select * from users where email='$email' and password='$password'";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if($num>0) {
        $_SESSION['auth']=[
            'email'=>$email,
        ];
        $_SESSION['success'] = "شما با موفقیت وارد سایت شدید";
        header('Location: ../index.php');
        exit();
    }else{
        $_SESSION['errors'][]= "کلمه عبور شما اشتباه می باشد";
        $_SESSION['errors'][]= "شما ثبت نام نشده اید";
        header('Location: ../login.php');
        exit();
    }
}
$_SESSION['errors'][]='درخواست شما صحیح نیست';
header('Location: ../login.php');
exit();