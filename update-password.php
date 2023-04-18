<?php
session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // Get form data
  $name = $_GET['change-name'];
  $address = $_GET['change-address'];
  $password = $_GET['change-password'];

  // Sanitize input
  $name = mysqli_real_escape_string($conn, $name);
  $address = mysqli_real_escape_string($conn, $address);
  $password = mysqli_real_escape_string($conn, $password);

  // Hash password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Update database
  $email = $_SESSION['email'];
  $sql = "UPDATE login SET fullname='$name', address='$address', password='$password' WHERE email='$email'";
  if (mysqli_query($conn, $sql)) {
    echo "success";
    header("Location: index.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
