<?php 
	include "db.php";

	if(isset($_POST['update_priest'])){
		$id = $_POST['id'];
		$year_in_church = $_POST['year_in_church'];
        $name = $_POST['name'];

        $photo = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        move_uploaded_file($photo_tmp, "../img/$photo");

        if(empty($photo)){
			$query = "SELECT * FROM priests_tbl WHERE id = $id";

			$icon_query = mysqli_query($connection, $query);

			while($row = mysqli_fetch_array($icon_query)){
				$photo = $row['photo'];
			}
		}


		$query = "UPDATE priests_tbl SET ";
		$query .= "name = '$name', ";
		$query .= "year_in_church = '$year_in_church', ";
		$query .= "photo = '$photo' ";
		$query .= "WHERE id = $id";

		$update_query = mysqli_query($connection, $query);

		if(!$update_query){
			die("QUERY FAILED". mysqli_error($connection));
		}


		//header("Location: ../index.php");
		$confirm_message = "Record Successfully Updated.";
        $loc = "../priests.php?source=view_priest&id=".$id;
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";


	}
?>