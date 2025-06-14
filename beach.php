<?php include './logic/session.php'; ?>
<?php include './logic/get_trips_by_category.php'; ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ESCAPE - Beach Camping Trips</title>
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
        background-color: #fefefe;
        transition: width 0.3s ease;
        border-radius: 3px;
      }

      

      body {
        font-family: "Poppins", sans-serif;
        background: #f5f7f6;
        margin: 0;
        padding: 0;
      }

      /* === Navigation === */
      



    

      .nav-links a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
      }

    

      /* === Title === */
      h1 {
        text-align: center;
        margin: 50px 0 10px;
        font-size: 32px;
        color: #2e5d34;
      }

      /* === Trip List === */
      .trip-list {
        max-width: 1000px;
        margin: 40px auto;
        display: flex;
        flex-direction: column;
        gap: 30px;
        padding: 0 20px 60px;
      }

      .trip-item {
        display: flex;
        flex-direction: row;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
      }

      .trip-image {
        flex: 1;
        min-width: 200px;
        height: 200px;
        object-fit: cover;
      }

      .trip-content {
        flex: 2;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .trip-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #2e5d34;
      }

      .button-group {
        display: flex;
        gap: 15px;
      }

      .book-btn {
        background-color: #388e3c;
        color: white;
        padding: 10px 20px;
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

      .details-btn {
        background-color: white;
        color: #388e3c;
        padding: 10px 18px;
        font-size: 14px;
        font-weight: bold;
        border: 2px solid #388e3c;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .details-btn:hover {
        background-color: #f0f8f1;
      }

      @media (max-width: 700px) {
        .trip-item {
          flex-direction: column;
        }
        .trip-image {
          width: 100%;
          height: 200px;
        }
      }
      .social-media {
        text-align: center;
        margin: 40px 0 20px;
      }

      .social-media a {
        margin: 0 15px;
        display: inline-block;
        text-decoration: none;
      }

      .social-media img {
        width: 50px;
        height: 50px;
        transition: transform 0.3s ease;
      }

      .social-media img:hover {
        transform: scale(1.5);
      }
      footer {
        text-align: center;
        padding: 30px 20px;
        background-color: #c8e6c9;
        margin-top: 60px;
        font-size: 0.95em;
        color: #2e3d2f;
      }
      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropbtn {
        color: white;
        text-decoration: none;
        font-weight: 500;
        padding: 0 10px;
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
        transition: background 0.3s;
      }

      .dropdown-content a:hover {
        background-color: #f0f8f1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
    </style>
  </head>
  <body>
    <!-- === Navigation Menu === -->
    <?php include './components/navbar.php'; ?>

    <h1>🏖️ Beach Camping Trips</h1>

    <div class="trip-list">

    
    <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php else: ?>
    <?php foreach ($trips as $trip): ?>
    <div class="trip-item"> 
        <img
            src="<?php echo htmlspecialchars($trip['image_url']); ?>"
            alt="<?php echo htmlspecialchars($trip['label']); ?>"
            class="trip-image"
        />
        <div class="trip-content">
            <div class="trip-title"><?php echo htmlspecialchars($trip['label']); ?></div>
            <div class="button-group">
                <a href="payment.php?id=<?php echo $trip['id']; ?>" class="book-btn">BOOK NOW</a>
                <a href="trip-details.php?id=<?php echo $trip['id']; ?>" class="details-btn">MORE DETAILS</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
      
    </div>
    <div class="social-media">
      <a href="https://facebook.com" target="_blank">
        <img src="pics/facebook.png" alt="Facebook" />
      </a>
      <a href="https://instagram.com" target="_blank">
        <img src="pics/insta.png" alt="Instagram" />
      </a>
      <a href="https://wa.me/yourphonenumber" target="_blank">
        <img src="pics/whatup.png" alt="WhatsApp" />
      </a>
    </div>
    <footer>Made with 🌿 by ESCAPE</footer>
  </body>
</html>
