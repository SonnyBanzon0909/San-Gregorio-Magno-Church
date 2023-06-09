<?php


require_once "connect.php";

if (isset($_SESSION['user_email'])) {
  $email = $_SESSION['user_email'];



  $query = "SELECT * FROM login WHERE email = '$email'";
  $view_query = mysqli_query($connection, $query);

  if(!$view_query){
    die("QUERY FAILED". mysqli_error($connection));
  }

  while($row = mysqli_fetch_array($view_query)){

    $photo = $row["logo"];
    $name = $row["fullname"];
    $birthday = $row["birthday"];
    $contact = $row["contact"];
    $address = $row["address"];
    $barangay = $row["barangay"];

  }
}

?>


<div class="section footer-section wf-section">
  <div class="container">
    <div class="cta-grid">
      <div id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae23a-2fdae237" data-w-id="0070e048-3023-2eb5-4e69-91f82fdae23a" class="cta-con left-cta-con">
        <div class="cta-title cta-title-with-border">LETS GET IN TOUCH</div>
        <div class="div-block">
          <a href="https://www.facebook.com/parokyanisangregoriomagnotrece" target="_blank" class="cta-link">Parokya ni San Gregorio Magno/Trece | Facebook</a>
          <a href="mailto:sangregoriomagno262017@gmail.com" class="cta-link">sangregoriomagno262017@gmail.com</a>
        </div>
      </div>
      <div id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae242-2fdae237" data-w-id="0070e048-3023-2eb5-4e69-91f82fdae242" class="cta-con">
        <div class="cta-title cta-title-with-border">LETS GET IN TOUCH</div>
        <div class="div-block">
          <a href="tel:(046)419-1162" class="cta-link">Landline No. (046) 419-1162</a>
          <a href="tel:09109799416" class="cta-link">Cellphone No. 09109799416</a>
        </div>
      </div>
    </div>
    <div class="footer-brand-wrapper">
      <div data-w-id="0070e048-3023-2eb5-4e69-91f82fdae24b" class="footer-brand-con">
        <div class="footer-brand-grid">
          <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae24d-2fdae237" href="index.php?filter=today" class="footer-brand-link w-inline-block"><img src="images/Diyosesis-ng-Imus.png" loading="eager" alt="" class="footer-brand"></a>
          <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae24f-2fdae237" href="index.php?filter=today" class="footer-brand-link w-inline-block"><img src="images/parokya-ni-San-Gregorio-Magno.png" loading="eager" alt="" class="footer-brand"></a>
        </div>
        <div class="footer-title">Parokya ni San Gregorio Magno</div>
        <div class="footer-excerpt">Brgy. Inocencio, Trece Martires City, Cavite</div>
      </div>
    </div>
    <div class="footer-link-wrapper">
      <div data-w-id="0070e048-3023-2eb5-4e69-91f82fdae256" class="footer-link-grid">
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae257-2fdae237" href="index.php?filter=today" aria-current="page" class="nav-link footer-link w--current">Home</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae259-2fdae237" href="about-us.php" class="nav-link footer-link">About</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae25b-2fdae237" href="services.php?id=1" class="nav-link footer-link">Services</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae25d-2fdae237" href="galleries.php?id=1" class="nav-link footer-link">Galleries</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae25f-2fdae237" href="contact-us.php" class="nav-link footer-link">Contact us</a>
        <a id="w-node-_0070e048-3023-2eb5-4e69-91f82fdae261-2fdae237" data-w-id="0070e048-3023-2eb5-4e69-91f82fdae261" href="#" class="nav-link footer-link login-btn sign-btn">Log in</a>
      </div>
    </div>
    <div class="footer-note-wrapper">
      <div data-w-id="0070e048-3023-2eb5-4e69-91f82fdae264" class="footnote-text">© PAROKYA NI SAN GREGORIO MAGNO PARISH CHURCH 2023. Website by PRIJAG Network Solution</div>
    </div>
    <div class="tawkto-wrapper">
      <div class="tawkto-embed w-embed w-script">
        <!-- Start of Tawk.to Script -->
        <script type="text/javascript">
          if (window.location.href.indexOf("editor") > -1) {


          } 
          else 
          {


            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
              var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
              s1.async=true;
              s1.src='https://embed.tawk.to/6429585a4247f20fefe95a36/1gt0o2977';
              s1.charset='UTF-8';
              s1.setAttribute('crossorigin','*');
              s0.parentNode.insertBefore(s1,s0);
            })();
          }

        </script>
        <!-- End of Tawk.to Script -->
      </div>
    </div>
  </div>
