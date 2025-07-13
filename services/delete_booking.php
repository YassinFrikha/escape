<?php
session_start();
require_once "../logic/db_connect.php";

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
}

$userId = $_SESSION['user']['id'];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['appointment_id'])) {
    $appointmentId = intval($_POST['appointment_id']);

    // 1. Get the appointment details (trip_id and approved status)
    $stmt = $conn->prepare("SELECT trip_id, approved FROM appointment WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $appointmentId, $userId);
    $stmt->execute();
    $stmt->bind_result($tripId, $approved);

    if ($stmt->fetch()) {
        $stmt->close();

        if ($approved) {
            header("Location: ../trips-history.php?error=" . urlencode("Approved bookings cannot be canceled."));
            exit;
        }

        // 2. Begin a transaction
        $conn->begin_transaction();

        try {
            // 3. Delete the appointment
            $deleteStmt = $conn->prepare("DELETE FROM appointment WHERE id = ? AND user_id = ?");
            $deleteStmt->bind_param("ii", $appointmentId, $userId);
            $deleteStmt->execute();
            $deleteStmt->close();

            // 4. Increment the trip's quantity
            $updateTripStmt = $conn->prepare("UPDATE trip SET quantity = quantity + 1 WHERE id = ?");
            $updateTripStmt->bind_param("i", $tripId);
            $updateTripStmt->execute();
            $updateTripStmt->close();

            // 5. Commit the transaction
            $conn->commit();

            header("Location: ../trips-history.php?success=" . urlencode("Booking cancelled and trip slot restored."));
        } catch (Exception $e) {
            // Rollback on failure
            $conn->rollback();
            header("Location: ../trips-history.php?error=" . urlencode("Error during cancellation. Please try again."));
        }

    } else {
        $stmt->close();
        header("Location: ../trips-history.php?error=" . urlencode("Invalid appointment."));
    }

    $conn->close();
    exit;

} else {
    header("Location: ../trips-history.php?error=" . urlencode("Invalid request."));
    exit;
}
