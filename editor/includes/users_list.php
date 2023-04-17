  
<?php
    
    if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query = "SELECT * FROM admin_users WHERE id = $id";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $username = $row["username"];
      $password = $row["password"];
      $role = $row["role"];
    }
  }

?>



  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
          <div class="form-container">
            <div class="form-title">Users</div>
            <div class="w-form">
              
                <div class="field-container">
                  <?php 
                    $query = "SELECT * FROM admin_users";
                    $select_all_users = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_array($select_all_users)){
                      $id = $row['id'];
                      $username = $row['username'];

                      echo '<div class="announcement_wrapper"><a href="users.php?source=update_user&id='.$id.'">'.$username.'</a></div>';

                    }
                  ?>
                  <div class="">
                  </div>
                </div>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div>
                  <a href="users.php?source=add_user"><button class="button-link w-button">Add New User</button></a>
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