<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clients";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO clients (first_name,last_name,email,phone,organization,message) VALUES (?, ?,?,?,?,?)");
$stmt->bind_param("ssssss",$first_name,$last_name,$email,$phone,$organization,$message);

// Set parameters and execute
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$organization = $_POST['organization'];
$message = $_POST['message'];

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>
