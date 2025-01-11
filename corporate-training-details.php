<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Section</title>
    <link href="image/logo/Logo2.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="services.css">
    <script src="home.js"></script>

    <!-- Font Awesome and Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/css/ionicons.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Popper.js (for Bootstrap tooltips and popovers) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <script src="home.js"></script>

    <?php include('./navbar.php'); ?>

    <!-- Service Details Section -->
    <section class="service-details py-5" style="min-height: calc(100vh - 100px);">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
            <h1 class="text-center mb-4" style="font-size: 2.5rem;">SERVICE_NAME</h1>
            <p class="text-center mb-4" style="font-size: 1.2rem;">
                Welcome to our <b>SERVICE_NAME</b> page. Here, we offer comprehensive solutions designed to meet your specific needs. 
                Our team of experts ensures exceptional quality and delivers results that align with your goals.
            </p>
            <h2 class="mt-5 mb-3" style="color: #007BFF;">Features of SERVICE_NAME</h2>
            <ul style="font-size: 1.1rem; line-height: 1.8;">
                <li>Feature 1: Detailed explanation of this feature.</li>
                <li>Feature 2: Benefits and unique selling points.</li>
                <li>Feature 3: How this feature adds value to your business.</li>
            </ul>

            <div class="text-center mt-4">
                <a href="Inquiry.php" class="btn btn-primary btn-lg">Inquire Now</a>
            </div>
        </div>
    </section>

    <?php include('./footer.php'); ?>

    <!-- Success Alert -->
    <?php if (isset($_GET['submitted']) && $_GET['submitted'] == 'success'): ?>
        <script>
            $(document).ready(function() {
                alert("Form submitted successfully!");
            });
        </script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
