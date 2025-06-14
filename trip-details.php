<?php include './logic/session.php'; ?>
<?php include './logic/get_trip_by_id.php'; ?>
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

    <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php elseif ($trip): ?>

      <div class="container">
      <div class="trip-header">
        <img src="<?php echo htmlspecialchars($trip['image_url']); ?>" alt="douz" />
        <div class="trip-header-info">
          <h2><?php echo htmlspecialchars($trip['label']); ?></h2>
          <p class="price">Price: <?php echo htmlspecialchars($trip['price']); ?> TND</p>
        </div>
      </div>

      <p>
        <?php echo htmlspecialchars($trip['description']); ?>
      </p>


      <?php echo $trip['content']; ?>

      <div class="button-group">
        <a href="payment.php" class="book-btn">BOOK NOW</a>
        <a href="desert.php" class="back-btn">BACK TO TRIPS</a>
      </div>
    </div>
    <?php endif; ?>

    <footer>Made with 🌿 by ESCAPE</footer>
  </body>
</html>
