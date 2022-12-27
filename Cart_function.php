<?php 
session_start();
require_once 'db/db.php';
$user_name = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
  
    header('Location: unqualified.php');
}
    
$id = $_GET["id"];

$sql = "SELECT * FROM products WHERE id = $id ";
$result = mysqli_query($con, $sql);
 
$product_cart = array();
foreach($result as $value ) {
$product_cart[$value["id"]] = $value;
}


if (isset($_POST['add-to-cart'])) {
    if (!isset($_SESSION["Cart1"]) || $_SESSION["Cart1"] == null) {
        $product_cart[$id]["Quantity"] = 1;
        $_SESSION["Cart1"][$id] = $product_cart[$id];

    } else {
        if (array_key_exists($id, $_SESSION["Cart1"])) {
            $_SESSION["Cart1"][$id]["Quantity"] += 1;
        } else {
            $product_cart[$id]["Quantity"] = 1;
            $_SESSION["Cart1"][$id] = $product_cart[$id];
        }
    }
    header("Location: Cart.php");

}
?>