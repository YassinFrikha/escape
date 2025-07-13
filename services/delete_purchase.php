<?php
session_start();
require_once "../logic/db_connect.php";

if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
}

$userId = $_SESSION['user']['id'];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['purchase_id'], $_POST['product_id'], $_POST['quantity'])) {
    $purchaseId = intval($_POST['purchase_id']);
    $productId = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);

    // Check status
    $stmt = $conn->prepare("SELECT approved FROM purchase WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $purchaseId, $userId);
    $stmt->execute();
    $stmt->bind_result($approved);
    if ($stmt->fetch()) {
        $stmt->close();

        if ($approved != 0) {
            header("Location: ../shopping-history.php?error=" . urlencode("Only pending orders can be canceled."));
            exit;
        }

        $conn->begin_transaction();

        try {
            // Delete purchase
            $delStmt = $conn->prepare("DELETE FROM purchase WHERE id = ? AND user_id = ?");
            $delStmt->bind_param("ii", $purchaseId, $userId);
            $delStmt->execute();
            $delStmt->close();

            // Restore product quantity
            $updStmt = $conn->prepare("UPDATE product SET quantity = quantity + ? WHERE id = ?");
            $updStmt->bind_param("ii", $quantity, $productId);
            $updStmt->execute();
            $updStmt->close();

            $conn->commit();
            header("Location: ../shopping-history.php?success=" . urlencode("Purchase cancelled and quantity restored."));
        } catch (Exception $e) {
            $conn->rollback();
            header("Location: ../shopping-history.php?error=" . urlencode("Cancellation failed. Try again."));
        }
    } else {
        $stmt->close();
        header("Location: ../shopping-history.php?error=" . urlencode("Invalid purchase."));
    }

    $conn->close();
    exit;
} else {
    header("Location: ../shopping-history.php?error=" . urlencode("Invalid request."));
    exit;
}
