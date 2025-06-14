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

    // Include the function to insert user
    require_once "./add_user.php";
    require_once "./add_trip.php";

    // Add sample user(s)
    addUser($conn, "John", "Doe", "john@example.com", "test123", "1234567890");
    addUser($conn, "Jane", "Smith", "jane@example.com", "password456", "9876543210");

    addTrip($conn, "Douz - Gateway to the Sahara", 100, "Experience the magic of the Sahara in Douz, Tunisia’s desert frontier. Surrounded by golden dunes and palm oases, this trip offers an unforgettable adventure into Bedouin culture, camel treks, and starlit desert nights.ke.", "<h3>🏕️ Trip Details</h3>
      <ul>
        <li><strong>👥 Capacity:</strong> Max 30 campers</li>
        <li><strong>Minimum Age:</strong> 12+</li>
        <li><strong>Accommodation:</strong> Shared tents (2–3 per tent)</li>
        <li>
          <strong>Guides:</strong> 2 locals + 1 certified first-aid team member
        </li>
      </ul>

      <h3>📅 Program (2 Days / 1 Night)</h3>

      <h4>🗓️ Day 1: Into the Desert</h4>
      <ul>
        <li>08:00 – Departure from Tunis</li>
        <li>13:00 – Arrival in Douz & welcome lunch</li>
        <li>15:00 – Camel caravan into the Sahara & camp setup in the dunes</li>
        <li>17:00 – Sunset walk and sandboarding on the dunes</li>
        <li>19:00 – Traditional Bedouin dinner around the campfire</li>
        <li>21:00 – Stargazing & live desert music performance</li>
      </ul>

      <h4>🗓️ Day 2: Desert Discovery</h4>
      <ul>
        <li>07:00 – Sunrise camel ride & photography session</li>
        <li>08:30 – Traditional breakfast in the camp</li>
        <li>
          10:00 – Explore a nearby oasis and learn about desert survival skills
        </li>
        <li>12:00 – Picnic lunch under palm trees</li>
        <li>14:00 – Pack up & return camel ride to Douz town</li>
        <li>16:00 – Departure to Tunis</li>
        <li>21:00 – Arrival back in Tunis</li>
      </ul>

      <h3>🧗 Activities</h3>
      <ul>
        <li>Camel trekking through the Sahara</li>
        <li>Sandboarding & dune hiking</li>
        <li>Stargazing & traditional desert music</li>
        <li>Desert survival workshop</li>
        <li>Photography at sunrise and sunset</li>
        <li>Bedouin-style camping & local cuisine</li>
      </ul>", "http://localhost/escape/pics/douz.jpg", "desert",
      40
    );
}

$conn->close();
?>
