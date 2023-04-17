<?php 
	include "db.php";

	if(isset($_POST['update_moments'])){
		$id = $_POST['id'];
		$status = $_POST['status'];
        $name = $_POST['name'];

        $moments = $_FILES['moments']['name'];
        $moments_tmp = $_FILES['moments']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        move_uploaded_file($moments_tmp, "../img/$moments");

        if(empty($moments)){
			$query = "SELECT * FROM moments_tbl WHERE id = $id";

			$icon_query = mysqli_query($connection, $query);

			while($row = mysqli_fetch_array($icon_query)){
				$moments = $row['moments'];
			}
		}


		$query = "UPDATE moments_tbl SET ";
		$query .= "name = '$name', ";
		$query .= "status = '$status', ";
		$query .= "moments = '$moments' ";
		$query .= "WHERE id = $id";

		$update_query = mysqli_query($connection, $query);

		if(!$update_query){
			die("QUERY FAILED". mysqli_error($connection));
		}


		//header("Location: ../index.php");
		$confirm_message = "Record Successfully Updated.";
        $loc = "../moments.php?source=view_moments&id=".$id;
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";


	}
?>