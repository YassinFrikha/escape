<?php
// login_service.php

session_start();

require_once "../logic/db_connect.php";
require_once "../logic/get_user.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    try {
        $user = getUserByLogin($conn, $email, $password);

        if ($user) {
            // Store user info in session (without password)
            $_SESSION['user'] = $user;

            // Redirect to home page
            header("Location: /escape/home.php");
            exit;
        } else {
            // Invalid login
            header("Location: /escape/login.php?error=" . urlencode("Invalid email or password."));
            exit;
        }
    } catch (Exception $e) {
        // Handle unexpected errors
        header("Location: /escape/login.php?error=" . urlencode("An error occurred: " . $e->getMessage()));
        exit;
    }
} else {
    header("Location: /escape/login.php");
    exit;
}
?>
