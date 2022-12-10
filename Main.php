<?php
include ("./auth/auth_session.php");
// NOT ALLOWED USERS TO ACCESS DICRECTLY TO THE PAGE
// if (!defined('_INCODE'))    
// die('You are not allowed to access this page, Please comback to Login Page !');     // Kiểm tra xem hằng số có tồn tại hay không 

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/Logo.svg">
    <link rel="stylesheet" href="./css/main.css" />
    <!-- FONTAWESOME ICONS  -->
    <link rel="stylesheet" href="./icons/fontawesome-free-6.2.1-web/css/all.min.css" />

    <!-- INTER FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />

    <!-- MDB SECTION -->


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />



    <title>2HKT | SALES GAME PAGE</title>
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
                            <li><a class="dropdown-item text-black" href="#ex1-tab-1">New Release</a></li>
                            <li><a class="dropdown-item text-black" href="#ex1-tab-2">Top sellers</a></li>
                            <li><a class="dropdown-item text-black" href="#ex1-tab-3">Game Category </a></li>
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
                            <li><a class="dropdown-item text-black" href="./refund_policy.html"">Refund Policy</a></li>
               
                </ul>
            </div>
          
            <div class=" dropdown btn-group">
                                    <a class="dropdown-toggle text-white rounded " role='button'
                                        style="background-color:#2C2C2C " data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        COMMUNITY
                                    </a>
                                    <ul class="dropdown-menu text-center" style="background:#D9D9D9;">

                                        <li><a class="dropdown-item text-black"
                                                href="https://discord.gg/D7eqPyD6Dk">Dicussion Forums</a></li>
                                        <li>
                                            <hr class="dropdown-divider bg-black" />
                                        </li>
                                        <li><a class="dropdown-item text-black"
                                                href="https://www.facebook.com/dejavu354321/">Facebook</a></li>
                                        <li><a class="dropdown-item text-black"
                                                href="https://twitter.com/Steam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a>
                                        </li>
                                        <li><a class="dropdown-item text-black"
                                                href="https://www.youtube.com/channel/UCnDCn1E4DZBZxl6vASyg4aw">Youtube</a>
                                        </li>
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
                        <li><a class="dropdown-item" href="./edit_profile.php">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="./logout.php">Log out</a></li>
                    </ul>


                    <div class="name-user ">
                        <h3> 2HKT</h3>
                    </div>
                </div>



            </div>
            </div>


        </nav>
    </header>
    <!-- MAIN SECTION -->
    <section>
        <div class="content">

            <!-- SEARCHING SECTON -->

            <div class="search">
                <form action="#">
                    <button>
                        <i class="fa fa-search" style="font-size: 18px;">
                        </i>
                    </button>

                    <input type="text" placeholder=" Search" name="search">

                    <span class="cart-items"><a href="./Cart.html"> <i class="fa-solid fa-cart-shopping fa-3x"></i> </a>
                    </span>

                </form>
            </div>

            <!-- RECOMMEND SECTION -->
            <div class="game-intro-display">
                <div class="intro-page">

                    <h2 class="recommned-title"> Recommned</h2>
                    <h3 class="underline"></h3>
                </div>

                <!-- SLIDESHOW SECTION -->

                <div class="triangle-right">

                </div>

                <div class="game-slideshow-container">
                    <div class="game-slideshow">
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <!-- <div class="numbertext">1 / 3</div> -->
                            <img src="./images/the-entropy.jpg">
                            <div class="text"> The Entropy Centre</div>

                        </div>

                        <div class="mySlides fade">
                            <!-- <div class="numbertext">2 / 3</div> -->
                            <img src="./images/ResidentEvil.jpg">
                            <div class="text"> Resident Evil 7</div>
                        </div>

                        <div class="mySlides fade">
                            <!-- <div class="numbertext">3 / 5</div> -->
                            <img src="./images/god_of_war.png">
                            <div class="text"> God Of War </div>
                        </div>

                        <div class="mySlides fade">
                            <!-- <div class="numbertext">4 / 5</div> -->
                            <img src="./images/day_light2.jpg">
                            <div class="text"> Day Light 2</div>
                        </div>

                        <div class="mySlides fade">
                            <!-- <div class="numbertext">5 / 5</div> -->
                            <img src="./images/doom3.jpg">
                            <div class="text"> Doom 3</div>
                        </div>
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>



                    <br>


                    <!-- The dots/circles -->
                    <div class="dot-section" style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        <span class="dot" onclick="currentSlide(5)"></span>
                        <span class="dot" onclick="currentSlide(6)"></span>
                    </div>
                </div>

                <div class="triangle-left">

                </div>


            </div>

            <!-- CATEGORY SECTION -->
            <div class="game-catagory-container">
                <div class="game-category">
                    <!-- SALE-OFFER SECTION -->
                    <div class="sale-offer">
                        <div class="sale-offer-header">
                            <h1 class="sale-offer-title "> SALES OFFER</h1>
                            <div class="prev-next">

                            </div>

                        </div>

                        <div class="box-sale-offer-container">
                            <div class="box-sale-offer">
                                <div class="game-offer">
                                    <a href="">
                                        <img src="./images/shadow-tactics.jpg" alt="">

                                        <div class="game-infor">
                                            <h3 class="game-name"> Shadow Tactics - Aiko's Choice</h3>

                                            <div class="game-price">
                                                <div class="game-tags">
                                                    <p>-60%</p>
                                                </div>

                                                <div class="game-discount">

                                                    <p class="old-price"> đ 159,998</p>
                                                    <p class="new-price">đ 63,998</p>

                                                </div>

                                                <div class="game-configuration">
                                                    <i class="fa-brands fa-apple"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </a>
                                </div>


                                <div class="game-offer">
                                    <a href="">
                                        <img src="./images/Splinter-cell.png" alt="">

                                        <div class="game-infor">
                                            <h3 class="game-name"> Shadow Tactics - Aiko's Choice</h3>

                                            <div class="game-price">
                                                <div class="game-tags">
                                                    -60%
                                                </div>

                                                <div class="game-discount">

                                                    <p class="old-price"> đ 159,998</p>
                                                    <p class="new-price">đ 63,998</p>

                                                </div>

                                                <div class="game-configuration">
                                                    <i class="fa-brands fa-windows"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="game-offer">
                                    <a href="">
                                        <img src="./images/Wildcat_gun.png" alt="">

                                        <div class="game-infor">
                                            <h3 class="game-name"> Shadow Tactics - Aiko's Choice</h3>

                                            <div class="game-price">
                                                <div class="game-tags">
                                                    -60%
                                                </div>

                                                <div class="game-discount">

                                                    <p class="old-price"> đ 159,998</p>
                                                    <p class="new-price">đ 63,998</p>

                                                </div>

                                                <div class="game-configuration">
                                                    <i class="fa-brands fa-playstation"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="game-offer">
                                    <a href="">
                                        <img src="./images/doom3_offer.png" alt="">

                                        <div class="game-infor">
                                            <h3 class="game-name"> Shadow Tactics - Aiko's Choice</h3>

                                            <div class="game-price">
                                                <div class="game-tags">
                                                    -60%
                                                </div>

                                                <div class="game-discount">

                                                    <p class="old-price"> đ 159,998</p>
                                                    <p class="new-price">đ 63,998</p>

                                                </div>

                                                <div class="game-configuration">
                                                    <i class="fa-brands fa-windows"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="game-offer">
                                    <a href="./Doom3.html">
                                        <img src="./images/giga_bash.png" alt="">

                                        <div class="game-infor">
                                            <h3 class="game-name"> Shadow Tactics - Aiko's Choice</h3>

                                            <div class="game-price">
                                                <div class="game-tags">
                                                    -60%
                                                </div>

                                                <div class="game-discount">

                                                    <p class="old-price"> đ 159,998</p>
                                                    <p class="new-price">đ 63,998</p>

                                                </div>

                                                <div class="game-configuration">
                                                    <i class="fa-brands fa-playstation"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- GAME CATEGORY SECTION -->
                    <div class="game-category-items">
                        <div class="sale-offer">
                            <div class="sale-offer-header">
                                <h1 class="sale-offer-title "> GAME CATEGORY</h1>

                            </div>

                            <div class="game-category-offer">
                                <div class="game-item">
                                    <a href="#ex1-tab-3">
                                        <img src="./images/Adventure.png" alt="">

                                    </a>
                                </div>

                                <div class="game-item">
                                    <a href="#ex1-tab-3">
                                        <img src="./images/Rouge-like.png" alt="">


                                </div>

                                </a>

                                <div class="game-item">
                                    <a href="#ex1-tab-3">
                                        <img src="./images/Casual.png" alt="">



                                    </a>
                                </div>

                                <div class="game-item">
                                    <a href="#ex1-tab-3">
                                        <img src="./images/Role-playing.png" alt="">



                                    </a>
                                </div>


                            </div>

                        </div>

                    </div>


                    <!-- COMING SOON SECTION -->
                    <div class="game-coming-soon">
                        <div class="game-coming-soon-header">
                            <h1 class="coming-soon-title"> COMING SOON</h1>
                            <div class="prev-next">

                            </div>
                        </div>


                        <div class="game-box-release">
                            <div class="game-update">
                                <a href="">
                                    <img src="./images/Speed.png" alt="">

                                    <div class="game-infor-release">
                                        <h3 class="game-name-release">Need for Speed™ Unbound </h3>

                                        <div class="game-price">
                                            <div class="game-tags-release">
                                                SOON
                                            </div>

                                            <div class="game-discount">

                                                <p class="new-price-release"> <span style="text-decoration:underline">
                                                        đ</span> 1,090,000</p>

                                            </div>

                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="game-update">
                                <a href="">
                                    <img src="./images/Callisto.png" alt="">

                                    <div class="game-infor-release">
                                        <h3 class="game-name-release">The Callistro Protocol </h3>

                                        <div class="game-price">
                                            <div class="game-tags-release">
                                                SOON
                                            </div>

                                            <div class="game-discount">

                                                <p class="new-price-release"> ... Update </p>

                                            </div>

                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="game-update">
                                <a href="">
                                    <img src="./images/High_on_life.png" alt="">

                                    <div class="game-infor-release">
                                        <h3 class="game-name-release">High On Life </h3>

                                        <div class="game-price">
                                            <div class="game-tags-release">
                                                SOON
                                            </div>

                                            <div class="game-discount">

                                                <p class="new-price-release"> <span style="text-decoration:underline">
                                                        đ</span> 559,000</p>

                                            </div>

                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="game-update">
                                <a href="">
                                    <img src="./images/football.png" alt="">

                                    <div class="game-infor-release">
                                        <h3 class="game-name-release">Football Manager 2023 </h3>

                                        <div class="game-price">
                                            <div class="game-tags-release">
                                                SOON
                                            </div>

                                            <div class="game-discount-release">

                                                <p class="new-price-release">đ 63,998</p>
                                            </div>

                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="game-update">
                                <a href="">
                                    <img src="./images/Goat.png" alt="">

                                    <div class="game-infor-release">
                                        <h3 class="game-name-release">Goat Simulator 3 </h3>

                                        <div class="game-price">
                                            <div class="game-tags-release">
                                                SOON
                                            </div>

                                            <div class="game-discount">

                                                <p class="new-price-release"> <span style="text-decoration:underline">
                                                        đ</span> 499,916</p>

                                            </div>

                                        </div>
                                    </div>

                                </a>
                            </div>

                        </div>





                    </div>


                </div>
            </div>

            <!-- GAME-GALLERY-SECTION -->
            <div class="noteworthy">
                <div class="triangle-right-gallery "></div>
                <div class="triangle-left-gallery "></div>

                <!-- GAME-TABS-SECTION -->
                <!-- Tabs navs -->
                <ul class="nav nav-tabs mb-3 w-50 d-flex justify-content-evenly align-content-between" id="ex1"
                    role="tablist" style="padding-left:12%;">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-white  fst-italic active" style="background:#e31eeaba; border-bottom-right-radius:10px;
                        border-bottom-left-radius:10px" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1"
                            role="tab" aria-controls="ex1-tabs-1" aria-selected="true">New Release</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-white fst-italic " style="background:#e31eeaba; border-bottom-right-radius:10px;
                        border-bottom-left-radius:10px " id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2"
                            role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Top Sellers</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-white fst-italic" style="background:#e31eeaba; border-bottom-right-radius:10px;
                        border-bottom-left-radius:10px" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3"
                            role="tab" aria-controls="ex1-tabs-3" aria-selected="false">Game Category </a>
                    </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex1-content">
                    <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <div class="d-flex flex-column mb-3" style="padding-left:8%; padding-top:2%">
                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/tycoon.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Espresso Tycoon Prologue: Underwater</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-playstation fs-2"></i>

                                            <div class="price-discount">
                                                <div class="new-price-2 fs-3 " style="letter-spacing:1px ;"> Free </div>

                                            </div>
                                        </div>
                                        <div>
                                            <p class="type-game"> Sandbox, Life Sim, Strategy, Casual</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="p-4 ">
                                <a class="ripple d-flex w-75 " href="#!">
                                    <img alt="example" class="img-fluid rounded" style="width:260px; height:150px"
                                        src="./images/chant.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>The Chant</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-2"></i>

                                            <div class="price-discount">
                                                <div class="new-price-2 fs-3 " style="letter-spacing:1px ;"> <span
                                                        style="text-decoration:underline">đ</span> 790,000</div>

                                            </div>
                                        </div>
                                        <div>
                                            <p class="type-game"> Action, Adventure, Exploration</p>
                                        </div>

                                    </div>

                                </a>
                            </div>

                            <div class="p-4 ">
                                <a class="ripple d-flex w-75 " href="#!">
                                    <img alt="example" class="img-fluid rounded" style="width:260px; height:150px"
                                        src="./images/w2c.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>WRC Generation - The FIA WRC Official Game</h3>
                                        <div class="configuration-price p-2">
                                            <div>
                                                <i class="fab fa-windows fs-2"></i>
                                                <i class="fab fa-playstation fs-2"></i>
                                                <i class="fab fa-xbox fs-2"></i>

                                            </div>

                                            <div class="price-discount">
                                                <div class="new-price-2 fs-3 " style="letter-spacing:1px ;"> <span
                                                        style="text-decoration:underline">đ</span> 420,000</div>

                                            </div>
                                        </div>
                                        <div>
                                            <p class="type-game">Racing, Simulation, Realistic, PvP</p>
                                        </div>

                                    </div>

                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- TAB-TOP-SELLERS SECTION -->
                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                        <div div class="d-flex flex-column mb-3" style="padding-left:8%; padding-top:2%">

                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- TAB-COMING-SOON SECTION -->
                    <div class="tab-pane fade fs-" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                        <div div class="d-flex flex-column mb-3" style="padding-left:8%; padding-top:2%">
                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="p-4">
                                <a class="ripple d-flex w-75" href="#!">
                                    <img alt="example" class="img-fluid rounded-start" style="width:260px; height:150px"
                                        src="./images/doors.png" />
                                    <div class="w-75 p-2 text-white rounded-end" style="background-color: #9639d4da">
                                        <h3>Doors: Paradox</h3>
                                        <div class="configuration-price p-2">
                                            <i class="fab fa-windows fs-3"></i>

                                            <div class="price-discount">
                                                <div class="game-tags-discount"> -10%
                                                </div>
                                                <div class="new-price-2"> <span
                                                        style="text-decoration:underline">đ</span> 148,500</div>
                                            </div>


                                        </div>
                                        <div>
                                            <p class="type-game"> Puzzle, Multiple Endings, Adventure, Mystery</p>
                                        </div>
                                    </div>

                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- SPECIAL OFFER SECTION -->
            <div class="special-offer p-4">
                <div class="special-offer-header  ">
                    <h1 class="special-offer-title"> SPECIAL OFFER</h1>
                    <div class=" d-flex justify-content-evenly align-items-center pt-lg-4"
                        style="width:85vw; padding-left:8%">
                        <!-- CARD GAME 1 -->
                        <div class="card px-5" style="width: 60rem; height:450px;
                        background: linear-gradient(to right, rgba(106,17,203,0.5), rgba(37,117,252,0.5))">
                            <img src="./images/god-of-war.png" class="card-img-top ms-lg-5 mt-lg-3 h-75 w-75 rounded-1 "
                                alt="Sunset Over the Sea" />

                            <div class="card-body px-3 text-center pb-2">
                                <p class="card-text text-white fs-5 fw-bold pb-1">God of War Ragnarok Collector's
                                    Edition</p>
                                <p class="fs-4 text-black fw-bold"> <span class="text-decoration-underline">đ</span>
                                    6,000,000 </p>
                            </div>

                        </div>

                        <!-- CARD GAME 2 -->
                        <div class="card ms-lg-4 " style="width:60rem; height:450px;
                        background: linear-gradient(to right, rgba(106,17,203,0.5), rgba(37,117,252,0.5))">
                            <img src="./images/Bayonetta3.png" class="card-img-top ms-lg-5 mt-lg-3 w-75 h-75 rounded"
                                alt="Sunset Over the Sea" />

                            <div class="card-body px-5 text-center">
                                <p class="card-text text-white fs-5 fw-bold">Bayonetta 3 Trinity Masquerade Edition></p>
                                <p class="fs-5 text-black fw-bold"> <span class="text-decoration-underline">đ</span>
                                    2,550,000 </p>
                            </div>
                        </div>

                        <!-- CARD GAME 3 -->
                        <div class="ms-lg-4">
                            <div class="card" style="width: 25rem; height:220px;
                            background: linear-gradient(to right, rgba(106,17,203,0.5), rgba(37,117,252,0.5))">
                                <div class="px-3">
                                    <img src="./images/Verminide.png" class="card-img-top pt-3 h-50"
                                        alt="Sunset Over the Sea" />

                                    <div
                                        class="card-body h-25 px-3 pb-lg-1  text-center d-flex justify-content-evenly ">
                                        <p class=" text-white text-center">
                                            Offer ends 8 Nov at 12:00 am
                                        </p>
                                        <div class="w-25 h-75 fw-bold text-center ms-lg-3"
                                            style="background:rgb(15 225 35);">
                                            -100%
                                        </div>
                                        <p class="card-text text-white fs-6 ms-lg-5 ">
                                            Free
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="pt-3">
                                <div class="card"
                                    style="width: 25rem; height:220px;  background: linear-gradient(to right, rgba(106,17,203,0.5), rgba(37,117,252,0.5))">
                                    <div class="pb-2 px-3">
                                        <img src="./images/risingstorm2.png" class="card-img-top pt-3 h-50"
                                            alt="Sunset Over the Sea" />
                                        <div
                                            class="card-body h-25 px-3 pb-lg-1  text-center d-flex justify-content-evenly">
                                            <p class=" text-white text-center">
                                                Offer ends 8 Nov at 12:00 am
                                            </p>
                                            <div class="w-25 h-75 fw-bold text-center ms-lg-3"
                                                style="background:rgb(15 225 35);">
                                                -100%
                                            </div>
                                            <p class="card-text text-white fs-6 ms-lg-5 ">
                                                Free
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>

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
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

    <script src="./javascript/main.js"></script>
</body>

</html>