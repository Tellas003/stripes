<?php
// Replace these variables with your database credentials
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "cirtificate";

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data (replace with your actual query)
$sql = "SELECT * FROM verification";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch data and encode it as JSON for JavaScript use
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    echo "No data found";
}

// Close the connection
$conn->close();
?>
