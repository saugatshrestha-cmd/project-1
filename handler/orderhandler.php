<?php
session_start();
include('../partials/connect.php');
foreach($_SESSION['cart'] as $key => $value){
    $total=$_POST['total'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $customerid=$_SESSION['customerid'];
    $payment=$_POST['payment'];
    $proid=$value['item_id'];
    $quantity=$value['quantity'];
    $sql="INSERT INTO orders(product_id, customer_id,address, phone, quantity,total, pay_method) VALUES('$proid','$customerid','$address','$phone','$quantity','$total','$payment')";
    $connect->query($sql);
}
if($payment=="esewa"){
    $_SESSION['total']=$total;
    header('location: ../esewa.php');
}else{
echo "<script>
        alert('Order is placed');
        window.location.href='../home.php';
    </script>";
}
?>