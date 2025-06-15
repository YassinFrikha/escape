<?php
// db_connect.php

$servername = "sql203.infinityfree.com";
$username = "if0_39238019";
$password = "PxldNjU28c"; // Default XAMPP password
$database = "if0_39238019_escape";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>