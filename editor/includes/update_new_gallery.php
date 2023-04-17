<?php 
	include "db.php";

	if(isset($_POST['update_gallery'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
        $gallery_date = $_POST['gallery_date'];
        $details = $_POST['details'];

        // $icon = $_FILES['icon']['name'];
        // $icon_tmp = $_FILES['icon']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        // move_uploaded_file($icon_tmp, "../img/$icon");
        // move_uploaded_file($photo_tmp, "../img/$photo");

        // if(empty($icon)){
		// 	$query = "SELECT * FROM services_tbl WHERE id = $id";

		// 	$icon_query = mysqli_query($connection, $query);

		// 	while($row = mysqli_fetch_array($icon_query)){
		// 		$icon = $row['icon'];
		// 	}
		// }

		// if(empty($photo)){
		// 	$query = "SELECT * FROM services_tbl WHERE id = $id";

		// 	$photo_query = mysqli_query($connection, $query);

		// 	while($row = mysqli_fetch_array($photo_query)){
		// 		$photo = $row['photo'];
		// 	}
		// }

		$query = "UPDATE gallery_tbl SET ";
		$query .= "title = '$title', ";
		$query .= "gallery_date = '$gallery_date', ";
		$query .= "details = '$details' ";
		$query .= "WHERE id = $id";

		$update_query = mysqli_query($connection, $query);

		if(!$update_query){
			die("QUERY FAILED". mysqli_error($connection));
		}


		//header("Location: ../index.php");
		$confirm_message = "Record Successfully Updated.";
        $loc = "../galleries.php?source=update_gallery&id=".$id;
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";


	}
?>