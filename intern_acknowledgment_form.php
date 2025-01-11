<?php
// Database connection
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

$message = '';

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $contact_number = $_POST['contact_number'];
    $email_address = $_POST['email_address'];
    $internship_start_date = $_POST['internship_start_date'];
    $department_project = $_POST['department_project'];
    $agreement = isset($_POST['agreement']) ? 1 : 0;

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO intern_acknowledgments (full_name, contact_number, email_address, internship_start_date, department_project, agreement) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $full_name, $contact_number, $email_address, $internship_start_date, $department_project, $agreement);

    // Execute the statement
    if ($stmt->execute()) {
        $message = "Form submitted successfully!";
    } else {
        $message = "Error: " . $stmt->error;
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
        <h1>Form no: 4 Intern Acknowledgment Form</h1>
        <?php
        if (!empty($message)) {
            echo "<div class='message'>$message</div>";
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>
                I, <input type="text" name="full_name" required> (Full Name), acknowledge that
                I have received, read, and understood the Internship Policy and Rules
                and Regulations of Peakprosys Solutions Private Limited. I agree to
                abide by the terms outlined in the policy and understand that failure
                to comply with these terms may result in the termination of my
                internship.
            </p>

            <h2>Intern Details:</h2>
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" required>

            <label for="email_address">Email Address:</label>
            <input type="email" id="email_address" name="email_address" required>

            <label for="internship_start_date">Internship Start Date:</label>
            <input type="date" id="internship_start_date" name="internship_start_date" required>

            <label for="department_project">Department/Project Assigned:</label>
            <input type="text" id="department_project" name="department_project" required>

            <h2>Declaration:</h2>
            <p>
                I hereby declare that I will maintain the confidentiality of all
                company information and uphold the standards expected of me as
                an intern at Peakprosys Solutions Private Limited.
            </p>

            <label>
                <input type="checkbox" name="agreement" required>
                I agree to the terms and conditions stated above
            </label>
            <br>
            <input type="submit" class="btn-primary" value="Submit Form">
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