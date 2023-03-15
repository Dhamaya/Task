<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($host, $username, $password, $dbname);

// Prepare statement
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

// Get values from form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Execute statement
$stmt->execute();

// Close statement and connection
$stmt->close();
$conn->close();

// Redirect to login page
header("Location: login.html");
?>