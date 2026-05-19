<?php
// db_connect.php

// Database configuration
$host = "localhost";
$username = "root";       // Default XAMPP username
$password = "";           // Default XAMPP password (empty)
$database = "dessert-shop"; // Replace with your actual database name

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

    // Set the PDO error mode to exception for better debugging
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set default fetch mode to associative array
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // If connection fails, catch the error and display a JSON response
    die(json_encode([
        "status" => "error",
        "message" => "Connection failed: " . $e->getMessage()
    ]));
}
?>