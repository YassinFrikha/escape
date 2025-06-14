<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sleeping Bag - ESCAPE</title>
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

      .container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 20px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      }

      .product-image {
        width: 100%;
        max-height: 500px;
        object-fit: cover;
        border-radius: 10px;
      }

      .description {
        margin: 20px 0;
        font-size: 1.1em;
        line-height: 1.6;
      }

      .form-group {
        margin: 20px 0;
      }

      label {
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
      }

      input[type="number"] {
        width: 60px;
        padding: 5px;
        font-size: 1em;
        border-radius: 6px;
        border: 1px solid #ccc;
      }

      .total-price {
        font-size: 1.2em;
        margin-top: 10px;
        font-weight: bold;
      }

      .buttons {
        margin-top: 30px;
        display: flex;
        gap: 20px;
      }

      .buttons button {
        padding: 12px 25px;
        border: none;
        font-size: 1em;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
      }

      .buy-btn {
        background-color: #4caf50;
        color: white;
      }

      .buy-btn:hover {
        background-color: #388e3c;
      }

      .cancel-btn {
        background-color: #e0e0e0;
        color: #333;
      }

      .cancel-btn:hover {
        background-color: #bdbdbd;
      }

      .rating {
        margin-top: 20px;
        font-size: 1.5em;
        color: gold;
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
        header h1 {
          font-size: 2em;
        }

        .buttons {
          flex-direction: column;
        }

        .buttons button {
          width: 100%;
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
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <?php include './components/navbar.php'; ?>
    <!-- Header -->
    <header>
      <h1></h1>
    </header>

    <!-- Product Info -->
    <div class="container">
      <img src="pics/sleepbag.jpg" alt="Sleeping Bag" class="product-image" />
      <p class="description">
        Stay warm and cozy under the stars with this high-quality sleeping bag.
        Lightweight and easy to pack, it provides excellent insulation and
        comfort during cold nights outdoors.
      </p>

      <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1" />
        <div class="total-price">Total: <span id="price">50</span> TND</div>
      </div>

      <div class="rating">★★★☆☆</div>

      <div class="buttons">
        <button class="buy-btn">Buy Now</button>
        <button class="cancel-btn" onclick="window.location.href='store.php'">
          Cancel
        </button>
      </div>
    </div>

    <!-- Footer -->
    <footer>Made with 🌿 by ESCAPE</footer>

    <!-- Script for total price -->
    <script>
      const quantityInput = document.getElementById("quantity");
      const priceSpan = document.getElementById("price");
      const unitPrice = 50;

      function updatePrice() {
        const qty = parseInt(quantityInput.value) || 1;
        priceSpan.textContent = qty * unitPrice;
      }

      quantityInput.addEventListener("input", updatePrice);
      window.addEventListener("load", updatePrice);
    </script>
  </body>
</html>
