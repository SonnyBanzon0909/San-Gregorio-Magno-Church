<?php

session_start();
require_once "connect.php";


// get form data

$fullname = "";
$birthday = "";
$contact = "";
$address = "";
$barangay = "";
$email = "";
$password = "";





$_SESSION['user_email'] = $_SESSION['cr-email'];

$fullname = $_SESSION['cr-name'];
$birthday = $_SESSION['cr-birthday'];
$contact = $_SESSION['cr-contact'];
$address = $_SESSION['cr-address'];
$barangay = $_SESSION['cr-barangay'];
$email = $_SESSION['cr-email'];
$password =$_SESSION['cr-password'];
$password = password_hash($password, PASSWORD_DEFAULT);









if ($fullname != "" && $birthday != "" && $contact != "" && $address != "" && $barangay != "" && $email != "" && $password != "") 
{


	// insert data into login table
	$sql = "INSERT INTO login (fullname, birthday, contact, address, barangay, email, password)
	VALUES ('$fullname', '$birthday', '$contact', '$address', '$barangay', '$email', '$password')";
mysqli_error($conn);
	if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully";
		$_SESSION['created_account'] = "true";

		//echo "<script>alert('Success OTP');</script>";
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
	//echo "<script>alert('Please fill up all the fields')</script>";
}


mysqli_close($conn);


?>
