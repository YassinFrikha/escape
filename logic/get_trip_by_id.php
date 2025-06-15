<?php

function getTripById($conn, $id) {
    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM trip WHERE id = ?");
    
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    // Bind and execute
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new Exception("Trip with ID $id not found.");
    }

    // Fetch associative array
    $trip = $result->fetch_assoc();

    $stmt->close();

    return $trip;
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

$trip = null;
$error = null;

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    try {
        $trip = getTripById($conn, $id);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
} else {
    $error = "No trip ID provided.";
}

?>