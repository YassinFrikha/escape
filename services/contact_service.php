<?php
// contact_service.php

require_once "../logic/db_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and retrieve input
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    try {
        // Prepare SQL insert
        $stmt = $conn->prepare("INSERT INTO contact (firstName, lastName, email, phone, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $subject, $message);
        $stmt->execute();

        // Redirect with success message
        header("Location: /escape/contact.php?success=true&message=" . urlencode("Thank you for contacting us! We will get back to you soon."));
        exit;
    } catch (Exception $e) {
        // Redirect with error message
        header("Location: /escape/contact.php?error=true&message=" . urlencode("An error occurred while submitting your message. Please try again later."));
        exit;
    }
} else {
    // Redirect if not POST
    header("Location: /escape/contact.php?error=true&message=" . urlencode("Invalid request method."));
    exit;
}
