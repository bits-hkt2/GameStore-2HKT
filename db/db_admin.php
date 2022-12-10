<?php
$localname = "localhost";
$username = "root";
$password = "";
$db_name = "2hkt";

$conn = mysqli_connect($localname, $username, $password, $db_name);

if(!$conn) {
    echo "Conection field ";
}


?>