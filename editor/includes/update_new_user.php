<?php 
	include "db.php";

	if(isset($_POST['update_user'])){
		$id = $_POST['id'];
		$username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

		$query = "UPDATE admin_users SET ";
		$query .= "username = '$username', ";
		$role .= "role = '$role', ";
		$query .= "password = '$password' ";
		$query .= "WHERE id = $id";

		$update_query = mysqli_query($connection, $query);

		if(!$update_query){
			die("QUERY FAILED". mysqli_error($connection));
		}


		//header("Location: ../index.php");
		$confirm_message = "Record Successfully Updated.";
        $loc = "../users.php";
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";


	}
?>