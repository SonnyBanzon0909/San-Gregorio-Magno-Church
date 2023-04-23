<?php
// Get the ID parameter from the request
$id = $_GET['id'];
require_once "../connect.php";

try {
  $stmt = $connection->prepare('UPDATE gallery_images_tbl SET status = "Draft" WHERE id = :id');
  $stmt->execute(array('id' => $id));
  echo 'Success'; // Send a success response back to the client
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage(); // Send an error response back to the client
}

 
?>
