<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - ESCAPE</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      

      .nav-links a:hover,
      .nav-links a.active {
        color: white;
      }

      .nav-links a::after {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: #fcfcfc;
        transition: width 0.3s ease;
        border-radius: 3px;
      }

      

      body {
        font-family: "Poppins", sans-serif;
        background: #f2f4f5;
        margin: 0;
        padding: 0;
      }

      





    

      main {
        padding: 60px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      h1 {
        margin-bottom: 20px;
        color: #388e3c;
      }

      .contact-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 40px;
        max-width: 1000px;
        width: 100%;
        margin-top: 30px;
      }

      .contact-info,
      .contact-form {
        flex: 1;
        min-width: 280px;
        max-width: 450px;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      .contact-info h2,
      .contact-form h2 {
        color: #2e3d2f;
        margin-bottom: 15px;
      }

      .contact-info p {
        margin: 10px 0;
        font-size: 1.05em;
      }

      form {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      input,
      textarea {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-family: inherit;
        font-size: 1em;
      }

      button {
        background-color: #388e3c;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 10px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s;
      }

      button:hover {
        background-color: #2e7d32;
      }

      footer {
        text-align: center;
        padding: 30px 20px;
        background-color: #c8e6c9;
        margin-top: 60px;
        font-size: 0.95em;
        color: #2e3d2f;
      }

      .social-icons {
        margin-top: 25px;
      }

      .social-icons h3 {
        margin-bottom: 15px;
        font-size: 1.1em;
        color: #2e3d2f;
      }

      .icon-row {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 10px;
      }

      .icon-row img {
        width: 40px;
        height: 40px;
        transition: transform 0.3s ease;
      }

      .icon-row img:hover {
        transform: scale(1.3);
      }

      @media (max-width: 768px) {


       
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

    <!-- Main Content -->
    <main>
      <h1>Contact Us</h1>
      <div class="contact-container">
        <div class="contact-info">
          <h2>Get in Touch</h2>
          <p>
            We’re here to help and answer any question you might have. We look
            forward to hearing from you! 🌿
          </p>
          <p>Email: contact@escape.tn</p>
          <p>Phone: +216 12 345 678</p>
          <p>Location: Tunisia, North Africa</p>

          <div class="social-icons">
            <h3>Follow Us</h3>
            <div class="icon-row">
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
          </div>
        </div>

        <div class="contact-form">
          <h2>Send a Message</h2>
          <form action="submit_message.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required />
            <input
              type="email"
              name="email"
              placeholder="Your Email"
              required
            />
            <textarea
              name="message"
              rows="5"
              placeholder="Your Message"
              required
            ></textarea>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer>Made with 🌿 by ESCAPE</footer>
  </body>
</html>
