<?php
//
require_once "../connect.php";
  // check if the filter parameter is set
if (isset($_GET['filter'])) {
  $filter = $_GET['filter'];
  if ($filter == 'today') {
    $date_filter = "DATE(date_time) = CURDATE()";
  } else if ($filter == 'this_week') {
    $date_filter = "YEARWEEK(date_time) = YEARWEEK(NOW())";
  } else if ($filter == 'this_month') {
    $date_filter = "MONTH(date_time) = MONTH(NOW())";
  } else {
    $date_filter = "";
  }
} else {
  $date_filter = "";
}

$distinct ='SELECT DISTINCT purpose FROM formdata WHERE ' . $date_filter;
$dis_result = mysqli_query($conn, $distinct);
$num_purposes = mysqli_num_rows($dis_result);
//echo '<h1>'.$num_results.'</h1>';
  // loop through each purpose and display the data
while ($row = mysqli_fetch_assoc($dis_result)) {
  $purpose = $row['purpose'];
  $query = "SELECT * from formdata WHERE purpose='$purpose' AND $date_filter";
  $result = mysqli_query($conn, $query);
  $num_results = mysqli_num_rows($result);
  //echo '<h1>'.$num_results.'</h1>';
  echo '<div id="w-node-fd420557-f27d-1ee9-638f-2ed0318bf2a4-e3ad4e69" class="admin-service-item">';
  echo '<div class="logo-wrapper"><img src="../images/Baptism-1.png" loading="lazy" alt="" class="admin-service-logo"></div>';
  echo '<div class="admin-service-card">';
  echo '<div class="serv-card-line-wrapper">';
  echo '<div class="serv-card-title">' . $purpose . '</div>';
  echo '</div>';
  echo '<div class="categ-name">Total Appointment</div>';
  echo '<div class="counter">' . $num_results . '</div>';
  echo '</div>';
  echo '</div>';
}
$percent ='SELECT * FROM formdata WHERE status="pending"';
$percent_result = mysqli_query($conn, $percent);
$total = mysqli_num_rows($percent_result);
$chat_total = $total;


$today ='SELECT * FROM formdata WHERE status="pending" and DATE(date_time) = CURDATE()';
$today_result = mysqli_query($conn, $today);
$today_total = mysqli_num_rows($today_result);
//$today_total = ($today_total/$total)*100;
$chart_today = ($today_total/$chat_total)*100;
//$chart_today = (float)$chart_today;

$week ='SELECT * FROM formdata WHERE status="pending" and YEARWEEK(date_time) = YEARWEEK(NOW())';
$week_result = mysqli_query($conn, $week);
$week_total = mysqli_num_rows($week_result);
//$week_total = ($week_total/$total)*100;
$chart_week = ($chart_week/$chat_total)*100;
//$chart_week = (float)$chart_week;

$month ='SELECT * FROM formdata WHERE status="pending" and MONTH(date_time) = MONTH(NOW())';
$month_result = mysqli_query($conn, $month);
$month_total = mysqli_num_rows($month_result);
//$month_total = ($month_total/$total)*100;
$chart_month = ($chart_month/$chat_total)*100;
//$chart_month = (float)$chart_month;

?>

