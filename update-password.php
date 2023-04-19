<?php

session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // Get form data
  $old_password = $_GET['old_password'];
  $new_password = $_GET['new_password'];
  $password = $_GET['password'];

  // Sanitize input
  $name = mysqli_real_escape_string($conn, $old_password);
  $address = mysqli_real_escape_string($conn, $new_password);
  $password = mysqli_real_escape_string($conn, $password);

  // Hash password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Check if email and old password match a row in the database
  $email = $_SESSION['user_email'];
  $old_password_hash = password_hash($old_password, PASSWORD_DEFAULT);
  $query = "SELECT * FROM login WHERE email='$email'";
  $result = mysqli_query($conn, $query);
  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($old_password, $row['password'])) {
      // Update database
      $sql = "UPDATE login SET password='$password' WHERE email='$email'";
      if (mysqli_query($conn, $sql)) {
        echo "success";
        //header("Location: index.php");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    } else {
      echo "Incorrect old password.";
    }
  } else {
    echo "Email not found.";
  }

  mysqli_close($conn);
}


?>