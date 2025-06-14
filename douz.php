<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Douz trip infos | ESCAPE Camping</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      

      .nav-links a:hover,
      .nav-links a.active {
        color: white;
      }

      

      

      body {
        font-family: "Poppins", sans-serif;
        background: #f5f7f6;
        margin: 0;
        padding: 0;
        color: #2e3d2f;
      }

      



    

      .nav-links a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
      }

      .nav-links a:hover,
      .nav-links a.active {
        color: #ffeb99;
      }

      .dropdown {
        position: relative;
      }

      .dropbtn {
        color: white;
        text-decoration: none;
        font-weight: 500;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        min-width: 180px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 6px;
      }

      .dropdown-content a {
        color: #2e5d34;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-weight: 500;
      }

      .dropdown-content a:hover {
        background-color: #f0f8f1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .container {
        max-width: 1000px;
        margin: 40px auto;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        padding: 30px 20px;
      }

      .trip-header {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        align-items: center;
        margin-bottom: 30px;
      }

      .trip-header img {
        width: 300px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      .trip-header-info {
        flex: 1;
      }

      .trip-header-info h2 {
        font-size: 60px;
        margin-bottom: 10px;
        color: #2e5d34;
      }

      .price {
        color: #388e3c;
        font-weight: bold;
        font-size: 18px;
      }

      h3 {
        color: #2e5d34;
        margin-top: 30px;
      }

      ul {
        padding-left: 20px;
        line-height: 1.6;
      }

      h4 {
        margin-top: 20px;
        color: #2e5d34;
      }

      .button-group {
        margin-top: 30px;
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
      }

      .book-btn {
        background-color: #388e3c;
        color: white;
        padding: 12px 24px;
        font-size: 14px;
        font-weight: bold;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .book-btn:hover {
        background-color: #2e7030;
      }

      .back-btn {
        background-color: white;
        color: #388e3c;
        padding: 12px 24px;
        font-size: 14px;
        font-weight: bold;
        border: 2px solid #388e3c;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .back-btn:hover {
        background-color: #f0f8f1;
      }

      footer {
        text-align: center;
        padding: 30px 20px;
        background-color: #c8e6c9;
        margin-top: 60px;
        font-size: 0.95em;
        color: #2e3d2f;
      }

      @media (max-width: 768px) {
        .trip-header {
          flex-direction: column;
          align-items: flex-start;
        }
      }
    </style>
  </head>
  <body>
    <?php include './components/navbar.php'; ?>

    <div class="container">
      <div class="trip-header">
        <img src="pics/douz.jpg" alt="douz" />
        <div class="trip-header-info">
          <h2>Douz - Gateway to the Sahara</h2>
          <p class="price">Price: 100 TND</p>
        </div>
      </div>

      <p>
        Experience the magic of the Sahara in Douz, Tunisia’s desert frontier.
        Surrounded by golden dunes and palm oases, this trip offers an
        unforgettable adventure into Bedouin culture, camel treks, and starlit
        desert nights.ke.
      </p>
      <h3>🏕️ Trip Details</h3>
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
      </ul>

      <div class="button-group">
        <a href="payment.php" class="book-btn">BOOK NOW</a>
        <a href="desert.php" class="back-btn">BACK TO TRIPS</a>
      </div>
    </div>

    <footer>Made with 🌿 by ESCAPE</footer>
  </body>
</html>
