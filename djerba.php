<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Djerba trip infos| ESCAPE Camping</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>

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
        <img src="pics/djerba.jpg" alt="Cape Angela" />
        <div class="trip-header-info">
          <h2>Djerba - Aghir Beach</h2>
          <p class="price">Price: 100 TND</p>
        </div>
      </div>

      <p>
        Escape to the idyllic island of Djerba, where crystal-clear waters and
        golden sandy beaches await you. Aghir Beach, located on the southern
        coast of Djerba, is known for its serene beauty and peaceful atmosphere
        — perfect for those seeking a relaxing retreat or an adventurous escape
        in nature. Our camping experience offers you the best of both worlds,
        with days spent basking in the sun, swimming in the warm waters, and
        exploring the island’s rich culture.
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

      <h3>📅 Program (3 Days / 2 Nights)</h3>
      <h4>🗓️ Day 1: Arrival & Exploration</h4>
      <ul>
        <li>08:00 – Departure from Tunis</li>
        <li>12:00 – Arrival in Djerba & setup</li>
        <li>13:00 – Welcome briefing & beachside lunch</li>
        <li>14:30 – Guided walk to explore the village of Aghir</li>
        <li>
          17:00 – Free time on the beach (swimming, sunbathing, or
          paddleboarding)
        </li>
        <li>19:00 – Traditional dinner with local dishes</li>
        <li>21:00 – Bonfire & stargazing</li>
      </ul>

      <h4>🗓️ Day 2: Adventure & Local Culture</h4>
      <ul>
        <li>07:30 – Sunrise yoga/stretching by the beach</li>
        <li>08:30 – Breakfast</li>
        <li>
          10:00 – Guided cultural tour: Visit Djerba’s famous pottery workshops
          and local markets
        </li>
        <li>13:00 – Picnic lunch with fresh local ingredients</li>
        <li>15:00 – Kayaking & snorkeling in the crystal-clear waters</li>
        <li>18:00 – Free time to relax or enjoy water sports</li>
        <li>19:30 – Group dinner with a traditional music performance</li>
        <li>21:30 – Campfire stories & relaxation</li>
      </ul>

      <h4>🗓️ Day 3: Nature & Departure</h4>
      <ul>
        <li>07:00 – Morning swim or beach walk</li>
        <li>08:00 – Breakfast</li>
        <li>09:30 – Eco-awareness beach cleanup activity</li>
        <li>11:00 – Scenic bike ride around Aghir and surrounding areas</li>
        <li>13:00 – Farewell picnic on the beach</li>
        <li>14:30 – Pack up & departure</li>
        <li>18:00 – Arrival back in Tunis</li>
      </ul>

      <h3>🧗 Activities</h3>
      <ul>
        <li>Scenic hiking & bike rides</li>
        <li>Swimming & sunbathing</li>
        <li>Kayaking & snorkeling</li>
        <li>Traditional cooking class & campfire meals</li>
        <li>Photography & bird watching</li>
        <li>Eco-awareness games & beach cleanup</li>
        <li>Cultural exploration of Djerba's villages</li>
      </ul>

      <div class="button-group">
        <a href="payment.php" class="book-btn">BOOK NOW</a>
        <a href="beach.php" class="back-btn">BACK TO TRIPS</a>
      </div>
    </div>

    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>
  </body>
</html>
