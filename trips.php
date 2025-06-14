<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ESCAPE - Trip Categories</title>
     <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>

      body {
        font-family: "Poppins", sans-serif;
        background: #f2f4f5;
        margin: 0;
        padding: 0;
      }


      h1 {
        text-align: center;
        color: #2e5d34;
        margin: 60px 0 10px;
        font-size: 36px;
      }

      .intro-text {
        text-align: center;
        color: #555;
        font-size: 16px;
        max-width: 700px;
        margin: 0 auto 40px;
        line-height: 1.6;
      }

      .categories {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        padding: 20px 40px 60px;
      }

      .category-card {
        display: block;
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        background-color: white;
        text-decoration: none;
        color: inherit;
      }

      .category-card:hover {
        transform: scale(1.03);
      }

      .category-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
      }

      .category-content {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        width: 100%;
        padding: 20px;
        text-align: center;
      }

      .category-title {
        font-size: 20px;
        font-weight: 600;
        margin: 0;
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
    <!-- === Main Navigation Menu === -->
    <?php include './components/navbar.php'; ?>

    <h1>Choose Your Adventure</h1>
    <p class="intro-text">
      Discover our exciting range of camping experiences across Tunisia. Whether
      you're drawn to the golden dunes of the Sahara, the relaxing waves of the
      coast, or the wild green beauty of the forest, there's a trip waiting just
      for you. Browse our categories below and start your journey with ESCAPE.
    </p>

    <div class="categories">
      <a href="desert.php" class="category-card">
        <img src="pics/sa7ra.jpg" alt="Desert Adventure" />
        <div class="category-content">
          <div class="category-title">🌵 Desert Adventure</div>
        </div>
      </a>

      <!-- Forest Category -->
      <a href="forest.php" class="category-card">
        <img src="pics/Forest.jpg" alt="Forest Camp" />
        <div class="category-content">
          <div class="category-title">🌲 Forest Camp</div>
        </div>
      </a>

      <!-- Beach Category -->
      <a href="beach.php" class="category-card">
        <img src="pics/Beach.jpg" alt="Beach Camp" />
        <div class="category-content">
          <div class="category-title">🏖️ Beach Camp</div>
        </div>
      </a>
    </div>

    <!-- === Social Media Icons === -->
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

    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>
  </body>
</html>
