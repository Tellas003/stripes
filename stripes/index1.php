<!---the navbar hero section start -->
<?php include 'navbarhero.php';?>
<!--the navbar hero section end-->
      <!---The Course card Section Start-->
      <style>
    .bod{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.bod{
        background-color: #e6e4e2;
}
#cardimg{
    border-radius: 50px;
    padding: 20px;
}
#ca{
    border-radius: 30px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}
#car{
    padding: 25px;
    margin-top: -15px;
}
#btn{
    border-radius: 50px;
    width: 120px;
}
.btn-primary:hover{
    background-color: black;
    border: none;
}
h3,h5{
    color: rgb(0, 91, 228);
}
.text-center{
  font-size: 38px;
    font-weight: bold;
    font-family: serif;
}
      </style>
<div class="bod">
      <div class="container py-5">
        <h1 class="text-center">Popular Courses</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            <div class="col">
                <div class="card"id="ca">
                    <img src="assets/images/courses_1.png" class="card-img-top" id="cardimg" alt="...">
                    <div class="card-body" id="car">
                      <center> <h5 class="card-title">Navigate Safely with Stripes</h5></center> 
                        
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                        <button class="btn btn-primary" id="btn">Learn More</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="ca">
                    <img src="assets/images/courses_2.png" class="card-img-top" id="cardimg" alt="...">
                    <div class="card-body" id="car">
                      <center> <h5 class="card-title">Safe Cargo & Machinery Operations through Stripes</h5></center>
                       
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                        <button class="btn btn-primary" id="btn">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="card" id="ca">
                  <img src="assets/images/courses_3.jpg" class="card-img-top" id="cardimg" alt="...">
                  <div class="card-body" id="car">
                    <center> <h5 class="card-title">Safety & Wellness Training at Stripes</h5></center>
                     
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
      
                      <button class="btn btn-primary" id="btn">Learn More</button>
                  </div>
              </div>
          </div>

            <div class="col">
                <div class="card" id="ca">
                    <img src="assets/images/courses_3.jpg" class="card-img-top" id="cardimg" alt="...">
                    <div class="card-body" id="car">
                        <h5 class="card-title">Popular Courses</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                        <button class="btn btn-primary" id="btn">Learn More</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="ca">
                    <img src="assets/images/1.png" class="card-img-top" id="cardimg" alt="...">
                    <div class="card-body" id="car">
                        <h5 class="card-title">Popular Courses</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                        <button class="btn btn-primary" id="btn">Learn More</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="ca">
                    <img src="assets/images/1.png" class="card-img-top" id="cardimg" alt="...">
                    <div class="card-body" id="car">
                        <h5 class="card-title">Popular Courses</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                        <button class="btn btn-primary" id="btn">Learn More</button>
                    </div>
                </div>
            </div>

           

        </div>
    </div></div>
    <!---The Course card Section End-->
  <style>
    #container1{
      height: 80vh;
    }
  </style>
   <!--The swiper faculty card start-->

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="container1" id=container1>
      <div class="testimonial mySwiper">
        <div class="testi-content swiper-wrapper">
          <div class="slide swiper-slide">
            <img src="assets/images/Untitled.jpeg" alt="" class="image" />
            <p>
              Principal/ Director at Stripes Academy.
              Previously Vice Principal at Samundra Institute of Maritime Studies (a part of the Executive Group) where I worked for 9 years.
              Author of "The ECDIS Blues - A practical guide to safe passage planning on ECDIS".
              My career at sea spanning over 21 years has been mainly on crude oil and product tankers with the last 9 years being in command.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Capt.Vincent Fernandas</span>
              <span class="job">Principal</span>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="assets/images/1.png"alt="" class="image" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
              saepe provident dolorem a quaerat quo error facere nihil deleniti
              eligendi ipsum adipisci, fugit, architecto amet asperiores
              doloremque deserunt eum nemo.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Maria Tellas A</span>
              <span class="job">Web Developer</span>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="assets/images/Untitled.jpeg" alt="" class="image" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
              saepe provident dolorem a quaerat quo error facere nihil deleniti
              eligendi ipsum adipisci, fugit, architecto amet asperiores
              doloremque deserunt eum nemo.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Marnie Lotter</span>
              <span class="job">Web Developer</span>
            </div>
          </div>
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- Swiper JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
 

     <!--The Faculty End-->
  </div>
<script>
  var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

</script>


   <!--the Swiper faculty card end-->
      





   
      
<!-- FOOTER -->

 <!-- FOOTER -->

 <?php include'footer.php';?>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--Bootstrap Script Source-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    
    
</body>
</html>
