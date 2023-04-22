<?php
 // Start the session
session_start();
include "includes/db.php";

// Check if the ID is set in the POST request
if(isset($_POST['id'])) {
  $id = $_POST['id'];

  // Perform the SQL update query
  require_once "connect.php"; // Include your database connection file
  $query = "UPDATE formdata SET status='DONE' WHERE id=$id";
  $result = mysqli_query($conn, $query);

  if($result) {
    // If the query is successful, return a success message
    echo "Status updated to DONE for ID $id";
  } else {
    // If the query fails, return an error message
    echo "Error updating status for ID $id";
  }

  // Close the database connection
  mysqli_close($conn);
}
?>
