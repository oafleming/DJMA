<?php
// Database Connection Parameters
$servername = "localhost"; // Server where the database is hosted
$username = "root";        // Database username
$password = "root";        // Database password
$dbname = "dj_music_archive"; // Name of the database

// Create a new MySQLi (MySQL Improved) object for database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection to the database was successful
if ($conn->connect_error) {
    // If connection failed, terminate the script and display an error message
    die("Connection failed: " . $conn->connect_error);
}
// Connection to the database is successful at this point
?>
