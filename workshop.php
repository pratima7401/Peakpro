<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){

//    $servername = "localhost";
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
    // echo "Connection succeeded<br>";
}

// collect post variables
$name = $_POST['name'];                              
$email = $_POST['email'];
$phone = $_POST['phone'];
$workshop = $_POST['workshop'];

$sql = "INSERT INTO `workshop_reg` (`name`, `email`, `phone`, `workshop`) VALUES ('$name', '$email', '$phone', '$workshop');";
// echo $sql;

//Execute the query
if($conn->query($sql) == true){
    // echo "Successfully inserted";
    header("Location: workshop.php?submitted=success");

    // flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $conn->error";
    // $not_insert = true;
}
// close the database connection
$conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop</title>
    <link href="image/logo/Logo2.png" rel="icon">
    <link rel="stylesheet" href="home.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Custom JavaScript -->
    <script src="home.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            text-align: center;
            color: #333;
            margin: 20px 0;
            font-size: 36px;
        }

        /* Workshop container for card layout */
.workshop-container {
    display: flex;
    flex-wrap: wrap; /* Allows wrapping for responsiveness */
    justify-content: space-between; /* Spreads cards evenly */
    gap: 20px; /* Adds spacing between the cards */
}

/* Workshop card styling */
.workshop-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    flex: 1 1 calc(33.333% - 20px); /* Each card takes 1/3 of the row with space between */
    max-width: 300px;
    min-width: 280px; /* Minimum width for the cards */
    margin-bottom: 20px;
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
}

.workshop-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}


.logo-img {
    width: 80px;
    height: auto;
    
   
}

@media (max-width: 768px) {
    .workshop-heading {
        font-size: 28px; /* Responsive font size */
    }

    .logo-img {
        width: 60px; /* Responsive logo size */
    }
}
.workshop-info {
    padding: 15px;
    text-align: center;
    flex-grow: 1;
}

/* Media queries for responsive behavior */
@media (max-width: 1200px) {
    .workshop-card {
        flex: 1 1 calc(33.333% - 15px); /* Slightly reduced gap for medium screens */
    }
}

@media (max-width: 992px) {
    .workshop-card {
        flex: 1 1 calc(50% - 20px); /* Two cards per row for tablet-sized screens */
    }
}

@media (max-width: 768px) {
    .workshop-card {
        flex: 1 1 calc(50% - 15px); /* Two cards per row on smaller screens */
    }
}

@media (max-width: 576px) {
    .workshop-card {
        flex: 1 1 100%; /* One card per row on mobile */
    }
}

/* Form and card wrapper layout */
.wrapper {
    display: flex;
    max-width: 1200px;
    width: 100%;
    flex-wrap: wrap; /* Allow wrapping on smaller screens */
}

.left-column {
    flex: 1;
    padding-right: 20px;
    min-width: 300px;
}

.right-column {
    flex: 2;
    min-width: 300px;
}

@media (max-width: 768px) {
    .wrapper {
        flex-direction: column; /* Stack columns on smaller screens */
    }

    .left-column,
    .right-column {
        padding-right: 0;
        width: 100%;
        margin-bottom: 20px;
    }
}

