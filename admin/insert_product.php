<?php
// AUTHENTICATION VERIFYCATION
if (!defined('_INCODE'))
    die('You are not allowed to access this page, Please comback to Login Page !'); // Kiểm tra xem hằng số có tồn tại hay không 



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/addProduct.css">
    <link rel="icon" href="/images/Logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>2HKT| SEND EMAIL PAGE ️🛒️📦📱</title>
</head>

<style>

</style>

<body>

    <!-- NAVBAR SECTION -->
    <div class="container">
        <nav>
            <div class="nav">
                <ul>
                    <li class="logo">
                        <a class="logo__a" href="#">
                            <img src="/images/Logo (1).png" alt="">
                            <span class="nav-item">2HKT</span>
                        </a>
                    </li>
                    <li><a href="./VendorPage.html">
                            <i class="fa-solid fa-house-chimney"></i>
                            <span class="nav-item">Home</span>
                        </a></li>
                    <li><a href="./insert_product.html">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="nav-item">Send Email</span>
                        </a></li>
                    <li><a href="./view_product.html">
                            <i class="fa-solid fa-box-open"></i>
                            <span class="nav-item">View Product</span>
                        </a></li>
                    <li><a href="./vendorHelp.html">
                            <i class="fa-solid fa-circle-info"></i>
                            <span class="nav-item">Help</span>
                        </a></li>
                    <li class="logout"><a href="/loginForm.html">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="nav-item">Log Out</span>
                        </a></li>

                </ul>
                <p class="copyright">&copy; Copyright 2022 - Huyzada.com</p>
            </div>

        </nav>

        <!-- MAIN SECTION -->
        <section class="main">

            <!-- FORM SECTION -->
            <div class="form-container">

                <div class="admin-add-product">


                    <form method="POST" enctype="multipart/form-data" action="./insert_product.php">
                        <?php 
                        
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $message = $_POST["message"];
                        
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\SMTP;
                        
                        $mail = new PHPMAILER(true);
                        
                        $mail->isSMTP();
                        $mail->SMTPAuth = true;
                        
                        $mail->Host = "smtp.example.com";
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        
                        $mail->Port = 587;
                        
                        $mail->Username = "";
                        $mail->Password = "";
                        
                        $mail->setFrom($email, $name);
                        $mail->addAddress();
                        
                        $mail->Subject = "";
                        $mail->Body = $message;
                        $mail->send();
                        echo "Mail sent"; 
                        
                        ?>
                        <h3>Send Email </h3>


                        <label for="" class=" label">Name: </label>
                        <input type="text" placeholder="Enter product name" name="name" class="box" />

                        <label for="" class=" label">Email </label>
                        <input type="number" placeholder="Enter email" name="email" class="box"> <br>

                        <!-- <label for="" class="label">Image: </label>
                        <input type="file" accept="image/png, image/jpeg, image/gif, image/jfif, .csv" id="name"
                            name=" image" class="box">
                        <br> -->

                        <label for="" class=" label label_des">Description: </label> <br>
                        <textarea name="message" rows="10" cols="84" placeholder="Type here..."></textarea>
                        <br>
                        <button type=" submit" value="Submit" name="submit" class="btn">Send</button>

                    </form>


                </div>
            </div>
        </section>

    </div>

</body>

</html>