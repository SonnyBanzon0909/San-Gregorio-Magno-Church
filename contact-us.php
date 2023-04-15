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
<html data-wf-page="6427cbad6a10ecb0f1521fbf" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <meta content="Contact Us" property="og:title">
  <meta content="Contact Us" property="twitter:title">
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

  <?php include 'partial/custom-css.html'; ?>
  <?php include 'partial/navigation.html'; ?>


  <div class="section header-section wf-section">
    <div class="container">
      <div class="header-wrapper">
        <div class="header-content-con">
          <h1 data-w-id="fd9158a3-4684-2a95-3384-9ae2303ed829" style="opacity:0" class="header-title header-title-text">Contact us</h1>
          <div data-w-id="fd9158a3-4684-2a95-3384-9ae2303ed82b" style="opacity:0" class="body-text-medium header-excerpt">Here where to find us</div>
        </div>
      </div>
    </div>
  </div>
  <div class="section contact-section wf-section">
    <div class="container">
      <div class="form-grid">
        <div id="w-node-_4858ad87-d132-f41c-c2ea-557bd2f0d853-f1521fbf" class="get-intouch-wrapper">
          <div data-w-id="694e3e1d-164a-a0e1-0e9b-9c92061e54f6" style="opacity:0" class="touch-title-wrapper">
            <div class="touch-overline">LETS GET IN TOUCH</div>
            <div class="needs-title">Let us know what are your needs</div>
            <div class="touch-excerpt">Lorem ipsum dolor sit amet consectetur. At sagittis urna nec donec augue. Nunc nec arcu tellus et sit fermentum cras luctus. Hac lorem massa turpis quis enim. Quis neque fermentum lectus sed felis sollicitudin ac.</div>
            <div class="line-wrapper">
              <div class="line"></div>
            </div>
          </div>
          <div data-w-id="eb5dc6f4-4b65-ceb9-8eb3-67ffc72c0aab" style="opacity:0" class="contact-info-wrapper">
            <div class="social-block-title marg-bot-30">Trece Martires</div>
            <div class="social-wrapper marg-bot-33">
              <div class="social-con"><img src="images/location.svg" loading="lazy" alt="" class="social-icon">
                <a href="https://www.google.com/maps/place/San+Gregorio+Magno+Parish/@14.2493418,120.876876,17z/data=!3m1!4b1!4m6!3m5!1s0x33bd81744b783deb:0x59051579abb634d9!8m2!3d14.2493366!4d120.8790647!16s%2Fg%2F11f62sthsb" target="_blank" class="social-text">Bgry. Inocencio, Trece Martires City, Cavite</a>
              </div>
              <div class="social-con"><img src="images/phone.svg" loading="lazy" alt="" class="social-icon">
                <a href="http://+0 000 000 0000" class="social-text">+0 000 000 0000</a>
              </div>
              <div class="social-con"><img src="images/email.svg" loading="lazy" alt="" class="social-icon">
                <a href="mailto:sample000@gmail.com" class="social-text">sample000@gmail.com</a>
              </div>
            </div>
            <div class="social-block-title marg-bot-30">Office Hours</div>
            <div class="office-time-wrapper">
              <div id="w-node-_3868c652-b5fe-6ea0-2c9f-5f574048dea3-f1521fbf" class="social-office-time">No Office - Monday</div>
              <div id="w-node-_485fc9ee-8cd4-44c6-f4be-f934a4f71d4c-f1521fbf" class="social-office-time">9:00 am to 5:00 pm - Tuesday to Saturday</div>
              <div id="w-node-aa6b6196-351a-8de0-aab5-443e58c2f757-f1521fbf" class="social-office-time">8:00 am to 12 noon - Sunday</div>
            </div>
          </div>
        </div>
        <div id="w-node-_7a260c29-eaea-38ca-7dd7-75753354bfb4-f1521fbf" data-w-id="7a260c29-eaea-38ca-7dd7-75753354bfb4" style="opacity:0" class="form-con-wrapper">
          <div class="form-container">
            <div class="form-title">Get appointment</div>
            <div class="w-form">
              <form id="appointment-form" name="wf-form-Appointment-Form" data-name="Appointment Form" method="post" action="request.php" class="form"><input type="text" class="input-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Full Name" id="name" required=""><input type="text" class="input-field w-input" maxlength="256" name="Address" data-name="Address" placeholder="Address" id="address" required=""><input type="tel" class="input-field w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Phone" id="phone" required="">
                <div class="select-wrapper"><select id="barangay" name="Barangay" data-name="Barangay" class="select w-select">
                  <option value="">Choose your barangay</option>
                  <option value="Brgy. Aguado">Brgy. Aguado</option>
                  <option value="Brgy. Inocencio">Brgy. Inocencio</option>
                </select><img src="images/down-chevron.svg" loading="lazy" alt="" class="select-icon"></div>
                <div class="select-wrapper"><select id="purpose" name="Purpose" data-name="Purpose" class="select w-select">
                  <option value="">Purpose</option>
                  <option value="Baptism">Baptism</option>
                  <option value="First Communion">First Communion</option>
                  <option value="Confirmation">Confirmation</option>
                  <option value="Faith Formation">Faith Formation</option>
                  <option value="Mass Wedding">Mass Wedding</option>
                  <option value="Blessings">Blessings</option>
                  <option value="Funeral Mass">Funeral Mass</option>
                  <option value="Request Certificate">Request Certificate</option>
                  <option value="Sick Call">Sick Call</option>
                </select><img src="images/down-chevron.svg" loading="lazy" alt="" class="select-icon"></div>
                <div id="req-text" class="requirement-text w-node-ec9f49cd-3f54-5695-98c7-64fa17e824f2-f1521fbf"></div>
                <textarea class="input-area" placeholder="Message" name="Message"></textarea>

                <div data-w-id="5b8a60ca-0674-a70c-a128-7036f4b41cbe" class="button rounded-button">
                  <div style="opacity:0" class="button-overlay"></div><input type="submit" value="Submit" data-wait="Please wait..." class="button-link w-button">
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
<script>
//insert php code inside each purpose_req var
var purpose_req="";
var baptism_req="Requirements:<br><span class='circle'></span>Bring the birth certificate of child and marriage contract of parents if they are married<br><span class='circle'></span>One week before the baptism, must register the child (baptism day is Sunday only)<br><span class='circle'></span>Only Catholics can be sponsors (16 years old and above)<br><span class='circle'></span>The seminar of the parents and sponsors of the child to be baptized is on the day of the baptism (before the baptism begins)<br><span class='circle'></span>In terms of clothing: parents, godfather and godmother are not allowed to wear shorts and sleeveless during the baptism<br><span class='circle'></span>All godfathers and godmothers can attend, but they must indicate where they will sit";

