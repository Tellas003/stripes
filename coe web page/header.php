<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controller of Examinations</title>
    <meta name="author" content="A Maria Tellas Bsc.,MCA">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
   </head>
<body style="background-color:#fcf3e7;">
  <!-- Include Bootstrap CSS -->
  

  <nav class="navbar navbar-expand-lg navba" id="navbar" 
  style ="display: grid;
    justify-content: center;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="aac logo.jpg" height="110px" width="500px" alt="" class="img-fluid">
      <!-- Toggle button for mobile view -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!--<span class="navbar-toggler-icon"></span>-->
        <img src= "nav.png" style="height: 35px;width: 35px;" alt=""> 
      </button>
      <!-- Navbar items -->
      <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #140d45;
      align-items: center;
      margin: 5px;
      margin-left: -6px;
      text-align: -webkit-center;
  ">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style=" color:#fff;" style="border-bottom: 3px solid #e6e98e ;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #403d38;" href="https://www.aactni.edu.in/students/demo_stu_hallticket.php">Download Hall Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style=" color:#fff;" style="border-bottom: 3px solid #e6e98e ;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #403d38;" href="https://www.aactni.edu.in/students/web_results_1.php">Semester Results</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"style=" color:#fff;" style="border-bottom: 3px solid #e6e98e ;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #403d38;"  href="https://www.aactni.edu.in/students/overall_marks_view_1.php">Overall Mark</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style=" color:#fff;" style="border-bottom: 3px solid #e6e98e ;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #403d38;" href="https://www.aactni.edu.in/students/v1.pdf">Valuation Claim Form</a>
          </li>
        </ul>
         <!-- Mobile view dropdown menu for bottom links -->
      
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="mobileBottomLinksDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About COE
        </button>
        <div class="dropdown-menu" aria-labelledby="mobileBottomLinksDropdown" style="width: 300px;">
          <a class="dropdown-item" href="index.php">Home</a>
          <a class="dropdown-item" href="coe.php">Examinations</a>
          <a class="dropdown-item" href="internal.php">Internal</a>
          <a class="dropdown-item" href="semester.php">External</a>
          <a class="dropdown-item" href="rules.php">Rules and Regulations</a>
          <a class="dropdown-item" href="staff.php">Staff Members</a>
          
        </div>
      </div>
    </div>
  </nav>
      </div>
    </div>
  </nav>
</div>


  <!-- Include Bootstrap JS (Optional, for dropdowns and other interactive features) -->
  <script src="js/bootstrap.bundle.min.js"></script>

 

  <style>
    .navbar-links {
      border-top: 1px solid #ddd;
      padding: 10px 0;
    }
  
    .navbar-links a {
      display: block;
      padding: 5px 0;
      border-bottom: 1px solid #ddd;
    }
  
    .bottom-links {
      border-top: 1px solid #ddd;
      padding: 10px 0;
    }
  
    .bottom-links a {
      display: block;
      padding: 5px 0;
      border-bottom: 1px solid #ddd;
    }
  
    @media (max-width: 576px) {
      .navbar-links {
        display: none;
        margin-left: 42px;
      }
     
      
    }
  </style>
  </head>
  <body>
  
  
    
  
  <div class="container mt-0">
    <div class="row">
      <div class="col-md-8">
        <!-- Main content for the page -->
      </div>
     
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
       


<style >
    .ticker{    display: flex;
    flex-wrap: wrap;
    width: 100%;
    height: 30px;
    margin: 0 auto;
    position: relative;
    left: 17px;
    margin-top: -17px;
   
    z-index: 20;} 

           .news{width: 98%;height: 51px;  background: #d6d3d3;padding: 0.2%;}
           .news-title{width: 180px;text-align: center;background: #140d45;position: absolute; font-size: 300px; z-index: 10;height: 50px;}
           .news-title:after{position: absolute;content: "";right: -39px;border-left: 20px solid #140d45;border-top: 28px solid transparent;border-right: 20px solid transparent;border-bottom: 21px solid transparent;top: 0px} 
           .news-title h5{font-size: 17px; font-weight: bold; margin: 8% 0;color: #fff;} 
           
           
</style>
    
<style>
.news marquee
{
  font-size: 18px;
  margin-top:10px
}
.news-content p
{
  margin-right: 41px;
  display: inline;
  color: #e93a3a;
  font-weight: bold;
  }
</style>

  
<div class="ticker">
    <div class="news-title">
        <h5>Announcements</h5>
    </div>
    <div class="news">
        <marquee class="news-content">
        <a href="https://coe.aactni.edu.in/ce_lab.pdf"> <p>Computer Education Practical Schedule</p>
        </marquee>
    </div>
</div>
</div></div>
  
  </head>