<?php
// Get the ID parameter from the request
$picid = $_GET['id'];
include "db.php";
 
try {
  $query = "UPDATE gallery_images_tbl SET status = 'Draft' WHERE id = $picid";
  $stmt = $connection->prepare($query);
  $stmt->execute();
  echo 'Success'; // Send a success response back to the client
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage(); // Send an error response back to the client
}
?>
