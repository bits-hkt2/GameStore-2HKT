<?php
 
 if(isset($_POST["submit"])) {

    $username = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    
  
    if (empty($username) || empty($email) || empty($subject) || empty($message)) {
            
        header("Location: contact-us.php?error");        
      
    } else {
        $to = "huysanti123456@gmail.com";
      
        if(mail($to,$subject,$message,"From: ".$email."")) {
            header("Location: contact-us.php?success");   
        }
    }
 } else {
    header("Location: contact-us.php");
 }


?>