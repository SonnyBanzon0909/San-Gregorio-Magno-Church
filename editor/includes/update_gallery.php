  <?php

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $gall_id = $_GET['id'];


    $query = "SELECT * FROM gallery_tbl WHERE id = $id";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $title = $row["title"];
      $gallery_date = $row["gallery_date"];
      $details = $row["details"];
    }
  }

  ?>


  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
          <div class="form-container">
            <div class="form-title">Update <?php echo $title; ?> Gallery</div>
            <div class="w-form">
              <form id="appointment-form" method="post" action="includes/update_new_gallery.php" enctype="multipart/form-data" class="form">
                <div class="field-container">
                  <div class="field-wrapper">
                    <label>Status</label>
                    <select id="status" name="status" data-name="Purpose" class="select w-select">
                      <option value="Publish">Publish</option>
                      <option value="Draft">Draft</option>
                    </select>
                  </div>
                  <!-- <div class="field-wrapper">
                    <label>Select image for announcement</label>
                    <input type="file" class="" name="announcement" accept="image/*;capture=camera" id="">
                  </div> -->
                  <div class="field-wrapper">
                    <label>Title</label>
                    <input type="text" class="input-field w-input"  name="title" id="title" value="<?php echo $title; ?> ">
                  </div>

                  <div class="field-wrapper">
                    <label>Date</label>
                    <input type="text" class="input-field w-input"  name="gallery_date" id="gallery_date" value="<?php echo $gallery_date; ?> ">
                  </div>

                  <div class="field-wrapper">
                    <label>Details</label>
                    <textarea class="input-field w-input"  name="details" id="details"><?php echo $details; ?></textarea>
                    <input type="hidden" class="input-field w-input"  name="id" id="id" value="<?php echo $id; ?> ">
                  </div>

                  <div class="field-wrapper">
                    <label>Photos</label>
                    <div style="margin-bottom:40px;">
                      <?php

                      $query = "SELECT * FROM gallery_images_tbl WHERE gallery_id = $id";
                      $view_query = mysqli_query($connection, $query);

                      if(!$view_query){
                        die("QUERY FAILED". mysqli_error($connection));
                      }

                      while($row = mysqli_fetch_array($view_query)){
                        $gal_pic_id = $row["id"];
                        $photo = $row["photo"];

                        echo '
                        <div id ="galcon-'.$gal_pic_id.'" style="position: relative; display: inline-block;">

                        <img class="remove-pic" src="images/close-icon-2.svg" style="position: absolute; top: 10px; left: auto; right: 10px; bottom: auto; cursor: pointer;">

                        <img id="'.$gal_pic_id.'" src="img/'.$photo.'" style="max-width:180px;margin:5px;">
                        </div>
                        ';
                      }

                      ?>
                    </div>
                    <a href="galleries.php?source=add_photo&id=<?php echo $gall_id; ?>" class="add-photos">
                      <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button add-photos">
                        <div style="opacity:0" class="button-overlay"></div>
                        <div class="button-link w-button">Add Photo</div>
                      </div>
                    </a>
                  </div>

                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <button class="button-link w-button" name="update_gallery" id="update_gallery">Update this Gallery</button>
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



  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script>

// Loop through all the remove-pic elements and add an event listener to each one
    var removePics = document.querySelectorAll('.remove-pic');
    for (var i = 0; i < removePics.length; i++) {
      var removePic = removePics[i];
      removePic.addEventListener('click', function() {
        var galcon = this.parentNode;
    var id = galcon.getAttribute('id').replace('galcon-', ''); // Get the ID number from the galcon- container's ID attribute
    // Send a request to the server to update the gallery_images_tbl table
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText); // Log the response from the server to the console
      }
    };
    xhttp.open('GET', '/includes/draft-gallery-pic.php?id=' + id, true); // Replace 'update_gallery_images.php' with the actual URL of your PHP script
    xhttp.send();
    galcon.parentNode.removeChild(galcon);
  });
    }

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }

    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>