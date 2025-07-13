<?php 
include './logic/session.php'; 

// Redirect if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <?php include './components/website-icon.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Change Password</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;800&display=swap" rel="stylesheet" />
  <link href="./css/profile.css" rel="stylesheet" />
</head>
<body>
  <?php include './components/navbar.php'; ?>

  <section class="hero">
    <div>
      <h1>Change Your Password</h1>
      <p>Keep your account secure by updating your password.</p>
    </div>
  </section>

  <div class="container">
    <div class="sidebar">
      <button onclick="location.href='./profile.php'">Update Profile</button>
      <button class="current_active" onclick="location.href='./change-password.php'">Change Password</button>
      <button onclick="location.href='./trips-history.php'">Trips History</button>
      <button onclick="location.href='./shopping-history.php'">Shopping History</button>
      <button onclick="location.href='./logic/logout.php'" class="logout-btn">Logout</button>
    </div>

    <div class="content-area">
      <h2>Change Password</h2>
      <?php if (isset($_GET['success'])): ?>
        <p style="color: green; font-weight: bold;"><?php echo htmlspecialchars(urldecode($_GET['success'])); ?></p>
      <?php elseif (isset($_GET['error'])): ?>
        <p style="color: red; font-weight: bold;"><?php echo htmlspecialchars(urldecode($_GET['error'])); ?></p>
      <?php endif; ?>

      <form action="services/change_password_service.php" method="post" class="update-form">
        <div class="form-grid">
          <input type="password" name="current_password" placeholder="Current Password" required />
          <input type="password" name="new_password" placeholder="New Password" required />
          <input type="password" name="confirm_password" placeholder="Confirm New Password" required />
        </div>
        <button type="submit" class="submit-btn">Update Password</button>
      </form>
    </div>
  </div>
</body>
</html>
