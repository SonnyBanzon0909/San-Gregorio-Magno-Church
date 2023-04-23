  
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
            <div class="form-title">Announcement list</div>
            <div class="w-form">
              
                <div class="field-container">
                  <?php 
                    $query = "SELECT * FROM announcement_tbl";
                    $select_all_announcement = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_array($select_all_announcement)){
                      $id = $row['id'];
                      $name = $row['name'];

                      echo '<div class="announcement_wrapper" id="'.$id.'">'.$name.'
                      <div data-w-id="14e56277-239e-cc10-6aba-00a1806977fd" class="button rounded-button signup-btn">
                        <div class="button-overlay"></div>
                        <a aria-label="" href="announcement.php?source=view_announcement&id='.$id.'" class="button-link">View</a>
                        </div>
                      </div>';

                    }
                  ?>
                  <div class="">
                  </div>
                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <a href="announcement.php?source=add_announcement"><button class="button-link w-button">Add announcement</button></a>
                </div>
              
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