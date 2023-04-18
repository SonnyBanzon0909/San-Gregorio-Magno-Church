<?php
require_once "../connect.php";


$name = "";
$month = "";
$barangay = "";
$year = "";
$gender = "";
$table ="";
/*
if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['barangay']) && isset($_POST['year']) && isset($_POST['gender'])){
    // The variables are set, so you can proceed with processing the form data.
*/
  if(isset($_POST['name']))
  {
    $name = $_POST['name'];
  }
  if(isset($_POST['month']))
  {
    $month = $_POST['month'];
  }
  if(isset($_POST['barangay']))
  {
    $barangay = $_POST['barangay'];
  }
  if(isset($_POST['year']))
  {
    $year = $_POST['year'];
  }
  if(isset($_POST['gender']))
  {
    $gender = $_POST['gender'];
  }



  $table = "SELECT * FROM formdata WHERE IF('$name'='', 1, name='$name') AND IF('$month'='', 1, date_time_month='$month') AND IF('$barangay'='', 1, barangay='$barangay') AND IF('$year'='', 1, date_time_year='$year') AND IF('$gender'='', 1, gender='$gender') and purpose='Request Certificate'";

/*
} 
else
{
  $table = "SELECT * FROM formdata";
}
*/
$sheet = array();
//$_SESSION['sheet']  = '';

$table_result = mysqli_query($conn, $table);
 

//$table_total = mysqli_num_rows($table_result);
if (!$table_result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}


$c=0;
while ($row = mysqli_fetch_assoc($table_result)) {
  $sheet[]=$row;
  $c=$c+1;
  $tbl_name = $row['name'];
  $tbl_gender = $row['gender'];
  $tbl_barangay = $row['barangay'];
  $tbl_age = $row['age'];
  $tbl_date = $row['date_time'];

  $name = urlencode($row['name']);
  $gender = urlencode($row['gender']);
  $barangay = urlencode($row['barangay']);
  $age = urlencode($row['age']);
  $date_time = urlencode($row['date_time']);

            // Get the base URL of the current page
  $base_url = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  //name=$name&gender=$gender&barangay=$barangay&age=$age&date_time=$date_time
  $url = $base_url ."/create-certificate.php?";




  echo '<tr>';
  echo '<td>'. $c.'. '.$tbl_name.'</td>';
  echo '<td>'.$tbl_gender.'</td>';
  echo '<td>'.$tbl_barangay.'</td>';
  echo '<td>'.$tbl_age.' years old</td>';
  echo '<td>'.$tbl_date.'</td>';
  echo '<td>';
  echo '<a class="create-edit" href="'.$url.'">CREATE</a>';
  echo '</td>';
  echo '</tr>';
}
$_SESSION['sheet']  = $sheet;
 
 
mysqli_close($conn);
?>