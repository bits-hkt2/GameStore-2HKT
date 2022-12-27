<?php
session_start();
include "./db/db.php";

$username = $_SESSION['username'];

$get_name_sql = "SELECT * FROM `users` WHERE `username`= '$username'";
$get_name_result = mysqli_query($con, $get_name_sql);
if (mysqli_num_rows($get_name_result) == 1) {
	$get_name_row = mysqli_fetch_assoc($get_name_result);
	$user_id = $get_name_row['id'];

	
	if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
		

// 		echo "<pre>";
// 		print_r($_FILES['my_image']);
// 		echo "</pre>";

		$img_name = $_FILES['my_image']['name'];
		$img_size = $_FILES['my_image']['size'];
		$tmp_name = $_FILES['my_image']['tmp_name'];
		$error = $_FILES['my_image']['error'];
		$username = $_SESSION['username'];
		
		
		
		if ($error === 0) {
			if ($img_size > 400000) {
				$em = "<p style='color:red';>Sorry, your file is too large.</p>";
				header("Location: edit_avatar.php?error=$em");
			} else {
				$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
				$img_ex_lc = strtolower($img_ex);

				$allowed_exs = array("jpg", "jpeg", "png");

				if (in_array($img_ex_lc, $allowed_exs)) {
					$new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
					$img_upload_path = 'uploadedFile/' . $new_img_name;
					move_uploaded_file($tmp_name, $img_upload_path);

					// Insert into Database
					$sql = "INSERT INTO `file`(`image_url`,`username`,`user_id`) 
				        VALUES('$new_img_name','$username','$user_id')";
					mysqli_query($con, $sql);
					header("Location: Main.php");
				} else {
					$em = "<p style='color:red';>You can't upload files of this type</p>";
					header("Location: edit_avatar.php?error=$em");
				}
			}
		} else {
			$em = "<p style='color:red';>unknown error occurred!</p>";
			header("Location: edit_avatar.php?error=$em");
		}

	} else {
		header("Location: edit_avatar.php");
	}
}