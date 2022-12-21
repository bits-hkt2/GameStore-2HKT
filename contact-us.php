<?php
session_start();

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
    <link rel="icon" href="/gamestore-hkt2/images/Logo.svg">
    <title>2HKT | CONTACT US PAGE </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body style="background: #D28EEA">
    <?php
            $Msg = '';

            if(isset($_GET['error'])) {
                $Msg = '<p style="color: #e82222;
                position: absolute;
                top: 16%;
                left: 30%;
                width: 200px;
                height: 35px;
                background-color: #c659c6;
                text-align: center;
                padding: 5px;
                border-radius: 10px;">Please Fill in the Blanks !</p>';
                echo $Msg ;
            }
            if(isset($_GET['success'])) {
                $Msg = '<p style="color: #18ef0b;
                position: absolute;
                top: 16%;
                left: 30%;
                width: 200px;
                height: 35px;
                background-color: #c659c6;
                text-align: center;
                padding: 5px;
                border-radius: 10px;>Your Feedback has been sent !</p>';
                echo  $Msg ;
            }
            

            ?>

    <!--Section: Contact v.2-->
    <section class="mb-4 p-lg-3">


        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
            contact us
            directly. Our team will come back to you within
            a matter of hours to help you.</p>
        <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form action="./contact-us_function.php" id="contact-form" name="contact-form" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input style="height:50px;font-size:18px" type="text" id="subject" name="subject"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea style="height:120px;font-size:17px" type="text" id="message" name="message"
                                    rows="2" class="form-control md-textarea"></textarea>

                            </div>

                        </div>
                    </div>
                    <!--Grid row-->


                    <div class="text-center text-md-left" style="margin-top:20px;">
                        <button type="submit" name="submit" value="SEND" style="width: 79px;
                        height: 38px;
                        border-radius: 6px;
                        border: none;
                        font-size: 14px;
                        background-color: #1b5bc4c4;
                        color: white;
                        font-weight: 500;"> SEND</button>
                        <a href="./Main.php" class="btn btn-primary mx-4"
                            onclick="document.getElementById('contact-form').submit();">BACK</a>
                    </div>
                </form>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Ho Chi Minh City, 756000 , Vietnam</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 0359221014</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>2hkt@webgame.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.history.href);

    }
    </script>
</body>