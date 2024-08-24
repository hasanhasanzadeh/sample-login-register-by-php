<?php
session_start();
unset($_SESSION['auth']);
$_SESSION['success']='شما با موفقیت از سایت خارج شدید';
header('Location: ../index.php');
exit();