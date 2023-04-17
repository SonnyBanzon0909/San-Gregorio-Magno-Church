<?php 
    include "db.php";

    if(isset($_POST['add_gallery'])){
        $title = $_POST['title'];
        $gallery_date = $_POST['gallery_date'];
        $details = $_POST['details'];
        // $details = $_FILES['announcement']['name'];
        // $announcement_tmp = $_FILES['announcement']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        // move_uploaded_file($announcement_tmp, "../img/$icon");



        $query = "INSERT INTO gallery_tbl(title, gallery_date, details) ";
        $query .= "VALUES('$title', '$gallery_date', '$details')";
        $add_gallery = mysqli_query($connection, $query);

        //echo $query;
        if(!$add_gallery){
            die("QUERY FAILED". mysqli_error($connection));
        }

        //header("Location: ../patient.php");
        $confirm_message = "Record Successfully Added.";
        $loc = "../galleries.php";
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    }
?>