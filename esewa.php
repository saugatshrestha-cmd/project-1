<html>
    <?php
    session_start();
        include("handler/customersession.php");
        include("partials/head.php");
        include("handler/setting.php");
        
    ?>
    <body>
    <?php
        include("partials/header.php");
    ?>
    <div class="esewa">
    <form action="<?php echo $epay_url?>" method="POST">
    <input value="<?php echo $total;?>" name="tAmt" type="hidden">
    <input value="<?php echo $total;?>" name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value=<?php echo $merchant_code?>  name="scd" type="hidden">
    <input value=<?php echo $pid?> name="pid" type="hidden">
    <input value=<?php echo $successurl?> type="hidden" name="su">
    <input value=<?php echo $failedurl?> type="hidden" name="fu">
    <input value="Pay with Esewa" type="submit" class="btn">
    </form>
    </div>
    <?php
        include("partials/footer.php");
    ?>
    </body>
</html>