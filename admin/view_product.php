<?php 
session_start();

    // AUTHENTICATION VERIFYCATION
    if (!isset($_SESSION['username'])) {
  
        header('Location: unqualified.php');
    }
    
$con = mysqli_connect('localhost','root','','2hkt');


// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL :". mysqli_connect_error();
}
   
    $sql = "SELECT `id`, `id_product`, `quantity`, `name_product`, `customer_name`, `price_product`, `customer_email`, `customer_address`, `id_invoice`, COUNT(*) FROM `invoice_detail` GROUP BY `id_invoice`";
    $result = mysqli_query($con, $sql);   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/productVendor.css">
    <link rel="icon" href="/gamestore-hkt2/images/Logo.svg">
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
                        <a class="logo__a" href="/gamestore-hkt2/admin/VendorPage.php">
                            <img src="/gamestore-hkt2/images/Logo (1).png" alt="">
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
                    <li class="logout"><a href="/gamestore-hkt2/admin.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="nav-item">Log Out</span>
                        </a></li>

                </ul>
                <p class="copyright">&copy; Copyright 2022 - 2HKT.com</p>
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

                    <th>Product ID </th>
                    <th>Product Name </th>
                    <th>Customer Name </th>
                    <th>Total Order</th>
                    <th>Email </th>
                    <th>Address</th>
                    <th>Action</th>

                </tr>
                <?php 
                foreach ($result as $value)  {?>

                <tr">
                    <td
                        style="border-bottom: 2px solid black; border-left:1px solid black;border-right:1px solid black">
                        <?php echo $value["id_invoice"];?></td>
                    <td style="border-bottom: 2px solid black; border-right:1px solid black">
                        <?php echo $value["name_product"];?> </td>
                    <td style="border-bottom: 2px solid black; border-right:1px solid black">
                        <?php echo $value["customer_name"];?> </td>
                    <td style="border-bottom: 2px solid black; border-right:1px solid black">
                        <?php echo $value["price_product"].' <span style="text-decoration:underline">đ</span>';  ?>
                    </td>
                    <td style="border-bottom: 2px solid black;border-right:1px solid black">
                        <?php echo $value["customer_email"];   ?> </td>
                    <td style="border-bottom: 2px solid black;border-right:1px solid black">
                        <?php echo $value["customer_address"];  ?> </td>
                    <td style="border-bottom: 2px solid black; border-right:1px solid black;">

                        <a href="remove_order.php?remove=<?php echo $value["id"]; ?>" class="btn-delete"> Remove </a>

                    </td>
                    </tr>


                    <?php 
                }
                ?>
            </thead>

        </table>

    </div>

</body>

</html>