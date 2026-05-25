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
    $errorMessage = "Connection failed: " . $e->getMessage();
    $acceptHeader = $_SERVER['HTTP_ACCEPT'] ?? '';
    $xRequestedWith = $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '';

    if (stripos($acceptHeader, 'application/json') !== false ||
        strtolower($xRequestedWith) === 'xmlhttprequest') {
        header('Content-Type: application/json; charset=UTF-8');
        http_response_code(500);
        echo json_encode([
            "status" => "error",
            "message" => $errorMessage
        ]);
        exit;
    }

    http_response_code(500);
    header('Content-Type: text/html; charset=UTF-8');
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Database Error</title>';
    echo '<style>body{font-family:Arial,sans-serif;color:#333;background:#f9f9f9;padding:40px;}';
    echo '.error-box{max-width:720px;margin:0 auto;background:#fff;border:1px solid #e0e0e0;padding:30px;border-radius:12px;box-shadow:0 10px 30px rgba(0,0,0,.08);}';
    echo '.error-box h1{margin-top:0;color:#d9534f;}';
    echo '.error-box p{line-height:1.6;}';
    echo '.error-box a{color:#337ab7;text-decoration:none;}</style></head>';
    echo '<body><div class="error-box"><h1>Heavenly Bites could not connect to the database</h1>';
    echo '<p>There was a problem connecting to the database. Please make sure your MySQL server is running in XAMPP and try again.</p>';
    echo '<p><strong>Error details:</strong> ' . htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8') . '</p>';
    echo '<p><a href="index.php">Return to Home</a></p></div></body></html>';
    exit;
}
?>