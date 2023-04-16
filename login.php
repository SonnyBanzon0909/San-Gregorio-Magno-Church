<?php
session_start();
require_once "connect.php";

$email = mysqli_real_escape_string($conn, $_POST['l-email']);
$password = mysqli_real_escape_string($conn, $_POST['l-password']);

// Step 1: Retrieve the hashed password from the database
$sql = "SELECT password FROM login WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Retrieve the hashed password from the database
  $row = mysqli_fetch_assoc($result);
  $hashedPassword = $row['password'];

  // Step 2: Verify the user's password
  if (password_verify($password, $hashedPassword)) {
    // Password is correct, log the user in
    $_SESSION['login_account'] = "true";
    $_SESSION['user_email'] = $email;

    echo "success";
  } else {
    // Password is incorrect
    echo "Invalid email or password";
    
  }
} else {
  // User does not exist in the database
  echo "Invalid email;
}

// Close the database connection
$conn->close();
?>
