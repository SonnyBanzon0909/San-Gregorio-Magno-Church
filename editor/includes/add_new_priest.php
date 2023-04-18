<?php 
    include "db.php";

    if(isset($_POST['add_priest'])){
        $name = $_POST['name'];
        $year_in_church = $_POST['year_in_church'];
        $photo = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        move_uploaded_file($photo_tmp, "../img/$photo");



        $query = "INSERT INTO priests_tbl(name, year_in_church, photo) ";
        $query .= "VALUES('$name', '$year_in_church', '$photo')";
        $add_priest = mysqli_query($connection, $query);

        //echo $query;
        if(!$add_priest){
            die("QUERY FAILED". mysqli_error($connection));
        }

        //header("Location: ../patient.php");
        $confirm_message = "Record Successfully Added.";
        $loc = "../priests.php";
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    }
?>