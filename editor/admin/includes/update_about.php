<?php

include "db.php";
// update homepage

    $hero_header = $_POST['hero_header'];
    $hero_subtext = $_POST['hero_subtext'];
    
    $about_date = $_POST['about_date'];
    $about_title = $_POST['about_title'];
    $about_content = $_POST['about_content'];

    $vision_title = $_POST['vision_title'];
    $vision_content = $_POST['vision_content'];

    $mission_title = $_POST['mission_title'];
    $mission_content = $_POST['mission_content'];

    $priests_title = $_POST['priests_title'];
    $priests_subtext = $_POST['priests_subtext'];

    $id = $_POST['id'];


    $update_query = "UPDATE about_tbl SET ";
    $update_query .= "hero_header = '$hero_header', ";
    $update_query .= "hero_subtext = '$hero_subtext', ";
    $update_query .= "about_date = '$about_date', ";
    $update_query .= "about_title = '$about_title', ";
    $update_query .= "about_content = '$about_content', ";
    $update_query .= "vision_title = '$vision_title', ";
    $update_query .= "vision_content = '$vision_content', ";
    $update_query .= "mission_title = '$mission_title', ";
    $update_query .= "mission_content = '$mission_content', ";
    $update_query .= "priests_title = '$priests_title', ";
    $update_query .= "priests_subtext = '$priests_subtext' ";
    $update_query .= "WHERE id = $id ";


    $update_home = mysqli_query($connection, $update_query);
    if(!$update_home){
      die("QUERY FAILED". mysqli_error($connection));
    }

    //echo '<script>alert("Record Successfully Updated")</script>';

    $confirm_message = "Record Successfully Updated.";
    $loc = "../about.php";
    echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    // $loc = "staff.php?source=update_staff&staff_id={$staff_id}";
    // echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    //echo "<script type='text/javascript'>location.href='$loc'</script>";
    //header("Location: staff.php?source=update_staff&staff_id={$staff_id}");



?>