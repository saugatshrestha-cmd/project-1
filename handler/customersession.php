<?php
if(empty($_SESSION['email'] AND $_SESSION['password'])){
    echo "<script> alert('Please Login');
    window.location.href='login.php'</script>";
}
?>