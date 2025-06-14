<?php
// get_random_trips.php

function getRandomTrips($conn, $limit = 3) {
    $stmt = $conn->prepare("SELECT * FROM trip ORDER BY RAND() LIMIT ?");
    
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    // Bind the limit (must be integer)
    $stmt->bind_param("i", $limit);
    $stmt->execute();

    $result = $stmt->get_result();
    $trips = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $trips;
}


// DB connection
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password
$database = "escape_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$trips = [];
$error = null;

try {
    $trips = getRandomTrips($conn); // Get 3 random trips
    if (count($trips) === 0) {
        $error = "No trips found in the database.";
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
