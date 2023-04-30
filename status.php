 <?php 
 include "editor/includes/db.php";
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
<html data-wf-page="642840005fbce2c4ad4f5e05" data-wf-site="640c46a109bfca551c61da47">
<head>
  <meta charset="utf-8">
  <title>Status</title>
  <meta content="Status" property="og:title">
  <meta content="Status" property="twitter:title">
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
            <h1 data-w-id="57a8dbd8-0d2d-09f9-75c6-5edafa8b68e2" style="opacity:0" class="header-title header-title-text">Status</h1>
            <div data-w-id="57a8dbd8-0d2d-09f9-75c6-5edafa8b68e4" style="opacity:0" class="body-text-medium header-excerpt">Here’s your records of appointment and its status update</div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'partial/custom-css.html'; ?>
    <?php include 'partial/navigation.php'; ?>

    <div class="section status-section wf-section">
      <div class="container">
        <div data-w-id="a6ce49cc-23b9-46b0-3db0-c07c98e55d15" style="opacity:0" class="table-container">
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
                background-color: #BABABA36;
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
              thead {}
            </style>
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Purpose</th>
                  <th class="status">Status</th>
                </tr>
              </thead>
              <tbody>
               <?php
               require_once "connect.php";
               $user = $email;
               $table = "SELECT * FROM formdata WHERE user='$user'";
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
</body>
</html>