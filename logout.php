<?php
session_start();
unset($_SESSION['username']);
// Redirect to the login page
header("Location:login.php");



?>