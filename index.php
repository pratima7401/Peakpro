<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peakprosys</title>
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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
  
    <style>
       /* Section Styling */
       .section {
            padding: 60px 0;
           
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
       

        /* Vision Section Styling */
        

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

        .whatsapp-logo {
    position: fixed;
    bottom: 120px;  /* Distance from the bottom */
    right: 16px;   /* Distance from the right */
    z-index: 1000; /* Ensures it stays on top of other content */
}

.whatsapp-logo img {
    width: 100px; /* Adjust size as needed */
    height: auto;
    transition: transform 0.3s;
}

.whatsapp-logo img:hover {
    transform: scale(1.1); /* Slightly enlarge on hover */
}

.workshop-logo {
    position: fixed;
    bottom: 80px;  /* Distance from the bottom */
    right: 20px;   /* Distance from the right */
    z-index: 1000; /* Ensures it stays on top of other content */
}

.workshop-logo img {
    width: 70px; /* Adjust size as needed */
    height: auto;
    transition: transform 0.3s;
}

.workshop-logo img:hover {
    transform: scale(1.1); /* Slightly enlarge on hover */
}


@keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #services {
            opacity: 0;
            animation: fadeIn 0.6s forwards;
        }

        .service-card {
            opacity: 0;
            animation: fadeIn 0.6s forwards;
        }

        .service-card:nth-child(1) { animation-delay: 0.1s; }
        .service-card:nth-child(2) { animation-delay: 0.2s; }
        .service-card:nth-child(3) { animation-delay: 0.3s; }
        .service-card:nth-child(4) { animation-delay: 0.4s; }
        .service-card:nth-child(5) { animation-delay: 0.5s; }
        .service-card:nth-child(6) { animation-delay: 0.6s; }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
  </head>
  <body>
    
    

    <?php
include('navbar.php');
?>
   
    <!-- <div class="slide_text">
            <h4>A Leading Professional Training Institute in Pune Since 2005.
                Located in KOTHRUD | TILAK ROAD | KATRAJ | WARJE. Book a Free
                Demo Now: 9309907928 | 9403090958 | 9422301684. A Training
                Center for programming languages like C, C++, JAVA, PHP. Web
                Technologies like Spring Boot, JSP, Django, MYSQL, Angular HTML,
                CSS, JavaScript, Bootstrap, MongoDB. Free Internship of Digital
                Marketing, Software Development Projects by he Corporate Trainer
                Mr.Nitin Kale sir with having 20+ years experience</h>
        </div> -->

    <main>
      <div class="hero-section">
        <div class="scrolling-text">
          <marquee style="padding-top: 20px;">र्पीक प्रो सिस तर्फे Technical Skill Development  वर्कशॉप सुरू केलेले आहेत जसे प्रोग्रामिंग स्किल डेव्हलपमेंट, डेटाबेस मॅनेजमेंट सिस्टीम, ऑपरेटिंग सिस्टीम, लिनक्स प्रोग्रामिंग, LINUX Shell Scripting ,JAVA ,python ,डेटा अनॅलिटिक्स ,सॉफ्ट स्किल डेव्हलपमेंट ,कम्युनिकेशन स्किल्स, इंटरव्यू preparation  एमबीए व एम सी ए ,CET ची पूर्वतयारी बारावी नंतरच्या सर्व विद्यार्थ्यांना हे वर्कशॉप करता येतील या प्रत्येक वर्कशॉप ची फीस Rs 2999/-  आहे, प्रत्येक वर्कशॉप हे  15  sessions चे  असेल व प्रत्येक वर्कशॉप चे  कम्प्लिट  ट्रेनिंग सर्टिफिकेट दिले जाईल   , दिलेल्या मोबाईल नंबर वर आपली सर्व माहिती व्हाट्सअप करणे व रजिस्ट्रेशन करणे या सर्व वर्कशॉप विषयीची माहिती या वेबसाईटवर दिलेली आहे तरी सर्व विद्यार्थ्यांनी या संधीचा लाभ घ्यावा.     महाराष्ट्रातील सर्व कॉलेज विद्यार्थ्यांना मित्र व मैत्रिणींसह हे वर्कशॉप जॉईन करतacross Pune we are just a step away from you with our presence at key locations:
