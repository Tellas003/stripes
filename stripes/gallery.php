
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
   
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripes Academy</title><LINK REL="SHORTCUT ICON"  HREF="assets/images/StripesLogo.svg">
      <meta name="author" content="A Maria Tellas Bsc.,MCA">

      <!--Add Bootstrap css-->
    
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/gallerystyle.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="assets/galleryscript.js" defer></script>
  

 <!--Navbar start-->
    
 
   <?php include'navbar.php';?>
   
   <!--navbar end-->

<style>
  .rounded{
    height: 800px;
    width: 600px;
     border-top: 5px solid #ffc43a;
                    
    border-bottom: 5px solid #ffc43a;
    border-radius: 20px;
  }
  #ph{
    height: 250px;
    width: 550px;
  }
  .lightbox-gallery{
    background-color:'#fff';
  }
  #design{
     border-top: 3px solid #ffc43a;
                    
    border-bottom: 3px solid #ffc43a;
    border-radius: 20px;
  }
</style>

    
    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<div class="lightbox-gallery">
    <div class="container" style="margin-top: 150px;">
        <div class="intro">
            <h2 class="text-center"></h2>
            <p class="text-center"></p>
            <p class="text-center" ></p>
        </div>
        <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-4 item" id="desig"><a href="about.php" data-lightbox="photos"><img class="img-fluid rounded" id="ph"src="assets/images/about.png"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="navigatorsafty.php" data-lightbox="photos"><img class="img-fluid rounded"id="ph" src="assets/images/courses_1.png"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="safecargo.php" data-lightbox="photos"><img class="img-fluid rounded" id="ph" src="assets/images/courses_2.png"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-4 item"><a href="saftywellness.php" data-lightbox="photos"><img class="img-fluid rounded" src="assets/images/courses_3.jpg"></a></div>
           
        </div>
    </div>
</div>
<!-- FOOTER -->

<?php include'footer.php';?>
  </body>
</html>