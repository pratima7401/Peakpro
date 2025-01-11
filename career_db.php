<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "peakprosysnew";

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to the database
//$conn = new mysqli($servername, $username, $password, $dbname);

$host = "localhost";
$username = "root";
$password = "";
$database = "peakprosysnew11";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection succeeded<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $education = isset($_POST['education']) ? $_POST['education'] : '';
    $college = isset($_POST['college']) ? $_POST['college'] : '';
    $experience = isset($_POST['experience']) ? $_POST['experience'] : '';
    $skills = isset($_POST['skills']) ? $_POST['skills'] : '';
    // $qualification = isset($_POST['qualification']) ? $_POST['qualification'] : '';
    // $position = isset($_POST['position']) ? $_POST['position'] : '';
    
    // Handle file upload
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $resume = $_FILES['resume']['name'];
        $resume_tmp = $_FILES['resume']['tmp_name'];
        $resume_folder = "uploads/". basename($resume);

        // Check allowed file types
        $allowed_extensions = ['pdf'];
        $file_extension = pathinfo($resume, PATHINFO_EXTENSION);

        if (in_array($file_extension, $allowed_extensions)) {
            // Move file to the uploads directory
            if (move_uploaded_file($resume_tmp, $resume_folder)) {
                // Prepare and execute the SQL query
                $stmt = $conn->prepare("INSERT INTO career_applications (name, contact, dob, education, college, experience, skills, resume) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssssss", $name, $contact, $dob, $education, $college, $experience, $skills, $resume_folder);

                if ($stmt->execute()) {
                    echo "<script>
                            alert('Application submitted successfully!');
                            window.location.href = 'Careers.php';
                          </script>";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Failed to move uploaded resume.";
            }
        } else {
            echo "Invalid file type. Only PDF, DOC, and DOCX files are allowed.";
        }
    } else {
        // Handle file upload error
        $error_code = $_FILES['resume']['error'];
        switch ($error_code) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo "File is too large.";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "No file uploaded.";
                break;
            default:
                echo "File upload error: " . $error_code;
        }
    }
}

$conn->close();
?>