Kothrud, Tilak Road, Katraj, FC Road. Pune  Entrepreneurship Development Programme (EDP)तसेच , या एक महिन्यांमध्ये एक इंटर्नशिप प्रोग्राम सुरू केलेला आहे ज्या विद्यार्थ्यांना स्वतःचा बिझनेस सुरू करायचा आहे किंवा स्टार्टअप करायचे आहे त्या विद्यार्थ्यांसाठी एक महिन्याची इंटर्नशिप आहे बीबीए एमबीए , any ग्रॅज्युएट,   1. बिझनेस ,ऑफिस व  स्टाफ  मॅनेजमेंट 2. ॲप डेव्हलपमेंट 3. एच आर एडमिन  4.मार्केटिंग   5. डिजिटल मार्केटिंग  हे सर्व पॉईंट्स त्यात कव्हर केले जाणार आहेत इंटर्नशिप कॉलेजच्या विद्यार्थ्यांसाठी मोफत आहे across Pune we are just a step away from you with our presence at key locations:
Kothrud, Tilak Road, Katraj, FC Road. PUNE  Book a Free Demo Now whatsapp  : 9309907928 | 9403090958 | 9422301684       
          </marquee>
              </div>
  <!--      <div class="slider">         
           <div class="slide">
            <img src="image/banner3.jpg" alt="Group Photo 1" />
          </div>
          <div class="slide">
            <img src="image/banner1.jpg" alt="Group Photo 3" />
          </div>
          <div class="slide">
            <img src="image/banner2.jpg" alt="Group Photo 4" />
          </div>
          <div class="slide">
            <img src="image/banner1.jpg" alt="Group Photo 5" />
          </div>
          <div class="slide">
            <img src="image/banner2.jpg" alt="Group Photo 6" />
          </div>
        </div>
      </div> -->

<!--

       <div class="hero-section"> 

        <div class="slider">
           <div class="slide">
            <img src="image/banner1.jpg" alt="Group Photo 1" />
          </div> 
          <div class="slide">
            <img src="image/img1.png" alt="Group Photo 2" />
          </div>
          <div class="slide">
            <img src="image/img2.jpeg" alt="Group Photo 3" />
          </div>
          <div class="slide">
            <img src="image/img3.jpeg" alt="Group Photo 4" />
          </div>
          <div class="slide">
            <img src="image/img4.jpeg" alt="Group Photo 5" />
          </div>
        </div>
      -->

        <!-- <div class="hero-section"> -->
        <div class="slider">
          <div class="slide">
            <img src="image/img1.png" alt="Group Photo 1" />
          </div>
          <div class="slide">
            <img src="image/ban2.png" alt="Group Photo 2" />
          </div>
          <div class="slide">
            <img src="image/img2.jpeg" alt="Group Photo 3" />
          </div>
          <div class="slide">
            <img src="image/img3.jpeg" alt="Group Photo 4" />
          </div>
          <div class="slide">
            <img src="image/img4.jpeg" alt="Group Photo 5" />
          </div>
        </div>
    
        <div class="whatsapp-logo">
    <a href="https://wa.me/9309907928?text=Hello!%20I%20need%20help%20with%20your%20services." target="_blank">
        <img src="image\WA-img.png" alt="WhatsApp" />
    </a>
</div>
<div class="scrolling-text">
          <marquee style="padding-top: 1px;">Book a Free Demo Now whatsapp  : 9309907928 | 9403090958 | 9422301684  join Batches for C  C++   JAVA   PYTHON  DATA STUCTURES     DATA ANALYTICS  DEVOPS  JAVA FULL-STACK  PYTHON FULL-STACK  MEAN STACK Mongo DB Express Angular  Node JS  MERN STACK   Mongo DB Express React  Node JS   JQuery  MYSQL  JSON  SPRING BOOT  HYBERNET  Java Script    PHP    WEB  DEVELOPMEMT     DIGITAL  MARKETING    SOFT SKILL DEVELOPMENT    EDP(BUSINESS TRAINING AND SOLUTIONS)       Module 1: Establishing New Businesses (Start-up)    Module 2: Turning Around Current Underperforming Businesses      Module 3: Sustenance, Excellence, and Growth Management    Module 4: M&A, Diversification, and Expansion  INTERNSHIP   our presence at key locations:   
Kothrud, Tilak Road, Katraj, FC Road PUNE.


          </marquee>
              </div>
  

<div class="workshop-logo">
    <a href="workshop.php" target="_blank">
        <img src="image/WORKSHOP_main.png" alt="workshop" />
    </a>
