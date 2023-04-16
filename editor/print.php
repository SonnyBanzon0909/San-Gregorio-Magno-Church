<?php
// Start the session
session_start();
require_once "../connect.php";


$name = "";
$month = "";
$barangay = "";
$year = "";
$gender = "";
$table ="";

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



///$table = "SELECT * FROM formdata WHERE IF('$name'='', 1, name='$name') AND IF('$month'='', 1, date_time_month='$month') AND IF('$barangay'='', 1, barangay='$barangay') AND IF('$year'='', 1, date_time_year='$year') AND IF('$gender'='', 1, gender='$gender') and purpose='Request Certificate'";




//$table_result = mysqli_query($conn, $table);



require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

 
// SQL query
$sql = "SELECT * FROM formdata WHERE IF('$name'='', 1, name='$name') AND IF('$month'='', 1, date_time_month='$month') AND IF('$barangay'='', 1, barangay='$barangay') AND IF('$year'='', 1, date_time_year='$year') AND IF('$gender'='', 1, gender='$gender') and purpose='Request Certificate'";

// Execute query and get result set
$result = $conn->query($sql);

// Create new spreadsheet object
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Add table headers
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Gender');
$sheet->setCellValue('D1', 'Barangay');
$sheet->setCellValue('E1', 'Age');
$sheet->setCellValue('F1', 'Date');
// Loop through result set and add rows to spreadsheet
if ($result->num_rows > 0) {
    $row_num = 2;
    while($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $row_num, $row['id']);
        $sheet->setCellValue('B' . $row_num, $row['name']);
        $sheet->setCellValue('C' . $row_num, $row['user']);
        $sheet->setCellValue('D' . $row_num, $row['gender']);
        $sheet->setCellValue('E' . $row_num, $row['barangay']);
        $sheet->setCellValue('F' . $row_num, $row['date_time']);
        $row_num++;
    }
}

// Save spreadsheet to file
$writer = new Xlsx($spreadsheet);
$writer->save('requested-certificates-list.xlsx');

// Close database connection
$conn->close();
$url = rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . "/editor/requested-certificates-list.xlsx";
header("Location: " . $url);

exit;
?>
