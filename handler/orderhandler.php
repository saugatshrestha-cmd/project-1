<?php
session_start();
include('../partials/connect.php');
$total=$_POST['total'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$customerid=$_SESSION['customerid'];
$payment=$_POST['payment'];
$sql="INSERT INTO orders(customer_id, address, phone, total, pay_method) VALUES('$customerid','$address','$phone','$total','$payment')";
$connect->query($sql);
$sql2="Select id from orders order by id DESC limit 1";
$result=$connect->query($sql2);
$final=$result->fetch_assoc();
$orderid=$final['id'];
foreach($_SESSION['cart'] as $key => $value){
    $proid=$value['item_id'];
    $quantity=$value['quantity'];
    $sql3="INSERT INTO order_details(order_id,product_id,quantity) VALUES('$orderid','$proid','$quantity')";
    $connect->query($sql3);
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