<?php
// Database configuration
$host = 'localhost';        // Host name
$username = 'root';         // Database username
$password = '';             // Database password
$database = 'my_db'; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get all tables
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Tables in the database '$database':<br>";
    while ($row = $result->fetch_array()) {
        echo $row[0] . "<br>";
    }
} else {
    echo "No tables found in the database.";
}

// Close the connection
$conn->close();
?>
