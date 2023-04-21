<?php
// Start the session
session_start();
require_once "connect.php";

// Retrieve the email value from the session
if (isset($_SESSION['user_email'])) {
    $email = $_SESSION['user_email'];
} else {
    // handle case where email is not set
}

// Build the SQL query with a prepared statement to prevent SQL injection
$sql = "UPDATE login SET logo=?, fullname=?, birthday=?, contact=?, address=?, barangay=? WHERE email=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssssss", $logo, $full_name, $birthday, $contact_number, $address, $barangay, $email);

// Set the values of the parameters based on the form input
$old_logo = "http://parokya-ni-san-gregorio-magno.com/images/".$_POST['oldphoto'];
$logo = $_POST['photo'];
if (empty($logo)) {
    $logo = $old_logo;
}
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
