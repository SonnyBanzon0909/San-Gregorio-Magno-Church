<?php 
include "db.php";

if(isset($_POST['update_gallery'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$gallery_date = $_POST['gallery_date'];
	$details = $_POST['details'];
	$status = $_POST['status'];
echo $status;
        

	$query = "UPDATE gallery_tbl SET ";
	$query .= "title = '$title', ";
	$query .= "gallery_date = '$gallery_date', ";
	$query .= "details = '$details' ";
	$query .= "status = '$status' ";
	$query .= "WHERE id = $id";

	$update_query = mysqli_query($connection, $query);

//  for deleting draft gallery images

	$query_pic = "DELETE FROM gallery_images_tbl WHERE status = 'Draft' AND gallery_id='$id'";
	$stmt = $connection->prepare($query_pic);
	$stmt->execute();



	if(!$update_query){
		die("QUERY FAILED". mysqli_error($connection));
	}


		//header("Location: ../index.php");
	$confirm_message = "Record Successfully Updated.";
	$loc = "../galleries.php?source=update_gallery&id=".$id;
	echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";


}
?>