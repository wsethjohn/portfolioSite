<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> William Seth Johnson Portfolio Website</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- connect with php file -->
    <?php
    include ("mail.php");
    ?>
    
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>William Johnson</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>I'm passionate about creating engaging and visually stunning content that resonates with audiences across all platforms</p>
        
        <div class="social-media">
            <a href="https://www.youtube.com/channel/UCFYsA92-y9sJ06bseESFRBA" target="_blank"><i class='bx bxl-youtube' ></i></a>
            <a href="https://www.linkedin.com/in/william-seth-johnson-0b33a7186/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
        </div>
        <a href="https://drive.google.com/file/d/1TbD3gFGvRnX60e_0bn7rQ1c65YMpn2NG/view?usp=sharing" class="btn" target="_blank">Download Resume</a>
    </div>

    <div class="home-img">
        <img src="Portfolio Website Images\Home.png"/>
    </div>
    </section>

    <!-- About Sections-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="Portfolio Website Images\About.png"/>
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Digital Marketer</h3>
            <p>Hi, my name is William Seth Johnson. 

                I am a creative professional with a diverse skill set that includes digital marketing, cinematography, graphic design, PPC and Lead Generation advertising, Marketing Brand Strategy and social media advertising. I'm passionate about creating engaging and visually stunning content that resonates with audiences across various platforms.
                With a keen eye for detail and a passion for staying up-to-date on the latest industry trends, I am confident in my ability to lead a team of marketers and drive results for any organization. Whether it's developing a comprehensive marketing plan or crafting engaging social media content, I am dedicated to delivering exceptional results and exceeding expectations.</p>
                <a href="#portfolio" class="btn">See My Work</a>
            </div>
    </section>

<!-- Services Section-->

     <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>

           <div class="services-container">
             <div class="services-box">
                    <i class='bx bx-code-alt'></i>
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#portfolio" class="btn">Learn More</a>
             </div>

                <div class="services-box">
                    <i class='bx bx-video'></i>
                    <h3>Video Production</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="services-box">
                    <i class='bx bx-line-chart'></i>
                    <h3>Digital Marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
     </section>

<!-- Portfolio Section-->

<section class="portfolio" id="portfolio">
    <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
             <img src="Portfolio Website Images/portfolio1.png"/>
                <div class="portfolio-layer">
                    <h4>Web Development</h4>
                    <p>web dev stuff</p>
                    <a href="#portfolio"><i class='bx bx-code-alt'></i></a>
                </div>
            </div>
  
            <div class="portfolio-box">
             <img src="Portfolio Website Images/portfolio2.png"/>
                <div class="portfolio-layer">
                     <h4>Video Production</h4>
                     <p>Watch my cinema reel</p>
                     <a href="#portfolio" class="video-popup" data-video="lu3z4f30rsU"><i class='bx bx-video'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
             <img src="Portfolio Website Images/portfolio3.png"/>
                <div class="portfolio-layer">
                        <h4>Graphic Design</h4>
                        <p>graphic design stuff</p>
                        <a href="#portfolio"><i class='bx bxs-brush'></i></a>
                    </div>
                </div>
                
            <div class="portfolio-box">
             <img src="Portfolio Website Images/portfolio4.png"/>
                <div class="portfolio-layer">
                         <h4>Digital Marketing</h4>
                         <p>digital marketing stuff</p>
                         <a href="#portfolio"><i class='bx bx-line-chart'></i></a>
                    </div>
                </div>

            <div class="portfolio-box">
             <img src="Portfolio Website Images/portfolio5.png"/>
                <div class="portfolio-layer">
                         <h4>Lead Generation</h4>
                         <p>lead generation stuff</p>
                         <a href="#portfolio"><i class='bx bxs-group' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
             <img src="Portfolio Website Images/portfolio6.png"/>
                <div class="portfolio-layer">
                          <h4>Live Events</h4>
                          <p>live event stuff</p>
                          <a href="#portfolio"><i class='bx bx-calendar-check' ></i></i></a>
                </div>
            </div>
        </div>

        <!-- Video production cinema reel pop up -->

        <div id="video-modal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
             <div id="video-player"></div>
            </div>
          </div>

        <!-- web dev pop up -->
        <div id="popup" class="popup">
            <div class="popup-content">
              <img src="Portfolio Website Images/webdev.png" alt="web development">
              <span id="close-popup" class="close-popup"><i class='bx bx-x'></i></span>
              <div id="web-dev"></div>
            </div>
        </div>

        <!-- digital marketing pop up -->
        
        <div id="marketing-popup" class="popup">
            <div class="marketing-content">
                <img src="Portfolio Website Images/digital marketing.png" alt="digital marketing">
              <span id="marketing-close" class="marketing-close"><i class='bx bx-x'></i></span>
              <div id="digital-marketing"></div>
            </div>
        </div>

        <!-- graphic design pop up -->
        
        <div id="design-popup" class="popup">
            <div class="design-content">
              <img src="Portfolio Website Images/graphicdesign.png" alt="graphic design">
              <span id="design-close" class="design-close"><i class='bx bx-x'></i></span>
            </div>
        </div>

        <!-- Lead Generation pop up -->
        
        <div id="lead-popup" class="popup">
            <div class="lead-content">
              <img src="Portfolio Website Images/leadgen.png" alt="lead generation">
              <span id="lead-close" class="lead-close"><i class='bx bx-x'></i></span>
              <div id="lead-generation"></div>
            </div>
        </div>

        <!-- Live Events pop up -->
        
        <div id="events-popup" class="popup">
            <div class="events-content">
                <img src="Portfolio Website Images/liveevents.png" alt="live event marketing">
              <span id="events-close" class="events-close"><i class='bx bx-x'></i></span>
              <div id="live-events"></div>
            </div>
        </div>
</section>

<!-- Contact Section-->
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>

    <form method="post" action="subscriberform.php">
        <div class="input-box">
            <input type="text" placeholder="Full Name">
            <input type="email" placeholder="Email Address">
        </div>
        <div class="input-box">
            <input type="number" placeholder="Mobile Number">
            <input type="subject" placeholder="Subject">
        </div>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>
</section>

<!-- Footer Section-->
<footer class="footer">
    <div class="Footer">
        <a href="https://www.youtube.com/channel/UCFYsA92-y9sJ06bseESFRBA" target="_blank"><i class='bx bxl-youtube' ></i></a>
        <a href="https://www.linkedin.com/in/william-seth-johnson-0b33a7186/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
    </div>

    <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
</footer>


<!-- scroll reveal Section-->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- typed js -->
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

<!-- Custom JS Section-->
    <script src="script.js"></script>
</body>

</html>