</div>

<div class="section login-section create-section wf-section">
  <div class="login-wrapper">
    <a data-w-id="b6a4babc-5026-d4af-ff01-fe6645157765" href="#" class="close-login w-inline-block create-btn-close"><img src="images/close-icon-2.svg" loading="lazy" alt="" class="close-icon"></a>
    <div class="login-title-wrapper"><img src="images/parokya-ni-San-Gregorio-Magno.png" loading="lazy" alt="" class="login-logo">
      <div class="text-block">Create Account</div>
    </div>
    <div class="w-form">
      <form id="create-forms" name="wf-form-login" data-name="login" method="post" class="login-form"action="" onsubmit="return create()"  >

        <div class="input-con"><input required type="text" class="input-field w-input create-field" maxlength="256" name="c-fullname" data-name="Full Name 3" placeholder="Full Name" id="c-fullname"></div>

        <div class="input-con">
          <input required type="text" class="input-field w-input create-field" maxlength="256" name="c-birthday" data-name="Birthday 2" placeholder="Birthday" id="c-birthday"  >
          <img src="images/calendar-2.svg" style="pointer-events: none;" loading="lazy" alt="" class="calendar">
        </div>



        <div class="input-con"><input required type="tel" class="input-field w-input create-field" maxlength="11" name="c-contact" data-name="Contact Number 2" placeholder="Contact number" id="c-contact" pattern="[0-9]{1,11}"></div>

        <div class="input-con"><input required type="text" class="input-field w-input create-field" maxlength="256" name="c-address" data-name="Address 3" placeholder="Address" id="c-address"></div>
        <div class="select-wrapper"><select required id="c-barangay" name="c-barangay" data-name="Barangay 2" class="select login-select w-select create-field">
          <option value="">Choose your barangay</option>
          <option value="Brgy. Aguado">Brgy. Aguado</option>
          <option value="Brgy. Inocencio">Brgy. Inocencio</option>
        </select><img src="images/down-chevron.svg" loading="lazy" alt="" class="select-icon"></div>

        <div class="input-con" style="align-items: flex-start !important;flex-direction: column !important;" ><input required type="email" class="input-field w-input create-field" maxlength="256" name="c-email" data-name="Email 2" placeholder="Email" id="c-email" onblur="checkEmail()">
          <p id="email-status" class="requirement-text" style="margin-top: 5px; display: none;"></p>
        </div>


        <div class="input-con relative"><input required type="password" class="input-field w-input create-field" maxlength="256" name="c-password" data-name="Create Password 3" placeholder="Create password" id="c-password" pattern=".{8,}" ><img class="eye" src="images/open_eye.svg">
        </div>
        <div id="w-node-b6a4babc-5026-d4af-ff01-fe664515777d-45157763" class="already-text">Already have an account?  <a href="#" data-w-id="b6a4babc-5026-d4af-ff01-fe664515777f" class="login-link-span">Log in</a>
        </div>

        <div data-w-id="create-btn-con" class="button rounded-button" >
          <div class="button-overlay"></div><input type="submit" id="create-btn" value="SIGN UP" data-wait="Please wait..." class="button-link w-button create-btn">

        </div>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
