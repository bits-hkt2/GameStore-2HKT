<?php
  // AUTHENTICATION VERIFYCATION\
if (!defined('_INCODE'))
  die('You are not allowed to access this page, Please comback to Login Page !');     // Kiểm tra xem hằng số có tồn tại hay không  


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
                <a href="/Main.html">
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
                            <li><a class="dropdown-item text-black" href="./Main.html">Home</a></li>
                            <li>
                                <hr class="dropdown-divider bg-black" />
                            </li>
                            <li><a class="dropdown-item text-black" href="./Main.html">New Release</a></li>
                            <li><a class="dropdown-item text-black" href="./Main.html">Top sellers</a></li>
                            <li><a class="dropdown-item text-black" href="./Main.html">Game Category </a></li>
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
                            <li><a class="dropdown-item text-black" href="./order_payment.html">Orders and Payments</a>
                            </li>
                            <li><a class="dropdown-item text-black" href="./account_website.html">Account and
                                    Website</a></li>
                            <li><a class="dropdown-item text-black" href="./refund_policy.html">Refund Policy</a></li>

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
                            <li><a class="dropdown-item text-black" href="  ">Youtube</a></li>
                        </ul>
                    </div>


                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>


                <div class="profile ">
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                        aria-expanded="false">
                        <img src="./images/icon 1.png" alt="">
                    </a>

                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="./edit_profile.html">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="./loginForm.html">Log out</a></li>
                    </ul>


                    <div class="name-user ">
                        <h3> 2HKT</h3>
                    </div>
                </div>



            </div>
            </div>


        </nav>
    </header>
    <nav>
        <ul class="breadcrumb">
            <li><a href="#">Support Center</a></li>
            <li><a href="orders_payments.html">Orders & Payments</a></li>
            <li><a href="article_list.html">Order's support</a></li>

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
                        assistance! <a href="#">Contact us</a> </p>

                </div>
                <div class="child">
                    <h3> Want to get help and maybe make some new friends? </h3>
                    <p> We've got a great community here on 2HKT, which is always eager to help out. Please make sure
                        not to share private data on public forums, though! <a href="#">Join the community</a> </p>

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