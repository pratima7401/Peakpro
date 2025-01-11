<?php
session_start();

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy session
    header("Location: login.php"); // Redirect to login page
    exit();
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Database connection
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "peakprosysnew";

// Create a connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

require 'vendor/autoload.php'; // Ensure the path is correct
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Fetch General Inquiries data
$generalInquiries = $conn->query("SELECT * FROM inquiry");

// Create a new Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set the header row
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Email');
$sheet->setCellValue('D1', 'Phone');
$sheet->setCellValue('E1', 'Message');
$sheet->setCellValue('F1', 'Created At');

// Populate the spreadsheet with data
$row = 2; // Start at row 2
while ($inquiry = $generalInquiries->fetch_assoc()) {
    $sheet->setCellValue('A' . $row, $inquiry['id']);
    $sheet->setCellValue('B' . $row, $inquiry['name']);
    $sheet->setCellValue('C' . $row, $inquiry['email']);
    $sheet->setCellValue('D' . $row, $inquiry['contact']);
    $sheet->setCellValue('E' . $row, $inquiry['message']);
    $sheet->setCellValue('F' . $row, $inquiry['created_at']);
    $row++;
}

// Set the headers for the Excel download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="general_inquiries_' . date('Y-m-d') . '.xlsx"');
header('Cache-Control: max-age=0');

// Write the file to the output
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;

// Close the database connection
$conn->close();
?>
