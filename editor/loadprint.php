<?php
// Start the session
session_start();
require_once "../connect.php";
 

// Load the PHPExcel library
require_once '/Classes/PHPExcel.php';
 

// Retrieve the data from the "formdata" table
$sql = "SELECT name, gender, barangay, age, date_time FROM formdata";
$result = mysqli_query($conn, $sql);

// Create a new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set the active worksheet
$objPHPExcel->setActiveSheetIndex(0);

// Set the column headers
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Name');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Gender');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Barangay');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Age');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Date');

// Set the data rows
$i = 2;
while ($row = mysqli_fetch_assoc($result)) {
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $row['name']);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $row['gender']);
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $row['barangay']);
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $row['age']);
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $row['date_time']);
    $i++;
}

// Set the column widths
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);

// Set the sheet title
$objPHPExcel->getActiveSheet()->setTitle('Form Data');

// Save the Excel file to a temp file
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$filename = tempnam(sys_get_temp_dir(), 'excel');
$objWriter->save($filename);

// Set the content type and headers for the Excel file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="formdata.xlsx"');
header('Cache-Control: max-age=0');

// Output the Excel file to the browser
readfile($filename);

// Delete the temp file
unlink($filename);

// Close the database connection
mysqli_close($conn);

?>
