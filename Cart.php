<?php   

if (!defined('_INCODE'))
    die('You are not allowed to access this page, Please comback to Login Page !');     // Kiểm tra xem hằng số có tồn tại hay không 


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
        <!-- <nav class="navigation">
            <div class="list-items">
            <img class="web_icon" src="./images/Logo (1).png" alt="logo">
                <ul class="nav-items ">   
                <a href="#"> 
                    <li class="items">
                        store
                        <span><i class="fa-solid fa-chevron-down fa-2xs"></i> </span>  
                    </li>
                    </a>
                <a href="#"> 
                    <li class="items">
                        about
                        <span><i class="fa-solid fa-chevron-down fa-2xs"></i> </span>  
                    </li>
                    </a>
                <a href="#"> 
                    <li class="items ">
                        community
                        <span><i class="fa-solid fa-chevron-down fa-2xs"></i> </span>  
                    </li>
                    </a>
                    <a href="#"> 
                        <li class="items">
                            support
                            <span><i class="fa-solid fa-chevron-down fa-2xs"></i> </span>  
                        </li>
                        </a>
                </ul>


                <div class="profile ">
                    <a  href=" #"><img class="profile_img" src="./images/Jerry.png" alt="">
                        <div class=""></div>
                    <div class="status-circle">
                    </div>
                    </a>
                    <div class="name-user ">
                        <h3 class=""> 2HKT</h3>
                    </div>
                </div>
                </div>  
        </nav> -->

        <nav class="navigation">

            <div class="list-items">
                <a href="/Main.html">
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
                            <li><a class="dropdown-item text-black" href="./Main.html">Home</a></li>
                            <li>
                                <hr class="dropdown-divider bg-black" />
                            </li>
                            <li><a class="dropdown-item text-black" href="./Main.html">New Release</a></li>
                            <li><a class="dropdown-item text-black" href="./Main.html">Top sellers</a></li>
                            <li><a class="dropdown-item text-black" href="./Main.html">Coming soon </a></li>
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

                    <!-- 
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a> -->
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



        </nav>
    </header>
    <!--MAIN-->
    <main>
        <!--search bar-->
        <!-- SEARCHING SECTON -->

        <div class="search">
            <form action="#">
                <button>
                    <i class="fa fa-search" style="font-size: 18px;">
                    </i>
                </button>

                <input type="text" id="mySearch" placeholder=" Search something..." name="search">

                <span class="cart-items"><a href="#"> <i class="fa-solid fa-cart-shopping fa-3x"></i> </a> </span>

            </form>
        </div>
        <!--my cart section-->
        <div class="my_cart_header">
            <span class="my_cart">My Cart</span>
            <a class="back_button" href="./Main.html">Back</a>
        </div>
        <!--main content-->
        <div class="biggest_container">
            <!--cart list-->
            <div>

                <div class="child_container">
                    <div class="card">


                        <div class="card-infor">
                            <div class="image-game">
                                <img class="card-image" src="./images/cyberpunk.svg" alt="game pic">

                            </div>

                            <div class="game-details">
                                <div class="game-detail">

                                    <h3 class="game-title">Cyberpunk 2077</h3>
                                    <p class="game-price"><span style="text-decoration:underline">đ</span> 990,000</p>
                                </div>

                                <div class="bao">
                                    <i class="fa-brands fa-windows"></i>
                                    <a href="#" class="bao-remove"> <span
                                            style="text-decoration:underline; color:white;"> Remove</span> </a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="child_container">
                    <div class="card">


                        <div class="card-infor">
                            <div class="image-game">
                                <img class="card-image" src="./images/Alteller.svg" alt="game pic">

                            </div>

                            <div class="game-details">
                                <div class="game-detail">

                                    <h3 class="game-title">Cyberpunk 2077</h3>
                                    <p class="game-price"><span style="text-decoration:underline">đ</span> 990,000</p>
                                </div>

                                <div class="bao">
                                    <i class="fa-brands fa-windows"></i>
                                    <a href="#" class="bao-remove"> <span
                                            style="text-decoration:underline; color:white;"> Remove</span> </a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>


            <!--check out-->
            <div class="child_container">
                <div class="checkout">
                    <div class="container">
                        <p class="estimated_total">Estimated Total</p>

                        <div class="split">
                            <p class="checkout_text">Price</p>
                            <p class="checkout_text"><u>đ</u> 990,000</p>
                        </div>
                        <div class="split">
                            <p class="checkout_text">Sale Discount</p>
                            <p class="checkout_text">- <span style="text-decoration:underline">đ</span> 240,000 </p>
                        </div>
                        <div class="split">
                            <p class="checkout_text">Taxes</p>
                            <p class="checkout-taxes">Calculated at Checkout</p>
                        </div>
                        <div class="line"></div>
                        <div class="split">
                            <p class="subtotal">Subtotal</p>
                            <p class="checkout-subtotal"><span style="text-decoration:underline;">đ</span> 750,000</p>
                        </div>
                        <button class="checkout_button">CHECK OUT</button>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <!-- FOOTER SECTION -->


    <footer>
        <div class="footer-section">
            <div class="about">
                <ul class="about-items">
                    <a href="./term.html">
                        <li> Policy |</li>
                    </a>
                    <a href="./term.html">
                        <li> Terms of Service |</li>
                    </a>
                    <a href="./contact-us.html">
                        <li> Contact Us | </li>
                    </a>
                    <a href="./help.html">
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

            <p class="copy-right"> © 2HKT. All rights reserved. All trademarks and registered trademarks are the
                property of their respective owners.
            </p>
        </div>


    </footer>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>