<?php
session_start();
$qty=$_POST['quantity'];
if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['item_name']==$_POST['item_name']){
            $_SESSION['cart'][$key]['quantity']=$qty;
            echo "<script>
                alert('item updated');
                window.location.href='shopping-cart.php';
            </script>";
        }
    }
}
?>