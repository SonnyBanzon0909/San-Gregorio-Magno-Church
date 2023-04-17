<?php 
    include "db.php";

    if(isset($_POST['add_user'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];



        $query = "INSERT INTO admin_users(username, password, role) ";
        $query .= "VALUES('$username', '$password', '$role')";
        $add_gallery = mysqli_query($connection, $query);

        //echo $query;
        if(!$add_gallery){
            die("QUERY FAILED". mysqli_error($connection));
        }

        //header("Location: ../users.php");
        $confirm_message = "Record Successfully Added.";
        $loc = "../users.php";
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    }
?>