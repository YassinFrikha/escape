<?php
// get_random_products.php

function getRandomProducts($conn, $limit = 4) {
    $stmt = $conn->prepare("SELECT * FROM product ORDER BY RAND() LIMIT ?");
    
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("i", $limit);
    $stmt->execute();

    $result = $stmt->get_result();

    $products = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $products;
}

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password
$database = "escape_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$products = [];
$error = null;

try {
    $products = getRandomProducts($conn);
    if (count($products) === 0) {
        $error = "No products found.";
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
