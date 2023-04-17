  <?php
    
    if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query = "SELECT * FROM services_tbl WHERE id = $id";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $icon = $row["icon"];
      $title = $row["title"];
      $content = $row["content"];
      $button_text = $row["button_text"];
      $button_link = $row["button_link"];
      $photo = $row["photo"];
      $status = $row["status"];
    }
  }

  ?>

  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
          <div class="form-container">
            <div class="form-title">Update Service</div>
            <div class="w-form">
              <form id="appointment-form" method="post" action="includes/update_new_service.php" enctype="multipart/form-data" class="form">
                <div class="field-container">
                  <div class="field-wrapper">
                    <label>Status</label>
                    <select id="status" name="status" data-name="Purpose" class="select w-select">
                      <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                      <option value="Publish">Publish</option>
                      <option value="Draft">Draft</option>
                  </select>
                  </div>
                  <div class="field-wrapper">
                    <label>Icon</label>
                    <input type="file" class="" name="icon" id="icon" accept="image/*;capture=camera" id="">
                  </div>
                  <div class="field-wrapper">
                    <label>Title</label>
                    <input type="text" class="input-field w-input"  name="title" id="title" value="<?php echo $title; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Content</label>
                    <textarea class="input-field w-input"  name="content" id="content"><?php echo $content; ?></textarea>
                  </div>
                  <div class="field-wrapper">
                    <label>Button text</label>
                    <input type="text" class="input-field w-input"  name="button_text" id="button_text" value="<?php echo $button_text; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Button link</label>
                    <input type="text" class="input-field w-input"  name="button_link" id="button_link" value="<?php echo $button_link; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Photo</label>
                    <input type="file" class="" name="photo" id="photo" accept="image/*;capture=camera" id="">
                    <input type="hidden" class="input-field w-input"  name="id" id="id" value="<?php echo $id; ?>">
                  </div>
                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <button class="button-link w-button" name="update_service" id="update_service">Update</button>
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