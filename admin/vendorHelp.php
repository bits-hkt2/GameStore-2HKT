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
    <link rel="stylesheet" href="/css/huyHelp.css">
    <link rel="icon" href="/images/Logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>2HKT | ADMIN HELP 🛒️📦📱</title>
</head>

<body>
    <!-- NAVBAR SECTION -->
    <div class="container">
        <nav>
            <div class="nav">
                <ul>
                    <li class="logo">
                        <a class="logo__a" href="/admin/VendorPage.php">
                            <img src="/images/Logo (1).png" alt="">
                            <span class="nav-item">2HKT</span>
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
                <p class="copyright">&copy; Copyright 2022 - 2HKT.com</p>
            </div>

        </nav>

    </div>

    <!-- SUPPORT SECTION -->
    <div class="support-section">
        <div class="support-header">
            <h3 class="support-title">Still require assistance ?</h3>
            <p class="support-guide">Wondering unsure how to get help ?. Please <u>click</u> on the boxes below.
                <span class="handpoint-image"><i class="fa-solid fa-hand-point-down"></i> </span>
            </p>
        </div>

        <div class="support-box">
            <div class="boxes">
                <div class="boxes-details">

                    <div class="icon-boxes"><i class="fa-solid fa-users-rectangle"></i></div>
                    <p class="boxes-content">Join the <a href="https://www.facebook.com/dejavu354321/"; style="text-decoration:underline">Facebook community</a> now to find out more.</p>
                </div>
            </div>
            <div class="boxes">
                <div class="boxes-details">

                    <div class="icon-boxes"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    <p class="boxes-content">To resolve the issue of accurate and suitable, look up the location,
                        order,
                        and error system <a href="../admin/refund_policy2.php"; style="text-decoration:underline">Here</a>.</p>
                </div>
            </div>
            <div class="boxes">
                <div class="boxes-details">

                    <div class="icon-boxes"><i id="chat-box" onclick="openForm()" class="fa-solid fa-comment-dots"></i>
                    </div>
                    <p class="boxes-content">Other questions or futher information... Chat with us now !</p>
                </div>
            </div>
        </div>

        <div class="support-social">
            <p class="support-guide">We always here to support our beloved sellers. Working time from 6.00 am to
                18.00
                pm. Following us at.</p>

            <ul class="social-media">
                <li class="social-media-items"><a href="https://www.facebook.com/dejavu354321/"><i
                            class="fa-brands fa-facebook"></i></a></li>
                <li class="social-media-items"><a href="https://www.youtube.com/channel/UCnDCn1E4DZBZxl6vASyg4aw"><i
                            class="fa-brands fa-youtube"></i></a></li>
                <li class="social-media-items"><a href="https://www.linkedin.com/in/robert-pahm/"><i
                            class="fa-brands fa-linkedin"></i></a></li>
                <li class="social-media-items"><a
                        href="https://twitter.com/Steam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i
                            class="fa-brands fa-twitter"></i></a></li>


            </ul>
        </div>
    </div>

    <!-- POPUP CHATBOX ---->
    <div class="chat-popup" id="myForm">
        <form class="form-container">
            <h1>Chat</h1>
            <span class="admin-chatbox"><img width="80px" height="70px" src="/images/Logo (1).png" alt=""></span>
            <label for="msg"><b>Message</b></label>
            <textarea placeholder="Type message.." name="msg" required></textarea>

            <button type="submit" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>


    <script src="/javascript/chatBox.js"></script>
</body>

</html>