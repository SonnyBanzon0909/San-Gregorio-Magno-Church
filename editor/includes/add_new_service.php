<?php 
    include "db.php";

    if(isset($_POST['add_service'])){
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



        $query = "INSERT INTO services_tbl(icon, title, content, button_text, button_link, photo, status) ";
        $query .= "VALUES('$icon', '$title', '$content', '$button_text', '$button_link', '$photo', '$status')";
        $add_service = mysqli_query($connection, $query);

        //echo $query;
        if(!$add_service){
            die("QUERY FAILED". mysqli_error($connection));
        }

        //header("Location: ../patient.php");
        $confirm_message = "Service Successfully Added.";
        $loc = "../services.php";
        echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    }
?>