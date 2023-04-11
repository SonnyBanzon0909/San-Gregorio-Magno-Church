<?php
$servername = "localhost";
$username = "parokyan";
$password = "l)UKks28.Jp67H";
$dbname = "san-gregorio-db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>

