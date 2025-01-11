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

require 'vendor/autoload.php'; // Ensure the path is correct
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Fetch Workshop Registrations data
$workshopRegistrations = $conn->query("SELECT * FROM workshop_reg");

// Create a new Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set the header row
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Email');
$sheet->setCellValue('D1', 'Phone');
$sheet->setCellValue('E1', 'Workshop');

// Populate the spreadsheet with data
$row = 2; // Start at row 2
while ($registration = $workshopRegistrations->fetch_assoc()) {
    $sheet->setCellValue('A' . $row, $registration['id']);
    $sheet->setCellValue('B' . $row, $registration['name']);
    $sheet->setCellValue('C' . $row, $registration['email']);
    $sheet->setCellValue('D' . $row, $registration['phone']);
    $sheet->setCellValue('E' . $row, $registration['workshop']);
    $row++;
}

// Set the headers for the Excel download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="workshop_registrations_' . date('Y-m-d') . '.xlsx"');
header('Cache-Control: max-age=0');

// Write the file to the output
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;

// Close the database connection
$conn->close();
?>
