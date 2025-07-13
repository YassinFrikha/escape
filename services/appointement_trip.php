<?php
session_start();
require_once "../logic/db_connect.php";

// Fallback if referer is not available
$redirect = $_SERVER['HTTP_REFERER'] ?? '/escape/home.php';

// Function to safely append a GET parameter to a URL
function appendQueryParam($url, $key, $value) {
    $delimiter = (parse_url($url, PHP_URL_QUERY)) ? '&' : '?';
    return $url . $delimiter . urlencode($key) . '=' . urlencode($value);
}

// Check user login
if (!isset($_SESSION['user'])) {
    $redirect = appendQueryParam($redirect, 'error', 'You must be logged in to make an appointment.');
    header("Location: $redirect");
    exit;
}

// Only accept GET method for booking
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $tripId = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
    $date = isset($_GET["date"]) ? $_GET["date"] : date('Y-m-d');
    $userId = $_SESSION['user']['id'];

    if ($tripId <= 0) {
        $redirect = appendQueryParam($redirect, 'error', 'Invalid trip ID.');
        header("Location: $redirect");
        exit;
    }

    // Start transaction
    $conn->begin_transaction();

    try {
        // Insert into appointment
        $stmt = $conn->prepare("INSERT INTO appointment (user_id, trip_id, date, approved) VALUES (?, ?, ?, FALSE)");
        $stmt->bind_param("iis", $userId, $tripId, $date);
        if (!$stmt->execute()) {
            throw new Exception("Failed to create appointment.");
        }
        $stmt->close();

        // Decrease trip quantity
        $update = $conn->prepare("UPDATE trip SET quantity = quantity - 1 WHERE id = ? AND quantity > 0");
        $update->bind_param("i", $tripId);
        if (!$update->execute() || $update->affected_rows === 0) {
            throw new Exception("Trip is fully booked or unavailable.");
        }
        $update->close();

        // Commit transaction
        $conn->commit();

        $redirect = appendQueryParam($redirect, 'message', 'Appointment created successfully.');
        header("Location: $redirect");
        exit;
    } catch (Exception $e) {
        $conn->rollback(); // Rollback if anything fails
        $redirect = appendQueryParam($redirect, 'error', $e->getMessage());
        header("Location: $redirect");
        exit;
    }

} else {
    $redirect = appendQueryParam($redirect, 'error', 'Invalid request method.');
    header("Location: $redirect");
    exit;
}
