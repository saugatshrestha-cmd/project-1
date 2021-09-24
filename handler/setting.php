<?php 
$epay_url = "https://uat.esewa.com.np/epay/main";
$successurl = 'http://localhost/project/handler/success.php';
$failedurl = 'http://localhost/project/handler/failed.php';
$merchant_code = "epay_payment"; 
$fraudcheck_url = "https://uat.esewa.com.np/epay/transrec";


$host="localhost";
$user="root";
$password="";
$dbname="jutta";

$connect=mysqli_connect($host,$user,$password,$dbname);
$sql="Select total from orders order by id DESC limit 1";
$result=$connect->query($sql);
$final=$result->fetch_assoc();
$total=$final['total'];
$sql2="Select order_id from order_details order by id DESC limit 1";
$result=$connect->query($sql2);
$final=$result->fetch_assoc();
$pid=$final['order_id'];
?>