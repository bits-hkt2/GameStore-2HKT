<?php
session_start();
require_once './db/db.php';

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
    <link rel="icon" href="./images/Logo.svg">
    <link rel="stylesheet" href="css/search.css" />
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
                <a href="./Main.php">
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
                                    href="https://www.youtube.com/channel/UCnDCn1E4DZBZxl6vASyg4aw">Youtube</a></li>
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
                        <h3>
                            <?php echo $_SESSION["username"];   ?></h3>
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
            <!-- copy từ đây-->
            <div class="search">
                <form action="search.php" method="post">
                    <button type="submit" name="submit-search">
                        <i class="fa fa-search" style="font-size: 18px;">
                        </i>
                    </button>

                    <input type="text" name="search" placeholder="Search">
                    <!-- tới đây-->
                    <span class="cart-items"><a href="./Cart.php"> <i class="fa-solid fa-cart-shopping fa-3x"></i> </a>
                    </span>

                </form>
            </div>

            <div class="search-results-header">
                <h1 class="search-results-title"> Search results</h1>
                <a class="back_button" href="./Main.php">Back</a>
            </div>

            <div class="gamelist-container">
                <?php
                if (isset($_POST["submit-search"])) {
                    $search = mysqli_real_escape_string($con, $_POST["search"]);
                    $sql = "SELECT * FROM products WHERE id in(1,2,3,7,8,9,10,11,12,13,14,15,16,18,19) AND name_product LIKE '%$search%' OR name_search LIKE '%$search%' OR 
        price LIKE '%$search%' OR platform LIKE '%$search%'";
                    $result = mysqli_query($con, $sql);
                    $queryResults = mysqli_num_rows($result);

                    if ($queryResults > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="game-offer">
                    <a href="Detail.php?id=<?php echo $row["id"]; ?>">
                        <img src="<?php echo $row['image']; ?>" alt="">

                        <div class="game-infor">
                            <h3 class="game-name">
                                <?php echo $row['name_product']; ?>
                            </h3>

                            <div class="game-price">
                                <div class="game-tags">
                                    <p><span> - </span>
                                        <?php echo $row['discount']; ?> <span> %</span>
                                    </p>
                                </div>

                                <div class="game-discount">

                                    <p class="old-price"> đ
                                        <?php echo $row['old price']; ?>
                                    </p>
                                    <p class="new-price">
                                        <?php echo number_format($row['price']); ?>
                                    </p>

                                </div>

                                <div class="game-configuration">
                                    <i class="fa-brands fa-windows"></i>
                                </div>

                            </div>
                        </div>

                    </a>
                </div>
                <?php
                        }

                    }
                } else {
                    echo "There are no results matching your search";
                }
                ?>
            </div>
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
            <!-- Custom scripts -->
            <script type="text/javascript"></script>

            <script src="./javascript/main.js"></script>
</body>

</html>