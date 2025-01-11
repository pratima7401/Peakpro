<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "peakprosysnew11";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to handle file upload
function uploadFile($file, $document_type) {
    $target_dir = "uploads/";
    $file_extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $new_filename = uniqid() . "." . $file_extension;
    $target_file = $target_dir . $new_filename;
    
    // Check if file is a PDF
    if ($file_extension != "pdf") {
        return "Only PDF files are allowed.";
    }
    
    // Check file size (500KB limit)
    if ($file["size"] > 500000) {
        return "File is too large. Maximum size is 500KB.";
    }
    
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        return $target_file;
    } else {
        return "Error uploading file.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pin_code = $_POST['pin_code'];
    $college = $_POST['college'];
    $degree = $_POST['degree'];
    $current_year = $_POST['current_year'];
    $graduation_date = $_POST['graduation_date'];
    $tenth_percentage = $_POST['tenth_percentage'];
    $twelfth_percentage = $_POST['twelfth_percentage'];
    $current_cgpa = $_POST['current_cgpa'];
    $emergency_name = $_POST['emergency_name'];
    $emergency_relationship = $_POST['emergency_relationship'];
    $emergency_contact = $_POST['emergency_contact'];
    
    // Handle file uploads
    $aadhaar_card = uploadFile($_FILES["aadhaar_card"], "aadhaar_card");
    $pan_card = uploadFile($_FILES["pan_card"], "pan_card");
    $tenth_marksheet = uploadFile($_FILES["tenth_marksheet"], "tenth_marksheet");
    $twelfth_marksheet = uploadFile($_FILES["twelfth_marksheet"], "twelfth_marksheet");
    $degree_marksheets = uploadFile($_FILES["degree_marksheets"], "degree_marksheets");
    
    // Check for upload errors
    $upload_errors = array();
    if (strpos($aadhaar_card, "Error") !== false) $upload_errors[] = "Aadhaar Card: " . $aadhaar_card;
    if (strpos($pan_card, "Error") !== false) $upload_errors[] = "PAN Card: " . $pan_card;
    if (strpos($tenth_marksheet, "Error") !== false) $upload_errors[] = "10th Marksheet: " . $tenth_marksheet;
    if (strpos($twelfth_marksheet, "Error") !== false) $upload_errors[] = "12th Marksheet: " . $twelfth_marksheet;
    if (strpos($degree_marksheets, "Error") !== false) $upload_errors[] = "Degree Marksheets: " . $degree_marksheets;
    
    if (empty($upload_errors)) {
        // Prepare and execute SQL statement
        $stmt = $conn->prepare("INSERT INTO internship_applications (full_name, dob, gender, contact_number, email, address, pin_code, college, degree, current_year, graduation_date, tenth_percentage, twelfth_percentage, current_cgpa, emergency_name, emergency_relationship, emergency_contact, aadhaar_card, pan_card, tenth_marksheet, twelfth_marksheet, degree_marksheets) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param("sssssssssssdddssssssss", $full_name, $dob, $gender, $contact_number, $email, $address, $pin_code, $college, $degree, $current_year, $graduation_date, $tenth_percentage, $twelfth_percentage, $current_cgpa, $emergency_name, $emergency_relationship, $emergency_contact, $aadhaar_card, $pan_card, $tenth_marksheet, $twelfth_marksheet, $degree_marksheets);
        
        if ($stmt->execute()) {
            echo "<script>alert('Form Submitted Successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
        
        $stmt->close();
    } else {
        $error_message = "Errors occurred during file upload:\\n";
        foreach ($upload_errors as $error) {
            $error_message .= $error . "\\n";
        }
        echo "<script>alert('$error_message');</script>";
    }
}

$conn->close();
?>
