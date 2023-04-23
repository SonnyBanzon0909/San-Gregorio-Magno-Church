<?php 
include "db.php";

if(isset($_POST['update_gallery'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$gallery_date = $_POST['gallery_date'];
	$details = $_POST['details'];
	$status = $_POST['status'];
	
	

	// Prepare the SQL statement with placeholders for the values
	$query = "UPDATE gallery_tbl SET title=?, gallery_date=?, details=?, status=? WHERE id=?";
	$gal_query = $connection->prepare($query);

// Bind the parameters
	$gal_query->bind_param("ssssi", $title, $gallery_date, $details, $status, $id);

// Set the parameter values
	$title = $_POST['title'];
	$gallery_date = $_POST['gallery_date'];
	$details = $_POST['details'];
	$status = $_POST['status'];
	$id = $_POST['id'];

// Execute the statement
	$gal_query->execute();

// Check if the update query was successful
	if($gal_query->affected_rows > 0){
   // Success
	} else {
   // Error
	}

//  for deleting draft gallery images

	$query_pic = "DELETE FROM gallery_images_tbl WHERE status = 'Draft' AND gallery_id='$id'";
	$stmt = $connection->prepare($query_pic);
	$stmt->execute();



	if(!$gal_query){
		die("QUERY FAILED". mysqli_error($connection));
	}


		//header("Location: ../index.php");
	$confirm_message = "Record Successfully Updated.";
	$loc = "../galleries.php?source=update_gallery&id=".$id;
	echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";


}
?>