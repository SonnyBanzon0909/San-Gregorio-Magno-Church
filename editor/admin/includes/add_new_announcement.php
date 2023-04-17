<?php 
    include "db.php";

    if(isset($_POST['add_announcement'])){
        $status = $_POST['status'];
        $name = $_POST['name'];
        $announcement = $_FILES['announcement']['name'];
        $announcement_tmp = $_FILES['announcement']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        move_uploaded_file($announcement_tmp, "../img/$announcement");



        $query = "INSERT INTO announcement_tbl(announcement, name, status) ";
        $query .= "VALUES('$announcement', '$name', '$status')";
        $add_announcement = mysqli_query($connection, $query);

        //echo $query;
        if(!$add_announcement){
            die("QUERY FAILED". mysqli_error($connection));
        }

        //header("Location: ../patient.php");
        $confirm_message = "Record Successfully Added.";
        $loc = "../announcement.php";
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    }
?>