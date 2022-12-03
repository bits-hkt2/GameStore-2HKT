<?php
session_start();
if ($_SESSION['vendor-login'] !== true) {
    header("Location: ./unqualified.php");

}
?>
<?php

$path_dir = '';
$error = '';
$Name = '';
$Price = '';
$Image = '';
$Description = '';

function clean_text($string)
{

    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;

}

if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $error .= '<p><label class="text-danger"> Please Enter Your Name Product </label></p>';
    } else {
        $Name = clean_text($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
            $error .= '<p><label class="text-danger"> Only Letter and White space </label></p>';
        }
    }

    if (empty($_POST["price"])) {
        $error .= '<p><label class="text-danger"> Please Enter Your Price </label></p>';
    } else {
        $Price = clean_text($_POST["price"]);
        if (!preg_match("/^((?:\d{1,3}[,\.]?)+\d*)$/", $Price)) {
            $error .= '<p><label class="text-danger"> Please Enter Valid Price </label></p>';
        }
    }



    if (empty($_POST['message'])) {
        $error .= '<p><label class="text-danger"> Please Type The Description </label></p>';
    } else {

        $Description = clean_text($_POST["message"]); // Get it into a variable
        //   echo "<h1>$Description</h1>"; // Print it!
    }


    if ($error == '') {
        $file_open = fopen("./data/add_product.csv", "a");
        $no_rows = count(file("./data/add_product.csv"));
        if ($no_rows > 1) {
            $no_rows = ($no_rows - 1) + 1;
        }

        $form_data = array(
            'sr_no' => $no_rows,
            'name' => $Name,
            'price' => $Price,
            'image' => $_FILES['image']['name'],
            'message' => $Description
        );

        fputcsv($file_open, $form_data);
        $error = '<label class="text-success"> Data Stored Successfully </label>';
        $Name = '';
        $Price = '';
        $_FILES['image']['name'] = '$' . '';
        $Description = '';

        fclose($file_open);

    }
    ;


}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/addProduct.css">
    <link rel="icon" href="./assets/img/images.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>ADD PRODUCT | HUYZADA ️🛒️📦📱</title>
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
                            <img src="./assets/img/logo.jpg" alt="">
                            <span class="nav-item">HUYZADA</span>
                        </a>
                    </li>
                    <li><a href="./vendorPage.php">
                            <i class="fa-solid fa-house-chimney"></i>
                            <span class="nav-item">Home</span>
                        </a></li>
                    <li><a href="./insert_product.php">
                            <i class="fa-solid fa-cart-plus"></i>
                            <span class="nav-item">Add Product</span>
                        </a></li>
                    <li><a href="./view_product.php">
                            <i class="fa-solid fa-box-open"></i>
                            <span class="nav-item">View Product</span>
                        </a></li>
                    <li><a href="./vendorPage.php">
                            <i class="fa-solid fa-circle-info"></i>
                            <span class="nav-item">Help</span>
                        </a></li>
                    <li class="logout"><a href="./backend/logout.php">
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
                        <h3>Add A Product</h3>

                        <?php echo $error; ?>
                        <label for="" class=" label">Name: </label>
                        <input type="text" placeholder="Enter product name" name="name" class="box"
                            value="<?php echo $Name; ?>" />

                        <label for="" class=" label">Price: </label>
                        <input type="number" placeholder="Enter product price" name="price" class="box"
                            id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency"
                            value="<?php echo $Price; ?>"> <br>

                        <label for="" class="label">Image: </label>
                        <input type="file" accept="image/png, image/jpeg, image/gif, image/jfif, .csv" id="name"
                            name=" image" class="box">
                        <br>

                        <label for="" class=" label label_des">Description: </label> <br>
                        <textarea name="message" rows="10" cols="84"
                            placeholder="Type here..."><?php echo $Description; ?></textarea>

                        <br>
                        <button type=" submit" value="Submit" name="submit" class="btn">Submit</button>

                    </form>
                    <?php





                    if (isset($_FILES['submit'])) {

                        $errors = array();
                        $file_name = $_FILES['image']['name'];
                        $file_name = basename($_FILES['image']['tmp_name']);
                        $file_size = $_FILES['image']['size'];
                        $file_tmp = $_FILES['image']['tmp_name'];
                        $file_type = $_FILES['image']['type'];
                        $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

                        $extensions = array("jpeg", "jpg", "png", "jfif");

                        if (in_array($file_ext, $extensions) === false) {
                            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                        }

                        if ($file_size > 2097152) {
                            $errors[] = 'File size must be excately 2 MB';
                        }

                        if (empty($errors) == true) {
                            move_uploaded_file($file_tmp, "./upload/" . $file_name);

                            echo "Success";
                        } else {
                            print_r($errors);
                        }
                    }
                    ?>


                </div>
            </div>
        </section>

    </div>

</body>

</html>