</div>

      </div> 

      <div class="info-section">
        <div class="info-box">
          <h3>20+</h3>
          <p>Years</p>
        </div>
        <div class="info-box">
          <h3><span id="batches-counter">0</span>+</h3>
          <p>Batches</p>
        </div>
        <div class="info-box">
          <h3><span id="students-counter">0</span>+</h3>
          <p>Number of Students</p>
        </div>

        <div class="info-box">
          <h3><span id="corporate-workshops-counter">0</span>+</h3>
          <p>Corporate Workshops</p>
        </div>
      </div>

      <section class="section about-us">
        <div class="container">
        <h1 style="text-align: center;">About Us</h1>
            <div class="section-content">
                <!-- <img src="image/About Us.jpg" alt="About Us Image" class="section-image" /> -->
                 <!-- <video src="Videos/about us.mp4" class="section-video" autoplay></video> -->
                 <div class="section-video">
                    <video autoplay muted loop class="video">
                      <source src="Videos/about us.mp4" type="video/mp4">
                     
                    </video>
                  </div>
                  
                <div class="section-text">
                    
                    <p style="text-align: justify; font-family: 'Fixedsys';">
                    Peakprosys Solutions Pvt Ltd is a company that is grounded in innovation and committed to empowering businesses and professionals by providing innovative solutions. Founded by Mr. Rajendra Kale, an engineer and a leader with over 30+ years of experience in diverse fields of technology and business management, and Mr. Nitin Kale, a corporate trainer with a highly qualified background as an IT professional with more than 20 years of industry and training experience.
The vision is to train this next generation, equip them with the right skills to thrive in this rapidly changing technological and economic landscape, and nurture them as both entrepreneurs and skilled professionals leading to bridge the gap between available employment opportunities and employable youths.
Peakprosys is also engaged in activities such as IT system software development, EDP, and Business Management solutions.
                    </p>
                    
                </div>
            </div>
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

    <section class="section vision-section">
        <div class="container">
        <h1 style="text-align: center;">Why Choose Us?</h1>
            <div class="section-content">
                <div class="section-text">
                
                    <p style="text-align: justify; font-family: 'Fixedsys';">• We hold hands until you are established <br>
• ⁠100%  placement call guarantee<br>
• ⁠Third party quality checks to ensure quality training <br>
• ⁠Widely established placement netwrok<br>
• ⁠Live projects and in-house internship programs <br>
• ⁠Startup support  
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
        </div>
    </section>

      <!-- <section class="courses-section">
        <h2>Our Courses</h2>
        <div class="courses-container">
          <div class="course-box">
            <img
              src="image/our courses logo/Python logo.png"
              alt="Python Programming"
            />
            <h3>Python </h3>
            <p>duration- 3 Months</p>
            <a href="courses_inquiry.php" class="learn-more">Inquiry</a>
            <a href="PDF/python .pdf" class="learn-more">Syllabus</a>
          </div>

          <div class="course-box">
            <img src="image/our courses logo/php.png" alt="PHP Programming" />
            <h3>PHP Programming</h3>
            <p>duration- 3 Months</p>
            <a href="courses_inquiry.php" class="learn-more">Inquiry</a>
            <a href="PDF/PHP Full Stack course.pdf" class="learn-more">Syllabus</a>
          </div>
<div class="course-box">
            <img src="image/our courses logo/fsp.jpg" alt="PHP Programming" />
            <h3>Python Full-Stack</h3>
            <p>duration- 6 Months</p>
            <a href="courses_inquiry.php" class="learn-more">Inquiry</a>
            <a href="PDF/Python Full Stack course.pdf" class="learn-more">Syllabus</a>
          </div>
          <div class="course-box">
            <img
              src="image/our courses logo/Java-Full-Stack.png"
              alt="PHP Programming"
            />
            <h3>JAVA Full-Stack</h3>
            <p>duration- 6 Months</p>
            <a href="courses_inquiry.php" class="learn-more">Inquiry</a>
            <a href="PDF/Java Full Stack course.pdf" class="learn-more">Syllabus</a>
          </div>
        </div>
      </section> -->
      
