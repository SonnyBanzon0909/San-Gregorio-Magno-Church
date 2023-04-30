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
$purpose="";

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





require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



if($purpose=='all')
{
    $sql = "SELECT * FROM formdata WHERE name LIKE '$name%' AND IF('$month'='', 1, date_time_month='$month') AND IF('$barangay'='', 1, barangay='$barangay') AND IF('$year'='', 1, date_time_year='$year') AND IF('$gender'='', 1, gender='$gender')";

}
else
{

    $sql = "SELECT * FROM formdata WHERE name LIKE '$name%' AND IF('$month'='', 1, date_time_month='$month') AND IF('$barangay'='', 1, barangay='$barangay') AND IF('$year'='', 1, date_time_year='$year') AND IF('$gender'='', 1, gender='$gender') and purpose='$purpose'";

}


// Execute query and get result set
$result = $conn->query($sql);

// Create new spreadsheet object
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Add table headers
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Email');
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
        $sheet->setCellValue('D' . $row_num, $row['barangay']);
        $sheet->setCellValue('E' . $row_num, $row['age']);
        $sheet->setCellValue('F' . $row_num, $row['date_time']);
        $row_num++;
    }
}

// // Save spreadsheet to file
// $writer = new Xlsx($spreadsheet);
// // Save spreadsheet to file with current date and time in filename
// $date = date('Y-m-d H-i-s');
// $filename = "baptism-certificates-list_$date.xlsx";
// $writer = new Xlsx($spreadsheet);
// $writer->save($filename);
// echo $filename;

// Save spreadsheet to file
$writer = new Xlsx($spreadsheet);

// Save spreadsheet to file with current date and time in filename
$date = date('Y-m-d H-i-s');
$filename = "docs/baptism-certificates-list_$date.xlsx";

// Save the file
$writer = new Xlsx($spreadsheet);
$writer->save($filename);

// Generate the file URL and return it to the client
$file_url = 'http://' . $_SERVER['HTTP_HOST'] . '/editor/' . $filename;
echo $file_url;



// Close database connection
$conn->close();

?>
