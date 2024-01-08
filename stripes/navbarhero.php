<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripes Academy</title><LINK REL="SHORTCUT ICON"  HREF="assets/images/StripesLogo.svg">
      <meta name="author" content="A Maria Tellas Bsc.,MCA">

    <!--Add Bootstrap css-->
    
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
      <!--The facuty swiper css-->
      <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #la {
        margin: 0;
        overflow: hidden;
        background-color: aqua;
      }
    
      #logo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: logoAnimation 4s ease-in-out forwards; /* Change the duration to 4.1s */
      }
    
      @keyframes logoAnimation {
        0% {
          transform: translate(-50%, -50%) scale(2);
          opacity: 1;
        }
        50% {
          transform: translate(-110%, -200%) scale(1.1.7);
          opacity: 1;
        }
        71%{
            transform: translate(-128.6%, -215%) scale(0.8);
            opacity: 1;
            display: none;
        }
        80%{
            transform: translate(0%, 0%) scale(0);
            opacity: 0;
            display: none;
        }
       100% {
          transform: translate(0%, 0%) scale(0);
          opacity: 0;
          display: none; /* Hide the image at the end of the animation */
        }
      }
    
      .navbar {
        display: none;
      }
    
      @media screen and (max-width: 988px) {
        #la {
          display: none;
        }
        .navbar{
            display: grid;
        }
      }
    </style>
</head>
<body>
    <!--Navbar start-->
    <script>
      // Wait for the document to be fully loaded
      document.addEventListener("DOMContentLoaded", function () {
        // Delay the display of the navbar by 4.1 seconds (4100 milliseconds)
        setTimeout(function () {
          // Get the navbar element
          var navbar = document.getElementById("navbar");
          // Change the display style to grid
          navbar.style.display = "grid";
        }, 2825.4); // 4.1 seconds delay
      });
    </script>
    
    <nav class="navbar navbar-expand-lg fixed-top"id="navbar" 
    style ="justify-content: center;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="assets/images/StripesLogo.svg" height="200px" width="200px" alt="" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Stripes Academy</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" aria-current="page" href="#"style="font-weight: 700">Home</a>
               
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #171616;font-weight: 700">
                    About Stripes
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">About</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2"  href="#"style="color: #171616;font-weight: 700">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2"  href="gallery.html"style="color: #171616;font-weight: 700">Gallery</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #171616;font-weight: 700;">
                      Courses
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Navigate Safely with Stripes</a></li>
                      <li><a class="dropdown-item" href="#">Safe Cargo & Machinery Operations through Stripes</a></li>
                      <li></li>
                      <li><a class="dropdown-item" href="#">Safety & Wellness Training at Stripes</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="#"style="color: #171616;font-weight: 700">Services</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #171616;font-weight: 700">
                      Tools

                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                 
               
              </ul>
              
            </div>
          </div>
        </div>
      </nav>
      
    </script>
    
      
    
      <script>
      window.addEventListener("scroll", function () {
    var navbar = document.querySelector(".navbar");
    if (window.scrollY > 0) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

      </script>
      
      <!--navbar end-->
     <!--hero section start-->
      
      <div class="hero-section">
        <video autoplay muted>
            <source src="assets/images/Untitled design (1).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <!-- Your other content goes here -->
            
            <div id="la">
              <div id="logo">
                <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <!-- Your SVG logo content goes here -->
                  <img src="assets/images/StripesLogo.svg" style="height: 100px; width: 400px;display:grid;">
                </svg>
              </div>
            
              <script>
                window.onload = function() {
                  var logo = document.getElementById('logo');
                  logo.style.animationPlayState = 'running';
                }
              </script>
        </div>
    </div>
    </div>
      <!--hero section end-->

      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--Bootstrap Script Source-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    
    
</body>
</html>
