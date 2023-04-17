<?php
    include "db.php";

    $title = $_POST['title'];
    $sub_text = $_POST['sub_text'];
    $id = $_POST['id'];


    $update_query = "UPDATE service_tbl SET ";
    $update_query .= "title = '$title', ";
    $update_query .= "sub_text = '$sub_text' ";
    $update_query .= "WHERE id = $id ";


    $update_serv = mysqli_query($connection, $update_query);
    if(!$update_serv){
      die("QUERY FAILED". mysqli_error($connection));
    }

    $confirm_message = "Record Successfully Updated.";
    $loc = "../services.php";
    echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    // $loc = "staff.php?source=update_staff&staff_id={$staff_id}";
    // echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    //echo "<script type='text/javascript'>location.href='$loc'</script>";
    //header("Location: staff.php?source=update_staff&staff_id={$staff_id}");
  // }else{
  //   $confirm_message = "";
  // }

?>