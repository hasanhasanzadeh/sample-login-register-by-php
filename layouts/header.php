<!-- Start Menu -->
<header>
    <ul class="topnav">
        <li><a class="active" href="../index.php">صفحه اصلی</a></li>
        <li><a href="../about.php">درباره ما</a></li>
        <li><a href="../contact-us.php">ارتباط با ما</a></li>
        <?php if(isset($_SESSION['auth'])){?>
        <li class="left"><a href="../profile.php">پروفایل</a></li>
        <li class="left"><a href="../auth/auth_logout.php"> خروج</a></li>
        <?php } else{?>
            <li class="left"><a href="../login.php">ورود </a></li>
            <li class="left"><a href="../register.php"> ثبت نام</a></li>
        <?php }?>
    </ul>
</header>
<!-- End Menu -->

<?php require_once 'errors.php'; ?>
<?php require_once 'success.php'; ?>