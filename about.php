<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
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
        /************** Nav CSS ***************/


/* Base Styles */
#nav {
    position: fixed;
    top: 0;
    width: 100%;
    height: 75px;
    padding: 20px 0;
    z-index: 999;
    color: black;
    background-color: white;
}

#nav.nav-sticky {
    height: 70px;
    padding: 8px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .3);
    transition: all 0.3s;
}

#nav .navbar {
    height: 100%;
    background: transparent !important;
}

#nav .navbar-brand {
    padding: 0;
}

#nav .navbar-brand img {
    position: absolute;
    margin-top: -27px;
    height: 80px;
}

#nav.nav-sticky .navbar-brand img {
    position: absolute;
    max-height: 50px;
    margin-top: -25px;
    transition: all 0.5s;
}

#nav .nav-link,
#nav .nav-link:focus,
#nav .nav-link:hover,
#nav .nav-link.active {
    color: #050000;
}

#nav .nav-link:hover,
#nav .nav-link.active .stars {
    color: #4F84C4;
    background: #ffffff;
    filter: drop-shadow(0 0 10px #fffdef);
}

/* Dropdown menu */
#nav .dropdown-menu {
    margin-top: 0;
    border: 0;
    border-radius: 0;
}
/* Navbar toggler button customization */
.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(0, 0, 0, 1)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Large screen adjustments */
@media (min-width: 768px) {
    #nav,
    #nav .navbar {
        background: white !important;
    }
    
    #nav a.nav-link {
        padding: 8px 15px;
        font-size: 15px;
        text-transform: uppercase;
    }
}

/* Small screen (phone) adjustments */
@media (max-width: 768px) {
    #nav {
        height: auto; /* Allow height to adjust based on content */
        padding: 10px 0;
        
    }
/* Navbar toggler button customization */
/* .navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(0, 0, 0, 1)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
} */

    #nav .navbar {
        background-color: #f01010;
        padding: 0;
        color: #000000;
    }

    #nav .navbar-brand img {
        height: 50px; /* Adjust logo size for small screens */
        margin-top: 0;
    }

    #nav a.nav-link {
        padding: 10px;
        font-size: 14px; /* Decrease font size */
        display: block; /* Ensure links take full width */
    }

    #nav .dropdown-menu {
        box-shadow: none;
    }

    #nav .container-fluid {
        padding: 0;
    }
    .navbar-nav .nav-item {
        text-align: center;
        padding: 5px 0;
      }
    
      .dropdown-menu {
        position: static;
        float: none;
        width: 100%;
        text-align: center;
      }
    
      .dropdown-submenu {
        position: static;
      }
    
      .dropdown-submenu .dropdown-menu {
        left: auto;
        right: auto;
        top: auto;
      }
    
      .dropdown-submenu:hover .dropdown-menu {
        display: block;
      }
}

/* Dropdown submenu */
.dropdown-submenu {
    position: relative;
    padding-right: 100%;
}

.dropdown-submenu > .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
    display: none;
    position: absolute;
}

.dropdown-submenu:hover > .dropdown-menu {
    display: block;
}

        /* Section Styling */
        .section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        .section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }
        .section-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .section-image {
            max-width: 45%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .section-video {
    max-width: 45%; /* Adjust the width as needed */
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden; /* To round the video edges */
}

.video {
    width: 100%;
    height: auto;
    display: block; /* Ensures proper display within the section */
    border-radius: inherit; /* Ensures the border-radius applies to the video */
}

        .section-text {
            flex: 1;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }
        .section-text h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #222;
        }
        .section-text p {
            margin-bottom: 20px;
        }

        /* About Us Section */
        .about-us {
            background-color: #f0f8ff;
        }

        /* Vision Section Styling */
        .vision-section {
            background-color: #e6f7ff;
        }

        /* Mission Section Styling */
        .mission-section {
            background-color: #f0f8ff;
        }

        /* Values Section Styling */
        .values-section {
            background-color: #e6f7ff;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .section-content {
                flex-direction: column;
            }
            .section-image {
                max-width: 100%;
                margin-bottom: 20px;
            }
        }

/* Social Links and Footer */
.social-links {
    display: flex;
    justify-content: center; /* Centers the icons horizontally */
    padding: 0; /* Remove left padding */
}

.social-links a {
    font-size: 18px;
    display: inline-block;
    background: #ffffff;
    color: #4F84C4;
    line-height: 1;
    padding: 9px 0;
    margin-right: 8px; /* Increase spacing slightly */
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
}

.social-links a:hover {
    background: #4F84C4;
    color: #ffffff;
    transform: scale(1.1);
}

.social-links i {
    font-size: 20px;  /* Ensure icon size is sufficient */
    display: inline-block;
    padding-left: 0;  /* Remove padding-left */
}

/* Footer Style */
.footer {
    position: relative;
    padding: 0 0 30px 0;
    background-color: #000000;
}

/* Adjust copyright and credit */
.copyright .credit {
    text-align: center;
    padding-top: 30px;
    background-color: #050000;
}

@media (min-width: 768px) {
    .footer .credit {
        text-align: right;
    }
    .footer .copyright {
        text-align: left;
    }
}

