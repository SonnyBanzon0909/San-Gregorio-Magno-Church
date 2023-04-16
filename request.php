<?php
session_start();
require_once "connect.php";
$user="";

if(isset($_SESSION['user_email'])) 
{
  $email = $_SESSION['user_email'];
  $user = $_SESSION['user_email'];
}
else if(isset($_SESSION['user_email']) && $_SESSION['login_account'] == "true") 
{
  $email = $_SESSION['user_email'];
  $user = $_SESSION['user_email'];
}
else
{
  $email = "";
  $user = "";
}

if($user!="")
{
    date_default_timezone_set('Asia/Manila');
    $date_time = date("Y-m-d h:i:s A"); // A for AM/PM indicator


    $stmt = $conn->prepare("INSERT INTO formdata (name, age, address, phone, gender, barangay, purpose, message, user, date_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die('Error in prepare statement: ' . $conn->error);
    }

    $name = $_POST['name'];
    $age = $_POST['Age'];
    $address = $_POST['Address'];
    $phone = $_POST['Phone'];
    $gender = $_POST['Gender'];
    $barangay = $_POST['Barangay'];
    $message = $_POST['Message'];
    $purpose = $_POST['Purpose'];

    $stmt->bind_param("ssssssssss", $name, $age, $address, $phone, $gender, $barangay, $purpose, $message, $user, $date_time);

    if ($stmt->execute()) {
        echo "success";
        //header("Location: index.php?");
    } else {
        //echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
else
{
    //header("Location: index.php?");
}

?>