<!----Business Services-->
<section id="business_services_section" class="py-5">
  <br>
  <br>
  <div class="container">
      <a href="services.php"><h2 class="text-center mb-4"> Business Services</h2></a>
      <div class="row g-4">
          <div class="col-md-4">
              <div class="card service-card">
                  <div class="card-body text-center">
                      <img src="image/web development.png" alt="Service 1 Icon" class="mb-3">
                      <h5 class="card-title">Research </h5>
                      <p class="card-text">Market research<br>
                          Target audience identification<br>
                           Product/service validation<br><br><br><br>
                      </p>
                      <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
              <div class="card service-card">
                  <div class="card-body text-center">
                      <img src="image/app development.png" alt="Service 2 Icon" class="mb-3">
                      <h5 class="card-title">Business planning</h5>
                      <p class="card-text">  Writing a business plan<br>
                           Defining mission and vision statements<br>
                           Setting business goals and objectives<br>
                           Creating a business model canvas<br><br><br>
                      </p>
                      <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
              <div class="card service-card">
                  <div class="card-body text-center">
                      <img src="image/it consultancy.png" alt="Service 3 Icon" class="mb-3">
                      <h5 class="card-title">Legal and administrative tasks</h5>
                      <p class="card-text"> Registering the business<br>
                           Obtaining necessary licenses and permits<br>
                           Setting up business structure <br>(sole proprietorship, partnership, corporation, etc.)<br>
                           Opening a business bank account
                      </p>
                      <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                  </div>
              </div>
          </div>
      </div>
<div class="row g-4" style="padding-top:10px;">
          <div class="col-md-4">
              <div class="card service-card">
                  <div class="card-body text-center">
                      <img src="image/corporate training.png" alt="Service 1 Icon" class="mb-3">
                      <h5 class="card-title">Financial planning:</h5>
                      <p class="card-text"> Creating a budget<br>
                           Securing funding (loans, grants, investors, etc.)<br>
                           Setting up accounting and bookkeeping systems<br>
                           Establishing a payment system
                      </p>
                      <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
              <div class="card service-card">
                  <div class="card-body text-center">
                      <img src="image/data analytics.png" alt="Service 2 Icon" class="mb-3" style="width: 80px; height: 75px;">
                      <h5 class="card-title">Marketing and branding:</h5>
                      <p class="card-text">  Developing a marketing strategy<br>
                           Creating a brand identity (logo, website, social media,etc.)<br>
                           Establishing an online presence<br>
                           Building a marketing team<br><br>
                      </p>
                      <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
              <div class="card service-card">
                  <div class="card-body text-center">
                      <img src="image/qa&testing.png" alt="Service 3 Icon" class="mb-3">
                      <h5 class="card-title">Operations and logistics</h5>
                      <p class="card-text">  Setting up business operations<br>
                           Establishing supply chains<br>
                           Managing inventory<br>
                           Setting up fulfillment and shipping processes<br><br>
                      </p>
                      <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</section>


      
      <!-- This is Our courses section -->
      
      

      <section id="services" class="py-5">
        <div class="container">
            <a href="services.php"><h2 class="text-center mb-4">IT Services</h2></a>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <img src="image/web development.png" alt="Service 1 Icon" class="mb-3">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Creating beautiful, responsive websites and web apps that drive your business forward.</p>
                            <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <img src="image/app development.png" alt="Service 2 Icon" class="mb-3">
                            <h5 class="card-title">Mobile App Development</h5>
                            <p class="card-text">Building intuitive and high-performing mobile apps for iOS and Android platforms.</p>
                            <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <img src="image/it consultancy.png" alt="Service 3 Icon" class="mb-3">
                            <h5 class="card-title">IT Consultancy</h5>
                            <p class="card-text">Our experience makes us stand out from other web development.</p>
                            <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row g-4" style="padding-top:10px;">
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <img src="image/corporate training.png" alt="Service 1 Icon" class="mb-3">
                            <h5 class="card-title">Corporate Training</h5>
                            <p class="card-text">Training is a pivotal process integral to personal, professional development.</p>
                            <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <img src="image/data analytics.png" alt="Service 2 Icon" class="mb-3" style="width: 80px; height: 75px;">
                            <h5 class="card-title">Data Analytics</h5>
                            <p class="card-text">Revolutionize your data strategy with our solutions.</p>
                            <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <img src="image/qa&testing.png" alt="Service 3 Icon" class="mb-3">
                            <h5 class="card-title">QA & Testing</h5>
                            <p class="card-text">Turn to our experts to perform multi-stage testing of your software.</p>
                            <a href="Inquiry.php" class="btn btn-primary">Inquire Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      
      
        <!-- this is a Testimonials section -->
      <section class="testimonial-section">
        <h2>Testimonials</h2>
        <div class="testimonial-carousel">
          <!-- Testimonial 1 -->
          <div class="testimonial-card">
            <p class="testimonial-text">
              <i class="fas fa-quote-left"></i>
              I am incredibly grateful for the fantastic learning experience I
              had with this platform. The courses offered, especially in <b>full-stack in java</b>
              , were comprehensive and well-structured. The
              instructors were knowledgeable, engaging, and always ready to
              assist. The practical projects and hands-on exercises greatly
              contributed to my skill development.
              <i class="fas fa-quote-right"></i>
            </p>
            <div class="testimonial-author">
              <img src="image/Expert photo/devang.jpg" alt="Devang Shah" />
              <h4>Devang Shah</h4>
              <p>Java Full-Stack Developer</p>
            </div>
          </div>
          <!-- Testimonial 2 -->
          <div class="testimonial-card">
            <p class="testimonial-text">
              <i class="fas fa-quote-left"></i>
              I am incredibly grateful for the fantastic learning experience I
              had with this platform. The courses offered, especially in <b>Web
              Development</b>, were comprehensive and well-structured. The
              instructors were knowledgeable, engaging, and always ready to
              assist. The practical projects and hands-on exercises greatly
              contributed to my skill development.
              <i class="fas fa-quote-right"></i>
            </p>
            <div class="testimonial-author">
              <img src="image/Expert photo/krishna.jpg" alt="krishna shinde" />
              <h4>krishna shinde</h4>
              <p>Web Developer</p>
            </div>
          </div>
          <!-- Testimonial 3 -->
          <div class="testimonial-card">
            <p class="testimonial-text">
              <i class="fas fa-quote-left"></i>
              I am incredibly grateful for the fantastic learning experience I
              had with this platform. The courses offered, especially in <b>PYTHON FULL-STACK</b>, were comprehensive and well-structured. The
              instructors were knowledgeable, engaging, and always ready to
              assist. The practical projects and hands-on exercises greatly
              contributed to my skill development.
              
                
              <i class="fas fa-quote-right"></i>
            </p>
            <div class="testimonial-author">
              <img src="image/Expert photo/vijaya.png" alt="Shruti Kalbhor" />
              <h4>Miss.Vijaya Manne</h4>
              <p>Full-Stack Developer</p>
            </div>
          </div>
