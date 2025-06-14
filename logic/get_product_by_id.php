<?php

function getProductById($conn, $id) {
    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM product WHERE id = ?");
    
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    // Bind and execute
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new Exception("Product with ID $id not found.");
    }

    // Fetch associative array
    $product = $result->fetch_assoc();

    $stmt->close();

    return $product;
}

$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password
$database = "escape_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product = null;
$error = null;

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    try {
        $product = getProductById($conn, $id);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
} else {
    $error = "No product ID provided.";
}

?>
