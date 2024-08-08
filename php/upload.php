<?php /* 
	include 'ConnectionString.php';

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 2500000) {
			$cookie_value = "Image Size is too large.";
			include "Error.php";
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$sql = "INSERT INTO `Users` (`ID`, `Name`, `Pass`, `E-mail`) VALUES (NULL, '$signname', '$signpass', '$signmail')";
				$result = mysqli_query($conn, $sql);

				$sql = "SELECT * FROM `Users` WHERE `Name` = '$signname' AND `Pass` = '$signpass' AND `E-mail` = '$signmail';";
				$result = mysqli_query($conn, $sql);
				if($result->num_rows > 0){
					$row = $result->fetch_assoc();
					$userid = $row["ID"];
					
					$sql = "INSERT INTO `ProfileImages`(`User_ID`,`Image`) VALUES('$userid','$new_img_name')";
					$result = mysqli_query($conn, $sql);
					$cookie_expiry = time() + 86400 * 30; // Cookie expiration time (30 Days)

					include "SignedupCookie.php";

				}else{
					$cookie_value = "Error Can't Connect to Server Right Now Please Try Again Later.";
					include "Error.php";
				}
			}else {
				$cookie_value = "This Image is Extension not Supported.";
				include "Error.php";
			}
		}
	}else {
		$sql = "INSERT INTO `Users` (`ID`, `Name`, `Pass`, `E-mail`) VALUES (NULL, '$signname', '$signpass', '$signmail')";
		$result = mysqli_query($conn, $sql);
		$cookie_expiry = time() + 86400 * 30; // Cookie expiration time (30 Days)
		include "SignedupCookie.php";
	} */
?>