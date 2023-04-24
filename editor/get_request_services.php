<?php
require_once "../connect.php";


$name = "";
$month = "";
$barangay = "";
$year = "";
$gender = "";
$table ="";
$purpose = "";
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
  if(isset($_POST['purpose']))
  {
    $purpose = $_POST['purpose'];
  }
echo $purpose;

  $table = "SELECT * FROM formdata WHERE name LIKE '$name%' AND IF('$month'='', 1, date_time_month='$month') AND IF('$barangay'='', 1, barangay='$barangay') AND IF('$year'='', 1, date_time_year='$year') AND IF('$gender'='', 1, gender='$gender') and purpose='$purpose'";

  // $table = "SELECT * FROM formdata WHERE IF('$name'='', 1, name='$name') AND IF('$month'='', 1, date_time_month='$month') AND IF('$barangay'='', 1, barangay='$barangay') AND IF('$year'='', 1, date_time_year='$year') AND IF('$gender'='', 1, gender='$gender') and purpose='Baptism'";

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
  $id = $row['id'];
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
  echo '<td class="edit">';
  echo '<div class="edit-btn-wrapper"  id="'.$id.'"></div>';

  echo '<img src="../images/edit-icon.svg">';
  echo '<div class="edit-wrapper" style="top: 10px;" id=edit'.$id.'>';

  echo '<a href="#" class="edit-btn" style="display: block;" onclick="markDone('.$id.')">Done</a>';

  echo '<a href="update-baptism-list.php?id='.$id.'" class="edit-btn" style="display: block;">Edit</a>';
  
  echo '<a href="#" class="edit-btn" style="display: block;" onclick="deleteBaptism('.$id.')">Delete</a>';
  echo '</div>';
  echo '</div>';
  echo '</td>';
}
$_SESSION['sheet']  = $sheet;


mysqli_close($conn);
?>