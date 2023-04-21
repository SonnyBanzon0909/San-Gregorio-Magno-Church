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

// Get the filename and file path of the uploaded logo
$logo_filename = $_FILES['file']['name'];
$logo_filepath = "images/" . $logo_filename;

// Build the SQL query with a prepared statement to prevent SQL injection
$sql = "UPDATE login SET logo=? WHERE email=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $logo_filename, $email);

// Set the values of the parameters based on the form input
$logo = $_FILES['file']['tmp_name']; // Use the temporary file path as the logo value

if (move_uploaded_file($logo, $logo_filepath) && mysqli_stmt_execute($stmt)) {
    // Handle the case where the file was uploaded and SQL query was executed successfully
    echo "success";
} else {
    // Handle the case where either the file upload or SQL query failed
    echo "Logo upload or update failed";
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
