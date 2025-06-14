<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ESCAPE - Profile</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;800&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background: #f2f4f5;
        margin: 0;
        padding: 0;
      }

      .main-nav {
        display: flex;
        gap: 20px;
        align-items: center;
      }

      .main-nav a {
        color: white;
        text-decoration: none;
        font-weight: 600;
        position: relative;
      }

      .main-nav a:hover {
        text-decoration: underline;
      }

      .dropdown {
        position: relative;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        color: #2e3d2f;
        min-width: 140px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        top: 28px;
        border-radius: 8px;
        overflow: hidden;
      }

      .dropdown-content a {
        display: block;
        padding: 10px 16px;
        color: #2e3d2f;
        text-decoration: none;
        font-weight: 600;
      }

      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .profile-link {
        background-color: white;
        color: #388e3c;
        padding: 8px 16px;
        border-radius: 8px;
        font-weight: bold;
        text-decoration: none;
      }

      /* Hero section */
      .hero {
        background: url("./pics/profile_bg.png")
          center/cover no-repeat;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
      }

      .hero h1 {
        font-size: 32px;
        margin: 0;
      }

      .hero p {
        margin-top: 10px;
        font-size: 16px;
        font-weight: 300;
      }

      /* Profile page content */
      .container {
        display: flex;
        padding: 40px;
        gap: 30px;
        flex-wrap: wrap;
      }

      .sidebar {
        display: flex;
        flex-direction: column;
        gap: 15px;
        min-width: 180px;
      }

      .sidebar button {
        background-color: white;
        border: 2px solid #388e3c;
        color: #388e3c;
        padding: 12px 20px;
        border-radius: 12px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .sidebar button:hover {
        background-color: #388e3c;
        color: white;
      }

      .content-area {
        flex-grow: 1;
        background-color: white;
        border-radius: 20px;
        padding: 30px;
        min-height: 400px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .logout-btn {
        margin-top: auto;
        background-color: #e53935;
        color: white;
        border: none;
      }

      .logout-btn:hover {
        background-color: #c62828;
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .sidebar {
          flex-direction: row;
          flex-wrap: wrap;
          gap: 10px;
        }
      }
    </style>
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
        <button>Update Profile</button>
        <button>Change Password</button>
        <button>Trips History</button>
        <button>Shopping History</button>
        <button class="logout-btn">Logout</button>
      </div>

      <div class="content-area">
        <h2 style="margin-top: 0px;" >Your Profile Info</h2>
        <p>
          This section will display user data or dynamic content depending on
          the selected action.
        </p>
      </div>
    </div>
  </body>
</html>
