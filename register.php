<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>2HKT | GAME STORES ONLINE </title>
<!-- MDB icon -->
<link rel="icon" href="./images/Logo (1).png" type="image/x-icon" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
<!-- MDB -->
<link rel="stylesheet" href="./css/mdb.min.css" />
<link rel="stylesheet" href="./css/loginForm.css" />
</head>

<body style="background:#c709b4f0;  background-image:url('./images/login.png')">
    <!-- Pills navs -->
    <div style="display:block; margin:90px 400px; background:#af46a4c5" class="pill-nav border border-2 p-5 rounded-3">
        <?php

        // XỬ LÝ ĐĂNG KÝ
        
        require('./db/db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $name = stripslashes($_REQUEST['name']);
            $name = mysqli_real_escape_string($con, $name);
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            
            // CHECK USERNAME AND EMAIL IF EXISTS
            
            $checkUser = 'SELECT email,username FROM users WHERE email="'.$email.'" or username= "'.$username.'"';
            
            $result = mysqli_query($con, $checkUser);
            $row    = mysqli_fetch_assoc($result);
            
            if(!empty($row)){
                if($row['email']==$email){
                    echo "That email already exists. Please try again";
                }
                else if($row['username']==$username){
                    echo "That username already exists. Please try again";
                }
                echo "
                    <h3>Register not successfully.</h3><br/>
                    <p class='link'>Click here to <a href='register.php'>Register</a> again</p>
             ";
            } else { 
                
                $query = "INSERT INTO `users` (email,username,password,name)
                        VALUES ('$email', '$username','" . md5($password) . "' ,'$name')";
                
                $result = mysqli_query($con, $query);
                if ($_POST["password"] != $_POST["confirm_password"]) {
                    echo "<script> alert(' Please enter same passwords ') </script>";
                }
                else if ($result) {
                    echo "
                      <h3>You are registered successfully.</h3><br/>
                      <p class='link'>Click here to <a href='login.php'>Login</a></p>
                   ";
                } else {
                    echo "
                      <h3>Required fields are missing.</h3><br/>
                      ";
                }
            }           
        } else {
        ?>


        <ul class="nav nav-pills nav-justified mb-3 w-100" id="ex1" role="tablist">

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="true">Register</a>
            </li>
        </ul>

        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content w-100">

            <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form onSubmit="return validate();" class="form" action="" method="post" ">
                    <p class=" text-center text-white fs-3">Register Form </p>

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" name="name" class="form-control text-white" />
                        <label class="form-label text-white" for="registerName">Name</label>
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" name="username" class="form-control text-white"
                            required />
                        <label class="form-label text-white" for="registerUsername">Username</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" name="email" class="form-control" style="color:white" />
                        <label class="form-label text-white" for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control text-white" />
                        <label class="form-label text-white" for="registerPassword">Password</label>
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="confirm_password" name="confirm_password"
                            class="form-control text-white" />
                        <label class="form-label text-white" for="registerRepeatPassword">Repeat
                            password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                            aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label text-white" for="registerCheck">
                            I have read and agree to the terms
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-3">Create Account</button>
                </form>
            </div>

            <?php
        }
            ?>


        </div>

    </div>
    <!-- Pills content -->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script>
    function validate() {

        var a = document.getElementById("password").value;
        var b = document.getElementById("confirm_password").value;
        if (a != b) {
            alert("Passwords do no match");
            return false;
        }
    }
    </script>
</body>

</html>