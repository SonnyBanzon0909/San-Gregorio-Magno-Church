
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
<html data-wf-page="642aebecb41e722ce3ad4e69" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>San Gregorio Magno Church</title>
  <meta content="San Gregorio Magno Church" property="og:title">
  <meta content="San Gregorio Magno Church" property="twitter:title">
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
          <h1 data-w-id="21293dca-a8a0-5855-63de-c4f9aef3a59a" style="opacity:0" class="header-title header-title-text">Reports</h1>
          <div data-w-id="21293dca-a8a0-5855-63de-c4f9aef3a59c" style="opacity:0" class="body-text-medium header-excerpt">Presents Information in an Organized Format</div>
        </div>
      </div>
    </div>
  </div>
  <div class="section dashbaord-section wf-section">
    <div class="container">
      <div data-w-id="7e7283ea-2068-ea45-5575-d83ca1d74c26" style="opacity:0" class="dash-overline-wrapper">
        <div class="dash-title marg-bot-5">Dashboard</div>
        <div class="dash-verline-text">All services shown is in current month</div>
      </div>
      <div data-w-id="d10cf5fd-44c4-a6b7-4f17-01716a210078" style="opacity:0" class="dash-filter">
        <div class="welcome-block-title">Welcome back, Admin!</div>
        <div class="filter-form w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get">
            <div class="select-wrapper min-235"><select id="barangay" name="Barangay" data-name="Barangay" class="select filter-select w-select">
              <option value="">Sort by</option>
              <option value="Today">Today</option>
              <option value="This Week">This Week</option>
              <option value="This Month">This Month</option>
            </select><img src="images/services.svg" loading="lazy" alt="" class="select-icon"></div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div data-w-id="b964715d-4a8d-9f17-67c7-4b381cc93a2d" style="opacity:0" class="admin-service-wrapper">
        <div class="admin-service-list admin-col">
          <div id="w-node-fd420557-f27d-1ee9-638f-2ed0318bf2a4-e3ad4e69" class="admin-service-item">
            <div class="logo-wrapper"><img src="images/Baptism-1.png" loading="lazy" alt="" class="admin-service-logo"></div>
            <div class="admin-service-card">
              <div class="serv-card-line-wrapper">
                <div class="serv-card-title">Baptism</div>
              </div>
              <div class="categ-name">Total Appointment</div>
              <div class="counter">3</div>
            </div>
          </div>
        </div>
      </div>
      <div id="counter-container" data-w-id="69ee9022-5edd-a435-50bf-51e46216f0b7" style="opacity:0" class="chart-wrapper">
        <div id="w-node-_573c1a86-28dd-6092-c695-8600dceca11a-e3ad4e69" class="chart-legend-wrapper">
          <div class="chart-canvas-wrapper">
            <div class="canvas-wrapper w-embed"><canvas id="myChart" width="100%" height="100%"></canvas></div>
            <div class="today-wrapper">
              <div class="chart-center-text">Today</div>
              <div class="center-percent"><strong>10%</strong></div>
            </div>
          </div>
          <div class="legend-wrapper">
            <div class="legend">
              <div class="color today"></div>
              <div class="color-text">Today</div>
            </div>
            <div class="legend">
              <div class="color week"></div>
              <div class="color-text">This Week</div>
            </div>
            <div class="legend">
              <div class="color month"></div>
              <div class="color-text">This Month</div>
            </div>
          </div>
        </div>
        <div id="w-node-_6f50c642-1746-d685-5ad0-f1397ed9d38f-e3ad4e69" class="appoint-wrapper">
          <div id="w-node-_2990f970-1969-159a-4c04-3b048b641480-e3ad4e69" class="appoint-card">
            <div class="appoint-title">Total Booked Appointment</div>
            <div class="appoint-count">27</div>
          </div>
          <div id="w-node-c46ab1bd-e105-b9a6-c836-20cffb69fb57-e3ad4e69" class="appoint-card">
            <div class="appoint-title">Appointment Percentage Today</div>
            <div class="appoint-count">10%</div>
          </div>
          <div id="w-node-_195674c3-f17a-6b16-9cd2-f23846d67e7d-e3ad4e69" class="appoint-card">
            <div class="appoint-title">Appointment Percentage in Month</div>
            <div class="appoint-count">50%</div>
          </div>
          <div id="w-node-_0d1a5d18-608e-2d58-260a-9083af4d8d21-e3ad4e69" class="appoint-card">
            <div class="appoint-title">Appointment Percentage in Week</div>
            <div class="appoint-count">30%</div>
          </div>
        </div>
      </div>
      <div data-w-id="effd676d-ddcb-dc16-e621-07b23a040afd" style="opacity:0" class="table-container latest-booked">
        <div class="table-wrapper w-embed">
          <style>
            table {
              border-collapse: collapse;
              width: 100%;
              border-radius: 0px;
              overflow: hidden;
              position: relative;
              border: 1px solid #C7C6B8;
            }
            table td,
            table th {
              border: 1px solid #C7C6B8;
              text-align: start;
            }
            table td {
              padding: 13px 45px;
              font-family: Lato, sans-serif;
              color: #555;
              font-size: 16px;
              line-height: 27px;
              font-weight: 400;
              min-height: 53px;
            }
            table th {
              background-color: transparent;
              padding: 25px 45px;
              font-family: Marcellus, sans-serif;
              color: #100a0a;
              font-size: 21px;
              line-height: 27px;
              font-weight: 400;
              text-align: left;
            }
            .btn-td {
              display: flex;
              justify-content: center;
            }
            .status {
              text-align: center;
            }
            .latest-head
            {
             width: 100%;
             background-color: #BABABA36;
             font-family: Marcellus, sans-serif;
             color: #353535;
             font-size: 21px;
             line-height: 43px;
             font-weight: 400;
           }
           thead {}
         </style>
         <table id="myTable">
          <thead>
            <tr>
              <th class="latest-head" colspan="4">Latest client booked appointment</th>
            </tr>
            <tr>
              <th>Name</th>
              <th>Date</th>
              <th>Purpose</th>
              <th class="status">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1. Princess Elnalyn Villegas</td>
              <td>03 / 11 / 23</td>
              <td>Request Certificate</td>
              <td>
                <div class="btn-td">
                  <div class="table-btn">Pending</div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
<script>
  function startChart(){
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        datasets: [{
          label: 'Appointments',
          data: [10, 30, 60],
          backgroundColor: [
          '#FFE085',
          '#D0A72B',
          '#FFBF00',
          ],
          hoverOffset: 0,
          offset: 0,
          rotation: 90,
        }]
      },
      options: {        
        cutout: '70%', // increase the size of the center hole
        elements: {
          arc: {
            borderWidth: 5,
            //borderColor: "#FFBF00",
            //spacing: 10,
          }
        }
      }
    });
  }
  $(window).scroll(startCounter);
  function startCounter() {
    let scrollY = (window.pageYOffset || document.documentElement.scrollTop) + window.innerHeight;
    let divPos = document.querySelector('#counter-container').offsetTop;
    if (scrollY > divPos) {
      $(window).off("scroll", startCounter);
      setTimeout(() => {
        startChart();
      }, 500);
    }
  }
</script>
</body>
</html>