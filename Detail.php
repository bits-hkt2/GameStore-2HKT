<?php
session_start();
require_once 'db/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($con, $sql);

if (!isset($_SESSION['username'])) {
  
    header('Location: unqualified.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FONTAWESOME ICONS  -->
    <link rel="stylesheet" href="./icons/fontawesome-free-6.2.1-web/css/all.min.css" />


    <!-- INTER FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />
    <link rel="icon" href="./images/Logo.svg">
    <link rel="stylesheet" href="./css/Doom3.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <title>2HKT | DOOM 3</title>
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


                <div class="nav-menu-items d-flex justify-content-between w-50" style="margin-right:8%;">
                    <a href="./Main.php" class="active"></a>

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
                        <h3> <?php echo $_SESSION['username']; ?></h3>
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

            </div>

            <!-- GAME INFOR SECTION -->
            <div class="game">
                <?php 
                foreach ($result as $value)  {?>

                <div class="game-title">
                    <h2><?php echo $value['name_product']; ?></h2>

                    <div class="return">

                        <a href="./Main.php" class="button-back">
                            Back
                        </a>
                    </div>


                </div>

                <div class="game-content-container">


                    <div class="game-content">

                        <!-- GAME TRAILER -->
                        <!-- Container for the image gallery -->
                        <div class="container">

                            <!-- Full-width images with number text -->
                            <div class="mySlides">
                                <div class="numbertext">1 / 4</div>
                                <img src="<?php echo $value['image2'];  ?>" style="width:92.5%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 4</div>
                                <img src="<?php echo $value['image3'];  ?>" style="width:92.5%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 4</div>
                                <img src="<?php echo $value['image4'];  ?>" style="width:92.5%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 4</div>
                                <img src="<?php echo $value['image5'];  ?>" style="width:92.5%">
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>


                            <!-- Thumbnail images -->
                            <div class="row1">
                                <div class="column">
                                    <img class="demo cursor" src="<?php echo $value['image2'];  ?>" style="width:95%"
                                        onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="<?php echo $value['image3'];  ?>" style="width:95%"
                                        onclick="currentSlide(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="<?php echo $value['image4'];  ?>" style="width:95%"
                                        onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>

                                <div class="column">
                                    <img class="demo cursor" src="<?php echo $value['image5'];  ?>" style="width:95%"
                                        onclick="currentSlide(4)" alt="Mountains and fjords">
                                </div>


                            </div>

                            <div class="game-infor">

                                <p class="game-script">
                                    <?php echo $value['description']; ?>
                                </p>

                            </div>


                        </div>

                        <!-- BIIL GAME & CONFIGURE  -->
                        <div class="game-price">
                            <div class="game-invoice">
                                <div class="game-invoice-infor">

                                    <div class="sales-off-tag">
                                        <span class="number-sales-off">
                                            - <?php echo $value['discount'] . "%"; ?>
                                        </span>
                                    </div>

                                    <div class="game-sales">
                                        <h4 class="sale-infor"> Sales ends 9/6/2024 at 10:00 PM</h4>
                                        <p class="old-price">
                                            <span>đ
                                            </span> <?php echo number_format($value['old price']);   ?>
                                        </p>
                                        <h2 class="new-price"> <span>đ</span> <?php echo $value['price']; ?></h2>

                                    </div>
                                </div>

                                <div class="check-out">
                                    <a href="#">
                                        <button class="btn-buy">Buy Now</button>
                                    </a>

                                    <form action="Cart_function.php?id=<?php echo $value["id"];  ?>" method="POST">
                                        <button type="submit" class="btn-add" name="add-to-cart">Add to cart</button>
                                    </form>

                                </div>

                            </div>

                            <!-- GAME TAGS SECTION -->
                            <div class="game-tags">
                                <div class="tag"> <?php echo $value['platform']; ?></div>



                            </div>

                            <div class="game-configuration">
                                <ul class="game-detail">
                                    <li>Initial Release: <span
                                            class="game-detail-infor"><?php echo $value['initial_date'];   ?></span>
                                    </li>
                                    <h3 class="underline"></h3>

                                    <li>Developer: <span
                                            class="game-detail-infor"><?php echo $value['developer'];   ?></span>
                                    </li>
                                    <h3 class="underline"></h3>

                                    <li>Publisher: <span class="game-detail-infor">Bethesda Softworks</span></li>
                                    <h3 class="underline"></h3>

                                    <li>Platform: <span class="game-detail-infor"><i
                                                class="fa-brands fa-windows"></i></span></li>


                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
            </div>

            <!-- USER REVIEWS SECTION -->


            <div class=" user-reviews">
                <h2> User Reviews</h2>
                <h3 class="underline-2"></h3>

                <div class="feedback">
                    <div class="user-feedback">

                        <div class="user-comments">
                            <div class="user-account-infor">

                                <img style="width:50px; height:50px" src="./images/Jerry.png" alt="">

                                <div class="user-comments-detail">
                                    <p class="user-account"> CreppyJerry101</p>
                                    <span class="date-post"> 23/10/2022</span>
                                </div>

                            </div>
                            <div class="comment-content">
                                <h4> I love beating up as much as beating up children</h4>
                            </div>

                            <h3 class="underline-3"></h3>

                            <div class="rate-comment">
                                <button class="reaction-comment"> <i class="fa-regular fa-thumbs-up"></i> <span>
                                        Helpful
                                    </span></button>

                                <button class="reaction-comment"> <i class="fa-regular fa-thumbs-down"></i><span>
                                        No</span></button>
                            </div>

                            <div class="people-review text-white">
                                <p> 16 people found this review helpful</p>
                            </div>
                        </div>


                    </div>

                    <div class="write-feedback">
                        <h3> Write a review for Doom 3</h3>
                        <textarea style="width:100%" name="" id="" cols="80" rows="10" style="font-size:15pt;">
                            </textarea>

                        <div class="w-50">
                            <a href="#"> <button class="btn-review">Post review</button></a>
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

            <p class="copy-right"> © 2HKT. All rights reserved. All trademarks and registered trademarks are the
                property of their respective owners.
            </p>
        </div>


    </footer>


    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="./javascript/main2.js"></script>
</body>

</html>