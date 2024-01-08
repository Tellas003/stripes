
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
      <link rel="stylesheet" href="css/swiper-bundle.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--Navbar start-->
    
    <nav class="navbar navbar-expand-lg fixed-top"id="navbar" 
    style ="display: grid;justify-content: center;">
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
                  <a class="nav-link mx-lg-2 active" aria-current="page" href="index.php"style="font-weight: 700">Home</a>
               
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #171616;font-weight: 700">
                    About Us
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.php">Stripes Academy</a></li>
                    <li><a class="dropdown-item" href="#">Principal's Desk</a></li>
                    <li></li>
                    <li><a class="dropdown-item" href="#">Our Team</a></li>
                  </ul>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #171616;font-weight: 700;">
                      Courses
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="navigationsafty.php">Navigate Safely with Stripes</a></li>
                      <li><a class="dropdown-item" href="safecargo.php">Safe Cargo & Machinery Operations through Stripes</a></li>
                      <li></li>
                      <li><a class="dropdown-item" href="saftywellness.php">Safety & Wellness Training at Stripes</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2"  href="gallery.php"style="color: #171616;font-weight: 700">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2"  href="#"style="color: #171616;font-weight: 700">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #171616;font-weight: 700;">
                      Cirtificate Tracker
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Certificate/verifid.php">Verify Cirtificate</a></li>
                      <li><a class="dropdown-item" href="Certificate/register.php">Registration</a></li>
                      <li></li>
                      <li><a class="dropdown-item" href="index.php">Admin Login</a></li>
                    </ul>
                  </li>
                <!--  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #171616;font-weight: 700">
                      Tools

                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>-->
                 
               
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
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--Bootstrap Script Source-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    
    
</body>
</html>
