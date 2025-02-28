<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "minijobs";

// Connect to database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Echo success message if connection established
// echo "Connected successfully to database";

?> 