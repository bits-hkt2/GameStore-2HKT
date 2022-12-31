<?php
session_start();
require_once 'db/db.php';
  // AUTHENTICATION VERIFYCATION\
  if (!isset($_SESSION['username'])) {
  
    header('Location: unqualified.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>2HKT | ODERS & PAYMENT PAGE</title>
    <link rel="icon" href="./images/Logo.svg">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="./css/orders_payments.css">
</head>

<body>

    <!-- HEADER SECTION -->
    <header>
        <nav class="navigation">

            <div class="list-items">
                <a href="/Main.php">
                    <img class="web_icon" src="./images/Logo (1).png" alt="">

                </a>

                <!-- Large button groups (default and split) -->


                <div class="nav-menu-items d-flex justify-content-between w-50">
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
                            <li><a class="dropdown-item text-black" href="./Main.php">Game Category </a></li>
                        </ul>

                    </div>

                    <div class="dropdown btn-group">
                        <a class="dropdown-toggle text-white rounded " role='button' style="background-color:#2C2C2C "
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            ABOUT
                        </a>
                        <ul class="dropdown-menu text-center" style="background: #D9D9D9">
                            <li><a class="dropdown-item text-black" href="./about_us.html">2HKT.com</a></li>
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


                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <?php

      

                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                $username = $_SESSION['username'];

                $get_name_sql = "SELECT * FROM users WHERE `username`='$username'";
                $get_name_result = mysqli_query($con, $get_name_sql);

                if (mysqli_num_rows($get_name_result) == 1) {
                    $get_name_row = mysqli_fetch_assoc($get_name_result);
                    $user_id = $get_name_row['id'];


                    $sql = "SELECT * FROM `file` WHERE `id` = (SELECT MAX(id) FROM `file` WHERE `user_id`='$user_id')";
                    $res = mysqli_query($con, $sql);



                    if (mysqli_num_rows($res) == 1) {
                        while ($images = mysqli_fetch_assoc($res)) {

                ?>

                <div class="profile">

                    <a class="" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                        aria-expanded="false">
                        <img style="width: 110px;height: 90px; border-radius:10px"
                            src="uploadedFile/<?= $images['image_url'] ?>" alt="">

                    </a>

                    <ul class=" dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="./edit_profile.php">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="./edit_avatar.php">Edit Avatar</a></li>
                        <li><a class="dropdown-item" href="./logout.php">Log out</a></li>
                    </ul>


                    <div class=" name-user">
                        <h3>
                            <?php echo $_SESSION['username']; ?>
                        </h3>
                    </div>
                </div>

                <?php }
                    } else {
                        echo '
    <div class="profile">
    <a class="" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
    aria-expanded="false">
    <img style="width: 110px;height: 90px; border-radius:10px" src="./images/Logo.svg" alt="">

</a>
<ul class=" dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="./edit_profile.php">Edit Profile</a></li>
    <li><a class="dropdown-item" href="./edit_avatar.php">Edit Avatar</a></li>
    <li><a class="dropdown-item" href="./logout.php">Log out</a></li>
</ul>

 <div class="name-user">
        <h3>
             ' . $_SESSION["username"] . '
</h3>
</div>
</div>';




                    }
                }

                ?>



            </div>
            </div>


        </nav>
    </header>
    <nav>
        <ul class="breadcrumb">
            <li><a href="#">Support Center</a></li>
            <li><a href="orders_payment.php">Orders & Payments</a></li>


        </ul>
    </nav>

    <main>
        <article>
            <h2>How do I buy a game?</h2>
            <div id="box">
                <p>It's super-easy. First, you need to add the game to your cart. You can do it in two places: <br>

                    - The catalog page, by clicking on the game's price, or <br>
                    - The product page (like this one), by clicking on the "Add to Cart" button. <br>

                    Once you've got one or more items in your Cart, click on the Cart icon in the upper-right corner of
                    the screen, and select "Checkout Now". You can also do this from the product page (where the "Add to
                    Cart" button will be replaced by "Checkout Now"). <br>

                    Once in Checkout, you will have to select your payment method (credit card, PayPal etc.) and, after
                    all data is entered, click on "Pay for your order now".</p>
                <img src="images/refund-policy.png" alt="img">
            </div>
        </article>


        <div id="more">
            <h2> Do you have more questions? </h2>
            <div id="bottom">
                <div class="child">
                    <h3> Didn't find the answer you are looking for? </h3>
                    <p> If you were unable to find the answers you were looking for, please reach out and someone from
                        our friendly and knowledgeable support team will be happy to help with their top-notch
                        assistance! </p>

                </div>
                <div class="child">
                    <h3> Want to get help and maybe make some new friends? </h3>
                    <p> We've got a great community here on 2HKT, which is always eager to help out. Please make sure
                        not to share private data on public forums, though! </p>

                </div>
            </div>
        </div>

    </main>
    <footer>

    </footer>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>