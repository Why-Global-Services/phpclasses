<?php
$servername = "localhost";
$username = "wgs";
$password = "Admin@why";
$database = "testform";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($_POST['submit']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phoneno'];
    $comment = $_POST['comment'];
}
