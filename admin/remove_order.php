<?php

session_start();

$con = mysqli_connect('localhost','root','','2hkt');


// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL :". mysqli_connect_error();
}

if(isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($con,"DELETE FROM `invoice_detail` WHERE id='$remove_id' " ) or die('query failed'); 
    header("Location: view_product.php");
    
}

if (!isset($_SESSION["username"])) {
  
    header('Location: unqualified.php');
}






?>