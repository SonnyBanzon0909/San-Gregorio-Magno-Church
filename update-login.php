<?php
// Start the session
session_start();
require_once "connect.php";

// Retrieve the email value from the session
$email = $_SESSION['email'];
 
// Build the SQL query with a prepared statement to prevent SQL injection
$sql = "UPDATE login SET Full_Name_3=?, Birthday_2=?, Contact_number_2=?, Address_3=?, Barangay=? WHERE email=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $birthday, $contact_number, $address, $barangay, $email);

// Set the values of the parameters based on the form input
$full_name = $_GET['Full-Name-3'];
$birthday = $_GET['Birthday-2'];
$contact_number = $_GET['Contact-number-2'];
$address = $_GET['Address-3'];
$barangay = $_GET['Barangay'];

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
