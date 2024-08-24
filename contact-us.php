<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ارتباط با ما</title>

    <!-- link css in static css -->
    <link rel="stylesheet" href="static/css/style.css">


</head>
<body>

<div class="container">


    <?php require_once __DIR__.'/layouts/header.php'; ?>


    <div class="content">
        <p style="padding: 14px;text-align: justify;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut consectetur cum illo in incidunt molestiae molestias natus, nisi nostrum perferendis quasi quia quo sequi, sint tempora unde ut vero!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut consectetur cum illo in incidunt molestiae molestias natus, nisi nostrum perferendis quasi quia quo sequi, sint tempora unde ut vero!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut consectetur cum illo in incidunt molestiae molestias natus, nisi nostrum perferendis quasi quia quo sequi, sint tempora unde ut vero!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut consectetur cum illo in incidunt molestiae molestias natus, nisi nostrum perferendis quasi quia quo sequi, sint tempora unde ut vero!
        </p>
    </div>

    <div class="contact">
        <hr>
        <form action="">
            <div>
                <label for="name">نام و نام خانوادگی</label>
                <input type="text" name="name" id="name" placeholder="نام و نام خانوادگی"  class="block input">
            </div>
            <div>
                <label for="mobile">شماره موبایل</label>
                <input type="text" id="mobile" name="phone" placeholder="شماره تلفن"  class="block input">
            </div>
            <div>
                <label for="email">ایمیل</label>
                <input type="email" id="email" name="email" placeholder="ایمیل"  class="block input">
            </div>
            <div>
                <label for="message">پیغام</label>
                <textarea rows="5" id="message" name="message" placeholder="پیفام" class="block input"></textarea>
            </div>
            <div>
                <button type="submit" class="link-card" style="width: 100% ;margin: auto;text-align: center;">ارسال</button>
            </div>
        </form>
    </div>

    <?php require_once __DIR__.'/layouts/footer.php'; ?>
</div>




</body>
</html>