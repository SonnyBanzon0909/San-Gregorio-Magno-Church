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

		move_uploaded_file($icon_tmp, "../img/$icon");
		move_uploaded_file($photo_tmp, "../img/$photo");

		if(empty($icon)){
			$query = "SELECT * FROM services_tbl WHERE id = ?";

			$stmt = mysqli_prepare($connection, $query);
			mysqli_stmt_bind_param($stmt, "i", $id);
			mysqli_stmt_execute($stmt);

			$result = mysqli_stmt_get_result($stmt);
			while($row = mysqli_fetch_array($result)){
				$icon = $row['icon'];
			}
		}

		if(empty($photo)){
			$query = "SELECT * FROM services_tbl WHERE id = ?";

			$stmt = mysqli_prepare($connection, $query);
			mysqli_stmt_bind_param($stmt, "i", $id);
			mysqli_stmt_execute($stmt);

			$result = mysqli_stmt_get_result($stmt);
			while($row = mysqli_fetch_array($result)){
				$photo = $row['photo'];
			}
		}

		$query = "UPDATE services_tbl SET ";
		$query .= "icon = ?, ";
		$query .= "title = ?, ";
		$query .= "content = ?, ";
		$query .= "button_text = ?, ";
		$query .= "button_link = ?, ";
		$query .= "icon = ?, ";
		$query .= "photo = ?, ";
		$query .= "status = ? ";
		$query .= "WHERE id = ?";

		$stmt = mysqli_prepare($connection, $query);
		mysqli_stmt_bind_param($stmt, "ssssssssi", $icon, $title, $content, $button_text, $button_link, $icon, $photo, $status, $id);
		$update_query = mysqli_stmt_execute($stmt);

		if(!$update_query){
			die("QUERY FAILED". mysqli_error($connection));
		}

		//header("Location: ../index.php");
		$confirm_message = "Service Successfully Updated.";
		$loc = "../services.php?source=services&id=".$id;
		echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
	}
?>
