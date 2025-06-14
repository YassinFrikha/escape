<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ain drahem trip infos | ESCAPE Camping</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      

      

      .nav-links a::after {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: #ffeb99; /* Yellow underline */
        transition: width 0.3s ease;
        border-radius: 3px;
      }

      

      body {
        font-family: "Poppins", sans-serif;
        background: #f5f7f6;
        margin: 0;
        padding: 0;
        color: #2e3d2f;
      }

      nav {
        background-color: #388e3c;
        padding: 5px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
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
        <img src="pics/ain drahem.jpg" alt="ain drahem" />
        <div class="trip-header-info">
          <h2>Ain Draham – The Forest of the North</h2>
          <p class="price">Price: 100 TND</p>
        </div>
      </div>

      <p>
        Escape to Ain Draham’s lush green heart — where towering pine forests,
        fresh mountain air, and peaceful trails invite you to unwind and
        reconnect with nature. This northern gem offers a cozy forest camping
        experience, perfect for adventurers and nature lovers alike.
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

      <h4>🗓️ Day 1: Arrival & Forest Immersion</h4>
      <ul>
        <li>08:00 – Departure from Tunis</li>
        <li>12:00 – Arrival at Ain Draham campsite & tent setup</li>
        <li>13:00 – Welcome briefing & forest picnic lunch</li>
        <li>
          15:00 – Guided nature walk through the pine and cork oak forests
        </li>
        <li>17:30 – Free time to relax or explore the nearby village</li>
        <li>19:00 – Traditional dinner with mountain specialties</li>
        <li>21:00 – Campfire & storytelling under the stars</li>
      </ul>

      <h4>🗓️ Day 2: Adventure & Culture</h4>
      <ul>
        <li>07:30 – Morning stretching & meditation in the forest</li>
        <li>08:30 – Breakfast with local honey and cheeses</li>
        <li>10:00 – Mountain hike to panoramic viewpoints</li>
        <li>13:00 – Picnic lunch in a forest clearing</li>
        <li>15:00 – Visit a local craft workshop (pottery or wood carving)</li>
        <li>17:30 – Free time (optional forest photography walk)</li>
        <li>19:30 – Group dinner with folk music and warm drinks</li>
        <li>21:00 – Bonfire & relaxation</li>
      </ul>

      <h4>🗓️ Day 3: Connection with Nature & Departure</h4>
      <ul>
        <li>07:00 – Morning forest walk or journaling session</li>
        <li>08:00 – Breakfast</li>
        <li>
          09:30 – Eco-awareness activity: forest cleanup and tree planting
        </li>
        <li>11:30 – Farewell gathering & reflection</li>
        <li>12:30 – Pack up & departure</li>
        <li>16:30 – Arrival back in Tunis</li>
      </ul>

      <h3>🧗 Activities</h3>
      <ul>
        <li>Forest hiking & nature exploration</li>
        <li>Local village and artisan visits</li>
        <li>Campfire cooking & storytelling</li>
        <li>Bird watching & nature photography</li>
        <li>Eco-awareness games & tree planting</li>
        <li>Morning stretching & mindfulness in nature</li>
      </ul>

      <div class="button-group">
        <a href="payment.php" class="book-btn">BOOK NOW</a>
        <a href="forest.php" class="back-btn">BACK TO TRIPS</a>
      </div>
    </div>

    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>
  </body>
</html>
