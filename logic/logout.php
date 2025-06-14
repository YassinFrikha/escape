<?php
// logout.php

function logout() {
    // Start session
    session_start();

    // Clear all session variables
    $_SESSION = [];

    // Destroy the session
    session_destroy();

    // Redirect to login or homepage
    header("Location: /escape/home.php");
    exit;
}

logout();
?>