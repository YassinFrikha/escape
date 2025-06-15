<?php
// get_trips_by_category.php

function getTripsByCategory($conn, $category) {
    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM trip WHERE category = ?");
    
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    // Bind and execute
    $stmt->bind_param("s", $category);
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Fetch all trips into an array
    $trips = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $trips;
}




$servername = "sql203.infinityfree.com";
$username = "if0_39238019";
$password = "PxldNjU28c"; // Default XAMPP password
$database = "if0_39238019_escape";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$trips = [];
$error = null;

// Get current file name without extension (e.g. 'beach' from 'beach.php')
$currentFile = basename($_SERVER['PHP_SELF'], ".php");
$category = ucfirst($currentFile); // Optional: capitalize the first letter

try {
    $trips = getTripsByCategory($conn, $category);
    if (count($trips) === 0) {
        $error = "No trips found in category: $category.";
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}

?>
