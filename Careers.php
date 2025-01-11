<?php include('career_db.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Careers</title>
    <link href="image/logo/Logo2.png" rel="icon">
    <link rel="stylesheet" href="home.css" />
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Popper.js (for Bootstrap tooltips and popovers) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JavaScript -->
     <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Popper.js (for Bootstrap 4 dropdowns, popovers, etc.) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/css/ionicons.min.css">
    <!-- <script src="home.js"></script> -->

    <style>
      /* Optional: Add '+' using CSS */
      .job-card {
            border: 100px solid black; /* Light grey border */
            border-radius: 1.5rem; /* Rounded corners */
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: black; /* Default background */
        }

        .job-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .latter {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .apply-button {
            transition: background-color 0.3s;
        }

        .apply-button:hover {
            background-color: #0056b3;
        }
    </style>
  </head>
  <body>
    
    

    <?php
    include('navbar.php');
    ?>


    <section class="container mt-5">
        <center>
            <h2 style="margin-top:110px"><span class="latter">C</span>areers</h2>
        </center>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Static Job Example -->
            <div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title: Receptionist</h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> Communication</p>
                        <p class="card-text"><strong>Location:</strong>  F.C. Road,Deccan Pune</p>
                        <p class="card-text"><strong>Experience:</strong>  0 to 2 year</p>
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
			 <div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title:Marketing 
</h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> BBA/MBA ,Marketing of Cources</p>
                        <p class="card-text"><strong>Location:</strong>   F.C. Road,Deccan pune</p>
                        <p class="card-text"><strong>Experience:</strong>   2 year and above</p>
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
			 <div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title: Sales Executives</h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> BBA/MBA ,IT institute Experience</p>
                        <p class="card-text"><strong>Location:</strong>   F.C. Road,Deccan pune</p>
                        <p class="card-text"><strong>Experience:</strong> 2 year & above</p>
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
			 <div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title: Digital marketing
</h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> BBA,MBA,Digital Markeing</p>
                        <p class="card-text"><strong>Location:</strong>   F.C. Road,Deccan pune</p>
                        <p class="card-text"><strong>Experience:</strong> 0 to 2 year </p>
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
			 <div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title: HR Executive</h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> BBA,MBA,HR all activities</p>
                        <p class="card-text"><strong>Location:</strong>   F.C. Road,Deccan pune</p>
                        <p class="card-text"><strong>Experience:</strong> 2 year & above</p>
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
			 <div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title: Admin</h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> communication</p>
                        <p class="card-text"><strong>Location:</strong>   F.C. Road,Deccan pune</p>
                        <p class="card-text"><strong>Experience:</strong> 2 year & above</p>
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
			<div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title: Office Assistant  </h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> Communication,Computer use</p>
                        <p class="card-text"><strong>Location:</strong>  F.C. Road,Deccan pune</p>
                        <p class="card-text"><strong>Experience:</strong> 0 to 2 year </p>
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
			 <div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title: Web Developer</h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> Full-Stack </p>
                        <p class="card-text"><strong>Location:</strong>   F.C. Road,Deccan pune</p>
                        <p class="card-text"><strong>Experience:</strong> 2 year & above</p>
                        
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
			 <div class="job">
                <div class="col">
                    <div class="card job-card mb-4">
                        <h3 class="card-title">Job Title:App Developer</h3>
                        <br>
                        <p class="card-text"><strong>Basic Skills:</strong> flutter </p>
                        <p class="card-text"><strong>Location :</strong> F.C. Road,Deccan ,pune</p>
                        <p class="card-text"><strong>Experience:</strong> 2 year & above</p>
                        
                        <p class="card-text"><strong>Late Date:</strong> 2024-11-30</p>
                        <a href="#" class="btn btn-primary apply-button" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </div>
                </div>
            </div>
            <!-- Add more job examples here -->
        </div>

        <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="applyModalLabel">Apply Form</h5>
                    </div>
                    <div class="modal-body p-3">
                        <form action="career_db.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="mb-2">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="contact" class="mb-2">Contact Number</label>
                                        <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="dob" class="mb-2">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="education" class="mb-2">Education</label>
                                        <input type="text" class="form-control" id="education" name="education" placeholder="Enter your education details" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="college" class="mb-2">College Name</label>
                                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college name" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="experience" class="mb-2">Experience</label>
                                        <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter your experience details" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="skills" class="mb-2">Skills</label>
                                        <input type="text" class="form-control" id="skills" name="skills" placeholder="Enter your skills details" required>
                                    </div>
                                </div>
                                <!-- <div class="col">
                                    <div class="form-group">
                                        <label for="qualification" class="mb-2">Qualification</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter your qualification details" required>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row mb-3">
                                <!-- <div class="col">
                                    <div class="form-group">
                                        <label for="position" class="mb-2">Position</label>
                                        <input type="text" class="form-control" id="position" name="position" placeholder="Enter Position" required>
                                    </div>
                                </div> -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="resume">Resume (PDF)</label>
                                        <div class="border p-1">
                                            <input type="file" class="form-control-file" id="resume" name="resume" accept=".pdf" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!-- Footer placeholder -->
    <?php
include('footer.php');
?>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('resume').addEventListener('change', function() {
            const file = this.files[0];
            const fileType = file.type;
            if (fileType !== 'application/pdf') {
                alert('Please select a PDF file.');
                this.value = ''; // Clear the file input
            }
        });
    </script>
    <?php if (isset($_GET['submitted']) && $_GET['submitted'] == 'success'): ?>
    <script>
        $(document).ready(function() {
            alert("Form submitted successfully!");
        });
    </script>
<?php endif; ?>
</body>

</html>