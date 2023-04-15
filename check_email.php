<?php
session_start();
require_once "connect.php";

$email = $_POST['email']; // Get email from AJAX request
//$avail_email = $_SESSION['avail_email'];

// Create a SELECT statement to search for the email in the database
$sql = "SELECT * FROM login WHERE email = '$email'";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Email already exists in database
    echo "<span style='color: red;'>Email already exists</span>";
    //$_SESSION['avail_email'] ="false"; 
} else {
    // Email does not exist in database
    echo "<span style='color: green;'>Email is available</span>";
    //$_SESSION['avail_email'] ="true"; 
}

// Close the database connection
$conn->close();
?>
