<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "peakprosysnew11";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
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

    //Handle file uploads (add error handling as needed)
    $aadhaar_card = $_FILES['aadhaar_card']['name'];
    $pan_card = $_FILES['pan_card']['name'];
    $tenth_marksheet = $_FILES['tenth_marksheet']['name'];
    $twelfth_marksheet = $_FILES['twelfth_marksheet']['name'];
    $degree_marksheets = $_FILES['degree_marksheets']['name'];


    // Prepare and execute SQL statement  (Add file upload fields to the query)
    $stmt = $conn->prepare("INSERT INTO internship_applications (full_name, dob, gender, contact_number, email, address, pin_code, college, degree, current_year, graduation_date, tenth_percentage, twelfth_percentage, current_cgpa, emergency_name, emergency_relationship, emergency_contact, aadhaar_card, pan_card, tenth_marksheet, twelfth_marksheet, degree_marksheets) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssssssssssdddssssssss", $full_name, $dob, $gender, $contact_number, $email, $address, $pin_code, $college, $degree, $current_year, $graduation_date, $tenth_percentage, $twelfth_percentage, $current_cgpa, $emergency_name, $emergency_relationship, $emergency_contact, $aadhaar_card, $pan_card, $tenth_marksheet, $twelfth_marksheet, $degree_marksheets);
    
    if ($stmt->execute()) {
        echo "Application submitted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Registration Form</title>
    <link rel="icon" href="./PeakProSys-Logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <link
rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
/>

<!-- Font Awesome -->
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>

<!-- Ionicons -->
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/css/ionicons.min.css"
/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Popper.js (for Bootstrap tooltips and popovers) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Additional Libraries -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<script src="home.js"></script>
    <style>
      body {
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }
        .container {
    background-color: #fff;
    padding: 30px;}
        h1 { text-align: center; }
        form { background: #f4f4f4; padding: 20px; border-radius: 8px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="email"], input[type="date"], input[type="number"], select, textarea {
            width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px;
        }
        .btn-primary {
            width: 200px;
        }
        input[type="submit"]:hover { background: #555; }
        input[type="file"] { margin-bottom: 10px; }

        h1 {
    color: #007bff;
}
.latter{
    color: #00b9fe!important;
}
.text-center{
    color: black!important;
    font-size: 20px!important;
}

    </style>
</head>
<body>
<header>
        <!-- Nav Start -->
        <?php
        include('navbar.php');
        ?>
     <!-- Nav End -->
     </header>

    <div class="container">
        <h1 class="text-center" style="margin-top: 20px;"><span class="latter">I</span>nternship <span class="latter">F</span>orm</h1>
        <form action="internship_form_db.php" method="post" enctype="multipart/form-data">
            <h2>Personal Information</h2>
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" required>
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="address">Permanent Address:</label>
            <textarea id="address" name="address" required></textarea>
            
            <label for="pin_code">Pin Code:</label>
            <input type="text" id="pin_code" name="pin_code" required>
            <br>
            <br>
            
            <h2>Educational Information</h2>
            <label for="college">College/University Name:</label>
            <input type="text" id="college" name="college" required>
            
            <label for="degree">Degree Program:</label>
            <input type="text" id="degree" name="degree" required>
            
            <label for="current_year">Current Year/Semester:</label>
            <input type="text" id="current_year" name="current_year" required>
            
            <label for="graduation_date">Expected Graduation Date:</label>
            <input type="date" id="graduation_date" name="graduation_date" required>
            
            <label for="tenth_percentage">10th Standard Percentage:</label>
            <input type="number" id="tenth_percentage" name="tenth_percentage" step="0.01" required>
            
            <label for="twelfth_percentage">12th Standard Percentage:</label>
            <input type="number" id="twelfth_percentage" name="twelfth_percentage" step="0.01" required>
            
            <label for="current_cgpa">Current CGPA/Percentage:</label>
            <input type="number" id="current_cgpa" name="current_cgpa" step="0.01" required>
            <br>
            <br>
            
            <h2>Emergency Contact Details</h2>
            <label for="emergency_name">Name:</label>
            <input type="text" id="emergency_name" name="emergency_name" required>
            
            <label for="emergency_relationship">Relationship:</label>
            <input type="text" id="emergency_relationship" name="emergency_relationship" required>
            
            <label for="emergency_contact">Contact Number:</label>
            <input type="text" id="emergency_contact" name="emergency_contact" required>
            <br>
            <br>

            <h2>Required Documents</h2>
            <p>Please upload self-attested photocopies of the following documents (PDF format, max 500KB each):</p>

            <label for="aadhaar_card"><b>Aadhaar Card:</b></label>
            <input type="file" id="aadhaar_card" name="aadhaar_card" accept=".pdf" required><br>

            <label for="pan_card"><b>PAN Card:</b></label>
            <input type="file" id="pan_card" name="pan_card" accept=".pdf" required><br>

            <label for="tenth_marksheet"><b>10th Standard Mark Sheet:</b></label>
            <input type="file" id="tenth_marksheet" name="tenth_marksheet" accept=".pdf" required><br>

            <label for="twelfth_marksheet"><b>12th Standard Mark Sheet:</b></label>
            <input type="file" id="twelfth_marksheet" name="twelfth_marksheet" accept=".pdf" required><br>

            <label for="degree_marksheets"><b>Current Degree Mark Sheets (All semesters completed):</b></label>
            <input type="file" id="degree_marksheets" name="degree_marksheets" accept=".pdf" required><br>
            <br>
            <br>
            
            <h2>Declaration</h2>
            <p>I hereby declare that all the information provided above is true to the best of my knowledge, and I understand that any false information may lead to the rejection of my internship application or termination of internship if already granted.</p>
            
            <button type="submit" class="btn btn-primary d-block mx-auto mb-3 mt-4">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   
  
      <script>
        function animateCounter(id, start, end, duration) {
          let current = start;
          const increment = end > start ? 1 : -1;
          const stepTime = Math.abs(Math.floor(duration / (end - start)));
          const obj = document.getElementById(id);
  
          const timer = setInterval(() => {
            current += increment;
            obj.textContent = current;
            if (current === end) {
              clearInterval(timer);
            }
          }, stepTime);
        }
  
        document.addEventListener("DOMContentLoaded", () => {
          animateCounter("students-counter", 0, 1000, 2000); // Counter for Number of Students
          animateCounter("batches-counter", 0, 208, 3000); // Counter for Batches
          animateCounter("corporate-workshops-counter", 0, 12, 2000); // Counter for Corporate Workshops
        });
      </script>
      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/jquery/jquery-migrate.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/counterup/counterup.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/lightbox/js/lightbox.min.js"></script>
      
  
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      
      <!-- Bootstrap JS (includes Popper.js) -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
      <script src="home.js"></script>
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS (includes Popper.js) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <?php
include('footer.php');
?>

</body>
</html>

