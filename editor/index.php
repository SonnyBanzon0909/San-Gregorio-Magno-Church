
<?php 
// Start the session
session_start();
require_once "../connect.php";

include "includes/db.php";



// //Check if the session variable is set and display the email address

if(isset($_SESSION['user_email'])) 
{

 $_SESSION['user_email']="";
 unset($_SESSION['user_email']);
}
// else if(isset($_SESSION['user_email']) && $_SESSION['login_account'] == "true") 
// {

//   $email = $_SESSION['user_email'];
// }
// else
// {
//   $email = "";

// }

////
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
<html data-wf-page="642aebecb41e722ce3ad4e69" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>San Gregorio Magno Church</title>
  <meta content="San Gregorio Magno Church" property="og:title">
  <meta content="San Gregorio Magno Church" property="twitter:title">
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
  </head>
  <body>


    <?php include '../partial/custom-css.html'; ?>
    <?php include 'partial/navigation.php'; ?>

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
              <div class="select-wrapper min-235">

                <select id="barangay" name="Barangay" data-name="Barangay" class="select filter-select w-select" id="date-filter" onchange="this.options[this.selectedIndex].value && (window.location.href = '?filter=' + this.options[this.selectedIndex].value);">
                  <option value="">Sort by</option>
                  <option value="today" <?php if(isset($_GET['filter']) && $_GET['filter'] == 'today') echo 'selected'; ?>>Today</option>
                  <option value="this_week" <?php if(isset($_GET['filter']) && $_GET['filter'] == 'this_week') echo 'selected'; ?>>This Week</option>
                  <option value="this_month" <?php if(isset($_GET['filter']) && $_GET['filter'] == 'this_month') echo 'selected'; ?>>This Month</option>

                </select><img src="../images/services.svg" loading="lazy" alt="" class="select-icon"></div>
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
            <div class="admin-service-list admin-col" id="data-container">




              <?php include 'get_data.php'; ?>




            </div>
          </div>
          <div id="counter-container" data-w-id="69ee9022-5edd-a435-50bf-51e46216f0b7" style="opacity:0" class="chart-wrapper">
            <div id="w-node-_573c1a86-28dd-6092-c695-8600dceca11a-e3ad4e69" class="chart-legend-wrapper">
              <div class="chart-canvas-wrapper">
                <div class="canvas-wrapper w-embed"><canvas id="myChart" width="100%" height="100%"></canvas></div>
                <div class="today-wrapper">
                  <div class="chart-center-text">Today</div>
                  <div class="center-percent"><strong><?php echo $today_total; ?></strong></div>
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
                <div class="appoint-count"><?php echo $total; ?></div>
              </div>
              <div id="w-node-c46ab1bd-e105-b9a6-c836-20cffb69fb57-e3ad4e69" class="appoint-card">
                <div class="appoint-title">Appointment Percentage Today</div>
                <div class="appoint-count"><?php echo $today_total; ?></div>
              </div>
              <div id="w-node-_195674c3-f17a-6b16-9cd2-f23846d67e7d-e3ad4e69" class="appoint-card">
                <div class="appoint-title">Appointment Percentage in Month</div>
                <div class="appoint-count"><?php echo $month_total; ?></div>
              </div>
              <div id="w-node-_0d1a5d18-608e-2d58-260a-9083af4d8d21-e3ad4e69" class="appoint-card">
                <div class="appoint-title">Appointment Percentage in Week</div>
                <div class="appoint-count"><?php echo $week_total; ?></div>
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
                <?php
              //$user = $email;
                $table = "SELECT * FROM formdata";
                $table_result = mysqli_query($conn, $table);
                $table_total = mysqli_num_rows($table_result);

                $c=0;
                while ($row = mysqli_fetch_assoc($table_result)) {
                  $c=$c+1;
                  $tbl_name = $row['name'];
                  $tbl_date = $row['date_time'];
                  $tbl_purpose = $row['purpose'];
                  $tbl_status = $row['status'];


                  echo '<tr>';
                  echo '<td>'. $c.'. '.$tbl_name.'</td>';
                  echo '<td>'.$tbl_date.'</td>';
                  echo '<td>'.$tbl_purpose.'</td>';
                  echo '<td>';
                  echo '<div class="btn-td">';

                  if($tbl_status=="pending")
                  {
                    echo '<div class="table-btn" style="background-color:#FFBF00 !important;">'.$tbl_status.'</div>';
                  }
                  else if($tbl_status=="done")
                  {
                    echo '<div class="table-btn">'.$tbl_status.'</div>';
                  }

                  echo '</div>';
                  echo '</td>';
                  echo '</tr>';
                }
                ?>



              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php include '../partial/footer.php'; ?>


    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640c46a109bfca551c61da47" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
      <script>

        $("#profile").hide();


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
        var today = <?php echo json_encode($chart_today); ?>;
        var week = <?php echo json_encode($chart_week); ?>;
        var month = <?php echo json_encode($chart_month); ?>;
//alert(today,week,month);
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
          type: 'doughnut',
          data: {
          //parseInt(today), parseInt(week), parseInt(month)
            datasets: [{
              label: 'Appointments',
              data: [10,30,60],
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

    <script>
  // add an event listener to the dropdown
      document.getElementById("date-filter").addEventListener("change", function() {
    // get the selected option
        var option = this.value;

    // create a new HTTP request
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
        // replace the data container with the new data
            document.getElementById("data-container").innerHTML = this.responseText;
          }
        };

    // send a GET request with the selected option
        xhr.open("GET", "get_data.php?option=" + option, true);
        xhr.send();
      });

    </script>



  </body>
  </html>