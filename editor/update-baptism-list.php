<?php

ob_start();
include "includes/db.php";
$id = $_POST['id'];
session_start();

if(!isset($_SESSION['username'])){
  header("Location: login.php");
}

// $username =  $_SESSION['username'];


// $query = "SELECT * FROM admin_users WHERE username = '$username'";
// $user_query = mysqli_query($connection, $query);

// while($row = mysqli_fetch_array($user_query)){
//   $id = $row['id'];
//   $username = $row['username'];
//   $password = $row['password'];
// }

?>

<!DOCTYPE html><!--  Last Published: Mon Apr 10 2023 17:06:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="640c46a109bfcae29c61da48" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>Be blessed everyday | San Gregorio Magno Church</title>
  <meta content="Lorem ipsum dolor sit amet consectetur lementum sed sollicitudin auctor ac suspendisse." name="description">
  <meta content="Be blessed everyday | San Gregorio Magno Church" property="og:title">
  <meta content="Lorem ipsum dolor sit amet consectetur lementum sed sollicitudin auctor ac suspendisse." property="og:description">
  <meta content="https://uploads-ssl.webflow.com/640c46a109bfca551c61da47/640de9652f969628889bc889_baptism%20thumbnail.jpg" property="og:image">
  <meta content="Be blessed everyday | San Gregorio Magno Church" property="twitter:title">
  <meta content="Lorem ipsum dolor sit amet consectetur lementum sed sollicitudin auctor ac suspendisse." property="twitter:description">
  <meta content="https://uploads-ssl.webflow.com/640c46a109bfca551c61da47/640de9652f969628889bc889_baptism%20thumbnail.jpg" property="twitter:image">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/san-gregorio-magno.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Marcellus:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="../images/webclip.png" rel="apple-touch-icon">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XREV9R6ECX"></script>
    <script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('set', 'developer_id.dZGVlNj', true);gtag('config', 'G-XREV9R6ECX');</script>
    <style>
      .no-scroll
      {
        overflow-y: hidden!important;
        touch-action: none;
        -ms-touch-action: none;
      }
    </style>
    <!--  Google tag (gtag.js)  -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XREV9R6ECX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XREV9R6ECX');
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous">

    <style type="text/css">
      .field-wrapper{
        padding-top: 15px;
        padding-bottom: 15px;
      }.field-container{
        padding-bottom: 40px;
      }.input-field, .select{
        background-color: #fff;
        color: #000;
      }

    </style>
  </head>
  <body>

    <?php include '../partial/custom-css.html'; ?>
    <?php include 'partial/navigation.php'; ?>

    <!-- Start of Baptism -->


    <?php

    $query = "SELECT * FROM formdata WHERE id='$id'";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $name = $row["name"];
      $gender = $row["gender"];

      $barangay = $row["barangay"];
      $age = $row["age"];
      $date_time = $row["date_time"];
      // $touch_details = $row["date"];

    }

    ?>



    <div class="section contact-section wf-section">
      <div class="container">
        <div class="form-grid">
          <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:1" class="form-con-wrappera">
            <div class="form-container">
              <div class="form-title">Update Baptism Report page </div>
              <div class="w-form">
                <form id="appointment-form" method="post" action="includes/update_contact.php" class="form">
                  <div class="field-container">
                    <!-- <h4> Report Information</h4> -->
                    <div class="field-wrapper">
                      <label>Name</label>
                      <input type="text" class="input-field w-input"  name="name" id="name" value="<?php echo $name;?>">
                    </div>
                    <div class="field-wrapper">
                      <label>Gender</label>
                      <input type="text" class="input-field w-input"  name="gender" id="gender" value="<?php echo $gender; ?>">
                    </div>
                    

                    <div class="field-wrapper">
                      <label>Barangay</label>
                      <input type="text" class="input-field w-input"  name="barangay" id="barangay" value="<?php echo $barangay; ?>">
                    </div>

                    <div class="field-wrapper">
                      <label>Date</label>
                      <input type="date" class="input-field w-input"  name="date" id="date" value="<?php echo $date_time; ?>">
                    </div>
                  </div>



                  <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                    <div style="opacity:0" class="button-overlay"></div>
                    <button class="button-link w-button" name="update_contact" id="update_contact">Update</button>
                  </div>

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

  <!-- End of Baptism -->


  <?php include '../partial/footer.php'; ?>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <script>
      function togglefunction()
      {  
       if ($(window).width() > 1023) 
       {  
        $('.signup-btn').click(function(){
          $('body').toggleClass('no-scroll');
        });
        $('.login-btn').click(function(){
          $('body').toggleClass('no-scroll');
        });
        $('.close-login').click(function(){
          $('body').toggleClass('no-scroll');
        });
      }
      else
      {
        $('.hamburger').click(function(){
          $('body').toggleClass('no-scroll');
        }); 
      }
    }  
    $(document).ready(function(e) {
      togglefunction();
    });
    $(window).resize(function() {
      togglefunction();
    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js"></script>
  <script>
    var service_slider = $('.home-service-list');
    service_slider.on('initialized.owl.carousel changed.owl.carousel', function(event) {
     if (!event.namespace)  {
       return;
     }
   }).owlCarousel({
    items: 1,
    stagePadding: 0,
    nav: false,
    dots: true,
    loop: true,
    dotsContainer: ".service-dot-container",
    autoplayTimeout: 6000,
    smartSpeed: 1000,
    fluidSpeed: 1000,
    autoplaySpeed: 1000,
    navSpeed: 1000,
    transitionStyle: 'linear',
    responsive : {
            // breakpoint from 0 up
      0 : {
        items:1,
        margin:15
      },
            // breakpoint from 480 up
      480 : {
        items:2,
        margin:15
      },
            // breakpoint from 768 up
      768 : {
        items:3,
        margin:60
      },
            // breakpoint from 1000 up
      1000 : {
        items:4,
        margin:100
      }
    }
  });
   var announce_slider = $('.announce-list');
   announce_slider.on('initialized.owl.carousel changed.owl.carousel', function(event) {
     if (!event.namespace)  {
       return;
     }
   }).owlCarousel({
    items: 1,
    stagePadding: 0,
    nav: false,
    dots: true,
    loop: true,
    dotsContainer: ".announce-dot-container",
    autoplayTimeout: 6000,
    smartSpeed: 1000,
    fluidSpeed: 1000,
    autoplaySpeed: 1000,
    navSpeed: 1000,
    transitionStyle: 'linear',
    responsive : {
            // breakpoint from 0 up
      0 : {
        items:1,
        margin:15
      },
            // breakpoint from 480 up
      480 : {
        items:2,
        margin:15
      },
            // breakpoint from 768 up
      768 : {
        items:3,
        margin:30
      },
            // breakpoint from 1000 up
      1000 : {
        items:4,
        margin:30
      }
    }
  }); 
   var moment_slider = $('.moment-list');
   moment_slider.on('initialized.owl.carousel changed.owl.carousel', function(event) {
     if (!event.namespace)  {
       return;
     }
   }).owlCarousel({
    items: 1,
    stagePadding: 0,
    nav: false,
    dots: false,
    loop: true,
    autoplayTimeout: 6000,
    smartSpeed: 1000,
    fluidSpeed: 1000,
    autoplaySpeed: 1000,
    navSpeed: 1000,
    transitionStyle: 'linear',
    responsive : {
            // breakpoint from 0 up
      0 : {
        items:1,
        margin:15
      },
            // breakpoint from 480 up
      480 : {
        items:2,
        margin:15
      },
            // breakpoint from 768 up
      768 : {
        items:3,
        margin:30
      },
            // breakpoint from 1000 up
      1000 : {
        items:4,
        margin:30
      }
    }
  }); 
</script>
</body>
</html>