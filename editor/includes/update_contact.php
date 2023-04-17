<?php
    include "db.php";

    $hero_header = $_POST['hero_header'];
    $hero_subtext = $_POST['hero_subtext'];

    $touch_overline = $_POST['touch_overline'];
    $touch_header = $_POST['touch_header'];
    $touch_details = $_POST['touch_details'];

    $contact_address = $_POST['contact_address'];
    $contact_number = $_POST['contact_number'];
    $contact_email = $_POST['contact_email'];

    $office_1 = $_POST['office_1'];
    $office_2 = $_POST['office_2'];
    $office_3 = $_POST['office_3'];

    $id = $_POST['id'];


    $update_query = "UPDATE contact_tbl SET ";
    $update_query .= "hero_header = '$hero_header', ";
    $update_query .= "hero_subtext = '$hero_subtext', ";
    $update_query .= "touch_overline = '$touch_overline', ";
    $update_query .= "touch_header = '$touch_header', ";
    $update_query .= "touch_details = '$touch_details', ";
    $update_query .= "contact_address = '$contact_address', ";
    $update_query .= "contact_number = '$contact_number', ";
    $update_query .= "contact_email = '$contact_email', ";
    $update_query .= "office_1 = '$office_1', ";
    $update_query .= "office_2 = '$office_2', ";
    $update_query .= "office_3 = '$office_3' ";
    $update_query .= "WHERE id = $id ";


    $update_contact = mysqli_query($connection, $update_query);
    if(!$update_contact){
      die("QUERY FAILED". mysqli_error($connection));
    }


    $confirm_message = "Record Successfully Updated.";
    $loc = "../contact.php";
    echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    // $loc = "staff.php?source=update_staff&staff_id={$staff_id}";
    // echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    //echo "<script type='text/javascript'>location.href='$loc'</script>";
    //header("Location: staff.php?source=update_staff&staff_id={$staff_id}");
  // }else{
  //   $confirm_message = "";
  // }

?>