</div>
<div class="section login-section verify-section wf-section">
  <div class="otp-wrapper">
    <div class="verify-wrapper">
      <div class="verify-text">Verify Email</div>
      <div class="verify-excerpt">We will send you an One Time Password on your provided email</div>
    </div>
    <div class="code-wrapper">
      <div class="verify-excerpt">Enter 4-digit code</div>
      <div class="code-pin-wrapper w-embed">
        <div class="code-con">
          <input type="text" placeholder="0" id="code1" class="code" maxlength="1">
          <input type="text" placeholder="0" id="code2" class="code" maxlength="1">
          <input type="text" placeholder="0" id="code3" class="code" maxlength="1">
          <input type="text" placeholder="0" id="code4" class="code" maxlength="1">
        </div>
      </div>
      <div class="verify-excerpt marg-bot-50" id="resend_text">Didn’t receive the OTP? <a href="#" class="otp-span" onclick="resend_otp()">Resend otp</a>
      </div>
      <div data-w-id="6dc8872f-5289-90b7-23c0-0449d393680c" class="button rounded-button">
        <div class="button-overlay"></div>
        <a aria-label="" href="#" class="button-link hero-btn" id="verify" onclick="verify()">VERIFY</a>
      </div>
    </div>
  </div>
</div>
<div class="section login-section change-section wf-section" id="change-section" style="    padding: 0 25px">
  <div class="pass-wrapper">
    <div class="verify-text marg-bot-45">Change Password</div>
    <div class="w-form">


      <form id="change-form" name="wf-form-login" data-name="login" method="get" class="login-form" action="">

        <div class="input-con relative"><input type="password" class="input-field w-input" maxlength="256" name="change-name" data-name="change-name" placeholder="Current password" id="change-name" pattern=".{8,}">
          <img class="eye" src="images/open_eye.svg">
        </div>

        <div class="input-con relative"><input type="password" class="input-field w-input" maxlength="256" name="change-address" data-name="change-address" placeholder="New password" id="change-address" pattern=".{8,}">
          <img class="eye" src="images/open_eye.svg">
        </div>

        <div class="input-con relative"><input type="password" class="input-field w-input" maxlength="256" name="change-password" data-name="change-password" placeholder="Confirm password" id="change-password" pattern=".{8,}">
          <img class="eye" src="images/open_eye.svg">
        </div>


        <div id="w-node-e836a998-e239-21e2-f726-d8e7131034ad-131034a1" class="save-grid-wrapper">
          <div id="w-node-e836a998-e239-21e2-f726-d8e7131034ae-131034a1" class="save-grid">
            <div data-w-id="e836a998-e239-21e2-f726-d8e7131034af" class="button rounded-button min-112">
              <div class="button-overlay"></div><input type="submit" value="CONFIRM" data-wait="Please wait..." class="button-link w-button">
            </div>
            <div data-w-id="e836a998-e239-21e2-f726-d8e7131034b2" class="button rounded-button trans-btn min-112">
              <div class="button-overlay bg-black"></div>
              <a aria-label="" href="index.php" class="button-link color-black">CANCEL</a>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="section login-section edit-section wf-section" id="edit-sign-section">
  <div class="login-wrapper">
    <a data-w-id="5c4e39d1-a274-468f-2c53-2949e8e75d64" href="#" class="close-login w-inline-block"><img src="images/close-icon-2.svg" loading="lazy" alt="" class="close-icon" id="close-edit-button"></a>
    <div class="login-title-wrapper">

      <div class="edit-logo-wrapper">

        <?php if (!empty($photo)) : ?>
          <img src="http://parokya-ni-san-gregorio-magno.com/images/<?php echo $photo; ?>" loading="lazy" id="logo" alt="" class="login-logo edit-logo" style="display: block;">
          <div class="profile-img-con edit-img-con" style="display: none !important;">
            <div class="profile-initial edit-initial">s</div>
          </div>
        <?php else : ?>
          <img src="" loading="lazy" id="logo" alt="" class="login-logo edit-logo" style="display: none !important;">
          <div class="profile-img-con edit-img-con">
            <div class="profile-initial edit-initial">s</div>
          </div>
        <?php endif; ?>

        <div class="edit-camera-con">
          <img src="images/camera-icon.svg" loading="lazy" width="14" id="camera" alt="" class="camera" onclick="document.getElementById('photo-upload').click();" style="    cursor: pointer;">
        </div>
      </div>

      <!--  -->
      <div class="text-block">Edit Profile</div>
    </div>
    <div class="w-form">
      <form id="wf-form-login" name="wf-form-login" data-name="login" method="post" class="login-form" action="update-login.php">
        <div id="w-node-_5c4e39d1-a274-468f-2c53-2949e8e75d72-e8e75d62" class="personal-text">Personal Information</div>

        <input type="hidden" name="oldphoto" value="<?php echo $photo; ?>">

        <input type="file" id="photo-upload" style="display: none;" name="photo" accept="image/*" class="upload-input">

        <div class="input-con"><input type="text" class="input-field w-input" maxlength="256" name="Full-Name-3" data-name="Full Name 3" placeholder="Full Name" id="edit-name" value="<?php echo $name; ?>"></div>

        <div class="input-con"><input required type="date" class="input-field w-input" maxlength="256" name="Birthday-2" data-name="Birthday 2" placeholder="Birthday" id="edit-birthday" value="<?php echo $birthday; ?>"><img src="images/calendar-2.svg" loading="lazy" alt="" class="calendar"></div>

        <div class="input-con">
          <input type="number" class="input-field w-input" name="Contact-number-2" data-name="Contact Number 2" placeholder="Contact number" maxlength="11" id="edit-phone" pattern=".{11,}" value="<?php echo $contact; ?>">
        </div>



        <div class="input-con"><input type="text" class="input-field w-input" maxlength="256" name="Address-3" data-name="Address 3" placeholder="Address" id="edit-address" value="<?php echo $address; ?>"></div>
        <div class="select-wrapper"><select id="edit-barangay" name="Barangay" data-name="Barangay" class="select login-select w-select">
          <option value="<?php echo $barangay; ?>"><?php echo $barangay; ?></option>
          <option value="Brgy. Aguado">Brgy. Aguado</option>
          <option value="Brgy. Inocencio">Brgy. Inocencio</option>
        </select><img src="images/down-chevron.svg" loading="lazy" alt="" class="select-icon"></div>

        <div id="w-node-_5c4e39d1-a274-468f-2c53-2949e8e75d82-e8e75d62" class="already-text chnage-text">Change Password? <a href="#" class="login-link-span" onclick="change_password()">Click here</a>
        </div>
        <div id="w-node-_5c4e39d1-a274-468f-2c53-2949e8e75d86-e8e75d62" class="save-grid-wrapper">
          <div id="w-node-_5c4e39d1-a274-468f-2c53-2949e8e75d87-e8e75d62" class="save-grid">
            <div data-w-id="5c4e39d1-a274-468f-2c53-2949e8e75d88" class="button rounded-button min-112">
              <div class="button-overlay"></div><input type="submit" value="SAVE" data-wait="Please wait..." class="button-link w-button">
            </div>
            <div data-w-id="5c4e39d1-a274-468f-2c53-2949e8e75d8b" class="button rounded-button trans-btn min-112">
              <div class="button-overlay bg-black"></div>
              <a aria-label="" href="index.php" class="button-link color-black">CANCEL</a>
            </div>
          </div>
        </div>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
