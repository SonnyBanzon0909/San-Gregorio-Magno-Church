<?php
    include "db.php";

    $overline_text = $_POST['overline_text'];
    $hero_header = $_POST['hero_header'];
    $hero_sub_header = $_POST['hero_sub_header'];
    $appointment_text = $_POST['appointment_text'];
    $appointment_link = $_POST['appointment_link'];

    $service_title = $_POST['service_title'];
    $service_subtext = $_POST['service_subtext'];

    $announcement_title = $_POST['announcement_title'];
    $announcement_subtext = $_POST['announcement_subtext'];

    $blessed_title = $_POST['blessed_title'];
    $blessed_subtext = $_POST['blessed_subtext'];

    $id = $_POST['id'];


    $update_query = "UPDATE homepage_tbl SET ";
    $update_query .= "overline_text = '$overline_text', ";
    $update_query .= "hero_header = '$hero_header', ";
    $update_query .= "hero_sub_header = '$hero_sub_header', ";
    $update_query .= "appointment_text = '$appointment_text', ";
    $update_query .= "appointment_link = '$appointment_link', ";
    $update_query .= "service_title = '$service_title', ";
    $update_query .= "service_subtext = '$service_subtext', ";
    $update_query .= "announcement_title = '$announcement_title', ";
    $update_query .= "announcement_subtext = '$announcement_subtext', ";
    $update_query .= "blessed_title = '$blessed_title', ";
    $update_query .= "blessed_subtext = '$blessed_subtext' ";
    $update_query .= "WHERE id = $id ";


    $update_home = mysqli_query($connection, $update_query);
    if(!$update_query){
      die("QUERY FAILED". mysqli_error($connection));
    }


    $confirm_message = "Record Successfully Updated.";
    $loc = "../index.php";
    echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    // $loc = "staff.php?source=update_staff&staff_id={$staff_id}";
    // echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    //echo "<script type='text/javascript'>location.href='$loc'</script>";
    //header("Location: staff.php?source=update_staff&staff_id={$staff_id}");
  // }else{
  //   $confirm_message = "";
  // }

?>