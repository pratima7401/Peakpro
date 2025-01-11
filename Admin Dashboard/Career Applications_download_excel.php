<?php
session_start(); // Start session management

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Load PhpSpreadsheet
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Database connection
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "peakprosysnew";

// Create a connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$host = "127.0.0.1:3306";
$username = "u126463643_peakprouser";
$password = "peakpropass123?";
$database = "u126463643_peakprosysnew";

// Create connection
$con = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Data from Tables
$careerApplications = $conn->query("SELECT * FROM career_applications");

// Create a new Spreadsheet object
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set the header row
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Contact');
$sheet->setCellValue('D1', 'DOB');
$sheet->setCellValue('E1', 'Education');
$sheet->setCellValue('F1', 'College');
$sheet->setCellValue('G1', 'Experience');
$sheet->setCellValue('H1', 'Skills');
$sheet->setCellValue('I1', 'Resume');

// Populate the sheet with data
$rowNumber = 2; // Start from the second row
while ($row = $careerApplications->fetch_assoc()) {
    $sheet->setCellValue('A' . $rowNumber, $row['id']);
    $sheet->setCellValue('B' . $rowNumber, $row['name']);
    $sheet->setCellValue('C' . $rowNumber, $row['contact']);
    $sheet->setCellValue('D' . $rowNumber, $row['dob']);
    $sheet->setCellValue('E' . $rowNumber, $row['education']);
    $sheet->setCellValue('F' . $rowNumber, $row['college']);
    $sheet->setCellValue('G' . $rowNumber, $row['experience']);
    $sheet->setCellValue('H' . $rowNumber, $row['skills']);
    $sheet->setCellValue('I' . $rowNumber, $row['resume']);
    $rowNumber++;
}

// Set headers for download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="career_applications_' . date('Y-m-d') . '.xlsx"');
header('Cache-Control: max-age=0');

// Write the file to the output
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
