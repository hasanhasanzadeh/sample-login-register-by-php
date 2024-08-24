<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['email'] ==null || $_POST['password']==null) {
        $_SESSION['errors']=[
            'ایمیل یا کلمه عبور نمی تواند خالی باشد',
        ];
        header('Location: ../register.php');
        exit();
    }
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']=[
            'ایمیل شما صحیح نمی باشد',
        ];
        header('Location: ../register.php');
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

    if($num == 0) {
        // Password Hashing is used here.
        $sql = "INSERT INTO `users` ( `email`,  
                `password`) VALUES ('$email',  
                '$password')";

        $result = mysqli_query($conn, $sql);
        $_SESSION['auth']=[
            'email'=>$email,
        ];
        $_SESSION['success'] = "شما با موفقیت در سایت ثبت نام کردید";
        header('Location: ../index.php');
        exit();
    }
    else {
        $_SESSION['errors'][]= "مشکل در ثبت اطلاعات لطفا دوباره امتحان کنید";
        header('Location: ../register.php');
        exit();
    }
}

$_SESSION['errors'][]='درخواست شما صحیح نیست';
header('Location: ../register.php');
exit();