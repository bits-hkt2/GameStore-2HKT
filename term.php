<?php
session_start();
    // AUTHENTICATION VERIFYCATION
    if (!isset($_SESSION['username'])) {
  
        header('Location: unqualified.php');
    }

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./assets/logo.jpg">
    <link rel="stylesheet" href="./css/term.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" icon" href="./images/Logo (1).png">


    <title>2HKT | POLICY & TERM </title>
</head>


<body style="background: #D28EEA">
    <div class="term">
        <h2 class="heading"> 2HKT | POLICY & TERM </h2>
        <p class="date_update"><strong> Last update : </strong> December 2022</p>
        <p class="title">These Terms of Use ("Terms") set forth the legal terms and conditions under which you may
            use
            this website, whether as a guest, a contributor of material, or a registered user. Please read these
            Terms
            carefully before using this website since they govern its use, publishing of material to it, and access
            to
            it. If you do not abide by the terms and conditions established on this website, including these Terms,
            or
            for any other reason at any time, 2HKT has the right to restrict or terminate your access to this
            Website
            or to cancel or suspend your registration.</p>
    </div>

    <div class="criteria">
        <h4 class="content">MODIFICATIONS TO THESE TERMS </h4>
        <p class="title">Parts of these Terms may be updated, modified, added, or removed at any time by 2HKT.
            Please
            review these Terms often for updates. Following the publishing of such modifications, your continued use
            of
            this website will be construed as your acceptance of those changes.</p>

    </div>
    <div class="criteria">
        <h4 class="content">CHANGES TO THIS WEBSITE </h4>
        <p class="title">We may introduce new services or modify current services in an effort to enhance our
            Website's
            functionality for you on a continuing basis. If 2HKT makes such changes, both the new services and any
            modifications to existing services will be subject to these Terms.</p>

    </div>
    <div class="criteria">
        <h4 class="content">USER INFORMATION</h4>
        <p class="title">Without the owner's full permission and authorization, you are not permitted to use anybody
            else's Logitech ID, password, or account at any time. Your failure to uphold these duties will result in
            loss or harm, which 2HKT cannot and will not be responsible for.</p>

    </div>

    <div>
        <button style="background:rgb(222, 81, 198); border:none">
            <a style="border:none; background:rgb(222, 81, 198); padding: 5px 10px" href="./Main.php">Back</a>
        </button>
    </div>

</body>

</html>