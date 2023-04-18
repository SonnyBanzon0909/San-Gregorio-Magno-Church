


<div class="section navigation wf-section">
  <div class="container">
    <div class="navigation-link-wrapper">
      <a href="index.php?filter=today" aria-current="page" class="brand w-inline-block w--current"><img src="images/Parokya-logo.png" loading="eager" alt="" class="brand-logo"></a>
      <div class="nav-links-grid desktop-nav-link-grid">
        <a href="home.php?source=update_homepage" id="w-node-_14e56277-239e-cc10-6aba-00a1806977c3-806977bd" aria-current="page" class="nav-link w--current">Home</a>
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

                  echo '<a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ce-806977bd" href="services.php?source=services&id='.$id.'" class="link">'.$title.'</a>';

                }
                echo "</br>";
                echo '<a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ce-806977bd" href="services.php?source=add_service" class="link">Add new service</a>';
                echo '<a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ce-806977bd" href="services.php" class="link">Service list</a>';

              ?>
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

                  echo '<a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e7-806977bd" href="galleries.php?source=update_gallery&id='.$id.'" class="link">'.$title.'</a>';

                }
                echo "</br>";
                echo '<a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ce-806977bd" href="galleries.php?source=add_gallery" class="link">Add new gallery</a>';
                echo '<a id="w-node-_14e56277-239e-cc10-6aba-00a1806977ce-806977bd" href="galleries.php" class="link">Gallery list</a>';

              ?>
            </div>
          </nav>
        </div>

        <div data-hover="false" data-delay="500" id="w-node-_14e56277-239e-cc10-6aba-00a1806977e0-806977bd" data-w-id="14e56277-239e-cc10-6aba-00a1806977e0" class="nav-dropdown w-dropdown">
          <div class="nav-dropdown-toggle w-dropdown-toggle">
            <div class="nav-link">Others</div><img src="images/down-icon.svg" loading="lazy" alt="" class="dropdown-icon">
          </div>
          <nav class="nav-drop-list w-dropdown-list">
            <div class="nav-droplist-wrapper gallery-droplist-wrapper">
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e7-806977bd" href="announcement.php" class="link">Announcement</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e7-806977bd" href="moments.php" class="link">Moments</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e7-806977bd" href="users.php" class="link">Users</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e7-806977bd" href="users.php" class="link">Users</a>
              <a id="w-node-_14e56277-239e-cc10-6aba-00a1806977e7-806977bd" href="users.php" class="link">Users</a>
            </div>
          </nav>
        </div>

        <a href="contact.php" id="w-node-_14e56277-239e-cc10-6aba-00a1806977f9-806977bd" class="nav-link">Contact us</a>

        <!-- <a href="#" id="nav-login" data-w-id="14e56277-239e-cc10-6aba-00a1806977fb" class="nav-link login-btn sign-btn">Log in</a> -->

        <div class="button rounded-button">
          <div class="button-overlay"></div>
          <a aria-label="" href="includes/logout.php" class="button-link">Logout</a>
        </div>
        <div data-hover="false" data-delay="500" id="#profile" data-w-id="a3e29982-56b0-b8b9-18b8-0f02a2630aa4" class="dropdown w-dropdown profile">
          <div class="dropdown-toggle w-dropdown-toggle">
            <div class="profile-img-con" style="margin-right: 23px;">
              <div class="profile-initial" style="text-transform: uppercase;">E</div>
            </div><img src="images/down-chevron.svg" loading="lazy" alt="" class="drop-icon">
          </div>
          <nav class="dropdown-list w-dropdown-list">
            <div class="login-content-con">
              <a href="#" class="login-link w-inline-block"><img src="images/Status.svg" loading="lazy" alt="" class="login-icon">
                <div class="login-text">Status</div>
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
      <a href="#" id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4746-440d470d" class="nav-link">Contact us</a>
      <a href="#" id="w-node-cc8842c1-27e0-b9b5-b91f-d8b4440d4748-440d470d" data-w-id="cc8842c1-27e0-b9b5-b91f-d8b4440d4748" class="nav-link">Log in</a>
      <div data-w-id="cc8842c1-27e0-b9b5-b91f-d8b4440d474a" class="button rounded-button">
        <div class="button-overlay"></div>
        <a aria-label="" href="includes/logout.php" class="button-link">Logout</a>
      </div>
    </div>
  </div>
</div>

 
