  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
          <div class="form-container">
            <div class="form-title">Add new Gallery</div>
            <div class="w-form">
              <form id="appointment-form" method="post" action="includes/add_new_gallery.php" enctype="multipart/form-data" class="form">
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
                    <input type="text" class="input-field w-input"  name="title" id="title" value="">
                  </div>

                  <div class="field-wrapper">
                    <label>Date</label>
                    <input type="text" class="input-field w-input"  name="gallery_date" id="gallery_date" value="">
                  </div>

                  <div class="field-wrapper">
                    <label>Details</label>
                    <textarea class="input-field w-input"  name="details" id="details" value=""></textarea>
                  </div>
                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <button class="button-link w-button" name="add_gallery" id="add_gallery">Add this Gallery</button>
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

<script>
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