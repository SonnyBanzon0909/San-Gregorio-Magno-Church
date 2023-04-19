<?php
    
    if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query = "SELECT * FROM formdata WHERE id = $id";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $name = $row["name"];
      $status = $row["age"];
      $moments = $row["address"];

      $moments = $row["phone"];
      $moments = $row["gender"];
      $moments = $row["barangay"];
      //$moments = $row["purpose"];
    }
  }

 
?>


  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
          <div class="form-container">
            <div class="form-title">Update Baptism</div>
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