<?php
// Database configuration
$host = "localhost";    // Database host (usually 'localhost')
$dbname = "my_database"; // The name of your database
$username = "root";      // Your MySQL username
$password = "";          // Your MySQL password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>