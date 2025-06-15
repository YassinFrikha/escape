<?php
// get_all_products.php

function getAllProducts($conn) {
    $stmt = $conn->prepare("SELECT * FROM product");

    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    $stmt->execute();

    $result = $stmt->get_result();

    $products = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $products;
}

// Database connection
$servername = "sql203.infinityfree.com";
$username = "if0_39238019";
$password = "PxldNjU28c"; // Default XAMPP password
$database = "if0_39238019_escape";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$products = [];
$error = null;

try {
    $products = getAllProducts($conn);
    if (count($products) === 0) {
        $error = "No products found.";
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