</div>
<div class="section login-section sign-in-section wf-section">
  <div class="login-wrapper">
    <a data-w-id="55624acf-f15f-fc5e-8f62-de9f34de7e83" href="#" class="close-login w-inline-block"><img src="images/close-icon-2.svg" loading="lazy" alt="" class="close-icon"></a>
    <div class="login-title-wrapper"><img src="images/parokya-ni-San-Gregorio-Magno.png" loading="lazy" alt="" class="login-logo">
      <div class="text-block">Log in</div>
    </div>
    <div class="form-block w-form">




      <form id="wf-form-login" name="wf-form-login" data-name="login" method="post" class="login-form display-block" action="" onsubmit="return login()">


       <?php

       if (isset($_COOKIE['cookie_email']) && isset($_COOKIE['cookie_password'])) {

        $cookie_email = $_COOKIE['cookie_email'];
        $cookie_password = $_COOKIE['cookie_password'];
        $first_initial = strtoupper(substr($cookie_email, 0, 1));


        echo '
        <div id="w-node-_55624acf-f15f-fc5e-8f62-de9f34de7e8b-34de7e81" class="not-save-wrapper" style="display: none;">
        <div class="input-con"><input required type="email" class="input-field w-input" maxlength="256" name="l-email" data-name="Login Email 3" placeholder="Email" id="l-email" value="'.$cookie_email.'"></div>

        <div class="input-con relative" style="align-items: flex-start !important;flex-direction: column !important;"><input required type="password" class="input-field w-input" maxlength="256" name="l-password" data-name="Login Password 3" placeholder="Password" id="l-password" value="'.$cookie_password.'"><img class="eye" src="images/open_eye.svg">
        <p id="error-message" class="requirement-text" style="margin-top: 5px; display: none;"></p>
        </div>
        </div>
        ';

        

        echo '<div class="save-wrapper">
        <div class="welcome-text"><strong>Welcome back!</strong></div>
        <div class="edit-logo-wrapper">';

        if (isset($_COOKIE['cookie_image'])) {
          $cookie_img = $_COOKIE['cookie_image'];
          echo '<img src="http://parokya-ni-san-gregorio-magno.com/images/' . $cookie_img . '" loading="lazy" alt="" class="login-logo edit-logo" style="display: block !important;">';

          echo '<div class="profile-img-con welcome-img-con" style="display: none !important">
          <div class="profile-initial save-initial">'.$first_initial.'</div>
          </div>

          <div class="edit-camera-con hide"><img src="images/camera-icon.svg" loading="lazy" width="14" alt="" class="camera"></div>
          </div>
          <div class="already-text normal">'.$cookie_email.'</div>
          </div>';

        }
        else
        {

          echo '<img src="" loading="lazy" alt="" class="login-logo edit-logo" style="display: none !important;">';

          echo '<div class="profile-img-con welcome-img-con" style="display: grid !important">
          <div class="profile-initial save-initial">'.$first_initial.'</div>
          </div>

          <div class="edit-camera-con hide"><img src="images/camera-icon.svg" loading="lazy" width="14" alt="" class="camera"></div>
          </div>
          <div class="already-text normal">'.$cookie_email.'</div>
          </div>';
        }

        

        


      } 
      else 
      {



        echo '
        <div id="w-node-_55624acf-f15f-fc5e-8f62-de9f34de7e8b-34de7e81" class="not-save-wrapper" style="display: grid;">
        <div class="input-con"><input required type="email" class="input-field w-input" maxlength="256" name="l-email" data-name="Login Email 3" placeholder="Email" id="l-email"></div>

        <div class="input-con relative" style="align-items: flex-start !important;flex-direction: column !important;"><input required type="password" class="input-field w-input" maxlength="256" name="l-password" data-name="Login Password 3" placeholder="Password" id="l-password"><img class="eye" src="images/open_eye.svg">
        <p id="error-message" class="requirement-text" style="margin-top: 5px; display: none;"></p>
        </div>
        </div>
        ';


        echo '<div class="save-wrapper" style="display:none">
        <div class="welcome-text"><strong>Welcome back!</strong></div>
        <div class="edit-logo-wrapper"><img src="images/parokya-ni-San-Gregorio-Magno.png" loading="lazy" alt="" class="login-logo edit-logo">
        <div class="profile-img-con welcome-img-con">
        <div class="profile-initial save-initial">E</div>
        </div>
        <div class="edit-camera-con hide"><img src="images/camera-icon.svg" loading="lazy" width="14" alt="" class="camera"></div>
        </div>
        <div class="already-text normal">esample000@gmail.com</div>
        </div>';
      }
      ?>









      <div data-w-id="55624acf-f15f-fc5e-8f62-de9f34de7e9d" class="button rounded-button">
        <div class="button-overlay"></div><input type="submit" value="LOG IN" data-wait="Please wait..." class="button-link w-button">
      </div>


    </form>


  </div>
  <div class="already-text marg-bot-45">Not you? <a href="#" data-w-id="55624acf-f15f-fc5e-8f62-de9f34de7ea8"onclick="resetInput()">Use another account</a>
  </div>
  <div class="already-text">Don’t you have an account? <a href="#" data-w-id="55624acf-f15f-fc5e-8f62-de9f34de7eac">Sign up</a>
  </div>
