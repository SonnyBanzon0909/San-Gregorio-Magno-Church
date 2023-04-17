<?php 
	include "db.php";

	if(isset($_POST['update_announcement'])){
		$id = $_POST['id'];
		$status = $_POST['status'];
        $name = $_POST['name'];

        $announcement = $_FILES['announcement']['name'];
        $announcement_tmp = $_FILES['announcement']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        move_uploaded_file($announcement_tmp, "../img/$announcement");

        if(empty($announcement)){
			$query = "SELECT * FROM announcement_tbl WHERE id = $id";

			$icon_query = mysqli_query($connection, $query);

			while($row = mysqli_fetch_array($icon_query)){
				$announcement = $row['announcement'];
			}
		}


		$query = "UPDATE announcement_tbl SET ";
		$query .= "announcement = '$announcement', ";
		$query .= "name = '$name', ";
		$query .= "status = '$status' ";
		$query .= "WHERE id = $id";

		$update_query = mysqli_query($connection, $query);

		if(!$update_query){
			die("QUERY FAILED". mysqli_error($connection));
		}


		//header("Location: ../index.php");
		$confirm_message = "Record Successfully Updated.";
        $loc = "../announcement.php?source=view_announcement&id=".$id;
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";


	}
?>