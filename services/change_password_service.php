<?php
session_start();
require_once "../logic/db_connect.php";

if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
}

$user = $_SESSION['user'];
$userId = $user['id'];

$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];
$confirmPassword = $_POST['confirm_password'];

// Check if new and confirm passwords match
if ($newPassword !== $confirmPassword) {
    header("Location: ../change-password.php?error=" . urlencode("New passwords do not match."));
    exit;
}

// Fetch the current hashed password from the database
$stmt = $conn->prepare("SELECT password FROM user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($hashedPasswordFromDb);

if ($stmt->fetch()) {
    $stmt->close();

    // Check if current password is correct
    if (!password_verify($currentPassword, $hashedPasswordFromDb)) {
        header("Location: ../change-password.php?error=" . urlencode("Current password is incorrect."));
        exit;
    }

    // Check if new password is the same as the current one
    if (password_verify($newPassword, $hashedPasswordFromDb)) {
        header("Location: ../change-password.php?error=" . urlencode("New password cannot be the same as the old password."));
        exit;
    }

    // Hash and update new password
    $newHashed = password_hash($newPassword, PASSWORD_DEFAULT);
    $updateStmt = $conn->prepare("UPDATE user SET password = ? WHERE id = ?");
    $updateStmt->bind_param("si", $newHashed, $userId);
    $updateStmt->execute();
    $updateStmt->close();

    header("Location: ../change-password.php?success=" . urlencode("Password updated successfully."));
    exit;

} else {
    $stmt->close();
    header("Location: ../change-password.php?error=" . urlencode("User not found."));
    exit;
}
