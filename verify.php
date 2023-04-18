 

<?php

require_once "connect.php";

// get form data
$email = $_POST['email'];

//$user_date_time = $_SESSION['date_time'];
$user_otp = $_POST['otp'];

date_default_timezone_set('Asia/Manila');
$date_time = date("Y-m-d h:i:s A"); // A for AM/PM indicator


if ($user_otp != "0000" || $user_otp != "") {
	$stmt = $conn->prepare("SELECT * FROM temp_account WHERE email = '$email'  and otp = '$user_otp'");

	$stmt->execute();
	mysqli_error($conn);
	$result = $stmt->get_result();
	if (mysqli_num_rows($result) > 0) {
		echo 'success';
		//include "create-account.php"; Turn on if it doesnt work
		//echo "<script>alert('Success OTP');</script>";
	}
	else {
		//echo "<script>alert('Failed OTP');</script>";
	}
}
?>
