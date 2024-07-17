<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control"; // قاعدة البيانات الخاصة بالاتجاهات

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$text = $conn->real_escape_string($data['text']);

$sql = "INSERT INTO commands (directions) VALUES ('$text')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>