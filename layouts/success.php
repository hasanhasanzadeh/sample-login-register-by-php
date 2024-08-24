<?php
if ($success=$_SESSION['success']) {
    ?>
    <div style="background-color:green;color:white;padding:10px;margin: 10px;border-radius: 10px">
           <b>
               <?=$success?>
           </b>
    </div>
    <?php
}
unset($_SESSION['success']);
?>