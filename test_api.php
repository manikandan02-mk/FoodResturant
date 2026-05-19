<?php
// test_api.php

// Set headers to allow cross-origin requests and define the content type as JSON
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Include the database connection file
require_once 'db_connect.php';

try {
    // Check if the connection variable is set and working
    if (isset($conn)) {
        // Here you would normally run a SQL query, for example:
        // $stmt = $conn->prepare("SELECT * FROM menu_items");
        // $stmt->execute();
        // $results = $stmt->fetchAll();
        
        // For testing purposes, we'll just return a success message
        $response = [
            "status" => "success",
            "message" => "Database connection is successful!",
            "note" => "You are connected to the Heavenly Bites database via PHP PDO."
        ];
        
        echo json_encode($response);
    } else {
        throw new Exception("Database connection not established.");
    }
} catch(Exception $e) {
    http_response_code(500); // Internal Server Error
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}
?>
