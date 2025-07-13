<?php
// db_setup.php
$resetDatabase = true; // Set to false to skip recreation

require_once "./db_connect.php";

if ($resetDatabase) {
    // Drop if exists
    $conn->query("DROP DATABASE IF EXISTS $database");

    // Create database
    if ($conn->query("CREATE DATABASE $database") === TRUE) {
        echo "Database created successfully.<br>";
    } else {
        die("Error creating database: " . $conn->error);
    }

    // Select the new DB
    $conn->select_db($database);

    // Create user table
    $sql = "CREATE TABLE user (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50),
        last_name VARCHAR(50),
        email VARCHAR(100) UNIQUE,
        password VARCHAR(255),
        phone_number VARCHAR(20)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "User table created.<br>";
    } else {
        die("Error creating table: " . $conn->error);
    }

        // Create trip table
    $sql = "CREATE TABLE trip (
        id INT AUTO_INCREMENT PRIMARY KEY,
        label VARCHAR(100),
        price DECIMAL(10,2),
        description TEXT,
        content LONGTEXT,
        image_url VARCHAR(255),
        category VARCHAR(100),
        quantity INT
    )";

    

    if ($conn->query($sql) === TRUE) {
        echo "Trip table created.<br>";
    } else {
        die("Error creating trip table: " . $conn->error);
    }

    // Create Porduct table
    $sql = "CREATE TABLE product (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        price DECIMAL(10,2),
        description TEXT,
        image_url VARCHAR(255),
        quantity INT,
        rating DECIMAL(2,1)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Product table created.<br>";
    } else {
        die("Error creating product table: " . $conn->error);
    }

    // Create Contact US
    $sql = "CREATE TABLE contact (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(100),
        lastName VARCHAR(100),
        email VARCHAR(100),
        phone VARCHAR(100),
        subject VARCHAR(100),
        message TEXT
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Contact table created.<br>";
    } else {
        die("Error creating product table: " . $conn->error);
    }

    // Create the appointment table
    $appointmentSql = "CREATE TABLE IF NOT EXISTS appointment (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        trip_id INT NOT NULL,
        date DATETIME NOT NULL,
        approved BOOLEAN DEFAULT FALSE,
        FOREIGN KEY (user_id) REFERENCES user(id),
        FOREIGN KEY (trip_id) REFERENCES trip(id)
    ) ENGINE=InnoDB";

    // Create the purchase table
    $purchaseSql = "CREATE TABLE IF NOT EXISTS purchase (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        product_id INT NOT NULL,
        quantity INT NOT NULL,
        date DATETIME NOT NULL,
        approved INT DEFAULT 0,
        FOREIGN KEY (user_id) REFERENCES user(id),
        FOREIGN KEY (product_id) REFERENCES product(id)
    ) ENGINE=InnoDB";

    // Execute both table creations
    if ($conn->query($appointmentSql) === TRUE) {
        echo "Appointment table created successfully<br>";
    } else {
        echo "Error creating appointment table: " . $conn->error . "<br>";
    }

    if ($conn->query($purchaseSql) === TRUE) {
    echo "Purchase table created successfully<br>";
    } else {
        echo "Error creating purchase table: " . $conn->error . "<br>";
    }

    // Include the function to insert user
    require_once "./add_user.php";
    require_once "./add_trip.php";
    require_once "./add_product.php";

    // Add sample user(s)
    addUser($conn, "John", "Doe", "john@example.com", "test123", "1234567890");
    addUser($conn, "Jane", "Smith", "jane@example.com", "password456", "9876543210");

    
    require_once "../data/trips.php";
    require_once "../data/products.php";
    // Add sample trips

}

$conn->close();
?>