@media (max-width: 576px) {
    h2 {
        font-size: 28px;
    }
}


        /* Form styles */
        .registration-form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 550px; /* Match height of the cards */
        }

        .registration-form h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #ff6600;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #e65c00;
        }

        /* Card and Form Wrapper */
        .wrapper {
            display: flex;
            max-width: 1200px;
            width: 100%;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
        }

        .left-column {
            flex: 1; /* For the registration form */
            padding-right: 20px; /* Space between form and cards */
            min-width: 300px; /* Ensure a minimum width for the form */
        }

        .right-column {
            flex: 2; /* For the workshop cards */
            min-width: 300px; /* Ensure a minimum width for the cards */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column; /* Stack columns on smaller screens */
            }
            .left-column,
            .right-column {
                padding-right: 0; /* Remove right padding for stacked layout */
                width: 100%; /* Make columns full width */
                margin-bottom: 20px; /* Add some space between stacked items */
            }
        }

        @media (max-width: 576px) {
            h2 {
                font-size: 28px; /* Adjust heading size for smaller screens */
            }

            .workshop-card {
                max-width: 100%; /* Full width for cards on very small screens */
            }
        }

        .my-iframe {
            margin: 20px; /* Margin outside the iframe */
            padding: 10px; /* Padding inside the iframe (if supported) */
            border: 1px solid #ccc; /* Optional border */
            width: 100%; /* Adjust width as needed */
            height: 500px; /* Adjust height as needed */
        }

        .iframe-container {
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .iframe-container.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
<br>
<h2>
  <img src="image/workshop_img/free.png" alt="logo" class="logo-img"> One Day Workshop
</h2>
<?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
?>
    <div class="container">
        <div class="wrapper">
            <!-- Left Column for Registration Form -->
            <div class="left-column">
                <div class="registration-form">
                    <h3>Register Here</h3>
                    <form action="workshop.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="workshop">Select Workshop</label>
                            <select id="workshop" name="workshop" required>
                                <option value="">Choose...</option>
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Java">Java</option>
                                <option value="Python">Python</option>
                                <option value="DBMS">DBMS</option>
                                <option value="PHP">PHP</option>
                                <option value="MySQL">MySQL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit">Register</button>
                        </div>
                          <br>
                          <div  class="iframe-container" id="myIframe">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/ux38GecQKHI?si=rTKAmv5d6_EowI__" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        </form>
                </div>
            </div>

            <!-- Right Column for Workshop Cards -->
            <div class="right-column">
                <div class="workshop-container">
                    <!-- Workshop 1 -->
                    <div class="workshop-card">
                        <img src="image\workshop_img\pyhong1.jpg" alt="Internship Workshop" />
                        <!-- <iframe width="100%" height="215" src="https://www.youtube.com/embed/j-SmfwJbd3E?si=HLB4Oz7oIn4lab_1" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <div class="workshop-info">
                            <h3><i class="fas fa-graduation-cap"></i>Python Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Location: Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005</p>
                            <p><i class="fas fa-calendar-alt"></i> Date: 26 oct 2024</p>
                            
                        </div>
                    </div>
                    <!-- Workshop 2 -->
                    <div class="workshop-card">
                        <img src="image/workshop_img/webgood.jpg" alt="Internship Workshop" />
                        <!-- <iframe width="100%" height="215" src="https://www.youtube.com/embed/pKOnaaU1voA?si=tgXu_P_wQGFs7IIx" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <div class="workshop-info">
                            <h3><i class="fas fa-graduation-cap"></i>Java Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Location: Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005</p>
                            <p><i class="fas fa-calendar-alt"></i> Date: 28 oct 2024</p>
                            
                        </div>
                    </div>
                    <!-- Workshop 3 -->
                    <div class="workshop-card">
                        <img src="image/workshop_img/mysql2.jpg" alt="Internship Workshop" />
                        <!-- <iframe width="100%" height="215" src="https://www.youtube.com/embed/j-SmfwJbd3E?si=HLB4Oz7oIn4lab_1" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <div class="workshop-info">
                            <h3><i class="fas fa-graduation-cap"></i>MySQL Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Location: Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005</p>
                            <p><i class="fas fa-calendar-alt"></i> Date: 29 oct 2024</p>
                            
                        </div>
                    </div>
                    <!-- Workshop 4 -->
                    <div class="workshop-card">
                        <img src="image/workshop_img/dbw.jpg" alt="Internship Workshop" />
                        <!-- <iframe width="100%" height="215" src="https://www.youtube.com/embed/pKOnaaU1voA?si=tgXu_P_wQGFs7IIx" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <div class="workshop-info">
                            <h3><i class="fas fa-graduation-cap"></i>DBMS Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Location: Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005</p>
                            <p><i class="fas fa-calendar-alt"></i> Date: 30 oct 2024</p>
                            
                        </div>
                    </div>
                    <!-- Workshop 5 -->
                    <div class="workshop-card">
                        <img src="image/workshop_img/sef.jpg" alt="Internship Workshop" />
                        <!-- <iframe width="100%" height="215" src="https://www.youtube.com/embed/j-SmfwJbd3E?si=HLB4Oz7oIn4lab_1" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <div class="workshop-info">
                            <h3><i class="fas fa-graduation-cap"></i>soft. Eng. Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Location: Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005</p>
                            <p><i class="fas fa-calendar-alt"></i> Date: 21 oct 2024 </p>
                            
                        </div>
                    </div>
                    <!-- Workshop 6 -->
                    <div class="workshop-card">
                        <img src="image\workshop_img\dsa.jpg" alt="Internship Workshop" />
                        <!-- <iframe width="100%" height="215" src="https://www.youtube.com/embed/pKOnaaU1voA?si=tgXu_P_wQGFs7IIx" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <div class="workshop-info">
                            <h3><i class="fas fa-graduation-cap"></i>DSA. Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Location: Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005</p>
                            <p><i class="fas fa-calendar-alt"></i> Date: 22 oct 2024</p>
                            
                        </div>
                    </div>

                    <!-- Workshop 7 -->
                    <div class="workshop-card">
                        <img src="image\workshop_img\wdf.jpg" alt="Internship Workshop" />
                        <!-- <iframe width="100%" height="215" src="https://www.youtube.com/embed/j-SmfwJbd3E?si=HLB4Oz7oIn4lab_1" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <div class="workshop-info">
                            <h3><i class="fas fa-graduation-cap"></i>Web Development Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Location: Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005</p>
                            <p><i class="fas fa-calendar-alt"></i> Date: 23 oct 2024</p>
                            
                        </div>
                    </div>

                    <div class="workshop-card">
                        <img src="image\workshop_img\dm1.jpg" alt="Internship Workshop" />
                        <!-- <iframe width="100%" height="215" src="https://www.youtube.com/embed/pKOnaaU1voA?si=tgXu_P_wQGFs7IIx" title="Python Workshop" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <div class="workshop-info">
                            <h3><i class="fas fa-graduation-cap"></i>Digital Marketing Workshop</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Location: Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005</p>
                            <p><i class="fas fa-calendar-alt"></i> Date: 24 oct 2024</p>
                            
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        <script>
    window.onload = () => {
        const iframeContainer = document.getElementById('myIframe');
        iframeContainer.classList.add('show');
    };
</script>

                        <?php
include('footer.php');
?>
<?php if (isset($_GET['submitted']) && $_GET['submitted'] == 'success'): ?>
    <script>
        $(document).ready(function() {
            alert("Form submitted successfully!");
        });
    </script>
<?php endif; ?>

