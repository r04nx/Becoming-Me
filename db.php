<?php

// Database credentials
$servername = "127.0.0.1";
$username = "pma";
$password = "pma"; // Change this to your actual MySQL password
$database = "beme"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection Success!";

// Optionally, you can set charset
mysqli_set_charset($conn, "utf8mb4");

?>
