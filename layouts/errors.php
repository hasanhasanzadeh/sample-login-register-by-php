<?php
if ($errors=$_SESSION['errors']) {
?>
<div style="background-color:red;color:white;padding:10px;margin: 10px;border-radius: 10px">
 <ul>
     <?php foreach($errors as $error){?>
     <li><?=$error?></li>
     <?php } ?>
 </ul>
</div>
<?php
}
unset($_SESSION['errors']);
?>
