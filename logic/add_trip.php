<?php
// add_trip.php

function addTrip($conn, $label, $price, $description, $content, $imageUrl, $category, $quantity) {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO trip (label, price, description, content, image_url, category, quantity) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sdssss", $label, $price, $description, $content, $imageUrl, $category);

    if ($stmt->execute()) {
        // Get the ID of the newly inserted trip
        $tripId = $conn->insert_id;

        // Return trip data as array
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

    $stmt->close();
}
?>
