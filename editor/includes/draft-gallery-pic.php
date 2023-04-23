<?php
// Get the ID parameter from the request
$picid = $_GET['id'];
include "db.php";

$stmt = $connection->prepare('UPDATE gallery_images_tbl SET status = "Draft" WHERE id = ?');
$stmt->execute([$picid]);
  echo 'Success'; // Send a success response back to the client

?>
