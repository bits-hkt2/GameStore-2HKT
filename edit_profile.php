<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
    <!-- main codeeeeee -->
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
            height: 50vh;
          ">
                <h1 class="fw-bold d-flex align-items-start" style="color: rgb(204, 204, 204)">
                    Edit Profile
                </h1>
                <div class="d-flex justent-center align-self-center align-content-center align-items-center w-75 h-75">
                    <!-- FORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTION -->
                    <form method="post" enctype="multipart/form-data" action="./edit_profile.php"
                        class="d-flex flex-column flex-fill">
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="text" id="formWhite" class="form-control" maxlength="255"
                                value="<?php echo $newUser; ?>" />
                            <label class="form-label" for="formWhite" style="color: rgb(204, 204, 204)">Username</label>
                        </div>
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="text" id="formWhite" class="form-control" maxlength="255"
                                value="<?php echo $newAddress; ?>" />
                            <label class="form-label" for="formWhite" style="color: rgb(204, 204, 204)">Address</label>
                        </div>
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="password" id="formWhite" class="form-control" maxlength="255"
                                value="<?php echo $oldPassword; ?>" />
                            <label class="form-label" for="formWhite" style="color: rgb(204, 204, 204)">Current
                                Password</label>
                        </div>
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="password" id="formWhite" class="form-control" maxlength="255"
                                value="<?php echo $newPassword; ?>" />
                            <label class="form-label" for="formWhite" style="color: rgb(204, 204, 204)">New
                                Password</label>
                        </div>
                        <div id="button-responsive" class="d-flex justify-content-center align-items-center"
                            style="margin: 16px 0">
                            <button id="update-responsive" type="submit" name="submit" class="btn btn-light flex-fill"
                                data-mdb-ripple-color="dark" style="font-size: 16px">
                                Update
                            </button>
                            <button id="back-responsive" type="submit" name="back" class="btn btn-light flex-fill"
                                data-mdb-ripple-color="dark" style="font-size: 16px">
                                Back
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

</body>
<style>
    @media (min-width: 768px) {
        #div-responsive {
            width: 550px;
        }

        #back-responsive {
            margin-left: 5px;
        }

        #update-responsive {
            margin-right: 5px;
        }
    }

    @media (max-width: 768px) {
        #button-responsive {
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        #update-responsive {
            margin-bottom: 5px;
            margin-top: -10px;
            display: flex;
            width: 100%;
            justify-content: center;
        }

        #back-responsive {
            margin-bottom: -10px;
            display: flex;
            width: 100%;
            justify-content: center;
        }

        #div-responsive {
            width: 80%;
        }
    }
</style>

</html>