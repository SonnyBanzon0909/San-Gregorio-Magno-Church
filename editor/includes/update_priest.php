  <?php
    
    if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query = "SELECT * FROM priests_tbl WHERE id = $id";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $name = $row["name"];
      $year_in_church = $row["year_in_church"];
      $photo = $row["photo"];
    }
  }

  ?>

  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
          <div class="form-container">
            <div class="form-title">View Priests</div>
            <div class="w-form">
              <form id="appointment-form" method="post" action="includes/update_new_priest.php" enctype="multipart/form-data" class="form">
                <div class="field-container">
                  <!-- <div class="field-wrapper">
                    <label>Status</label>
                    <select id="status" name="status" data-name="Purpose" class="select w-select">
                      <option value=""></option>
                      <option value="Publish">Publish</option>
                      <option value="Draft">Draft</option>
                  </select>
                  </div> -->
                  <div class="field-wrapper">
                    <label>Name</label>
                    <input type="text" class="input-field w-input"  name="name" id="name" value="<?php echo $name; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Years in Church</label>
                    <input type="text" class="input-field w-input"  name="year_in_church" id="year_in_church" value="<?php echo $year_in_church; ?>">
                    <input type="hidden" class="input-field w-input"  name="id" id="id" value="<?php echo $id; ?>">
                  </div>
                  <div class="field-wrapper">
                    <label>Photo</label>
                    <input type="file" class="" name="photo" id="photo" accept="image/*;capture=camera" id="">
                  </div>
                  
                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <button class="button-link w-button" name="update_priest" id="update_priest">Update</button>
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