<!DOCTYPE html>

<html>

<head>

    <link rel="icon" href="./images/Logo.svg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <title>Image Upload Using PHP</title>
</head>
<style>
form {
    margin: 20px auto;

}

input {
    color: white;
}

input[type="submit"] {
    color: black;
}
</style>

<body>

    <div class="bg-image d-flex justify-content-center align-items-center align-self-center align-content-center "
        style="
        background-image: url('https://static.vecteezy.com/system/resources/previews/002/072/005/original/modern-gradient-purple-blue-background-free-vector.jpg');
        height: 100vh;
      ">
        <div class="mask d-flex justify-content-center align-items-center" style="
          background: linear-gradient(
            40deg,
            rgba(247, 61, 237, 0.651),
            rgba(255, 64, 239, 0.623) 100%
          );
        ">
            <div id="div-responsive"
                class="hover-shadow d-flex justify-content-center flex-column align-items-center container-sm align-self-center align-content-center"
                style="
            background: linear-gradient(
              90deg,
              rgba(53, 53, 53, 0.8),
              rgb(49, 49, 49, 0.8) 100%
            );
            max-height: 550px;
            height: 50%;
          ">
                <h1 class="fw-bold d-flex align-items-start"
                    style="color: rgb(204, 204, 204); margin-top: 50px;margin-bottom:30px;">
                    Edit Avatar
                </h1>
                <div class="d-flex justent-center align-self-center align-content-center align-items-center w-75 h-75">
                    <?php if (isset($_GET['error'])): ?>
                    <p><?php echo $_GET['error']; ?></p>
                    <?php endif ?>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="file" name="my_image">

                            <input type="submit" name="submit" value="Upload">
                        </div>
                    </form>
                </div>
                <div id="button-responsive" class="d-flex justify-content-center align-items-center">
                    <a id="back-responsive" type="submit" href="./Main.php" class="btn btn-light flex-fill"
                        data-mdb-ripple-color="dark" style="font-size: 16px;margin-bottom:10px;">
                        Back
                    </a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>