<?php

ob_start();
include "includes/db.php";

session_start();

if(!isset($_SESSION['username'])){
  header("Location: login.php");
}

$username =  $_SESSION['username'];


$query = "SELECT * FROM admin_users WHERE username = '$username'";
$user_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($user_query)){
  $id = $row['id'];
  $username = $row['username'];
  $password = $row['password'];
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
  <meta content="https://uploads-ssl.webflow.com/640c46a109bfca551c61da47/640de9652f969628889bc889_baptism%20thumbnail.jpg" property="og:image">
  <meta content="Be blessed everyday | San Gregorio Magno Church" property="twitter:title">
  <meta content="Lorem ipsum dolor sit amet consectetur lementum sed sollicitudin auctor ac suspendisse." property="twitter:description">
  <meta content="https://uploads-ssl.webflow.com/640c46a109bfca551c61da47/640de9652f969628889bc889_baptism%20thumbnail.jpg" property="twitter:image">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
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

    <style type="text/css">
      .field-wrapper{
        padding-top: 15px;
        padding-bottom: 15px;
      }.field-container{
        padding-bottom: 40px;
      }.input-field, .select{
        background-color: #fff;
        color: #000;
      }textarea{
        min-height: 160px;
      }.announcement_wrapper{
        padding: 15px;
        margin-top: 10px;
        margin-bottom: 10px;
        border: 1px solid #000;
      }.add-photos{
        max-width: 180px;
      }

    </style>
  </head>
  <body>

    <?php include 'partial/custom-css.html'; ?>
    <?php include 'partial/navigation.php'; ?>



    <?php
    /////////////////////
    if(isset($_GET['source'])){
      $source = $_GET['source'];
    }else{
      $source = "";
    }

    switch($source){
      case 'add_user';
      include "includes/add_user.php";
      break;

      case 'update_user';
      include "includes/update_user.php";
      break;

      case 'add_photo';
      include "includes/add_photo.php";
      break;

      default:
      include "includes/users_list.php";
      break;
    }

    ?>

    <?php include 'partial/footer.php'; ?>


    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
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
        if (this.responseText=='Success') 
        {
          alert("Deleted");
        }
      }
    };

    if (confirm("Are you sure you want to delete this?"))
    {
    xhttp.open('GET', '/editor/includes/delete-user.php?id=' + id, true); // Replace  
    xhttp.send();
    galcon.parentNode.removeChild(galcon);

  }
});
    }

  </script>
</body>
</html>