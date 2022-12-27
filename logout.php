<?php
session_start();
unset($_SESSION['username']);
session_destroy();
// Redirect to the login page
header("Location:index.php");



?>