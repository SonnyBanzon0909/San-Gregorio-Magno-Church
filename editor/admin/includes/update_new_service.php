<?php 
	include "db.php";

	if(isset($_POST['update_service'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
        $content = $_POST['content'];
        $button_text = $_POST['button_text'];
        $button_link = $_POST['button_link'];
        $status = $_POST['status'];

        $icon = $_FILES['icon']['name'];
        $icon_tmp = $_FILES['icon']['tmp_name'];

        $photo = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        move_uploaded_file($icon_tmp, "../img/$icon");
        move_uploaded_file($photo_tmp, "../img/$photo");

        if(empty($icon)){
			$query = "SELECT * FROM services_tbl WHERE id = $id";

			$icon_query = mysqli_query($connection, $query);

			while($row = mysqli_fetch_array($icon_query)){
				$icon = $row['icon'];
			}
		}

		if(empty($photo)){
			$query = "SELECT * FROM services_tbl WHERE id = $id";

			$photo_query = mysqli_query($connection, $query);

			while($row = mysqli_fetch_array($photo_query)){
				$photo = $row['photo'];
			}
		}

		$query = "UPDATE services_tbl SET ";
		$query .= "icon = '$icon', ";
		$query .= "title = '$title', ";
		$query .= "content = '$content', ";
		$query .= "button_text = '$button_text', ";
		$query .= "button_link = '$button_link', ";
		$query .= "icon = '$icon', ";
		$query .= "photo = '$photo', ";
		$query .= "status = '$status' ";
		$query .= "WHERE id = $id";

		$update_query = mysqli_query($connection, $query);

		if(!$update_query){
			die("QUERY FAILED". mysqli_error($connection));
		}


		//header("Location: ../index.php");
		$confirm_message = "Service Successfully Updated.";
        $loc = "../services.php?source=services&id=".$id;
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";


	}
?>