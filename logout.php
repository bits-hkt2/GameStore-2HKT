<?php
session_start();
if(session_destroy()) {
    // Redirect to the login page
    header("Location:login.php");
}


?>