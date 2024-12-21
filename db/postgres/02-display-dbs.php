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

// Query to list all databases
$sql = "SELECT datname FROM pg_database WHERE datistemplate = false";
$result = pg_query($conn, $sql);

// Check if query was successful
if (!$result) {
    die("Query failed: " . pg_last_error());
}

// Display the databases
echo "Databases in the server:<br>";
while ($row = pg_fetch_assoc($result)) {
    echo $row['datname'] . "<br>";
}

// Close the connection
pg_close($conn);
?>