</div>
</div>

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>




<script type="text/javascript">


  $('.code').on('input', function() {
    if ($(this).val().length === 1 ) {
      $(this).next('.code').focus();
      console.log($(this).val());
    }
  });




  $("#c-birthday").click(function() {
    $(this).attr("type", "date");
    //var today = new Date().toISOString().split('T')[0];
    //$(this).attr("min", today);
  });





  var currentPasswordField = document.getElementById("change-name");
  var newPasswordField = document.getElementById("change-address");
  var confirmPasswordField = document.getElementById("change-password");
  var createPasswordField = document.getElementById("c-password");

  var createPhone = document.getElementById("c-contact");
  var editPhone = document.getElementById("edit-phone");


  createPhone.addEventListener("input", function() {
    if (createPhone.validity.patternMismatch) {
      createPhone.setCustomValidity("Number must be 11 numbers long.");
    } else {
      createPhone.setCustomValidity("");
    }
  });
  editPhone.addEventListener("input", function() {
    if (editPhone.validity.patternMismatch) {
      editPhone.setCustomValidity("Number must be 11 numbers long.");
    } else {
      editPhone.setCustomValidity("");
    }
  });


  createPasswordField.addEventListener("input", function() {
    if (createPasswordField.validity.patternMismatch) {
      createPasswordField.setCustomValidity("Password must be at least 8 characters long.");
    } else {
      createPasswordField.setCustomValidity("");
    }
  });

  currentPasswordField.addEventListener("input", function() {
    if (currentPasswordField.validity.patternMismatch) {
      currentPasswordField.setCustomValidity("Password must be at least 8 characters long.");
    } else {
      currentPasswordField.setCustomValidity("");
    }
  });

  newPasswordField.addEventListener("input", function() {
    if (newPasswordField.validity.patternMismatch) {
      newPasswordField.setCustomValidity("Password must be at least 8 characters long.");
    } else {
      newPasswordField.setCustomValidity("");
    }
  });

  confirmPasswordField.addEventListener("input", function() {
    if (confirmPasswordField.validity.patternMismatch) {
      confirmPasswordField.setCustomValidity("Password must be at least 8 characters long.");
    } else {
      confirmPasswordField.setCustomValidity("");
    }
  });


  $(document).ready(function() {
  // Toggle password visibility on click of eye icon
    $(".input-con .eye").click(function() {
      var $input = $(this).prev("input");
      if ($input.attr("type") === "password") {
        $input.attr("type", "text");
        $(this).attr("src", "images/close_eye.svg");
      } else {
        $input.attr("type", "password");
        $(this).attr("src", "images/open_eye.svg");
      }
    });
  });




  function resetInput()
  {
    $("#l-email").val("");
    $("#l-password").val("");
  }

  $("#camera").click(function(){
    $(".edit-img-con").css("display", "none");
    $("#logo").css("display", "block");



  });

  document.getElementById("close-edit-button").addEventListener("click", function() {

    $(".edit-img-con").css("display", "flex");
    $("#logo").css("display", "none");

    var oldphoto = document.querySelector('input[name="oldphoto"]').value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "reset-photo.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        $("#logo").attr("src","http://parokya-ni-san-gregorio-magno.com/images/"+oldphoto);
      }
    };
    xhr.send("oldphoto=" + oldphoto);
  });


  var photoUpload = document.getElementById('photo-upload');

  photoUpload.addEventListener('change', function() {
    var file = this.files[0];
  var filename = file.name.replace(/\s+/g, '-'); // Replace spaces with hyphens
  var formData = new FormData();
  formData.append('file', file);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'update-photo.php', true);
  xhr.onload = function() {
    if (this.status == 200) {
      if(this.responseText=="success")
      {
        $("#logo").attr("src","http://parokya-ni-san-gregorio-magno.com/images/"+filename);
      }
    }
  };
  xhr.send(formData);
});


  if (window.location.pathname.includes("/editor/")) 
  {
  //alert("sdsd");
    // $("#profile").hide();
  } else {
  // Current page is not inside the "editor" folder
 // alert("This page is not inside the 'editor' folder.");
  }



  $(document).ready(function() {
  // Handle form submission
    $('#change-form').submit(function(e) {
      e.preventDefault();
      var old_password = $('#change-name').val();
      var new_password = $('#change-address').val();
      var password = $('#change-password').val();
      if(old_password == "" && new_password =="" && password =="")
      {
        alert("Please fill it out before proceeding.");
      }
      else
      {
        if(new_password == password)
        {
          // Send AJAX request to update the data
          $.ajax({
            type: "GET",
            url: "update-password.php",
            data: { old_password: old_password, new_password: new_password, password: password },
            success: function(data) {
              if (data.trim() === 'success') {
          // Display alert message
                alert('Update successful');
          // Redirect to index.html
                window.location.href = 'index.php';
              } else {
          // Display error message
                alert('Update failed');
              }
            },
            error: function() {
        // Display error message
              alert('Update failed');
            }
          });
        }
        else
        {
          alert("Password did not match!");
        }

      }

    });
  });



  $(".update-button").click(function(){
    console.log("Change Pass");


    //edit-password

    $('#edit-sign-section').css({
      display: "flex",
      opacity: 1
    });

  });


  function resend_otp()
  {
    const name = document.querySelector('#c-fullname').value;
    const birthday = document.querySelector('#c-birthday').value;
    const contact = document.querySelector('#c-contact').value;
    const address = document.querySelector('#c-address').value;
    const barangay = document.querySelector('#c-barangay').value;
    const email = document.querySelector('#c-email').value;
    const password = document.querySelector('#c-password').value;

    $("#resend_text").text("We've just sent a new OTP to your email address.");

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'otp.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
      if (xhr.status === 200) {
        //const output = document.querySelector('#output');
        //output.innerHTML = xhr.responseText;
        //alert(xhr.statusText+" : success");
      } else {
        console.error('Error:', xhr.statusText);
      }
    };
    xhr.send('name=' + encodeURIComponent(name) + '&birthday=' + encodeURIComponent(birthday) + '&contact=' + encodeURIComponent(contact) + '&address=' + encodeURIComponent(address) + '&barangay=' + encodeURIComponent(barangay) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));

  }

  function change_password()
  {
    $('#edit-sign-section').css({
      display: "none",
      opacity: 0
    });

    $('#change-section').css({
      display: "flex",
      opacity: 1
    });
  }

  $(document).ready(function(){



    $(".create-field").each( function(q){



        // Disable submit button if any field is empty
      var submitButton = $('.create-btn');
      var formInputs = $(this);
      formInputs.on("keypress", function(event) {
        if(event.keyCode === 13 && $(this).val().length === 0) {
          event.preventDefault();
        }
        submitButton.prop('disabled', $('.username-input').val() === '' || $('.password-input').val() === '' || $('.email-input').val() === '');
      });



    });

  });
  function callCreate(){


    const name = document.querySelector('#c-fullname').value;
    const birthday = document.querySelector('#c-birthday').value;
    const contact = document.querySelector('#c-contact').value;
    const address = document.querySelector('#c-address').value;
    const barangay = document.querySelector('#c-barangay').value;
    const email = document.querySelector('#c-email').value;
    const password = document.querySelector('#c-password').value;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'create-account.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
      if (xhr.status === 200) {
        if(xhr.responseText==='success')
        {
        //const output = document.querySelector('#output');
        //output.innerHTML = xhr.responseText;
          alert("Registration successful");
          window.location.href = 'index.php';
        }

      } else {
        console.error('Error:', xhr.statusText);
      }
    };
    xhr.send('name=' + encodeURIComponent(name) + '&birthday=' + encodeURIComponent(birthday) + '&contact=' + encodeURIComponent(contact) + '&address=' + encodeURIComponent(address) + '&barangay=' + encodeURIComponent(barangay) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));


  }

  function verify()
  {

    const code1 = document.getElementById('code1').value;
    const code2 = document.getElementById('code2').value;
    const code3 = document.getElementById('code3').value;
    const code4 = document.getElementById('code4').value;
    const combinedCode = code1 + code2 + code3 + code4;
    const email = document.querySelector('#c-email').value;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'verify.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
      if (xhr.status === 200) {
        //alert(xhr.responseText);
        if (xhr.responseText.trim()=='success') 
        {
          callCreate();
        }
        else
        {
          alert("Invalid OTP");
        }
        //const output = document.querySelector('#output');
        //output.innerHTML = xhr.responseText;
        //alert(xhr.statusText+" : success");
        //window.location.href = 'index.php?success'; //Turn off when session is okay





      } else {
        //console.error('Error:', xhr.statusText);
      }
    };
    xhr.send('email=' + encodeURIComponent(email) + '&otp=' + encodeURIComponent(combinedCode));

  }

  function checkEmail() {
    $(document).ready(function(){

      var email = document.getElementById("c-email").value;
      if(email.trim() != "")
      {

        $("#email-status").css("display","block");
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("email-status").innerHTML = xhr.responseText;
            var avail_email = xhr.responseText;
            //console.log(xhr.responseText);
            if(avail_email=="<span style='color: green;'>Email is available</span>")
            {
              $("#create-btn").css("pointer-events","auto");
          //console.log(avail_email);
            }
            else
            {
              $("#create-btn").css("pointer-events","none");
          //console.log(avail_email);
            }
          }
        };
        xhr.open("POST", "check_email.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("email=" + email);



      }
      else
      {
        $("#email-status").css("display","none");
      }
    });    
  }


  function create(){

    $(".create-section").css("display","none");
    $(".create-section").css("opacity","0");

    $(".verify-section").css("display","flex");
    $(".verify-section").css("opacity","1");


    const name = document.querySelector('#c-fullname').value;
    const birthday = document.querySelector('#c-birthday').value;
    const contact = document.querySelector('#c-contact').value;
    const address = document.querySelector('#c-address').value;
    const barangay = document.querySelector('#c-barangay').value;
    const email = document.querySelector('#c-email').value;
    const password = document.querySelector('#c-password').value;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'otp.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
      if (xhr.status === 200) {
        //const output = document.querySelector('#output');
        //output.innerHTML = xhr.responseText;
        //alert(xhr.statusText+" : success");
      } else {
        console.error('Error:', xhr.statusText);
      }
    };
    xhr.send('name=' + encodeURIComponent(name) + '&birthday=' + encodeURIComponent(birthday) + '&contact=' + encodeURIComponent(contact) + '&address=' + encodeURIComponent(address) + '&barangay=' + encodeURIComponent(barangay) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));

  }

  function login() {
  // Retrieve the email and password from the form
    var email = document.getElementById('l-email').value;
    var password = document.getElementById('l-password').value;

  // Create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'login.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {

//alert(xhr.responseText + " asasa");
        // Check if the login was successful
          if (xhr.responseText.trim() === 'success') {
          // Redirect to the index page

            window.location.href = 'index.php';
          } 
          else 
          {
          // Display an error message

            $("#error-message").css("display","block");
            document.getElementById('error-message').textContent = 'Invalid email or password.';
          }
        }
        else 
        {
        // Display an error message
          $("#error-message").css("display","block");
          document.getElementById('error-message').textContent = 'An error occurred.';
        }
      }
    };

  // Send the AJAX request with the email and password data
    xhr.send('l-email=' + encodeURIComponent(email) + '&l-password=' + encodeURIComponent(password));

  // Prevent the form from submitting
    return false;
  }

</script>



<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript">

  $(document).ready(function(){



    if (window.location.href.indexOf("editor") > -1) {


    } 
    else 
    {
      var data = <?php echo json_encode($email); ?>;

    //alert(data);
      if(data.trim() != "")
      {

        $(".signup-btn").hide();
        $(".sign-btn").hide();
        $(".profile").show();
        var firstLetter = data[0];
        $(".profile-initial").text(firstLetter);
      }
    }


    
   /* else
    {
      setTimeout(function() {
        document.getElementById("nav-login").click();
      }, 1000);

     

    }*/ 

    $(".log-out").click(function() {
    // make an AJAX request to a PHP script that removes the session
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "logout.php", true);
      xhr.send();
      window.location.href = "index.php";
    });


  });



</script>


