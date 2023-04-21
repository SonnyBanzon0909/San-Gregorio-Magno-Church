
<?php
if(isset($_SESSION['username'])){
 unset($_SESSION['username']);
}


$query = "SELECT * FROM login WHERE email = '$email'";
$view_query = mysqli_query($connection, $query);

if(!$view_query){
  die("QUERY FAILED". mysqli_error($connection));
}

while($row = mysqli_fetch_array($view_query)){

  $photo = $row["logo"];


}


?>

<div class="section navigation wf-section">
  <div class="container">
    <div class="navigation-link-wrapper">
      <a href="index.php" aria-current="page" class="brand w-inline-block w--current"><img src="images/Parokya-logo.png" loading="eager" alt="" class="brand-logo"></a>
      <div class="nav-links-grid desktop-nav-link-grid">
        <a href="index.php" id="w-node-_14e56277-239e-cc10-6aba-00a1806977c3-806977bd" aria-current="page" class="nav-link w--current">Home</a>
        <a href="about.php" id="w-node-_14e56277-239e-cc10-6aba-00a1806977c5-806977bd" class="nav-link">About</a>
        <div data-hover="false" data-delay="500" data-w-id="14e56277-239e-cc10-6aba-00a1806977c7" class="nav-dropdown w-dropdown">
          <div class="nav-dropdown-toggle w-dropdown-toggle">
            <div class="nav-link">Services</div><img src="images/down-icon.svg" loading="lazy" alt="" class="dropdown-icon">
          </div>
          <nav class="nav-drop-list w-dropdown-list">
            <div class="nav-droplist-wrapper">
              <?php 
              $query = "SELECT * FROM services_tbl";
              $select_all_services = mysqli_query($connection, $query);
              while($row = mysqli_fetch_array($select_all_services)){
                $id = $row['id'];
                $title = $row['title'];

                echo '<a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ce-806977bd" href="services.php?id='.$id.'" class="link">'.$title.'</a>';

              }
              ?>
              <!-- <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ce-806977bd" href="services.php" class="link">Baptism</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977d0-806977bd" href="#" class="link">First Communion</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977d2-806977bd" href="#" class="link">Confirmation</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977d4-806977bd" href="#" class="link">Faith Formation</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977d6-806977bd" href="#" class="link">Mass Wedding</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977d8-806977bd" href="#" class="link">Blessings</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977da-806977bd" href="#" class="link">Funeral Mass</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977dc-806977bd" href="#" class="link">Request Certificate</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977de-806977bd" href="#" class="link">Sick Call</a> -->
            </div>
          </nav>
        </div>
        <div data-hover="false" data-delay="500" id="w-node-_14e56277-239e-cc10-6aba-00a1806977e0-806977bd" data-w-id="14e56277-239e-cc10-6aba-00a1806977e0" class="nav-dropdown w-dropdown">
          <div class="nav-dropdown-toggle w-dropdown-toggle">
            <div class="nav-link">Galleries</div><img src="images/down-icon.svg" loading="lazy" alt="" class="dropdown-icon">
          </div>
          <nav class="nav-drop-list w-dropdown-list">
            <div class="nav-droplist-wrapper gallery-droplist-wrapper">
              <?php 
              $query = "SELECT * FROM gallery_tbl";
              $select_all_gallery = mysqli_query($connection, $query);
              while($row = mysqli_fetch_array($select_all_gallery)){
                $id = $row['id'];
                $title = $row['title'];

                echo '<a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e7-806977bd" href="galleries.php?id='.$id.'" class="link">'.$title.'</a>';

              }

              ?>
              <!-- <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e7-806977bd" href="galleries.php" class="link">VISITA IGLESIA</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e9-806977bd" href="#" class="link">Renewal of Vows</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977eb-806977bd" href="#" class="link">Panunuluyan 2022</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ed-806977bd" href="#" class="link">Solemnity of Christ the King</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ef-806977bd" href="#" class="link">Ministry of the Altar Server Investiture</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977f1-806977bd" href="#" class="link">ALAB 2022</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977f3-806977bd" href="#" class="link">WALK OF FAITH 2022</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977f5-806977bd" href="#" class="link">Misa Concelebrada ...</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977f7-806977bd" href="#" class="link">Banal na Misa Kapistahan ...</a>
              <a id="w-node-dbe93e0a-392a-b0ac-7fe7-3a98ffc8b347-806977bd" href="#" class="link">KARAKOL 2022</a> -->
            </div>
          </nav>
        </div>
        <a href="contact-us.php" id="w-node-_14e56277-239e-cc10-6aba-00a1806977f9-806977bd" class="nav-link">Contact us</a>
        <a href="#" id="nav-login" data-w-id="14e56277-239e-cc10-6aba-00a1806977fb" class="nav-link login-btn sign-btn">Log in</a>

        <div data-w-id="14e56277-239e-cc10-6aba-00a1806977fd" class="button rounded-button signup-btn">
          <div class="button-overlay"></div>
          <a aria-label="" href="#" class="button-link">Sign up</a>
        </div>

        <div data-hover="false" id="profile" data-delay="500" data-w-id="a3e29982-56b0-b8b9-18b8-0f02a2630aa4" class="dropdown w-dropdown profile">
          <div class="dropdown-toggle w-dropdown-toggle">

            <div class="profile-img-con" style="margin-right: 23px;position: relative;">
              <?php if (!empty($photo)) { ?>
                <div class="profile-initial" style="display: none;">s</div>
                <img id="profile" src="http://parokya-ni-san-gregorio-magno.com/images/<?php echo $photo; ?>" style="
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 100%;
                ">
              <?php } else { ?>
                <div class="profile-initial" style="text-transform: uppercase;">s</div>
                <img id="profile" src="" style="display: none;">
              <?php } ?>
            </div>


            <img src="images/down-chevron.svg" loading="lazy" alt="" class="drop-icon">
          </div>
          <nav class="dropdown-list w-dropdown-list" style="min-width:210px">
            <div class="login-content-con">

              <a href="status.php" class="login-link w-inline-block"><img src="images/Status.svg" loading="lazy" alt="" class="login-icon">
                <div class="login-text">Status</div>
              </a>

              <a href="#" class="login-link w-inline-block update-button" id="update-button"><img src="images/editor.svg" loading="lazy" alt="" class="login-icon">
                <div class="login-text">Edit Profile</div>
              </a>

              <a href="#" class="login-link w-inline-block" id="log-out"><img src="images/log-out.svg" loading="lazy" alt="" class="login-icon">
                <div class="login-text">Logout</div>
              </a>
            </div>
          </nav>
        </div>

      </div>
      <div data-w-id="14e56277-239e-cc10-6aba-00a180697801" class="hamburger">
        <div class="top"></div>
        <div class="mid"></div>
        <div class="bot"></div>
      </div>
    </div>
  </div>
