<?php
// Database configuration
$host = 'localhost';        // Host name
$username = 'root';         // Database username
$password = '';             // Database password

// Create a connection without specifying a database
$conn = new mysqli($host, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to list existing databases
$sql = "SHOW DATABASES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Databases in the server:<br>";
    while ($row = $result->fetch_array()) {
        echo $row[0] . "<br>";
    }
} else {
    echo "No databases found on the server.";
}

// Optionally create a new database if it doesn't exist
$newDatabase = 'my_db';
$sqlCreate = "CREATE DATABASE IF NOT EXISTS `$newDatabase`";
if ($conn->query($sqlCreate) === TRUE) {
    echo "Database '$newDatabase' created or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Close the connection
$conn->close();
?>
