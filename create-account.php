<?php

session_start();
require_once "connect.php";

// Get form data
$fullname = $_SESSION['cr-name'];
$birthday = $_SESSION['cr-birthday'];
$contact = $_SESSION['cr-contact'];
$address = $_SESSION['cr-address'];
$barangay = $_SESSION['cr-barangay'];
$email = $_SESSION['cr-email'];
$password = $_SESSION['cr-password'];
$password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into login table using prepared statement
$stmt = $conn->prepare("INSERT INTO login (fullname, birthday, contact, address, barangay, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $fullname, $birthday, $contact, $address, $barangay, $email, $password);

if ($stmt->execute()) {
	$_SESSION['created_account'] = true;
	echo "success";
} else {
	// Handle error
	$error_message = "Error: " . $stmt->error;
	// Display error message or handle error using PHP's exception handling
}

$stmt->close();
mysqli_close($conn);
?>
