<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="image/logo/Logo2.png" rel="icon">
    <link rel="stylesheet" href="home.css">

    <head>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/css/ionicons.min.css" />

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

            .workshop-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 40px;
                /* Increased gap between workshop cards */
                padding: 20px;
                max-width: 1200px;
            }

            .workshop-card {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 300px;
                overflow: hidden;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .workshop-card:hover {
                transform: scale(1.05);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .workshop-card img {
                width: 100%;
                height: auto;
            }

            .workshop-info {
                padding: 20px;
                text-align: center;
            }

            .workshop-info h3 {
                color: #ff6600;
                font-size: 24px;
                margin: 10px 0;
            }

            .workshop-info p {
                margin: 5px 0;
                font-size: 16px;
                color: #555;
            }

            .workshop-info a {
                color: #ff6600;
                text-decoration: none;
                font-weight: bold;
            }

            .workshop-info a:hover {
                text-decoration: underline;
            }
        </style>


    </head>

<body>
    <script src="home.js"></script>

    <?php
    include('navbar.php');
    ?>
    
<br><br>




    <body>



    </section>
      <section class="workshop-section">
        <h2> EVENTS </h2>
        <div class="workshop-container">
         <!-- Workshop 4 -->
            <div class="workshop-card">
                <img src="image/workshop demo/be1.jpg" alt="Event Workshop" />
                <div class="workshop-info">
                    <h3><i class="fas fa-graduation-cap"></i> Event</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Location: BCA BCS college</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: 2024-09-24 00:00:00</p>
                    
                </div>
            </div>
            
             <!-- Workshop 3 -->
            <div class="workshop-card">
                <img src="image/workshop demo/be2.jpg" alt="Event Workshop" />
                <div class="workshop-info">
                    <h3><i class="fas fa-graduation-cap"></i> Event</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Location:BEED in  Marathwada </p>
                    <p><i class="fas fa-calendar-alt"></i> Date: 2024-09-24 00:00:00</p>
                    </div>
            </div>
            
             <!-- Workshop 3 -->
            <div class="workshop-card">
                <img src="image/workshop demo/be3.jpg" alt="Event Workshop" />
                <div class="workshop-info">
                    <h3><i class="fas fa-graduation-cap"></i> Event</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Location: BCA BCS college</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: 2024-09-24 00:00:00</p>
                    
                </div>
            </div>
            
        
          <!-- Workshop 2 -->
         <!--
          <div class="workshop-card">
            <img src="image/workshop demo/shiv.jpg" alt="Seminar Workshop" />
            <div class="workshop-info">
              <h3><i class="fas fa-graduation-cap"></i> Seminar</h3>
              <p><i class="fas fa-map-marker-alt"></i> Location: pune</p>
              <p>
                <i class="fas fa-calendar-alt"></i> Date: 2024-04-02 00:00:00
              </p>
              <p>
                <i class="fas fa-link"></i> Meeting Link:
                <a href="#">Click Here</a>
              </p>
            </div>
          </div>
          -->
          
          <!-- Workshop 3 -->
           <!--
          <div class="workshop-card">
            <img src="image/workshop demo/mm.jpg" alt="Event Workshop" />
            <div class="workshop-info">
              <h3><i class="fas fa-graduation-cap"></i> Event</h3>
              <p><i class="fas fa-map-marker-alt"></i> Location: pune</p>
              <p>
                <i class="fas fa-calendar-alt"></i> Date: 2024-04-02 00:00:00
              </p>
              <p>
                <i class="fas fa-link"></i> Meeting Link:
                <a href="#">Click Here</a>
              </p>
            </div>
          </div>
          -->
        </div>
      </section>
<!--
        <h2>OUR EVENTS</h2>
        <div class="workshop-container">
            
            <div class="workshop-card">
                <img src="image/workshop demo/desai.jpg" alt="Internship Workshop" />
                <div class="workshop-info">
                    <h3><i class="fas fa-graduation-cap"></i> Internship</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Location: Pune</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: 2024-03-31 00:00:00</p>
                    <p><i class="fas fa-link"></i> Meeting Link: <a href="#">Click Here</a></p>
                </div>
            </div>
            
            <div class="workshop-card">
                <img src="image/workshop demo/shiv.jpg" alt="Seminar Workshop" />
                <div class="workshop-info">
                    <h3><i class="fas fa-graduation-cap"></i> Seminar</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Location: Kothrud</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: 2024-04-02 00:00:00</p>
                    <p><i class="fas fa-link"></i> Meeting Link: <a href="#">Click Here</a></p>
                </div>
            </div>
            
            <div class="workshop-card">
                <img src="image/workshop demo/mm.jpg" alt="Event Workshop" />
                <div class="workshop-info">
                    <h3><i class="fas fa-graduation-cap"></i> Event</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Location: Marathwada college</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: 2024-04-02 00:00:00</p>
                    <p><i class="fas fa-link"></i> Meeting Link: <a href="#">Click Here</a></p>
                </div>
            </div>
        </div>

        -->

        <?php
include('footer.php');
?>

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
    </body>

</html>