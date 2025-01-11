<?php include('contact_services.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="image/logo/Logo2.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="home.js"></script>

    <!-- <link rel="stylesheet" href="/home.css"> -->
    
    
</head>
<body>
    <script src="home.js"></script>

    <?php
include('navbar.php');
?>

      <br>
      <br>

    <div class="container">
        <h1 class="text-center" style="margin-top: 20px;"><span class="latter">I</span>nquiry <span class="latter">F</span>orm</h1>
        
        <form id="inquiryForm" class="form-container mt-5">
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

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="country" class="form-label">Country:</label>
                    <select class="form-select" id="country" name="country" required>
                        <option value="">Select Country</option>
                        <option value="India">India</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">State:</label>
                    <select class="form-select" id="state" name="state" required>
                        <option value="">Select State</option>
                        <option value="AndraPradesh">Andhra Pradesh</option>
                        <option value="ArunachalPradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="HimachalPradesh">HimachalPradesh</option>
                                    <option value="JammuKashmir">JammuKashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="MadhyaPradesh">MadhyaPradesh</option>
                                    <option value="Sehore">Sehore</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="TamilNadu">TamilNadu</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="UttarPradesh">UttarPradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="WestBengal">WestBengal</option>
                                    <option value="AndamanNicobar">AndamanNicobar</option>
                                    <option value="DamanDiu">DamanDiu</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>

                        <!-- Add more options here -->
                    </select>
                </div>
                 <div class="col-md-4">
                    <label for="Village" class="form-label">District:</label>
                    <input type="text" class="form-control" id="District" name="District" required>
					<br>
                </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="subdistrict" class="form-label">Sub-District:</label>
                    <select id="subdistrict" name="subdistrict" class="form-select"></select>
                </div>
                <div class="col-md-4">
                    <label for="Village" class="form-label">Village:</label>
                    <input type="text" class="form-control" id="Village" name="Village" required>
                </div>
                <div class="col-md-4">
                    <label for="zip" class="form-label">Zip Code:</label>
                    <input type="text" class="form-control" id="zip" name="zip" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="subject" class="form-label">Subject:</label>
                <textarea class="form-control" id="subject" name="subject" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary d-block mx-auto mb-3 mt-4">Submit</button>
        </form>
    </div>

    
    <!-- Bootstrap and other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<body>
<?php
include('footer.php');
?>
</body>
</html>