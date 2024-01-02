<?php

$servername = "db"; // service name from docker-compose.yml
$username = "myuser";
$password = "mypassword";
$dbname = "mydatabase";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully to the MySQL server and selected the database.";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
} finally {
    // Close the connection
    $conn = null;
}