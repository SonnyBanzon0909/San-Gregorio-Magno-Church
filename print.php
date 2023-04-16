<?php
// Include PhpSpreadsheet classes
require '../vendor/autoload.php';

// Create a new Spreadsheet object
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Set the active sheet
$sheet = $spreadsheet->getActiveSheet();

// Add some data to the worksheet
$sheet->setCellValue('A1', 'Hello');
$sheet->setCellValue('B1', 'World');

// Set the file name and type
$filename = 'test.xlsx';

// Write the spreadsheet to a file
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($filename);

echo 'File saved successfully.';
?>
