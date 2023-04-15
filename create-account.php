<?php

session_start();
require_once "connect.php";


// get form data
$fullname = "";
$fullname = "";
$birthday = "";
$contact = "";
$address = "";
$barangay = "";
$email = "";
$password = "";



$fullname = $_POST['c-fullname'];
$birthday = $_POST['c-birthday'];
$contact = $_POST['c-contact'];
$address = $_POST['c-address'];
$barangay = $_POST['c-barangay'];
$email = $_POST['c-email'];
$password = $_POST['c-password'];

$_SESSION['user_email'] = $email;

$otp="";
$verified = "false";


/*
$otp = mt_rand(100000, 999999);
$_SESSION['otp'] = $otp;

$to = $email;
$subject = "OTP - Parokya ni San Gregorio Magno";
$message = "Your OTP is: " . $otp;
$headers = "From: Your Name <admin@parokya-ni-san-gregorio-magno.com>\r\n";
$headers .= "Reply-To: sangregoriomagnochurch@gmail.com\r\n";
$headers .= "Content-Type: text/html\r\n";
$username = "admin@parokya-ni-san-gregorio-magno.com";
$password = "parokyan_admin2023";
$smtp = array(
	'host' => 'mail.parokya-ni-san-gregorio-magno.com',
	'port' => 587,
	'auth' => true,
	'username' => $username,
	'password' => $password
);
$mailer = Mail::factory('smtp', $smtp);
$mail = $mailer->send($to, array('headers' => $headers, 'subject' => $subject, 'body' => $message));


*/


if ($fullname != "" && $birthday != "" && $contact != "" && $address != "" && $barangay != "" && $email != "" && $password != "") 
{

	 
	// insert data into login table
	$sql = "INSERT INTO login (fullname, birthday, contact, address, barangay, email, password,otp,verified)
	VALUES ('$fullname', '$birthday', '$contact', '$address', '$barangay', '$email', '$password', '$otp', '$verified')";

	if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully";
		$_SESSION['created_account'] = "true";

		// Handle login process
		// ...

		// Set cookies if remember me checkbox is checked
	/*	if (isset($_POST['remember']) && $_POST['remember'] == 1) {
			setcookie('email', $_POST['c-email'], time() + (86400 * 30), "/");
			setcookie('password', $_POST['c-password'], time() + (86400 * 30), "/");
		}
	*/

		header("Location: index.php?");

	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}
else
{
	echo "<script>alert('Please fill up all the fields')</script>";
}


mysqli_close($conn);


?>