<!--
          <div class="testimonial-card">
            <p class="testimonial-text">
              <i class="fas fa-quote-left"></i>
              Especially in web development, were comprehensive and
              well-structured. The instructors were knowledgeable, engaging, and
              always ready to assist. The practical projects and hands-on
              exercises greatly contributed to my skill development.

              <i class="fas fa-quote-right"></i>
            </p><br><br><br><br>
            <div class="testimonial-author">
              <img src="image/Expert photo/priya.jpg" alt="Priya Ghadge" />
              <h4>Priya Ghadge</h4>
              <p>Full-stack Developer</p>
            </div>
          </div>

          <div class="testimonial-card">
            <p class="testimonial-text">
              <i class="fas fa-quote-left"></i>
              I am incredibly grateful for the fantastic learning experience I
              had with this platform. The courses offered, especially in web
              development, were comprehensive and well-structured. The
              instructors were knowledgeable, engaging, and always ready to
              assist. The practical projects and hands-on exercises greatly
              contributed to my skill development.
              <i class="fas fa-quote-right"></i>
            </p>
            <div class="testimonial-author">
              <img
                src="image/Expert photo/sakshi.jpg"
                alt="Sakshi Kumbhar"
              />
              <h4>Sakshi Kumbhar</h4>
              <p>Web Developer</p>
            </div>
          </div>

          

          <div class="testimonial-card">
            <p class="testimonial-text">
              <i class="fas fa-quote-left"></i>
              I am incredibly grateful for the fantastic learning experience I
              had with this platform. The courses offered, especially in web
              development, were comprehensive and well-structured. The
              instructors were knowledgeable, engaging, and always ready to
              assist. The practical projects and hands-on exercises greatly
              contributed to my skill development.
              <i class="fas fa-quote-right"></i>
            </p>
            <div class="testimonial-author">
              <img src="image/Expert photo/sanika.jpg" alt="Sanika Patil" />
              <h4>Sanika Patil</h4>
              <p>Web Developer</p>
            </div>
          </div>

          <div class="testimonial-card">
            <p class="testimonial-text">
              <i class="fas fa-quote-left"></i>
              I am incredibly grateful for the fantastic learning experience I
              had with this platform. The courses offered, especially in web
              development, were comprehensive and well-structured. The
              instructors were knowledgeable, engaging, and always ready to
              assist. The practical projects and hands-on exercises greatly
              contributed to my skill development.
              <i class="fas fa-quote-right"></i>
            </p>
            <div class="testimonial-author">
              <img
                src="image/Expert photo/omkar.jpg"
                alt="Omkar Bhogade"
              />
              <h4>Omkar Bhogade</h4>
              <p>Web Developer</p>
            </div>
          </div>
    -->      
          
        </div>
        
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
            
         
          <!-- Workshop 1 -->
          <div class="workshop-card">
            <img
              src="image/workshop demo/desai.jpg"
              alt="Internship Workshop"
            />
            <div class="workshop-info">
              <h3><i class="fas fa-graduation-cap"></i> Internship</h3>
              <p><i class="fas fa-map-marker-alt"></i> Location: Pune</p>
              <p>
                <i class="fas fa-calendar-alt"></i> Date: 2024-03-31 00:00:00
              </p>
              <p>
             <!--   <i class="fas fa-link"></i> Meeting Link:
                <a href="#">Click Here</a> -->
                
              </p>
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




      <!-- Contact Us Section -->
      <!-- Contact Us Section -->
      <!-- Contact Us Section -->
      <section id="contact-us-section" class="contact-us-section">
        <h2>Contact Us</h2>
        <p class="contact-us-description">
          We're here to help. Feel free to reach out for any inquiries or
          assistance.
        </p>

        <div class="contact-us-container">
          <!-- Google Map -->
          <div class="contact-map">
            <!-- <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.133043411769!2d73.84384557495433!3d18.51486837428506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c025e5241057%3A0xe5ae98a3ff429c33!2sMadhav%20Heritage%2C%20Lokmanya%20Bal%20Gangadhar%20Tilak%20Rd%2C%20Ramashram%20Society%2C%20Perugate%2C%20Sadashiv%20Peth%2C%20Pune%2C%20Maharashtra%20411030!5e0!3m2!1sen!2sin!4v1622724457357!5m2!1sen!2sin"
              width="100%"
              height="400"
              style="border: 0; border-radius: 15px"
              allowfullscreen=""
              loading="lazy"
            ></iframe> -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.2385843942393!2d73.83916361083094!3d18.518117569176383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf87f5d418d1%3A0x985b331461fa1bd4!2sSagar%20Arcade!5e0!3m2!1sen!2sin!4v1725004689756!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <!-- Contact Form -->
          <div class="contact-form" style="height: 460px;">
           <form action="contact_services.php" method="post" style="padding: 10px 0;">
           <label for="contact" class="form-label">Contact:</label>
          <input type="text" name="name" placeholder="Your Name" required />
          <div class="contact-form-row">
            <input type="email" name="email" placeholder="Your Email" required />
            <input type="tel" name="contact" placeholder="Your Phone" required /> <!-- Change name to contact -->
         </div>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
        </form>
          </div>


          <!-- <div class="col-md-6">
    <label for="contact" class="form-label">Contact:</label>
    <div class="input-group">
        <span class="input-group-text">+</span>
        <input type="number" class="form-control" id="countryCode" name="countryCode" value="91" placeholder="Country Code" required>
        <input type="tel" class="form-control" id="contact" name="contact" pattern="[0-9]{10}" title="Please enter 10-digit phone number" placeholder="Phone Number" required>
         </div>
    </div> -->


        </div>

        <div class="contact-info">
          <div class="contact-info-item">
            <i class="fas fa-map-marker-alt"></i>
            <h4>Our Location</h4>
            <p>
              Sagar Arcade, Office no.16, 3rd floor, Near Good Luck Cafe, FC Road, Deccan, Pune-411005
            </p>
             <p>
              <a href="mailto:hr@peakprosys.com"
                >hr@peakprosys.com</a>
                <br>
              |<a href="tel:+91-9309907928">+91-9309907928</a>
              
            </p>
          </div>
          
          
          <!--<div class="contact-info-item">-->
          <!--  <i class="fas fa-envelope"></i>-->
          <!--  <h4>Email & Phone</h4>-->
           
          <!--</div>-->
          
        </div>
      </section>
    </main>
    <?php
include('footer.php');
?>
   
    
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

  <?php if (isset($_GET['submitted']) && $_GET['submitted'] == 'success'): ?>
    <script>
        $(document).ready(function() {
            alert("Form submitted successfully!");
        });
    </script>
<?php endif; ?>
  
    
  </body>
</html>