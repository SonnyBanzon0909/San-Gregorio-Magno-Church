<?php
// Get the ID parameter from the request
$picid = $_GET['id'];
include "db.php";
 
try {
  echo "O hell no";
  $stmt = $connection->prepare('UPDATE gallery_images_tbl SET status = "Draft" WHERE id = :picid');
  $stmt->execute(array('id' => $picid));
  echo 'Success'; // Send a success response back to the client
} 
catch(PDOException $e) 
{
  echo 'Error: ' . $e->getMessage(); // Send an error response back to the client
}

 
?>
