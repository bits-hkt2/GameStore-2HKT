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
                <form action="sendmail.php" method="POST">
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

</body>





</html>