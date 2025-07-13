<?php
session_start();
require_once "../logic/db_connect.php";

// Get product ID from request to build a clean redirect base
$productId = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
$baseRedirect = '/escape/product.php?id=' . urlencode($productId);

// Redirect helper: adds only one query param (message or error)
function redirectWithParam($baseUrl, $type, $value) {
    $url = $baseUrl . '&' . urlencode($type) . '=' . urlencode($value);
    header("Location: $url");
    exit;
}

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    redirectWithParam($baseRedirect, 'error', 'You must be logged in to make a purchase.');
}

// Only allow GET requests
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    redirectWithParam($baseRedirect, 'error', 'Invalid request method.');
}

// Extract and validate inputs
$quantity = isset($_GET["quantity"]) ? intval($_GET["quantity"]) : 0;
$date = isset($_GET["date"]) ? $_GET["date"] : date('Y-m-d');
$userId = $_SESSION['user']['id'];

if ($productId <= 0 || $quantity <= 0) {
    redirectWithParam($baseRedirect, 'error', 'Invalid product or quantity.');
}

// Check if product exists and get available stock
$stmt = $conn->prepare("SELECT quantity FROM product WHERE id = ?");
$stmt->bind_param("i", $productId);
$stmt->execute();
$stmt->bind_result($availableQuantity);
$productExists = $stmt->fetch();
$stmt->close();

if (!$productExists) {
    redirectWithParam($baseRedirect, 'error', 'Product not found.');
}

if ($quantity > $availableQuantity) {
    redirectWithParam($baseRedirect, 'error', 'Requested quantity exceeds available stock.');
}

// Insert the purchase
$stmt = $conn->prepare("INSERT INTO purchase (user_id, product_id, quantity, date, approved) VALUES (?, ?, ?, ?, 0)");
$stmt->bind_param("iiis", $userId, $productId, $quantity, $date);

if ($stmt->execute()) {
    $stmt->close();

    // Reduce the product stock
    $updateStmt = $conn->prepare("UPDATE product SET quantity = quantity - ? WHERE id = ?");
    $updateStmt->bind_param("ii", $quantity, $productId);
    $updateStmt->execute();
    $updateStmt->close();

    $conn->close();
    redirectWithParam($baseRedirect, 'message', 'Purchase created successfully.');
} else {
    $stmt->close();
    $conn->close();
    redirectWithParam($baseRedirect, 'error', 'Failed to create purchase.');
}
?>