</div>

<div class="section navigation-list-section wf-section">
  <div class="container">
    <div class="nav-links-grid mobile-nav-link-grid">
      <a href="#" id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4710-440d470d" class="nav-link">Home</a>
      <a href="#" id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4712-440d470d" class="nav-link">About</a>
      <div data-hover="false" data-delay="500" id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4714-440d470d" data-w-id="cc8842c1-27e0-b9b5-b91f-d8b4440d4714" class="nav-dropdown w-dropdown">
        <div class="nav-dropdown-toggle w-dropdown-toggle">
          <div class="nav-link">Services</div><img src="images/down-icon.svg" loading="lazy" alt="" class="dropdown-icon">
        </div>
        <nav class="nav-drop-list w-dropdown-list">
          <div class="nav-droplist-wrapper">
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d471b-440d470d" href="services.php" class="link">Baptism</a>
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d471d-440d470d" href="#" class="link">First Communion</a>
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d471f-440d470d" href="#" class="link">Confirmation</a>
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4721-440d470d" href="#" class="link">Faith Formation</a>
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4723-440d470d" href="#" class="link">Mass Wedding</a>
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4725-440d470d" href="#" class="link">Blessings</a>
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4727-440d470d" href="#" class="link">Funeral Mass</a>
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4729-440d470d" href="#" class="link">Request Certificate</a>
            <a id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d472b-440d470d" href="#" class="link">Sick Call</a>
          </div>
        </nav>
      </div>
      <div data-hover="false" data-delay="500" id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d472d-440d470d" data-w-id="cc8842c1-27e0-b9b5-b91f-d8b4440d472d" class="nav-dropdown w-dropdown">
        <div class="nav-dropdown-toggle w-dropdown-toggle">
          <div class="nav-link">Galleries</div><img src="images/down-icon.svg" loading="lazy" alt="" class="dropdown-icon">
        </div>
        <nav class="nav-drop-list w-dropdown-list">
          <div class="nav-droplist-wrapper gallery-droplist-wrapper">
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce158ff-440d470d" href="galleries.php" class="link">VISITA IGLESIA</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce15901-440d470d" href="#" class="link">Renewal of Vows</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce15903-440d470d" href="#" class="link">Panunuluyan 2022</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce15905-440d470d" href="#" class="link">Solemnity of Christ the King</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce15907-440d470d" href="#" class="link">Ministry of the Altar Server Investiture</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce15909-440d470d" href="#" class="link">ALAB 2022</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce1590b-440d470d" href="#" class="link">WALK OF FAITH 2022</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce1590d-440d470d" href="#" class="link">Misa Concelebrada ...</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce1590f-440d470d" href="#" class="link">Banal na Misa Kapistahan ...</a>
            <a id="w-node-c2b21419-ad24-f15e-ca54-d65a1ce15911-440d470d" href="#" class="link">KARAKOL 2022</a>
          </div>
        </nav>
      </div>

      <a href="contact-us.php" id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4746-440d470d" class="nav-link">Contact us</a>
      <a href="#" id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4748-440d470d" data-w-id="cc8842c1-27e0-b9b5-b91f-d8b4440d4748" class="nav-link sign-btn">Log in</a>
      <div data-w-id="cc8842c1-27e0-b9b5-b91f-d8b4440d474a" class="button rounded-button">
        <div class="button-overlay"></div>
        <a aria-label="" href="#" class="button-link signup-btn">Sign up</a>
      </div>

      <!--  -->
      <div data-hover="false" id="profile" data-delay="500" data-w-id="a3e29982-56b0-b8b9-18b8-0f02a2630aa4" class="dropdown w-dropdown profile" style="width: 100%;">
        <div class="dropdown-toggle w-dropdown-toggle" style="width: 100%; padding-bottom: 15px;">
          <div class="profile-img-con" style="margin-right: 23px;">
            <div class="profile-initial" style="text-transform: uppercase;">E</div>
          </div><img src="images/down-chevron.svg" loading="lazy" alt="" class="drop-icon">
        </div>
        <nav class="dropdown-list w-dropdown-list" style="width:100% !important; min-width: 250px;">
          <div class="login-content-con">

            <a href="status.php" class="login-link w-inline-block"><img src="images/Status.svg" loading="lazy" alt="" class="login-icon">
              <div class="login-text">Status</div>
            </a>

            <a href="#" class="login-link w-inline-block update-button" id="update-button"><img src="images/editor.svg" loading="lazy" alt="" class="login-icon">
              <div class="login-text">Edit Profile</div>
            </a>

            <a href="#" class="login-link w-inline-block" id="log-out"><img src="images/log-out.svg" loading="lazy" alt="" class="login-icon">
              <div class="login-text">Logout</div>
            </a>
          </div>
        </nav>
      </div>
      <!--  -->
    </div>
  </div>
</div>


