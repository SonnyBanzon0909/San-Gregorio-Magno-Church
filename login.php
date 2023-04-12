<?php
session_start();
require_once "connect.php";



$email = mysqli_real_escape_string($conn, $_POST['l-email']);
$password = mysqli_real_escape_string($conn, $_POST['l-password']);

$sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";

// Step 3: Execute the SQL statement
$result = mysqli_query($conn, $sql);

// Step 4: Check if the data exists
if (mysqli_num_rows($result) > 0) {
  // email and password combination exist in the database
	$_SESSION['login_account'] = "true";
	$_SESSION['user_email'] = $email;


	
	echo "success";
	 
	exit();
} else {
  // email and password combination do not exist in the database
	echo "Invalid email or password";
	 
}

// Close the database connection
$conn->close();
?>