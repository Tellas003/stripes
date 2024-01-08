<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Registration Form</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4"> Student Registration</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="courseName">Course Name:</label>
                    <input type="text" class="form-control" id="courseName" name="courseName" required>
                </div>
                <div class="form-group">
                    <label for="certificateNo">Certificate No:</label>
                    <input type="text" class="form-control" id="certificateNo" name="certificateNo" required>
                </div>
                <div class="form-group">
                    <label for="participantName">Name of the Participant:</label>
                    <input type="text" class="form-control" id="participantName" name="participantName" required>
                </div>
                <div class="form-group">
                    <label for="passportNumber">Seminar Book/Passport Number:</label>
                    <input type="text" class="form-control" id="passportNo" name="passportNo" required>
                </div>
                <div class="form-group">
                    <label for="startDate">Course Start Date:</label>
                    <input type="date" class="form-control" id="courseDate1" name="courseDate1" required>
                </div>
                <div class="form-group">
                    <label for="endDate">Course End Date:</label>
                    <input type="date" class="form-control" id="courseDate2" name="courseDate2" required>
                </div>
                <div class="form-group">
                    <label for="certificateIssue">Certificate Issue Date:</label>
                    <input type="date" class="form-control" id="issueDate" name="issueDate" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php include "dbconfig.php" ?>
<?php

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courseName = $_POST["courseName"];
    $certificateNo = $_POST["certificateNo"];
    $participantName = $_POST["participantName"];
    $passportNo = $_POST["passportNo"];
    $courseDate1 = $_POST["courseDate1"];
    $courseDate2 = $_POST["courseDate2"];
    $issueDate = $_POST["issueDate"];

    // Insert data into the database
    $sql = "INSERT INTO verification (courseName, certificateNo, participantName, passportNo, courseDate1, courseDate2, issueDate)
            VALUES ('$courseName', '$certificateNo', '$participantName', '$passportNo', '$courseDate1', '$courseDate2', '$issueDate')";

    if ($conn->query($sql) === TRUE) {
      header("Location: success.php");
      exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
