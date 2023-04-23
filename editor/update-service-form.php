<?php
// assuming you have already established a connection to the database
// $conn = mysqli_connect("localhost", "username", "password", "database_name");
ob_start();
include "includes/db.php";
$id = $_GET['id'];


if (isset($_POST['update_contact'])) {
  $id = $_GET['id']; // assuming the id is passed through the URL
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $barangay = $_POST['barangay'];
  $date_time = $_POST['date'];

 

  $query = "UPDATE formdata SET name='$name', gender='$gender', age='$age', barangay='$barangay', date_time='$date_time' WHERE id='$id'";

  if(mysqli_query($connection, $query)) {
    echo "<script>alert('Record updated successfully.');</script>";
    header("Location: services-report.php");
    
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}
?>
