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
    <link rel="icon" href="./images/Logo (1).png">
    <title>2HTK | HELP PAGE </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./css/help.css">
    <link rel="stylesheet" href="./assets/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel=" icon" href="./assets/img/logo.jpg">
    <script src="./scripts/myScript.js"></script>
</head>

<body style="background:#b680c9;">
    <header>
        <a class="goBack" href="./Main.php">BACK</a>
    </header>
    <!-- SUPPORT SECTION -->
    <div class="support-section" id="support-container">
        <div class="support-header">
            <h3 class="support-title">Still require assistance ?</h3>
            <p class="support-guide">Wondering unsure how to get help ?. Please <u>click</u> on the boxes below. <span
                    class="handpoint-image"><i class="fa-solid fa-hand-point-down"></i> </span> </p>
        </div>

        <div class="support-box">
            <div class="boxes" id="box-1">
                <div class="boxes-details">

                    <div class="icon-boxes"><i class="fa-solid fa-users-rectangle"></i></div>
                    <p class="boxes-content">Join the <a href="https://www.facebook.com/dejavu354321/"; style="text-decoration:underline">Facebook community</a> now to find out more.</p>
                </div>
            </div>
            <div class="boxes" id="box-2">
                <div class="boxes-details">

                    <div class="icon-boxes"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    <p class="boxes-content">To resolve the issue of accurate and suitable, look up the location, order,
                        and error system <a href="/account_website.php"; style="text-decoration:underline">Here</a>.</p>
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
</body>

</html>