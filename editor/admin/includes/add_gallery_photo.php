<?php 
    include "db.php";

    if(isset($_POST['add_gallery_photo'])){
        $id = $_POST['id'];

        $photo = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];

        //$post_comment_count = 4;

        move_uploaded_file($photo_tmp, "../img/$photo");



        $query = "INSERT INTO gallery_images_tbl(gallery_id, photo) ";
        $query .= "VALUES('$id', '$photo')";
        $add_photo = mysqli_query($connection, $query);

        //echo $query;
        if(!$add_photo){
            die("QUERY FAILED". mysqli_error($connection));
        }

        //header("Location: ../patient.php");
        $confirm_message = "Record Successfully Added.";
        $loc = "../galleries.php?source=update_gallery&id=".$id;
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    }
?>