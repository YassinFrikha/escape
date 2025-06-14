<?php
// add_user.php
require_once "hash_password.php";

function addUser($conn, $firstName, $lastName, $email, $password, $phoneNumber) {
    // Hash the password
    $hashedPassword = hashPassword($password);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, email, password, phone_number) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssss", $firstName, $lastName, $email, $hashedPassword, $phoneNumber);

    if ($stmt->execute()) {
        // Get the ID of the newly inserted user
        $userId = $conn->insert_id;

        // Return user data as array (excluding password)
        return [
            'id' => $userId,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'phone_number' => $phoneNumber
        ];
    } else {
        if ($conn->errno == 1062) {
            throw new Exception("The email '$email' is already registered.");
        } else {
            throw new Exception("Error inserting user '$email': " . $stmt->error);
        }
    }

    $stmt->close();
}
?>
