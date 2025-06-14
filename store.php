<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store - ESCAPE</title>
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
        background: #f2f4f5;
        margin: 0;
        padding: 0;
      }
      





    

      .nav-links a:hover {
        color: #c8e6c9;
      }

      header {
        background-image: url("pics/camp.jpg");
        background-size: cover;
        background-position: center;
        padding: 100px 20px;
        text-align: center;
        color: white;
        position: relative;
      }

      header::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 0;
      }

      header h1 {
        position: relative;
        z-index: 1;
        font-size: 3em;
        text-shadow: 1px 1px 5px black;
      }

      .store-container {
        max-width: 1100px;
        margin: 50px auto;
        padding: 20px;
      }

      .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 25px;
      }

      .product-link {
        text-decoration: none;
        color: inherit;
      }

      .product-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.2s;
        height: 350px;
        display: flex;
        flex-direction: column;
      }

      .product-link:hover .product-card {
        transform: scale(1.02);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      }

      .product-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }

      .product-info {
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex-grow: 1;
      }

      .product-info h3 {
        margin: 0 0 10px;
        color: #2e7d32;
      }

      .product-price {
        background-color: #c8e6c9;
        color: #000;
        padding: 10px;
        font-size: 1.2em;
        font-weight: bold;
        border-radius: 5px;
        text-align: center;
        margin-top: auto;
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


        .nav-links {
          flex-direction: column;
          gap: 10px;
          width: 100%;
          margin-top: 10px;
        }

        header h1 {
          font-size: 2em;
        }
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
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <?php include './components/navbar.php'; ?>

    <!-- Hero -->
    <header>
      <h1>🛒 ESCAPE Outdoor Store</h1>
    </header>

    <div class="store-container">
      <div class="product-grid">
        <a href="buy-tent" class="product-link">
          <div class="product-card">
            <img src="pics/tent (1).jpg" alt="Camping Tent" />
            <div class="product-info">
              <h3>Camping Tent</h3>
              <div class="product-price">150 TND</div>
            </div>
          </div>
        </a>

        <a href="buy-back-pack" class="product-link">
          <div class="product-card">
            <img src="pics/backpack.jpg" alt="Camping Backpack" />
            <div class="product-info">
              <h3>Camping Backpack</h3>
              <div class="product-price">80 TND</div>
            </div>
          </div>
        </a>

        <a href="buy-sleep-bag" class="product-link">
          <div class="product-card">
            <img src="pics/sleepbag.jpg" alt="Sleeping Bag" />
            <div class="product-info">
              <h3>Sleeping Bag</h3>
              <div class="product-price">50 TND</div>
            </div>
          </div>
        </a>
      </div>
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
