  
<?php

    $query = "SELECT * FROM about_tbl";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $hero_header = $row["hero_header"];
      $hero_subtext = $row["hero_subtext"];

      $about_date = $row["about_date"];
      $about_title = $row["about_title"];
      $about_content = $row["about_content"];

      $vision_title = $row["vision_title"];
      $vision_content = $row["vision_content"];

      $mission_title = $row["mission_title"];
      $mission_content = $row["mission_content"];

      $priests_title = $row["priests_title"];
      $priests_subtext = $row["priests_subtext"];
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
            <div class="form-title">Update About page</div>
            <div class="w-form">
              <form id="appointment-form" method="post" action="includes/update_about.php" class="form">
                <div class="field-container">
                <h4>Hero Section</h4>
                  <div class="field-wrapper">
                    <label>About hero title</label>
                    <input type="text" class="input-field w-input"  name="hero_header" id="hero_header" value="<?php echo $hero_header; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>About hero sub text</label>
                    <textarea class="input-field w-input"  name="hero_subtext" id="hero_subtext"><?php echo $hero_subtext; ?></textarea>
                  </div>
                  <div class="field-wrapper">
                    <label>About date</label>
                    <input type="text" class="input-field w-input"  name="about_date" id="about_date" value="<?php echo $about_date; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>About title</label>
                    <input type="text" class="input-field w-input"  name="about_title" id="about_title" value="<?php echo $about_title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>About content</label>
                    <textarea class="input-field w-input"  name="about_content" id="about_content"><?php echo $about_content; ?></textarea>
                  </div>
                </div>

                <div class="field-container">
                <h4>Mission / Vision section</h4>
                  <div class="field-wrapper">
                    <label>Vision title</label>
                    <input type="text" class="input-field w-input"  name="vision_title" id="vision_title" value="<?php echo $vision_title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Vision content</label>
                    <textarea class="input-field w-input"  name="vision_content" id="vision_content"><?php echo $vision_content; ?></textarea>
                  </div>
                  <div class="field-wrapper">
                    <label>Mission title</label>
                    <input type="text" class="input-field w-input"  name="mission_title" id="mission_title" value="<?php echo $mission_title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Mission content</label>
                    <textarea class="input-field w-input"  name="mission_content" id="mission_content"><?php echo $mission_content; ?></textarea>
                  </div>
                </div>

                <div class="field-container">
                <h4>Meet all the Priest</h4>
                  <div class="field-wrapper">
                    <label>Title</label>
                    <input type="text" class="input-field w-input"  name="priests_title" id="priests_title" value="<?php echo $priests_title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Sub text</label>
                    <textarea class="input-field w-input"  name="priests_subtext" id="priests_subtext"><?php echo $priests_subtext; ?></textarea>
                    <input type="hidden" class="input-field w-input"  name="id" id="id" value="<?php echo $id; ?>">
                  </div>
                  <div class="field-wrapper">
                    
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