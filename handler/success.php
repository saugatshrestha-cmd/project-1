<?php
include 'setting.php';

$ref = $_GET['refId'];

$data =[
    'amt'=>$total,
    'rid'=> $ref,
    'pid'=> $pid,
    'scd'=> $merchant_code
];

    $curl = curl_init($fraudcheck_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    

?>

<response>
    <a href="http://localhost/project/home.php"><response_code>Success</response_code></a>
</response>