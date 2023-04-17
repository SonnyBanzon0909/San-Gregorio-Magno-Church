<?php 
    include "db.php";

    if(isset($_POST['add_moments'])){
        $status = $_POST['status'];
        $name = $_POST['name'];
        $moments = $_FILES['moments']['name'];
        $moments_tmp = $_FILES['moments']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        move_uploaded_file($moments_tmp, "../img/$moments");



        $query = "INSERT INTO moments_tbl(name, status, moments) ";
        $query .= "VALUES('$name', '$status', '$moments')";
        $add_moments = mysqli_query($connection, $query);

        //echo $query;
        if(!$add_moments){
            die("QUERY FAILED". mysqli_error($connection));
        }

        //header("Location: ../patient.php");
        $confirm_message = "Record Successfully Added.";
        $loc = "../moments.php";
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    }
?>