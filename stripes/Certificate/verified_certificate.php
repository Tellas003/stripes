


<?php include "dbconfig.php" ?>
<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$certificateNo = $_POST['certificateNo'];

$query = "SELECT * FROM verification WHERE certificateNo = '$certificateNo'";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
    $row = mysqli_fetch_array($query_run);
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="styles.css">
            <title>Certificate</title>

            <style>
                <!-- Your CSS styles go here -->
                <style>
    body {
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .container {
      margin-top: 50px;
    }

    .certificate {
      position: relative;
      max-width: 100%;
      margin: auto;
    }

    .background-logo {
      width: 100%;
      position: absolute;
      top: 0;
      left: 400px;
      height: 490px;
      width: 310px;
      z-index: -1;
    }

    .company-logo-top,
    .company-logo-right {
      max-width: 100px;
      position: absolute;
      top: 20px;
    }

    .company-logo-top {
      left: 20px;
    }

    .company-logo-right {
      right: 20px;
    }

    .course-details {
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }
    .course-name{
      font-weight:19% ;
    }

    @media (max-width: 768px) {
      .background-logo {
        left: 0;
        height: 150px;
        width: 150px;
      }

      .company-logo-top,
      .company-logo-right {
        max-width: 70px;
      }

      .course-details {
        margin-top: 20px;
      }
    }
  </style>
            </style>
        </head>
        <body>
        <div class="container">
            <div class="certificate">
                <div class="course-details">

                    <img src="stripes_watermark.png" alt="" class="background-logo"><br><br>
                  <center>  <h2 class="course-name"><strong><?php echo $row['courseName']; ?></strong></h2></center><br>
                   

                   <br>
                    <div class="participant-info">
                        <h4>
                            <p><strong>Certificate NO:</strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<?php echo $row['certificateNo']; ?></p><br>
                            <p><strong>Name of Participant:</strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['participantName']; ?></p><br>
                            <p><strong>Seman book/Passport No:</strong> &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['passportNo']; ?></p><br>
                            <p><strong>Course Dates:</strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<?php echo $row['courseDate1']; ?>&nbsp;&nbsp;&nbsp;<strong>To</strong>&nbsp;&nbsp;&nbsp;<?php echo $row['courseDate2']; ?></p><br>
                            <p><strong>Certificate Issue Date:</strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['issueDate']; ?></p>
                        </h3>
                    </div>
                </div>
                <img src="StripesLogo.svg" alt="" class="company-logo-right">
            </div>
        </div>

        <!-- Include jQuery for simplicity in this example -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        </body>
        </html>
        <?php
    }
 else {
    header("Location:norecords.php");
      exit();
}            
$conn->close();
?>
