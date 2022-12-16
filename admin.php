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
                <a class="log-in nav-link active" id="tab-admin" data-mdb-toggle="pill" href="#pills-admin" role="tab"
                    aria-controls="pills-admin" aria-selected="true">Admin</a>
            </li>
        </ul>

        <!-- Pills navs -->

        <!-- Pills content -->

        <div class="tab-content w-100">
            <div class="tab-pane fade show active" id="pills-admin" role="tabpanel" aria-labelledby="tab-admin">
                <form action="admin_login.php" role="form" method="POST">
                    <p class="text-center text-bg-danger w-75" style="margin-left:11%"> FOR ADMIN ONLY</p>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="loginName" name="username" class="form-control text-white" required />
                        <label class="form-label text-white" for="loginName"> username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" name="password" class="form-control text-white"
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
                            <a class="text-white text-decoration-underline fs-5" href="login.php">Back to Login Page</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="SIGN IN"> </input>


                </form>
            </div>
        </div>

    </div>



    <!-- Pills content -->



    <!-- MDB -->
    <script type=" text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>