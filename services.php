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


?>

  <?php

  include "editor/includes/db.php";
    
    if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query = "SELECT * FROM services_tbl WHERE id = $id";
    $view_query = mysqli_query($connection, $query);

    if(!$view_query){
      die("QUERY FAILED". mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($view_query)){
      $id = $row["id"];
      $icon = $row["icon"];
      $title = $row["title"];
      $content = $row["content"];
      $button_text = $row["button_text"];
      $button_link = $row["button_link"];
      $photo = $row["photo"];
      $status = $row["status"];
    }
  }

  ?>


<!DOCTYPE html><!--  Last Published: Mon Apr 10 2023 17:06:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="640de7f385f0c01e10b8448d" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>Services</title>
  <meta content="Services" property="og:title">
  <meta content="Services" property="twitter:title">
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
</head>
<body>
  <div class="section header-section wf-section">
    <div class="container">
      <div class="header-wrapper">
        <div class="header-content-con">
          <h1 data-w-id="f5a4fc5a-5d6d-4bff-6a35-f1cbc2dc81f4" style="opacity:0" class="header-title header-title-text">Services</h1>
          <div data-w-id="f5a4fc5a-5d6d-4bff-6a35-f1cbc2dc81f6" style="opacity:0" class="body-text-medium header-excerpt">We offer baptism, first communion, confirmation, faith formation, mass wedding, blessings, funeral mass, and request certificate for Brgy. Aguado and Brgy. Inocencio community</div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'partial/custom-css.html'; ?>
  <?php include 'partial/navigation.php'; ?>

  <div class="section service-list-section wf-section">
    <div class="container">
      <div class="service-grid">
        <div id="w-node-cc95783b-3085-abec-473b-0a5adcb1b426-10b8448d" class="service-content-wrapper"><img src="editor/img/<?php echo $icon; ?>" loading="eager" style="opacity:0" data-w-id="450304ab-b6d2-6b3e-8f3f-71a6bf0f6459" alt="" class="service-logo service-logo-ins">
          <h3 data-w-id="450304ab-b6d2-6b3e-8f3f-71a6bf0f645a" style="opacity:0" class="card-title service-card-title-ins"><?php echo $title; ?></h3>
          <div data-w-id="005a333c-4bd0-eb30-2457-819752abf00a" style="opacity:0" class="body-text-medium service-content w-richtext">
            <p><?php echo $content; ?></p>
          </div>
          <div data-w-id="29031199-5904-0a46-abed-1313029a9425" style="opacity:0" class="button rounded-button">
            <div style="opacity:0" class="button-overlay"></div>
            <a aria-label="" href="contact-us.php" class="button-link">GET APPOINTMENT</a>
          </div>
        </div><img src="editor/img/<?php echo $photo; ?>" loading="lazy" style="opacity:0" data-w-id="edc6fe87-fd79-59a6-745d-7a4cb0e7d263" id="w-node-edc6fe87-fd79-59a6-745d-7a4cb0e7d263-10b8448d" alt="" class="service-thumb">
      </div>
    </div>
  </div>

  <?php include 'partial/footer.php'; ?>


  <div class="tawkto-wrapper">
    <div class="tawkto-embed w-embed w-script">
      <!-- Start of Tawk.to Script -->
      <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/6429585a4247f20fefe95a36/1gt0o2977';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
        })();
      </script>
      <!-- End of Tawk.to Script -->
    </div>
  </div>
</div>
</div>
 
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script>
  function togglefunction()
  {  
   if ($(window).width() > 1023) 
   {	$('.update-button').click(function(){
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
</body>
</html>