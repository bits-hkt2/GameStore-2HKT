

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact form</title>
        <link rel="stylesheet" href="contact.css">
        
    </head>
    <body>
        <div class="container">
            <h1>asdfkllk;</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam omnis minima officiis! Possimus quis voluptates itaque ducimus, minus, aspernatur enim sit expedita dolorum error ratione veritatis sapiente! Repellendus ratione autem consectetur voluptate odit possimus corrupti dolore accusantium quos, quaerat iusto illum voluptatum aliquid asperiores recusandae corporis inventore, nulla assumenda soluta?</p>
            <div id="button" onclick="oo()"></div>
        </div>
        <div class="contact">
            <div class="contactbox">
                <img src="close.png" alt="" class="close">
                <br>
                <h1>Contact Us</h1>
                <form action="contact.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject">
                    <label for="message">Message</label>
                    <textarea name="message" cols="30" rows="10"></textarea>
                    <input type="submit" value="Send" name="submit">
                </form>
            </div>
        </div>
        <script>
            function oo() {
                document.getElementById("button").style.backgroundColor = "transparent black"
            }
            document.querySelector(".contactbox").style.visibility = "hidden";
            document.getElementById("button").addEventListener("click", function(){
                const div = document.querySelector('.contactbox');
                div.classList.replace('.contactbox','.con');
                document.querySelector(".contact").style.display =" flex";
                document.querySelector(".container").style.filter = "blur(10px)";
                document.querySelector(".contactbox").style.visibility = "visible";
                document.querySelector(".con").style.visibility = "visible"
            });
            document.querySelector(".close").addEventListener("click", function(){
                document.querySelector(".contact").style.display = "none";
                document.querySelector(".container").style.filter = "blur(0px)";
                document.querySelector(".contactbox").style.visibility = "hidden  ";
            });
        </script>


        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require './sendemail/phpmailer/src/Exception.php';
        require './sendemail/phpmailer/src/PHPMailer.php';
        require './sendemail/phpmailer/src/SMTP.php';

        if(isset($_POST["submit"])){
            $mail = new PHPMailer(true);
            
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'vubacson2510@gmail.com';
            $mail->Password = 'jofvwtzzztpekeyx';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            
            $mail->setFrom('vubacson2510@gmail.com');

            $mail->addAddress($_POST["email"]);
            
            $mail->isHTML = true;

            $mail->Subject = $_POST["name"];
            $mail->Subject = $_POST["email"];
            $mail->Body = $_POST["message"];

            $mail->send();

            echo "<script>
                alert('Sent Successfully');
            </script>";
        }

/*        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $to = "vubacson2510@gmail.com";
            $subject = $message;

            $message = "Message: " . $message;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers = "Name: {$name} Email: {$email}";

            $conn = new mysqli('localhost','root','','asdf');
            if($conn->connect_error){
                die("Connection Failed : ". $conn->connect_error);
            } else {
                $stmt = $conn->prepare("insert into registration(name, email, message) values(?, ?, ?)");
                $stmt->bind_param("sss", $name, $email, $message);
                $stmt->execute();
                echo $execval;
                echo "Mail successfully sent";
                $stmt->close();
                $conn->close();
            }

            $mail = mail($to,$subject,$message,$headers);




            require "vendor/autoload.php";



            $mail = new PHPMailer(true);

            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

            $mail->isSMTP();
            $mail->SMTPAuth = true;

            $mail->Host = "vubacson2510@gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->Username = "you@example.com";
            $mail->Password = "password";

            $mail->setFrom($email, $name);
            $mail->addAddress("dave@example.com", "Dave");

            $mail->Subject = $name;
            $mail->Body = $message;

            $mail->send();







        }*/
        ?>


    </body>





</html>