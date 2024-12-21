<?php
// Database configuration
$host = 'localhost';        // Host name
$username = 'root';         // Database username
$password = '';             // Database password

// Create a connection
$conn = new mysqli($host, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to MySQL server";

// Close the connection (optional for persistent scripts)
// $conn->close();
?>