var communion_req="Requirements:<br><span class='circle'></span>Baptismal Certificate (Original & Photocopy)<br><span class='circle'></span>Seminar of the child who will receive the first communion<br><span class='circle'></span>Parent/guardian seminar for the child receiving first communion";

var confirmation_req="Requirements:<br><span class='circle'></span>Baptismal Certificate (Original & Photocopy)<br><span class='circle'></span>Seminar of the child who will receive the confirmation together with parents, godfather and godmother<br><span class='circle'></span>The child has already received first communion";

var faith_req="";
var mass_req="Note:<br>Two months before the wedding, the couple must register in person at the parish office.<br><br>Requirements:<br><span class='circle'></span>A Baptismal Certificate, written on it for marriage purpose<br><span class='circle'></span>A Confirmation Certificate, written on it for marriage purpose<br><span class='circle'></span>Pre-Marriage Counseling<br><span class='circle'></span>Photocopy of CENOMAR<br><span class='circle'></span>Marriage License<br><span class='circle'></span>Renewal of Vow<br><span class='circle'></span>Article 34 (more than 5 years live-in not married) contact the civil registry";

var bless_req="Requirements:<br>Please pick up the Priest 15 minutes before the set time. If failed to arrive on time, your appointment may be cancelled.";

var funeral_req="Requirements:<br><span class='circle'></span>Death Certificate";

var cert_req="";

var sick_req="Note:<br>Please pick up the Priest 15 minutes before the set time. If failed to arrive on time, your appointment may be cancelled.";

$("#purpose").change(function(){
	var val = $(this).val();
  var req_text = "";
  console.log(val);
  if(val == "Baptism")
  {
    req_text = baptism_req;
  }
  else if(val == "First Communion")
  {
    req_text = communion_req;
  }
  else if(val == "Confirmation")
  {
    req_text = confirmation_req;
  }
  else if(val == "Faith Formation")
  {
    req_text = faith_req;
  }
  else if(val == "Mass Wedding")
  {
    req_text = mass_req;
  }
  else if(val == "Blessings")
  {
    req_text = bless_req;
  }
  else if(val == "Funeral Mass")
  {
    req_text = funeral_req;
  }
  else if(val == "Request Certificate")
  {
    req_text = cert_req;
  }
  else if(val == "Sick Call")
  {
    req_text = sick_req;
  }
  else
  {
    req_text = purpose_req;
  }
  $("#req-text").html(req_text);
});
 
/*
var log = <?php echo json_encode($_SESSION['user_email']); ?>;
if(log!=null)
{
  alert(log);
}
else
{
  alert("dss");
}*/
</script>
</body>
</html>