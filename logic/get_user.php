<?php
// get_user.php

function getUserByLogin($conn, $email, $password) {
    // Prepare SQL to get user by email
    $stmt = $conn->prepare("SELECT id, first_name, last_name, email, password, phone_number FROM user WHERE email = ?");
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();
    if ($result->num_rows === 0) {
        // No user found
        $stmt->close();
        return null;
    }

    $user = $result->fetch_assoc();
    $stmt->close();

    // Verify password using password_verify
    if (password_verify($password, $user['password'])) {
        // Remove password from returned user data for security
        unset($user['password']);
        return $user;
    } else {
        // Password mismatch
        return null;
    }
}
?>