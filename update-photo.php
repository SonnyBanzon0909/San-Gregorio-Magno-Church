<?php
// Start the session
session_start();
require_once "connect.php";

// Retrieve the email value from the session

if (isset($_SESSION['user_email'])) {
    $email = $_SESSION['user_email'];
} else {
    // Handle the case where the email value is not set
}

// Build the SQL query with a prepared statement to prevent SQL injection
$sql = "UPDATE login SET logo=? WHERE email=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $logo, $email);

// Set the values of the parameters based on the form input
$logo = $_FILES['file']['name']; // Use the file name as the logo value
if (mysqli_stmt_execute($stmt)) {
    // Handle the case where the SQL query was executed successfully
    echo "success";
} else {
    // Handle the case where the SQL query failed to execute
    echo "Logo update failed";
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
