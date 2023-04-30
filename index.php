<?php
session_start();

include "editor/includes/db.php";

$query = "SELECT * FROM homepage_tbl";
$view_query = mysqli_query($connection, $query);

if(!$view_query){
  die("QUERY FAILED". mysqli_error($connection));
}

while($row = mysqli_fetch_array($view_query)){
  $id = $row["id"];
  $overline_text = $row["overline_text"];
  $hero_header = $row["hero_header"];
  $hero_sub_header = $row["hero_sub_header"];
  $appointment_text = $row["appointment_text"];
  $appointment_link = $row["appointment_link"];

  $service_title = $row["service_title"];
  $service_subtext = $row["service_subtext"];

  $announcement_title = $row["announcement_title"];
  $announcement_subtext = $row["announcement_subtext"];

  $blessed_title = $row["blessed_title"];
  $blessed_subtext = $row["blessed_subtext"];
}
?>

<?php 
// Start the session


// Check if the session variable is set and display the email address

if(isset($_SESSION['user_email'])) 
{

  $email = $_SESSION['user_email'];
}
else if(isset($_SESSION['user_email']) && $_SESSION['login_account'] == "true") 
{

  $email = $_SESSION['user_email'];
}
else
{
  $email = "";
  
}

?>



<!DOCTYPE html><!--  Last Published: Mon Apr 10 2023 17:06:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="640c46a109bfcae29c61da48" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>Be blessed everyday | San Gregorio Magno Church</title>
  <meta content="Lorem ipsum dolor sit amet consectetur lementum sed sollicitudin auctor ac suspendisse." name="description">
  <meta content="Be blessed everyday | San Gregorio Magno Church" property="og:title">
  <meta content="Lorem ipsum dolor sit amet consectetur lementum sed sollicitudin auctor ac suspendisse." property="og:description">
  <meta content="http://parokya-ni-san-gregorio-magno.com/images/baptism-thumbnail.jpg" property="og:image">
  <meta content="Be blessed everyday | San Gregorio Magno Church" property="twitter:title">
  <meta content="Lorem ipsum dolor sit amet consectetur lementum sed sollicitudin auctor ac suspendisse." property="twitter:description">
  <meta content="http://parokya-ni-san-gregorio-magno.com/images/baptism-thumbnail.jpg" property="twitter:image">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/parokya.css" rel="stylesheet" type="text/css">
  <link href="css/san-gregorio-magno.parokya.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Marcellus:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

    <link href="http://parokya-ni-san-gregorio-magno.com/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://parokya-ni-san-gregorio-magno.com/images/favicon.ico" rel="apple-touch-icon">
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
  </head>
  <body>

    <?php include 'partial/custom-css.html'; ?>
    <?php include 'partial/navigation.php'; ?>

    <div class="section hero-section wf-section">
      <div class="container">
        <div class="hero-wrapper"><img src="images/parokya-hero-image.jpg" loading="eager" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" sizes="(max-width: 1439px) 100vw, 1560px" srcset="images/parokya-hero-image-p-500.jpg 500w, images/parokya-hero-image-p-800.jpg 800w, images/parokya-hero-image-p-1080.jpg 1080w, images/parokya-hero-image.jpg 1173w" alt="" class="hero-img">
          <div class="hero-content-wrapper">
            <div class="hero-content-con">
              <div data-w-id="14c50d75-a118-06de-a699-5e284148987e" style="opacity:0" class="overline-text color-white hero-overline"><?php echo $overline_text; ?></div>
              <h1 data-w-id="06d2bb1f-b83b-2d3c-969c-c7066a5f78fa" style="opacity:0" class="hero-title color-white hero-title-text"><?php echo $hero_header; ?></h1>
              <div data-w-id="0e89be99-6618-78ff-1008-44dff0c04a43" style="opacity:0" class="body-text-medium color-white hero-excerpt"><?php echo $hero_sub_header; ?></div>
              <div data-w-id="81c44aa8-8550-e495-bbab-7b8dec4a25fe" style="opacity:0" class="button rounded-button">
                <div style="opacity:0" class="button-overlay"></div>
                <a aria-label="" href="contact-us.php" class="button-link hero-btn">GET APPOINTMENT</a>
              </div>
            </div>
          </div>
          <div class="hero-overlay"></div>
        </div>
      </div>
    </div>
    <div class="section home-service-section wf-section">
      <div class="container">
        <div class="service-title-wrapper">
          <h2 data-w-id="1343993a-1135-b924-1fdf-4e9775e4928c" style="opacity:0" class="block-title service-block-title"><?php echo $service_title; ?></h2>
          <div data-w-id="b8aedd2d-44cf-248d-6565-d54acbee8273" style="opacity:0" class="body-text serv-excerpt"><?php echo $service_subtext; ?></div>
        </div>
        <div data-w-id="c87f5a81-8723-5526-ab4f-77fb505fc816" style="opacity:0" class="home-service-list-wrapper">
          <div class="home-service-list owl-carousel owl-theme">
            <?php 
            $query = "SELECT * FROM services_tbl WHERE status ='Publish'";
            $select_all_services = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_all_services)){
              $id = $row['id'];
              $icon = $row["icon"];
              $title = $row["title"];
              $content = $row["content"];
              $button_text = $row["button_text"];
              $button_link = $row["button_link"];
              $photo = $row["photo"];
              $status = $row["status"];

              echo '<a href="services.php?id='.$id.'" class="home-service-item">';
              echo '<div class="service-card"><img src="editor/img/'.$icon.'" loading="eager" alt="" class="service-logo">';
              echo '<h3 class="card-title service-card-title">'.$title.'</h3>';
              echo '<div class="body-text-medium service-excerpt line-clamp">'.$content.'</div>';
              echo '<div class="underline-text">'.$button_text.'</div>';
              echo "</div>";
              echo "</a>";

            }
            ?>
              <!-- <div class="home-service-item">
                <div class="service-card"><img src="images/Baptism.png" loading="eager" alt="" class="service-logo">
                  <h3 class="card-title service-card-title">Baptism</h3>
                  <div class="body-text-medium service-excerpt">This is some text inside of a div block.</div>
                  <div class="underline-text">READ MORE</div>
                </div>
              </div> -->
            </div>
          </div>
          <div data-w-id="b04089f6-fe8d-45b3-90cd-a162fb6a86c5" style="opacity:0" class="service-dot-container-wrapper">
            <div class="service-dot-container"></div>
          </div>
        </div>
      </div>
      <div class="section announcement-section wf-section">
        <div class="container">
          <div class="announce-title-wrapper">
            <h2 data-w-id="69b2905a-1f63-0d57-5a02-d514fe52570d" style="opacity:0" class="block-title service-block-title"><?php echo $announcement_title; ?></h2>
            <div data-w-id="69b2905a-1f63-0d57-5a02-d514fe52570f" style="opacity:0" class="body-text serv-excerpt"><?php echo $announcement_subtext; ?></div>
          </div>
          <div data-w-id="0ea2648b-2d3c-e215-1d96-4395166f5ec5" style="opacity:0" class="announce-list-wrapper">
            <div class="announce-list owl-carousel owl-theme">
              <?php 
              $query = "SELECT * FROM announcement_tbl WHERE status='Publish'";
              $select_all_services = mysqli_query($connection, $query);
              while($row = mysqli_fetch_array($select_all_services)){
                $id = $row['id'];
                $announcement = $row["announcement"];

                echo '
                <div class="announce-item">
                <div class="announce-card" style="height:auto;backgroun-color:transparent;"><img src="editor/img/'.$announcement.'"></div>
                </div>

                ';

              }
              ?>
              
            </div>
          </div>
          <div data-w-id="3dee19ce-581c-7e44-6f2e-744760405504" style="opacity:0" class="service-dot-container-wrapper">
            <div class="announce-dot-container"></div>
          </div>
        </div>
      </div>
      <div class="section moments-section wf-section">
        <div class="container">
          <div class="announce-title-wrapper">
            <h2 data-w-id="4a3f9287-ec14-f9d6-67cd-09ea55d01cb1" style="opacity:0" class="block-title service-block-title"><?php echo $blessed_title; ?></h2>
            <div data-w-id="4a3f9287-ec14-f9d6-67cd-09ea55d01cb3" style="opacity:0" class="body-text moment-excerpt"><?php echo $blessed_subtext; ?></div>
          </div>
          <div data-w-id="4a3f9287-ec14-f9d6-67cd-09ea55d01cb5" style="opacity:0" class="moment-list-wrapper">
            <div class="moment-list owl-carousel owl-theme">
              <?php 
              $query = "SELECT * FROM moments_tbl WHERE status = 'Publish'";
              $select_all_services = mysqli_query($connection, $query);
              while($row = mysqli_fetch_array($select_all_services)){
                $id = $row['id'];
                $moments = $row["moments"];

                echo '
                <div class="moment-item">
                <div class="moment-card"><img src="editor/img/'.$moments.'"></div>
                </div>

                ';

              }
              ?>
              <!-- <div class="moment-item">
                <div class="moment-card"></div>
              </div> -->
            </div>
          </div>
        </div>
      </div>


      <?php include 'partial/footer.php'; ?>

      <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script src="js/parokya.js" type="text/javascript"></script>
      <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
        <script>
          function togglefunction()
          {  
           if ($(window).width() > 1023) 
           {	
            $('.update-button').click(function(){
              $('body').toggleClass('no-scroll');
            });
            
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
        autoplay:true,
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
        autoplay: true,
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
        autoplay: true,
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