<?php
// register_service.php

session_start(); // Start the session

require_once "../logic/db_connect.php";
require_once "../logic/add_user.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = trim($_POST["first_name"]);
    $lastName = trim($_POST["last_name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $phone = trim($_POST["phone"]);

    try {
        // Create user and store user data in session
        $user = addUser($conn, $firstName, $lastName, $email, $password, $phone);
        $_SESSION['user'] = $user;

        header("Location: /escape/home.php");
        exit;
    } catch (Exception $e) {
        // Redirect back to signup with error message
        header("Location: /escape/signup.php?error=" . urlencode($e->getMessage()));
        exit;
    }
} else {
    header("Location: /escape/signup.php");
    exit;
}
?>