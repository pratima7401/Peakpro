<?php include('course_inquiry_db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Popper.js (for Bootstrap tooltips and popovers) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Additional Libraries -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Custom JavaScript -->
<script src="home.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .input-group-text, #countryCode, #contact {
            height: 38px; /* Adjust height of inputs to match other inputs if necessary */
        }
        #countryCode {
            max-width: 80px; /* Adjusts the width of the country code input */
        }
        #contact {
            flex-grow: 1; /* Ensures the phone number input takes up the remaining space */
        }
        .form-control {
            height: calc(1.5em + .75rem + 2px); /* Bootstrap default size for form-control in Bootstrap 5 */
        }
        .form-container {
            border: 3px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .btn-primary {
            width: 200px;
        }
		
		.container {
    background-color: #fff;
    padding: 30px;
}

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
        <h1 class="text-center" style="margin-top: 20px;"><span class="latter">I</span>nquiry <span class="latter">F</span>orm</h1>
        
        <form id="inquiryForm" action="course_inquiry_db.php" method="POST" class="form-container mt-5">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
    
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="col-md-6">
                    <label for="contact" class="form-label">Contact:</label>
                    <div class="input-group">
                        <span class="input-group-text">+</span>
                        <input type="number" class="form-control" id="countryCode" name="countryCode" value="91" placeholder="Country Code" required>
                        <input type="tel" class="form-control" id="contact" name="contact" pattern="[0-9]{10}" title="Please enter 10-digit phone number" placeholder="Phone Number" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" id="messsage" name="message" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary d-block mx-auto mb-3 mt-4">Submit</button>
        </form>
    </div>

   

    <!-- Bootstrap and other scripts -->
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