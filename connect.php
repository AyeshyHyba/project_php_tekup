<?php
// Connect to the database
$host = "localhost";
$port = "81";
$db_name = "clinique";
$username = "root";
$password = "";

// Create a new mysqli connection
$connection = mysqli_connect($host, $username, $password, $db_name);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
