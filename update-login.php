<?php
// Start the session
session_start();
require_once "connect.php";

// Retrieve the email value from the session

 

if (isset($_SESSION['user_email'])) {
    $email = $_SESSION['user_email'];
} else {
    echo "string";
}

// Build the SQL query with a prepared statement to prevent SQL injection
$sql = "UPDATE login SET fullname=?, birthday=?, contact=?, address=?, barangay=? WHERE email=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $birthday, $contact_number, $address, $barangay, $email);

// Set the values of the parameters based on the form input
$full_name = $_POST['Full-Name-3'];
$birthday = $_POST['Birthday-2'];
$contact_number = $_POST['Contact-number-2'];
$address = $_POST['Address-3'];
$barangay = $_POST['Barangay'];

// Execute the query and check for errors
if (mysqli_stmt_execute($stmt)) {
    echo '<script>alert("Data updated successfully."); window.location = "index.php";</script>';

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