/* Media Queries for Smaller Screens */
@media (max-width: 600px) {
    .social-links a {
        font-size: 16px;
        width: 30px;
        height: 30px;
        margin-right: 6px;
    }
    
    .social-links i {
        font-size: 18px;
    }
    
    .copyright .credit {
        text-align: center;
        padding: 10px 0;
    }
    .footer{
        background-color: #000000;
    }
}



    </style>
  </head>
  <body>
    
    

    <?php
include('navbar.php');
?>
    <br>
    <br>

    <!-- About Us Section -->
    <section class="section about-us">
        <div class="container">
            <div class="section-content">
                <!-- <img src="image/About Us.jpg" alt="About Us Image" class="section-image" /> -->
                 <!-- <video src="Videos/about us.mp4" class="section-video" autoplay></video> -->
                 <div class="section-video">
                    <video autoplay muted loop class="video">
                      <source src="Videos/about us.mp4" type="video/mp4">
                     
                    </video>
                  </div>
                  
                <div class="section-text">
                    <h1>About Us</h1>
                    <p style="text-align: justify; font-family: 'Fixedsys';">Welcome to Peakprosys Solutions Pvt Ltd, a company rooted in innovation and committed to empowering businesses and professionals. Our journey began in 2004 as Prime Computer Services and in 2024, we evolved into Peakprosys to better reflect our expanded vision and services.
                        Founded by Mr. Rajendra Kale, an engineer and a leader with over 30 years of experience in diverse fields of technology and business management, and Mr. Nitin Kale, highly Qualified IT professional with over 20 years of experience in the industry and training, Peakprosys was established with a clear mission to bridge the gap between available employment opportunities and the employable youth, both nationally and globally. Founders’ vision is to train the next generation, equipping them with the skills necessary to thrive in a rapidly changing technological and economic landscape, and to nurture them as both entrepreneurs and skilled professionals.
                        At Peakprosys, we offer dynamic solutions tailored to the ever-evolving needs of businesses and individuals. From software development to professional training programs to make youth placeable, our services are designed to foster growth and ensure sustainability for Startups as well as well-established businesses. We believe in empowering the workforce of tomorrow through practical training, ensuring they are ready to meet the demands of a competitive global marketplace.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="section vision-section">
        <div class="container">
            <div class="section-content">
                <div class="section-text">
                    <h1>Our Vision</h1>
                    <p style="text-align: justify; font-family: 'Fixedsys';">To establish and empower businesses & professionals globally by providing unparalleled training, handholding, driving innovation and excellence in the ever-evolving global economic and digital landscape.
                    </p>
                </div>
                <!-- <img src="image/vision.jpg" alt="Vision Image" class="section-image" /> -->
                <div class="section-video">
                    <video autoplay muted loop class="video">
                      <source src="Videos/vision.mp4" type="video/mp4">                    
                    </video>
                  </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section mission-section">
        <div class="container">
            <div class="section-content">
                <!-- <img src="image/mission.jpg" alt="Mission Image" class="section-image" /> -->
                <div class="section-video">
                    <video autoplay muted loop class="video">
                      <source src="Videos/our mission.mp4" type="video/mp4">                    
                    </video>
                  </div>
                <div class="section-text">
                    <h1>Our Mission</h1>
                    <p style="text-align: justify; font-family: 'Fixedsys';">“Our mission at Peakprosys is to empower businesses and professionals by making them placeable and self-employable through training, developing, monitoring and handholding to start, sustain and grow new businesses with a focus on skills, strategies, and support necessary to excel in a competitive market. We are dedicated to delivering high-quality training programs, expert setup services, and continuous assistance that foster sustenance, growth, and innovation.”


                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section values-section">
        <div class="container">
            <div class="section-content">
                <div class="section-text">
                    <h1>Our Values</h1>
                    <p style="text-align: justify; font-family: 'Fixedsys';"><strong>Integrity:</strong> We uphold the highest standards of honesty and transparency in all our dealings.</p>
                    <p style="text-align: justify; font-family: 'Fixedsys';"><strong>Innovation:</strong> We embrace creativity and continuously seek new ways to improve and excel.</p>
                    <p style="text-align: justify; font-family: 'Fixedsys';"><strong>Excellence:</strong> We are committed to delivering exceptional quality and value in everything we do.</p>
                    <p style="text-align: justify; font-family: 'Fixedsys';"><strong>Customer Focus:</strong> We prioritize our clients' needs and strive to exceed their expectations.</p>
                    <p style="text-align: justify; font-family: 'Fixedsys';"><strong>Collaboration:</strong> We work together with our clients and partners to achieve common goals and drive success.</p>
                </div>
                <!-- <img src="image/value.jpg" alt="Values Image" class="section-image" /> -->
                <div class="section-video">
                    <video autoplay muted loop class="video">
                      <source src="Videos/our values.mp4" type="video/mp4">                    
                    </video>
                  </div>
            </div>
        </div>
    </section>

    <?php
include('footer.php');
?>
  

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="home.js">
    </script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS (includes Popper.js) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
