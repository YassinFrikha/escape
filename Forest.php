<?php 
include './logic/session.php'; 
include './logic/get_trips_by_category.php';

// Get error or message from URL parameters
$error = $_GET['error'] ?? null;
$message = $_GET['message'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ESCAPE - Forest Camping Trips</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/trips_page.css" />
  </head>
  <body>
    <!-- === Navigation Menu === -->
    <?php include './components/navbar.php'; ?>

    <h1>🌲 Forest Camping Trips</h1>

    <?php if ($error): ?>
      <p style="color: red; font-weight: bold;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <?php if ($message): ?>
      <p style="color: green; font-weight: bold; text-align: center"><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <div class="trip-list">
      <?php if ($error): ?>
        <!-- Optional: skip showing trips if there's a critical error -->
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
                <a 
                  href="<?php echo isset($_SESSION['user']) 
                      ? 'services/appointement_trip.php?id=' . urlencode($trip['id']) 
                      : 'login.php'; ?>" 
                  class="book-btn"
                >
                  BOOK NOW
                </a>
                <a href="trip-details.php?id=<?php echo $trip['id']; ?>" class="details-btn">MORE DETAILS</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

   
    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>
  </body>
</html>
