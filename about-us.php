<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - ESCAPE</title>
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


      .header {
        background-image: url("pics/aboutus\ header.png");
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 100px 20px;
        position: relative;
      }

      .header::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 0;
      }

      .header h1,
      .header p {
        position: relative;
        z-index: 1;
        text-shadow: 1px 1px 5px #000;
      }

      .header h1 {
        font-size: 3em;
        margin: 0;
      }

      .header p {
        font-size: 1.3em;
        margin-top: 10px;
      }

      .container {
        max-width: 900px;
        margin: 40px auto;
        padding: 30px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
      }

      h2,
      h3 {
        color: #2e7d32;
      }

      h2 {
        margin-top: 50px;
        font-size: 1.8em;
      }

      h3 {
        margin-top: 30px;
        font-size: 1.3em;
      }

      .divider {
        text-align: center;
        margin: 40px 0;
      }

      .divider span {
        font-size: 2em;
        color: #66bb6a;
      }

      p {
        margin: 15px 0;
      }

      .leaf-badge {
        background-color: #dcedc8;
        display: inline-block;
        padding: 6px 14px;
        border-radius: 20px;
        color: #33691e;
        font-weight: bold;
        font-size: 0.95em;
        margin: 20px 0;
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
        .header h1 {
          font-size: 2em;
        }
        .container {
          padding: 20px;
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
    <div class="header">
      <h1>🌿 Welcome to ESCAPE</h1>
      <p>Reconnect • Explore • Protect</p>
    </div>

    <!-- About Us Content -->
    <div class="container">
      <p>
        <strong>Founded in early 2025</strong> by two passionate nature lovers,
        <strong>Yassin Frikha</strong> and <strong>Yassine Kouki</strong>,
        ESCAPE was born from a powerful idea: help people escape city life and
        rediscover the healing power of nature.
      </p>

      <p>
        Based in <strong>Tunisia</strong>, ESCAPE offers more than just camping.
        We guide eco-friendly adventures into Tunisia’s wild beauty — from the
        Sahara dunes to the green forest trails — while building a caring
        community of nature lovers.
      </p>

      <div class="divider"><span>🍃</span></div>

      <h2>🌱 Our Mission at ESCAPE</h2>

      <div class="leaf-badge">Escape Pollution, Embrace Nature</div>
      <p>
        We believe freedom is found under the open sky. Our camping trips help
        you disconnect from daily stress and reconnect with nature in its purest
        form.
      </p>

      <div class="leaf-badge">Promote Eco-Conscious Living</div>
      <p>
        We teach sustainable habits like <em>Leave No Trace</em>, waste
        reduction, and eco-responsible travel. Every ESCAPE trip helps protect
        the wild places we love.
      </p>

      <div class="leaf-badge">Inspire Environmental Awareness</div>
      <p>
        We engage our community in hands-on experiences that raise awareness
        about preserving Tunisia’s natural treasures — one camper at a time.
      </p>

      <div class="leaf-badge">Create a Movement, Not Just Moments</div>
      <p>
        ESCAPE is a movement of hikers, campers, and environmental advocates.
        We’re growing a network of people who care deeply about nature and live
        by its values.
      </p>

      <div class="divider"><span>🌲</span></div>

      <p>
        <strong>Join ESCAPE</strong> and become part of something meaningful —
        where every camping trip is a step toward a cleaner, more connected
        world.
      </p>

      <p>
        <strong
          >Let’s escape pollution, reconnect with nature, and protect what truly
          matters. 🌍</strong
        >
      </p>
    </div>
   

    <!-- Footer -->
     <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>

  </body>
</html>
