<?php
// Get the ID parameter from the request
$id = $_GET['id'];
include "db.php";
 echo $id;
try {
  $query = "DELETE FROM announcement_tbl WHERE id ='$id'";
   
  $stmt = $connection->prepare($query);
  $stmt->execute();
  echo 'Success'; // Send a success response back to the client
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage(); // Send an error response back to the client
}
?>
