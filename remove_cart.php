<?php
session_start();
if (!isset($_SESSION['username'])) {
  
    header('Location: unqualified.php');
}

$id = $_GET['id'];
if(isset($_SESSION['Cart1'][$id])) {
    unset($_SESSION['Cart1'][$id]);
}
header("Location:Cart.php");


?>