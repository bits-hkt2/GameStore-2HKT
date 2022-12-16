<?php
    require('./db/db.php');
    session_start();
   
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
                echo "<div class='form'>
                    <h3>Incorrect Username/password.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                    </div>";
        }
    } else {
?>

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
<link rel="stylesheet" href="css/mdb.min.css" />
<link rel="stylesheet" href="./css/loginForm.css">
</head>

<body style="background:#c709b4f0;  background-image:url('./images/login.png')">
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
                        <label class="form-label text-white" for="loginName">username</label>
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
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
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



    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>