<?php
// add_trip.php

function addTrip($conn, $label, $price, $description, $content, $imageUrl, $category, $quantity) {
    $stmt = $conn->prepare("INSERT INTO trip (label, price, description, content, image_url, category, quantity) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    // Bind all 7 variables
    $stmt->bind_param("sdssssi", $label, $price, $description, $content, $imageUrl, $category, $quantity);

    if ($stmt->execute()) {
        $tripId = $conn->insert_id;

        return [
            'id' => $tripId,
            'label' => $label,
            'price' => $price,
            'description' => $description,
            'content' => $content,
            'image_url' => $imageUrl,
            'category' => $category,
            'quantity' => $quantity
        ];
    } else {
        throw new Exception("Error inserting trip '$label': " . $stmt->error);
    }

    $stmt->close(); // This line is unreachable currently; move it before the return if you want to close properly
}

?>
