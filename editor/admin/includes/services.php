  
<?php
    

    $query = "SELECT * FROM service_tbl";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $title = $row["title"];
      $sub_text = $row["sub_text"];
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
            <div class="form-title">Update Service</div>
            <div class="w-form">
              <form id="appointment-form" method="post" action="includes/update_service_page.php" enctype="multipart/form-data" class="form">
                <div class="field-container">
                <h4>Hero Section</h4>
                  <div class="field-wrapper">
                    <label>Title</label>
                    <input type="text" class="input-field w-input"  name="title" id="title" value="<?php echo $title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Sub text</label>
                    <textarea class="input-field w-input"  name="sub_text" id="sub_text"><?php echo $sub_text; ?></textarea>
                    <input type="hidden" class="input-field w-input"  name="id" id="id" value="<?php echo $id; ?>">
                  </div>
                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <a href="services.php?source=update_service&id=<?php echo $id; ?>"><button class="button-link w-button">Update</button></a>
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