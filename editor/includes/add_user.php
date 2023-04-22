  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
          <div class="form-container">
            <div class="form-title">Add New User</div>
            <div class="w-form">
              <form id="appointment-form" method="post" action="includes/add_new_user.php" enctype="multipart/form-data" class="form">
                <div class="field-container">

                  <div class="field-wrapper">

                    <label>Username</label>
                    <input type="text" class="input-field w-input"  name="username" id="username" value="" autocomplete="off">
                  </div>

                  <div class="field-wrapper">
                    <label>Password</label>
                    <input type="password" class="input-field w-input"  name="password" id="password" value="" autocomplete="off">
                    <input type="hidden" class="input-field w-input"  name="role" id="role" value="admin">

                    <div class="field-wrapper">
                    <label>Role</label>
                    <select id="role" name="role" data-name="role" class="select w-select">
                      <option value="admin">Admin</option>
                      <option value="sub-admin">Sub Admin</option>
                  </select>
                  </div>

                  </div>

                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <button class="button-link w-button" name="add_user" id="add_user">Add this User</button>
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