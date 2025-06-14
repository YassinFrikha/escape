<?php
// add_product.php

function addProduct($conn, $name, $price, $description, $imageUrl, $quantity, $rating) {
    $stmt = $conn->prepare("INSERT INTO product (name, price, description, image_url, quantity, rating) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    // Bind the parameters: string, double, string, string, int, double
    $stmt->bind_param("sdssii", $name, $price, $description, $imageUrl, $quantity, $rating);

    if ($stmt->execute()) {
        $productId = $conn->insert_id;

        $stmt->close(); // Properly close before returning

        return [
            'id' => $productId,
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image_url' => $imageUrl,
            'quantity' => $quantity,
            'rating' => $rating
        ];
    } else {
        $error = $stmt->error;
        $stmt->close();
        throw new Exception("Error inserting product '$name': " . $error);
    }
}
?>
