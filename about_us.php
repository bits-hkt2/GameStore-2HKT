<?php
session_start();
require_once 'db/db.php';
// AUTHENTICATION VERIFYCATION  
if (!isset($_SESSION['username'])) {
  
    header('Location: unqualified.php');
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./images/Logo (1).png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2HKT | ABOUT US PAGE</title>
</head>
<style>
.container {
    width: 100vw;
    height: 100vh;
    background-color: #B680C9;

}

.about_container {
    width: 50%;
    background-color: aqua;
    height: 50%;

}

.aboutus_content {
    width: 100%;
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 2%;
}


.heading {
    font-family: "DM Sans", sans;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 50px;
    color: blue;
    margin-top: 60px;
    margin-left: 100px;
    height: 50px;
}

.aboutus-title {
    font-family: "Poppins", sans-serif;
    font-style: italic;
    font-weight: 700;
    font-size: 25px;
    line-height: 34px;
    color: #333333;
    margin-left: 20px;

}


.aboutus_image {
    margin-right: 10%;
}

.heading-image img {
    width: 200px;
    height: 200px;
    padding-left: 6%;
    margin-bottom: 50px;

}

/*  HEADER SECTION   ---------------->  */

.navigation {
    width: 100vw;
    height: 120px;
    background-color: #2C2C2C;

}

.web_icon {
    width: 100px;
    height: 90px;
    border-radius: 10px;
    padding-left: 20px;

}

.list-items {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding-top: 20px;
    background: #2C2C2C;

}

.nav-items {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    width: 44vw;
    margin-right: 30%;
    gap: 11px;

}

.items {
    font-size: 30px;
    line-height: 30px;
    font-weight: 700;
    text-transform: uppercase;
    ;
    color: #B1AFAF;

}


.profile {
    display: flex;

}

.profile_img {
    width: 80px;
    height: 80px;
}

.status-circle {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: green;
    border: 2px solid white;
    top: 17px;
    right: 9.1%;
    position: absolute;
}


.name-user {
    padding: 19px 22px;
    margin-top: 10px;

}


.name-user h3 {
    font-size: 25px;
    font-weight: 400;
    line-height: 30px;
    color: #FFF;
}

.icon {
    display: none;
}

@media screen and (min-width:1023px) {
    .heading {
        margin-bottom: 50px;
    }

}

@media screen and (min-width: 768px) and (max-width:1023px) {

    .heading {
        text-align: center;
        margin-right: 101px;
        margin-bottom: 30px;
    }

    .aboutus_content {
        display: contents;
    }

    .aboutus-title {
        font-size: 15px;
    }

    .aboutus_image {
        margin-left: 76px;
        margin-top: 20px;

    }

    .heading-image {
        margin: 10px 35%;


    }

}

@media screen and (max-width:768px) and (min-width:300px) {
    .aboutus_content {
        display: block;
    }

    .aboutus-title {
        font-size: 25px;
        font-weight: 500;
    }

    .heading {
        padding-left: 150px;
        width: 34%;
        height: 7px;
    }

    .aboutus_image {
        margin-top: 30px;
        justify-content: center;
        padding-left: 75px;
    }

    .heading-image img {
        width: 150px;
        height: 100px;

    }
}
</style>

<body style="background:#b680c9;">
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
                            <li><a class="dropdown-item text-black" href="./refund_policy.php"">Refund Policy</a></li>
               
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
    <section>
        <div class="container">
            <div class="aboutus_container">
                <div class="heading"> ABOUT US</div>
                <div class="heading-image">
                    <img src="./images/Logo (1).png" alt="">
                </div>

                <div class="aboutus_content">
                    <div class="aboutus-title"> .Since then, we have grown both in terms of our global presence and
                        product design competence <br>. We concentrate on how our customers connect to and interact with
                        the digital environment for each of our goods <br>. To create really distinctive and impactful
                        experiences, we maintain design at the forefront of everything we produce,<br> in every team and
                        discipline.</div>

                    <div class="aboutus_image">
                        <img src="./assets/img/about-us.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>