<?php 
session_start();
    // AUTHENTICATION VERIFYCATION
    if (!isset($_SESSION['username'])) {
  
        header('Location: unqualified.php');
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/productVendor.css">
    <link rel="icon" href="/images/Logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>2HKT| VIEW PRODUCT 🛒️📦📱</title>
</head>


<body>
    <!-- NAVBAR SECTION -->
    <div class="container">
        <nav>
            <div class="nav">
                <ul>
                    <li class="logo">
                        <a class="logo__a" href="./VendorPage.php">
                            <img src="/images/Logo (1).png" alt="">
                            <span class="nav-item1">2HKT</span>
                        </a>
                    </li>
                    <li><a href="./VendorPage.php">
                            <i class="fa-solid fa-house-chimney"></i>
                            <span class="nav-item">Home</span>
                        </a></li>
                    <li><a href="./insert_product.php">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="nav-item">Send Email</span>
                        </a></li>
                    <li><a href="./view_product.php">
                            <i class="fa-solid fa-box-open"></i>
                            <span class="nav-item">View Product</span>
                        </a></li>
                    <li><a href="./vendorHelp.php">
                            <i class="fa-solid fa-circle-info"></i>
                            <span class="nav-item">Help</span>
                        </a></li>
                    <li class="logout"><a href="/admin.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="nav-item">Log Out</span>
                        </a></li>

                </ul>
                <p class="copyright">&copy; Copyright 2022 - Huyzada.com</p>
            </div>

        </nav>

        <!-- MAIN SECTION -->
        <section class="main">

        </section>

    </div>
    <!-- VIEW-PRODUCT SECTION  -->
    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>

                    <th>Product Name </th>
                    <th>Product Image</th>
                    <th>Customer Name </th>
                    <th>Product Price </th>
                    <th>Email </th>
                    <th>Address</th>

                </tr>

                <tr>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                </tr>
                <tr>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                    <td>sdfsdsdfgsd</td>
                </tr>


            </thead>

        </table>

    </div>
</body>

</html>