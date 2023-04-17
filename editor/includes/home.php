  
<?php

    $query = "SELECT * FROM homepage_tbl";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $overline_text = $row["overline_text"];
      $hero_header = $row["hero_header"];
      $hero_sub_header = $row["hero_sub_header"];
      $appointment_text = $row["appointment_text"];
      $appointment_link = $row["appointment_link"];

      $service_title = $row["service_title"];
      $service_subtext = $row["service_subtext"];

      $announcement_title = $row["announcement_title"];
      $announcement_subtext = $row["announcement_subtext"];

      $blessed_title = $row["blessed_title"];
      $blessed_subtext = $row["blessed_subtext"];
    }

  /////////////////////////////////////////////////////
// if (isset($_POST['add_attachment'])) {

//   $patient_id = $id;
//   $upload_by = $user_first_name." ".$user_last_name;
//   $upload_date = date("m-d-Y");

//   $attachment = $_FILES['attachment']['name'];
//   $image_tmp = $_FILES['attachment']['tmp_name'];
//   //$post_comment_count = 4;
//   move_uploaded_file($image_tmp, "attachment/$attachment");

//   $attachment_query = "INSERT INTO attachment(patient_id,attachment,upload_by,upload_date) VALUES($patient_id,'$attachment','$upload_by','$upload_date')";
//   $add_attachment = mysqli_query($connection,$attachment_query);

// update homepage
if(isset($_POST['update_homepage'])){
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
    if(!$update_home){
      die("QUERY FAILED". mysqli_error($connection));
    }

    //echo '<script>alert("Record Successfully Updated")</script>';


    //header("Location: staff.php?source=update_staff&staff_id=$staff_id");
    $confirm_message = "Staff Successfully Updated.";
    // $loc = "staff.php?source=update_staff&staff_id={$staff_id}";
    // echo "<script type='text/javascript'>alert('$confirm_message'); location.href='$loc'; </script>";
    //echo "<script type='text/javascript'>location.href='$loc'</script>";
    //header("Location: staff.php?source=update_staff&staff_id={$staff_id}");
  }else{
    $confirm_message = "";
  }

?>



  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
          <div class="form-container">
            <div class="form-title">Update Homepage</div>
            <div class="w-form">
              <form id="appointment-form" method="post" action="includes/update_homepage.php" class="form">
                <div class="field-container">
                <h4>Hero Section</h4>
                  <div class="field-wrapper">
                    <label>Overline text</label>
                    <input type="text" class="input-field w-input"  name="overline_text" id="overline_text" value="<?php echo $overline_text; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Header</label>
                    <input type="text" class="input-field w-input"  name="hero_header" id="hero_header" value="<?php echo $hero_header; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Sub header</label>
                    <input type="text" class="input-field w-input"  name="hero_sub_header" id="hero_sub_header" value="<?php echo $hero_sub_header; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Appointment text</label>
                    <input type="text" class="input-field w-input"  name="appointment_text" id="appointment_text" value="<?php echo $appointment_text; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Appointment link</label>
                    <input type="text" class="input-field w-input"  name="appointment_link" id="appointment_link" value="<?php echo $appointment_link; ?>">
                  </div>
                </div>

                <div class="field-container">
                <h4>Service section</h4>
                  <div class="field-wrapper">
                    <label>Service title</label>
                    <input type="text" class="input-field w-input"  name="service_title" id="service_title" value="<?php echo $service_title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Service sub text</label>
                    <input type="text" class="input-field w-input"  name="service_subtext" id="service_subtext" value="<?php echo $service_subtext; ?>">
                  </div>
                </div>

                <div class="field-container">
                <h4>Announcement section</h4>
                  <div class="field-wrapper">
                    <label>Announcement title</label>
                    <input type="text" class="input-field w-input"  name="announcement_title" id="announcement_title" value="<?php echo $announcement_title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Announcement sub text</label>
                    <input type="text" class="input-field w-input"  name="announcement_subtext" id="announcement_subtext" value="<?php echo $announcement_subtext; ?>">
                  </div>
                  <div class="field-wrapper">
                    
                  </div>
                </div>


                <div class="field-container">
                <h4>Blessed Moments section</h4>
                  <div class="field-wrapper">
                    <label>Blessed Moments title</label>
                    <input type="text" class="input-field w-input"  name="blessed_title" id="blessed_title" value="<?php echo $blessed_title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Blessed Moments sub text</label>
                    <input type="text" class="input-field w-input"  name="blessed_subtext" id="blessed_subtext" value="<?php echo $blessed_subtext; ?>">
                    <input type="hidden" class="input-field w-input"  name="id" id="id" value="<?php echo $id; ?>">
                  </div>
                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <button class="button-link w-button" name="update_homepage" id="update_homepage">Update</button>
                </div>
              </form>
              <!-- <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>