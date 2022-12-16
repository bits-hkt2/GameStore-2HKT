<?php
session_start();
require_once 'db/db.php';



if (!isset($_SESSION['username'])) {
    header('Location: unqualified.php');
}

// CHECK OUT FUNCTION 
if (isset($_POST["order"])) {
    if (empty($_POST["customer"]) || empty($_POST["address"]) || empty($_POST["phone"]) || empty($_POST["email"]) || empty($_POST["total"])) {
        echo 0;
    } else {
        $cart = !empty($_SESSION["Cart1"]) ? $_SESSION["Cart1"] : [];
        $customer = $_POST["customer"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $total = $_POST["total"];
        $sql = "INSERT INTO `invoice` (`customer`,`address`,`phone`,`email`,`total`,`status`) VALUES ('$customer','$address','$phone','$email','$total', 2)";

  
        $result_order = mysqli_query($con, $sql);

        $order = "SELECT MAX(id) as 'id' FROM invoice";
        $order_result = mysqli_query($con, $order);
        while($id_invoice = mysqli_fetch_array($order_result)) {
            $id_order = $id_invoice["id"];
            
        }

        foreach ($cart as $value) {
            $id = $value["id"];
            $sl = $value["Quantity"];
            
            $order_detail = "INSERT INTO `invoice_detail`(`id_product`,`quantity`,`id_invoice`) VALUES ('$id','$sl','$id_order')";

    
            $result_detail = mysqli_query($con, $order_detail);
        }
        echo "<div class='container' style='position: absolute;
        top: 62%;
        left: 55%;  
        padding: 8px 26px;
        width: 20%;
        height: 50px;
        background: #3ae53a;
        border-radius: 20px;'>
                    <h3> Order successfully !!!</h3>
        
        </div>";
        unset($_SESSION["Cart1"]);
        
    
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/Logo.svg">
    <!-- FONTAWESOME ICONS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- INTER FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <title>2HKT | MY CART PAGE</title>
    <link rel="stylesheet" href="./css/Cart.css" type="text/css">
</head>

<body>
    <!--HEADER-->
    <header>


        <nav class="navigation">

            <div class="list-items">
                <a href="/Main.php">
                    <img class="web_icon" src="./images/Logo (1).png" alt="">

                </a>

                <!-- Large button groups (default and split) -->


                <div class="nav-menu-items d-flex justify-content-between w-50 " style="margin-right:8%">
                    <a href="#home" class="active"></a>

                    <div class="dropdown btn-group">
                        <a class="dropdown-toggle text-white rounded " role="button" style="background-color:#2C2C2C "
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            STORE
                        </a>

                        <ul class="dropdown-menu  text-center" style="background:#D9D9D9 ;">
                            <li><a class="dropdown-item text-black" href="./Main.php">Home</a></li>
                            <li>
                                <hr class="dropdown-divider bg-black" />
                            </li>
                            <li><a class="dropdown-item text-black" href="./Main.php">New Release</a></li>
                            <li><a class="dropdown-item text-black" href="./Main.php">Top sellers</a></li>
                            <li><a class="dropdown-item text-black" href="./Main.php">Coming soon </a></li>
                        </ul>

                    </div>

                    <div class="dropdown btn-group">
                        <a class="dropdown-toggle text-white rounded " role='button' style="background-color:#2C2C2C "
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            ABOUT
                        </a>
                        <ul class="dropdown-menu text-center" style="background: #D9D9D9">
                            <li><a class="dropdown-item text-black" href="./about_us.php">2HKT.com</a></li>
                            <li>
                                <hr class="dropdown-divider bg-black" />
                            </li>
                            <li><a class="dropdown-item text-black" href="https://discord.gg/D7eqPyD6Dk">Join the
                                    team</a></li>
                        </ul>
                    </div>

                    <div class=" dropdown btn-group">
                        <a class="dropdown-toggle text-white rounded " role='button' style="background-color:#2C2C2C "
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            SUPPORT
                        </a>
                        <ul class="dropdown-menu text-center" style="background:#D9D9D9;">
                            <li><a class="dropdown-item text-black" href="./order_payment.php">Orders and Payments</a>
                            </li>
                            <li><a class="dropdown-item text-black" href="./account_website.php">Account and
                                    Website</a></li>
                            <li><a class="dropdown-item text-black" href="./refund_policy.php">Refund Policy</a></li>

                        </ul>
                    </div>

                    <div class=" dropdown btn-group">
                        <a class="dropdown-toggle text-white rounded " role='button' style="background-color:#2C2C2C "
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            COMMUNITY
                        </a>
                        <ul class="dropdown-menu text-center" style="background:#D9D9D9;">

                            <li><a class="dropdown-item text-black" href="https://discord.gg/D7eqPyD6Dk">Dicussion
                                    Forums</a></li>
                            <li>
                                <hr class="dropdown-divider bg-black" />
                            </li>
                            <li><a class="dropdown-item text-black"
                                    href="https://www.facebook.com/dejavu354321/">Facebook</a></li>
                            <li><a class="dropdown-item text-black"
                                    href="https://twitter.com/Steam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a>
                            </li>
                            <li><a class="dropdown-item text-black"
                                    href="https://www.youtube.com/@HuyPhamChannel  ">Youtube</a></li>
                        </ul>
                    </div>


                </div>


                <div class="profile ">
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                        aria-expanded="false">
                        <img src="./images/icon 1.png" alt="">
                    </a>

                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="./edit_profile.php">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="./logout.php">Log out</a></li>
                    </ul>


                    <div class="name-user ">
                        <h3> <?php echo $_SESSION['username'];  ?></h3>
                    </div>
                </div>



            </div>



        </nav>
    </header>
    <!--MAIN-->
    <main>
        <!--search bar-->
        <!-- SEARCHING SECTON -->
        <div class="search">

        </div>
        <!--my cart section-->
        <div class="my_cart_header">
            <span class="my_cart">My Cart</span>
            <a class="back_button" href="./Main.php">Back</a>
        </div>
        <!--main content-->
        <form action="Cart.php" method="post">
            <div class=" biggest_container">
                <!--cart list-->
                <div>


                    <?php
                $total = 0;
                $discount = 0;
                $old_priced = 0;
                if (isset($_SESSION["Cart1"])) {

                    foreach ($_SESSION["Cart1"] as $value) {
                        $sum = 0;
                        $sum = $value["price"] * $value["Quantity"];
                        $total += $sum;

                        $old_price = 0;
                        $old_price = $value["old price"];
                        $old_priced += $old_price;
                        
                        $sale_discount = 0;
                        $sale_discount = $old_price - $sum;
                        $discount += $sale_discount;
                        ?>

                    <div class="child_container">
                        <div class="card">

                            <div class="card-infor">
                                <div class="image-game">
                                    <img class="card-image" src="<?php echo $value["image"]; ?>">

                                </div>

                                <div class="game-details">
                                    <div class="game-detail">

                                        <h3 class="game-title"><?php echo $value['name_product']; ?></h3>
                                        <i class="fa-brands fa-windows"
                                            style="font-size:20px;color:white;margin-top:10px;"></i>
                                        <p class="game-price"><span style="text-decoration:underline">đ</span>
                                            <?php echo number_format($value['price']); ?>
                                        </p>
                                    </div>

                                    <div class="bao">
                                        <p class=game-price"
                                            style="font-size:15px;font-weight:bold;color:darkslateblue">
                                            <?php echo $value['platform']; ?></p>

                                        <a href="remove_cart.php?id=<?php echo $value['id']; ?>" class="bao-remove">
                                            <span style="text-decoration:underline; color:indigo;">
                                                Remove</span> </a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <?php
                    }
                }
                  
            
                            ?>

                </div>


                <!--check out-->
                <div class="child_container">
                    <div class="checkout">
                        <div class="container">
                            <p class="estimated_total">Estimated Total</p>

                            <div class="split">
                                <p class="checkout_text"> Old Price</p>
                                <p class="checkout_text"> <?php echo $old_priced; ?><u> đ</u></p>
                            </div>
                            <div class="split">
                                <p class="checkout_text"> Substract Discount (%) </p>
                                <p class="checkout_text">
                                    <?php echo  $discount." đ"; ?> </p>
                            </div>
                            <div class="split">
                                <p class="checkout_text">Taxes</p>
                                <p class="checkout-taxes">Calculated at Checkout</p>
                            </div>
                            <div class="line"></div>
                            <div class="split">
                                <p class="subtotal">Subtotal</p>
                                <p class="checkout-subtotal"><?php echo number_format($total);?> <span
                                        style=" text-decoration:underline;">đ</span>
                                </p>
                            </div>
                            <div class="split">
                                <label for="" class="subtotal"> Your name </label>
                                <input type="text" style="height:30px;border-radius:10px" name=" customer"
                                    placeholder="Enter your name...">
                            </div>

                            <div class="split">
                                <label for="" class="subtotal"> Address </label>
                                <input type="text" style="height:30px;border-radius:10px" name="address"
                                    placeholder="Enter your address...">
                            </div>

                            <div class="split">
                                <label for="" class="subtotal"> Phone </label>
                                <input type="numbe" style="height:30px;border-radius:10px" name="phone"
                                    placeholder="Enter your phone...">
                                <input type="hidden" name="total" value="<?php echo $total; ?>">
                            </div>

                            <div class="split">
                                <label for="" class="subtotal"> Email </label>
                                <input type="email" style="height:30px;border-radius:10px" name="email"
                                    placeholder="Enter your email...">

                            </div>


                            <input type="submit" class="checkout_button" name="order" value="ORDER">
                            </input>

                        </div>
                    </div>
                </div>


            </div>


        </form>

    </main>

    <!-- FOOTER SECTION -->


    <footer>
        <div class=" footer-section">
            <div class="about">
                <ul class="about-items">
                    <a href="./term.php">
                        <li> Policy |</li>
                    </a>
                    <a href="./term.php">
                        <li> Terms of Service |</li>
                    </a>
                    <a href="./contact-us.php">
                        <li> Contact Us | </li>
                    </a>
                    <a href="./help.php">
                        <li>Help</li>
                    </a>
                </ul>
            </div>

            <!-- SOCIAL MEDIA SECTION -->
            <div class="social-media">
                <ul class="social-platform">

                    <a href="https://www.facebook.com/dejavu354321/">
                        <li><i class="fa-brands fa-square-facebook"></i> </li>
                    </a>
                    <a href="https://twitter.com/Steam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                        <li><i class="fa-brands fa-twitter"></i> </li>
                    </a>
                    <a href="https://www.youtube.com/@HuyPhamChannel">
                        <li><i class="fa-brands fa-youtube"></i> </li>
                    </a>

                </ul>

            </div>
            <img class="footer-icon" src="./images/Logo (1).png" alt="">

        </div>
        <div>

            <p class="copy-right"> © 2HKT. All rights reserved. All trademarks and registered trademarks are
                the
                property of their respective owners.
            </p>
        </div>


    </footer>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>