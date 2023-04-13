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


<!DOCTYPE html><!--  Last Published: Mon Apr 10 2023 17:06:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="641adf7649861684f0dcbc32" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>About</title>
  <meta content="About" property="og:title">
  <meta content="About" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/san-gregorio-magno.webflow.css" rel="stylesheet" type="text/css">
  <style>@media (min-width:992px) {html.w-mod-js:not(.w-mod-ix) [data-w-id="eaf2cd15-34f9-fd39-1d3f-e92771dc1e75"] {opacity:0;}}</style>
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
  <div class="section header-section abt-header-section wf-section">
    <div class="container">
      <div class="header-wrapper abt-header-wrapper">
        <div class="header-content-con">
          <h1 data-w-id="6698cd1b-f006-bba1-4176-25bcb462243b" style="opacity:0" class="header-title header-title-text">About Parokya ni San Gregorio Magno</h1>
          <div data-w-id="6698cd1b-f006-bba1-4176-25bcb462243d" style="opacity:0" class="body-text-medium header-excerpt max-671">Parokya ni San Gregorio Magno is a newly erected parish of Diocese of Imus (Cavite). It is located at Barangay Inocencio, Trece Martires City, Cavite</div>
        </div>
      </div>
      <div class="abt-sticky-wrapper"><img src="images/parokya.jpg" loading="lazy" style="opacity:0" data-w-id="eaf2cd15-34f9-fd39-1d3f-e92771dc1e75" alt="" class="parokya-img">
        <div data-w-id="55009323-918f-1a08-2812-cfa3a29a3eb1" style="opacity:0" class="abt-content-wrapper">
          <div class="abt-date"><strong>SEPTEMBER, 2018</strong></div>
          <div class="abt-block-title"><strong>Our Church Was Open</strong></div>
          <div class="rich-text-block w-richtext">
            <p>The City of Trece Martires is predominantly Roman Catholic covering about 91% of the total household population. Members of other religious affiliations share the meager percentage of the total population. An increase in catholic religion is attributed to the joint effort of the Parish Priests, Pastoral Communities, and Parishioners. An outreach program to evangelize and preach the word of God to all people is their primary objective. Its main Parish St Jude Thaddeus is catering the entire city for their spiritual needs. At present, there are about sixty five (65) subdivisions, four (4) big resettlement areas and three (3) AFP/PNP housing projects.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'partial/custom-css.html'; ?>
  <?php include 'partial/navigation.html'; ?>


  <div class="section vision-section wf-section">
    <div class="container">
      <div data-w-id="c22253c3-c2ee-a42e-ae65-c6dc461329f0" style="opacity:0" class="vision-title">Our Vision</div>
      <div data-w-id="7041dab3-be42-2241-181e-19a005849583" style="opacity:0" class="body-text-medium vision-excerpt max-135">maging sambayanang kristiyanong maka-diyos-makatao, makabuhay, makakalikasan at makabayan - mga alagad ni kristo at simbahan ng mga dukha na may pananagutan at pakikisangkot sa pinagpanibagong lipunan sa tulong ni maria, birhen del pilar.</div>
      <div data-w-id="692d5a83-7c6b-6e72-a442-f9f1f090fdce" style="opacity:0" class="vision-title marg-top60">Our Mission</div>
      <div data-w-id="a1767852-ec39-07a3-96c2-a3e77e30d7b8" style="opacity:0" class="body-text-medium vision-excerpt max-135">Lorem ipsum dolor sit amet consectetur. Sit vel magna aliquet qui sit arcu. Ultricies mi sed massa pharetra. Sit sem in fringilla id nequ fa Aliquet ullamcorper donec felis ultricies habitasse dictum nibh. justo fusce elementum egestas viverra lobortis ligula non. Semper nullam a ut erat convallis eget mauris quis. Id sit odio</div>
      <div class="priest-wrapper">
        <div data-w-id="33758c25-3aeb-f311-0903-90ed3b8106ec" style="opacity:0" class="vision-title">Meet all the Priests</div>
        <div data-w-id="6db1914b-68a4-7ee6-4375-7230eba020b4" style="opacity:0" class="body-text-medium vision-excerpt max-135">Lorem ipsum dolor sit amet consectetur. Curabitur erat morbi consequat sit duis vel varius posuere. Quis feugiat eu scelerisque etiam elementum mi nisl interdum.</div>
      </div>
      <div class="priest-list-wrapper">
        <div class="priest-list owl-carousel owl-theme">
          <div class="priest-item"><img src="images/Rev.-Fr.-Diony.jpg" loading="lazy" alt="" class="priest-img">
            <div class="priest-content-con">
              <div class="priest-title">Rev. Fr. Dionisio V. Palingping</div>
              <div class="priest-date">March 2020 - Present</div>
            </div>
          </div>
        </div>
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
  var service_slider = $('.priest-list');
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
              items:1,
              margin:15
            },
            // breakpoint from 768 up
            768 : {
              items:2,
              margin:20
            },
            // breakpoint from 1000 up
            1000 : {
              items:3,
              margin:32
            }
          }
        });
      </script>
    </body>
    </html>