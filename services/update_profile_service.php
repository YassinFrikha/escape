<?php
session_start();
require_once "../logic/db_connect.php";

if (!isset($_SESSION['user'])) {
    header("Location: /escape/login.php");
    exit;
}

$userId = $_SESSION['user']['id'];
$firstName = trim($_POST['first_name']);
$lastName = trim($_POST['last_name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);

try {
    // Update the user in the database
    $stmt = $conn->prepare("UPDATE user SET first_name = ?, last_name = ?, email = ?, phone_number = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $firstName, $lastName, $email, $phone, $userId);
    $stmt->execute();

    // Update the session data with the new values
    $_SESSION['user']['first_name'] = $firstName;
    $_SESSION['user']['last_name'] = $lastName;
    $_SESSION['user']['email'] = $email;
    $_SESSION['user']['phone_number'] = $phone;

    header("Location: /escape/profile.php?success=" . urlencode("Profile updated successfully."));
    exit;
} catch (Exception $e) {
    header("Location: /escape/profile.php?error=" . urlencode("Failed to update profile: " . $e->getMessage()));
    exit;
}