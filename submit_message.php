<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escape";

// Create connection
$conn = new mysqli($servername, $root, $password, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form inputs and sanitize
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$message = htmlspecialchars(trim($_POST['message']));

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO messages (email, name, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $name, $message);

if ($stmt->execute()) {
    echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
