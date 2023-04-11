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

if ($fullname != "" && $birthday != "" && $contact != "" && $address != "" && $barangay != "" && $email != "" && $password != "") 
{

	echo "<script>alert('Fiiled')</script>";
	// insert data into login table
	$sql = "INSERT INTO login (fullname, birthday, contact, address, barangay, email, password)
	VALUES ('$fullname', '$birthday', '$contact', '$address', '$barangay', '$email', '$password')";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		header("Location: index.php?action=submit_form");

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}
else
{
	echo "<script>alert('Please fill up all the fields')</script>";
}


mysqli_close($conn);


?>
