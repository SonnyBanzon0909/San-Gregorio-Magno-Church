<?php
session_start();
require_once "connect.php";
$user = $_SESSION['user_email'];
// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO formdata (name, address, phone, barangay, purpose) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $address, $phone, $barangay, $purpose, $message, $user);

// Set the POST parameters
$name = $_POST['name'];
$address = $_POST['Address'];
$phone = $_POST['Phone'];
$barangay = $_POST['Barangay'];
$message = $_POST['Message'];
$purpose = $_POST['Purpose'];

// Execute the statement
if ($stmt->execute()) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
