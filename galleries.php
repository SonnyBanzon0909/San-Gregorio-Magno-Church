 <?php 
// Start the session
 session_start();

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


include "editor/includes/db.php";





?>

<!DOCTYPE html><!--  Last Published: Mon Apr 10 2023 17:06:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="640de358bc45fd40ff424725" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>Galleries</title>
  <meta content="Galleries" property="og:title">
  <meta content="Galleries" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/san-gregorio-magno.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Marcellus:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
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


    <?php
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $gall_id = $_GET['id'];



      $query = "SELECT * FROM gallery_tbl WHERE id = '$gall_id'";
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

    <div class="section header-section wf-section">
      <div class="container">
        <div class="header-wrapper">
          <div class="header-content-con">
            <h1 data-w-id="ea6d532d-e8d9-ad4a-df4a-e392622493d5" style="opacity:0" class="header-title header-title-text">Galleries</h1>
            <div data-w-id="0e4be1c0-1692-c4db-288e-79d78052bc6a" style="opacity:0" class="body-text-medium header-excerpt">Blessed with every moments</div>
          </div>
        </div>
      </div>
    </div>
    <div class="section galery-list-section wf-section">
      <div class="container">
        <div class="gallery-title-wrapper">
          <h2 data-w-id="97af9b72-b3a9-c363-2587-8ec441b953a7" style="opacity:0" class="block-title gallery-block-title"><?php echo $title; ?></h2>

          <div data-w-id="b32c8281-cce3-60c9-6f76-debf1e4b9e78" style="opacity:0" class="date-text marg-bot-29"><?php echo $gallery_date; ?></div>
          <div data-w-id="3e3da1fe-ab13-9350-3b23-4991f7922bb7" style="opacity:0" class="body-text-medium gallery-excerpt"><?php echo $details; ?></div>
        </div>
        <div data-w-id="ad2701cb-d5b2-2689-c4e9-c13075c7f954" style="opacity:0" class="moment-list-wrapper">
          <div class="moment-list owl-carousel owl-theme">
            <?php

            $query = "SELECT * FROM gallery_images_tbl WHERE gallery_id = $gall_id";
            $view_query = mysqli_query($connection, $query);

            if(!$view_query){
              die("QUERY FAILED". mysqli_error($connection));
            }

            while($row = mysqli_fetch_array($view_query)){
              $id = $row["id"];
              $photo = $row["photo"];

              echo '
              <div class="moment-item">
              <div class="moment-card"><img src="editor/img/'.$photo.'"></div>
              </div>
              ';
            }

            ?>
          <!-- <div class="moment-item">
            <div class="moment-card"></div>
          </div> -->
        </div>
      </div>
      <div data-w-id="039392ec-d7f3-61e9-7b3f-c4e567799218" style="opacity:0" class="gallery-dot-container-wrapper">
        <div class="gallery-dot-container"></div>
      </div>
    </div>
  </div>


  <?php include 'partial/footer.php'; ?>


  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
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
    var moment_slider = $('.moment-list');
    moment_slider.on('initialized.owl.carousel changed.owl.carousel', function(event) {
     if (!event.namespace)  {
       return;
     }
   }).owlCarousel({
    items: 1,
    stagePadding: 0,
    nav: false,
    dots: true,
    loop: true,
    dotsContainer: ".gallery-dot-container",
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