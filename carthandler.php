<?php
session_start();
if (isset($_SESSION['cart'])) {
    $count=count($_SESSION['cart']);
    $_SESSION['cart'][$count]=array('item'=>$_GET['cart_id'], 'item-name'=>$_GET['cart_name'], 'item_price'=>$_GET['cart_price']);
} else {
    $_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id'], 'item-name'=>$_GET['cart_name'], 'item_price'=>$_GET['cart_price']);
}
print_r($_SESSION['cart']);
?>