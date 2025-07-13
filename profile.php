<?php 
include './logic/session.php'; 

// Make sure user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ESCAPE - Profile</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;800&display=swap"
      rel="stylesheet"
    />
    <link
      href="./css/profile.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navigation -->
   <?php include './components/navbar.php'; ?>

    <!-- Hero -->
    <section class="hero">
      <div>
        <h1>Welcome to ESCAPE</h1>
        <p>
          Your gateway to unforgettable eco-friendly camping experiences in
          Tunisia
        </p>


      </div>
    </section>

    <!-- Profile Layout -->
    <div class="container">
      <div class="sidebar">
        <button onclick="location.href='./profile.php'" class="current_active" >Update Profile</button>
        <button onclick="location.href='./change-password.php'"  >Change Password</button>
        <button onclick="location.href='./trips-history.php'" >Trips History</button>
        <button onclick="location.href='./shopping-history.php'" >Shopping History</button>
        <button onclick="location.href='./logic/logout.php'" class="logout-btn">Logout</button>
      </div>

      <div class="content-area">
        <h2>Your Profile Info</h2>
                <?php if (isset($_GET['success'])): ?>
          <p style="color: green; font-weight: bold;">
            <?php echo htmlspecialchars(urldecode($_GET['success'])); ?>
          </p>
          <?php elseif (isset($_GET['error'])): ?>
          <p style="color: red; font-weight: bold;">
            <?php echo htmlspecialchars(urldecode($_GET['error'])); ?>
          </p>
        <?php endif; ?>
      <form action="services/update_profile_service.php" method="post" class="update-form">
  <div class="form-grid">
    <input type="text" name="first_name" placeholder="First Name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required />
    <input type="text" name="last_name" placeholder="Last Name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required />
    <input type="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($user['email']); ?>" required />
    <input type="text" name="phone" placeholder="Phone Number" value="<?php echo htmlspecialchars($user['phone_number']); ?>" pattern="[0-9+ ]{6,20}" required />
  </div>
  <button type="submit" class="submit-btn">Update Profile</button>
</form>
      </div>
    </div>
  </body>
</html>
