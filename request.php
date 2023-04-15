<?php
session_start();
require_once "connect.php";

$user = $_SESSION['user_email'];
$date_time = date("Y-m-d H:i:s");

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO formdata (name, address, phone, barangay, purpose, message, user, date_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $address, $phone, $barangay, $purpose, $message, $user, $date_time);

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
