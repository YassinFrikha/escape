<?php include './logic/session.php'; ?>
<?php include './logic/get_trip_by_id.php'; ?>

<?php
// Get success or error messages from URL if available
$message = $_GET['message'] ?? null;
$error = $_GET['error'] ?? null;
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      <?php echo isset($trip) ? htmlspecialchars($trip['label']) . ' | ESCAPE Camping' : 'Trip Details'; ?>
    </title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/trip_details.css" />
  </head>
  <body>
    <?php include './components/navbar.php'; ?>

    <!-- Show success or error message -->
    <?php if ($error): ?>
      <p style="color: red; font-weight: bold; text-align: center;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <?php if ($message): ?>
      <p style="color: green; font-weight: bold; text-align: center;"><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <!-- Show trip details if available -->
    <?php if ($trip): ?>
      <div class="container">
        <div class="trip-header">
          <img src="<?php echo htmlspecialchars($trip['image_url']); ?>" alt="<?php echo htmlspecialchars($trip['label']); ?>" />
          <div class="trip-header-info">
            <h2><?php echo htmlspecialchars($trip['label']); ?></h2>
            <p class="price">💵 Price: <?php echo htmlspecialchars($trip['price']); ?> TND</p>
            <p class="price">👥 Capacity: <?php echo htmlspecialchars($trip['quantity']); ?></p>
          </div>
        </div>

        <p><?php echo htmlspecialchars($trip['description']); ?></p>

        <?php echo $trip['content']; ?>

        <div class="button-group">
          <a 
            href="<?php echo isset($_SESSION['user']) 
              ? 'services/appointement_trip.php?id=' . urlencode($trip['id']) 
              : 'login.php'; ?>" 
            class="book-btn"
          >
            BOOK NOW
          </a>
          <a href="desert.php" class="back-btn">BACK TO TRIPS</a>
        </div>
      </div>
    <?php endif; ?>

    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>
  </body>
</html>
