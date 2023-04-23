
<div class="section contact-section wf-section">
  <div class="container">
    <div class="form-grid">
      <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
        <div class="form-container">
          <div class="form-title">Priests list</div>
          <div class="w-form">

            <div class="field-container">
              <?php 
              $query = "SELECT * FROM priests_tbl";
              $select_all_moments = mysqli_query($connection, $query);
              while($row = mysqli_fetch_array($select_all_moments)){
                $id = $row['id'];
                $name = $row['name'];

                echo '
                <div id ="galcon-'.$id.'" style="position: relative; padding-right: 30px; display: flex; align-items: center">

                <img class="remove-pic" src="images/close-icon-2.svg" style="position: absolute; top: auto; left: auto; right: 0px; bottom: auto; cursor: pointer;">

                <div class="announcement_wrapper">'.$name.'
                <div data-w-id="14e56277-239e-cc10-6aba-00a1806977fd" class="button rounded-button signup-btn">
                <div class="button-overlay"></div>
                <a aria-label="" href="priests.php?source=view_priest&id='.$id.'" class="button-link">View</a>
                </div>
                </div>
                </div>';

              }
              ?>
              <div class="">
              </div>
            </div>

            <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
              <div style="opacity:0" class="button-overlay"></div>
              <a href="priests.php?source=add_priest"><button class="button-link w-button">Add Priest</button></a>
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