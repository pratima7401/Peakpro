<?php
// Include the database connection file
//$host = "localhost"; // Change if using a remote database
//$username = "root"; // Replace with your database username
//$password = ""; // Replace with your database password
//$database = "peakprosysnew"; // Name of the database you created

// Create a connection
//$conn = new mysqli($host, $username, $password, $database);
$host = "localhost";
$username = "root";
$password = "";
$database = "peakprosysnew11";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $countryCode = $_POST['countryCode'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    // Prepare the SQL statement for the course_inquiries table
    $stmt = $conn->prepare("INSERT INTO inquiry (name, email, country_code, contact, message) VALUES (?, ?, ?, ?, ?)");

    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("sssss", $name, $email, $countryCode, $contact, $message);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Course inquiry submitted successfully!";
            header("Location: services.php?submitted=success");
        } else {
            echo "Failed to submit inquiry: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Failed to prepare statement: " . $conn->error;
    }
} else {
    echo "Invalid request method.";
}



// Close the connection
$conn->close();
?>
