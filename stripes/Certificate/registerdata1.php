
<?php

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
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
        echo '<div class="container mt-3"><div class="alert alert-success" role="alert">Registration successful!</div></div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
