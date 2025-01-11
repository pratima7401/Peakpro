<?php
session_start(); // Start session management

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

// Fetch Data from Tables
$careerApplications = $conn->query("SELECT * FROM career_applications");
$courseInquiries = $conn->query("SELECT * FROM course_inquiries");
$inquiries = $conn->query("SELECT * FROM inquiries");
$generalInquiries = $conn->query("SELECT * FROM inquiry");
$workshopRegistrations = $conn->query("SELECT * FROM workshop_reg");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            min-width: 250px;
            background-color: #33a1ff; /* VS Code logo blue */
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar h2 {
            color: #ffffff;
            display: flex;
            align-items: center;
        }
        .sidebar h2 img {
            width: 80px; /* Adjust logo size */
            height: auto; /* Adjust logo size */
            margin-right: 10px;
            margin-left: 15px;
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background: #005d99; /* Darker blue on hover */
        }
        .divider {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.5); /* Light white color */
            margin: 5px 0; /* Space above and below the divider */
        }
        .content {
            margin-left: 250px;
            padding: 30px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            margin-top: 20px;
        }
        table {
            background-color: white;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>
            <img src="image/Logo2.png" alt="Logo"> Admin 
        </h2>
        <a href="#career-applications"><i class="fas fa-briefcase"></i> Career Applications</a>
        <div class="divider"></div>
        <a href="#course-inquiries"><i class="fas fa-question-circle"></i> Course Inquiries</a>
        <div class="divider"></div>
        <a href="#inquiries"><i class="fas fa-envelope"></i> Inquiries</a>
        <div class="divider"></div>
        <a href="#general-inquiries"><i class="fas fa-comments"></i> General Inquiries</a>
        <div class="divider"></div>
        <a href="#workshop-registrations"><i class="fas fa-chalkboard-teacher"></i> Workshop Registrations</a>
        <div class="divider"></div>
        <a href="?logout" class="text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>Admin Dashboard</h1>
        </div>

        <!-- Career Applications Section -->
        <h2 id="career-applications">Career Applications</h2>
        <a href="Career Applications_download_excel.php" class="btn btn-success">Download Career Applications</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Contact</th><th>DOB</th><th>Education</th>
                    <th>College</th><th>Experience</th><th>Skills</th><th>Resume</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $careerApplications->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['contact'] ?></td>
                        <td><?= $row['dob'] ?></td>
                        <td><?= $row['education'] ?></td>
                        <td><?= $row['college'] ?></td>
                        <td><?= $row['experience'] ?></td>
                        <td><?= $row['skills'] ?></td>
                        <!-- <td><?= $row['position'] ?></td> -->
                        <td>
                            <a href="<?= htmlspecialchars($row['resume'], ENT_QUOTES, 'UTF-8') ?>" target="_blank">View Resume</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        


        <!-- Course Inquiries Section -->
        <h2 id="course-inquiries">Course Inquiries</h2>
        <a href="download_course_inquiries.php" class="btn btn-success">Download Course Inquiries</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Contact</th><th>Message</th><th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $courseInquiries->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['contact'] ?></td>
                        <td><?= $row['message'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Inquiries Section -->
        <h2 id="inquiries">Inquiries</h2>
        <a href="download_inquiries.php" class="btn btn-success">Download Inquiries</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Contact</th><th>Message</th><th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $inquiries->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['contact'] ?></td>
                        <td><?= $row['message'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- General Inquiries Section -->
        <h2 id="general-inquiries">General Inquiries</h2>
        <a href="download_general_inquiries.php" class="btn btn-success">Download General Inquiries</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Message</th><th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $generalInquiries->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['contact'] ?></td>
                        <td><?= $row['message'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Workshop Registrations Section -->
        <h2 id="workshop-registrations">Workshop Registrations</h2>
        <a href="download_workshop_registrations.php" class="btn btn-success">Download Workshop Registrations</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Workshop</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $workshopRegistrations->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['workshop'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
