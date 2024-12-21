<?php
// Database configuration
$host = 'localhost';        // Host name
$port = '5432';             // PostgreSQL port (default is 5432)
$dbname = 'postgres';  // Database name
$user = 'postgres';    // Database username
$password = 'admin';// Database password

// Create a connection string
$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Establish the connection
$conn = pg_connect($conn_string);

// Check the connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

echo "Connected successfully to PostgreSQL";

// Close the connection
// pg_close($conn);
?>
