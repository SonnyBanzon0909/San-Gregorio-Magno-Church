<?php
// Start the session
session_start();
require_once "../connect.php";
 
 

// Fetch data from the database
$sql = "SELECT name, gender, barangay, age, date_time FROM formdata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Create a new PHPExcel object
    require_once 'path/to/PHPExcel.php';
    $objPHPExcel = new PHPExcel();

    // Set document properties
    $objPHPExcel->getProperties()->setCreator("Your Name")
                                     ->setLastModifiedBy("Your Name")
                                     ->setTitle("Title")
                                     ->setSubject("Subject")
                                     ->setDescription("Description")
                                     ->setKeywords("office excel php")
                                     ->setCategory("Category");

    // Add data to the worksheet
    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Name')
                                  ->setCellValue('B1', 'Gender')
                                  ->setCellValue('C1', 'Barangay')
                                  ->setCellValue('D1', 'Age')
                                  ->setCellValue('E1', 'Date');
    
    $row = 2;
    while($data = $result->fetch_assoc()) {
        $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $data['name'])
                                      ->setCellValue('B'.$row, $data['gender'])
                                      ->setCellValue('C'.$row, $data['barangay'])
                                      ->setCellValue('D'.$row, $data['age'])
                                      ->setCellValue('E'.$row, $data['date']);
        $row++;
    }

    // Rename worksheet
    $objPHPExcel->getActiveSheet()->setTitle('Worksheet');

    // Set header and output the Excel file
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="file.xlsx"');
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>

?>




