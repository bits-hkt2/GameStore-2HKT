<?php
    require('./db/db.php');
    session_start();
    function function_alert($message) {
      
        // Display the alert box 
        echo "<script>alert('$message');</script>";
        
    }
   
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page        
            header("Location: Main.php");
            
        } else {
            echo '<script language="javascript">';
            echo 'alert("LOGIN UNSUCCESSFULL, PLEASE CHECK EMAIL OR PASSWORD");';
            echo 'window.location = "index.php"';
            echo '</script>';
        } 
    } else {
        
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>2HKT | GAME STORE ONLINE </title>
<!-- MDB icon -->
<link rel="icon" href="./images/Logo (1).png" type="image/x-icon" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
<!-- MDB -->
<link rel="stylesheet" href="css/mdb.min.css" />
<link rel="stylesheet" href="./css/loginForm.css">
</head>
<style>
.div {
    width: 400px;
    height: 300px;
    box-shadow: 16px 14px 20px #0000008c;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 22%;
    right: 14%;
}

.div::before {
    content: "";
    background-image: conic-gradient(#ef00ff 20deg, transparent 120deg);
    width: 150%;
    height: 150%;
    position: absolute;
    animation: rotate 2s linear infinite;
}

.div::after {

    width: 300px;
    height: 190px;

    position: absolute;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ff0052;
    font-size: larger;
    letter-spacing: 5px;
    box-shadow: inset 20px 20px 20px #0000008c;
}

@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(-360deg);
    }
}
</style>

<body style="background:#c709b4f0;  background-image:url('./images/login.png'); width:1400px;">
    <!-- Pills navs -->
    <div style="display:block; margin:90px 400px; background:#af46a4c5" class="pill-nav border border-2 p-5 rounded-3">

        <ul class="nav nav-pills nav-justified mb-3 w-100" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="log-in nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
        </ul>

        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content w-100">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">

                <form action="" role="form" method="POST">
                    <div class="text-center mb-3 text-white">
                        <p>Sign in with:</p>
                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn-github btn btn-primary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <p class="text-center text-white">or:</p>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="username" id="loginName" class="form-control text-white" name="username"
                            required />
                        <label class="form-label text-white" for="loginName">Username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" class="form-control text-white" name="password"
                            required />
                        <label class="form-label text-white" for="loginPassword">Password</label>
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" name="remember" type="checkbox" value=""
                                    id="loginCheck" />
                                <label class="form-check-label text-white" for="loginCheck"> Remember me
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a class="text-white text-decoration-underline fs-5" href="admin.php">Admin Login</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Login</button>


                    <!-- REGISTER BUTTONS -->
                    <div class="text-center text-white">
                        <p>Not a member? <a class="text-decoration-underline text-black" href="register.php">Register
                            </a>
                            <span>
                                <i class="fas fa-long-arrow-alt-right ms-1 text-black"></i></span>
                        </p>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <?php
    }
    ?>
    <!-- Pills content -->


    <div class="div">
        <img style="width:300px; height:150px" src="./images/Logo.svg" alt="">
        <h4 style="line-height: 40px;
    color: white;
    text-align: center;
    font-family: cursive;
    letter-spacing: 1px;">Welcome to 2HKT !</h4>

    </div>

    <!-- MDB -->
    <script type=" text/javascript" src="js/mdb.min.js">
    </script>
    <!-- Custom scripts -->
    <script type="text/javascript">

    </script>
</body>

</html>