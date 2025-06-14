
<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - ESCAPE</title>
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
        background-image: url("pics/home header.PNG");
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

      header h1,
      header p {
        position: relative;
        z-index: 1;
        text-shadow: 1px 1px 5px black;
      }

      header h1 {
        font-size: 3em;
      }

      main {
        text-align: center;
        padding: 50px 20px;
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

      .carousel-container {
        max-width: 800px;
        margin: 40px auto;
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      }

      .carousel-images {
        display: flex;
        transition: transform 0.5s ease-in-out;
      }

      .carousel-images img {
        width: 100%;
        height: 450px;
        object-fit: cover;
        border-radius: 16px;
        flex-shrink: 0;
      }

      .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(56, 142, 60, 0.7);
        border: none;
        color: white;
        font-size: 2rem;
        padding: 8px 14px;
        cursor: pointer;
        border-radius: 50%;
        z-index: 2;
      }

      .carousel-btn:hover {
        background-color: #2e7d32;
      }

      .carousel-btn.prev {
        left: 15px;
      }

      .carousel-btn.next {
        right: 15px;
      }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <?php include './components/navbar.php'; ?>

    <!-- Hero -->
    <header>
      <h1>Welcome to ESCAPE</h1>
      <p>
        Your gateway to unforgettable eco-friendly camping experiences in
        Tunisia.
      </p>
    </header>

    <!-- Main Content -->
    <main>
      <section>
        <h2>Explore Nature with ESCAPE</h2>
        <p>
          Join us for eco-friendly camping trips, where we connect you to
          Tunisia's wild beauty while respecting the environment.
        </p>
      </section>

      <!-- Carousel Section -->
      <section>
        <h2>------------</h2>
        <h2>- 🏕️ Our highlights -</h2>
        <div class="carousel-container">
          <button class="carousel-btn prev">&#10094;</button>
          <div class="carousel-images" id="carouselTrack">
            <img src="pics/douz.jpg" alt="Camping Tent" />
            <img src="pics/marsa.jpg" alt="Bonfire Night" />
            <img src="pics/ichkeul.jpg" alt="Mountain View" />
            <img src="pics/ain drahem.jpg" alt="Forest Trail" />
            <img src="pics/tamerza.jpg" alt="Camping Tent" />
            <img src="pics/djerba.jpg" alt="Bonfire Night" />
            <img src="pics/sa7ra.jpg" alt="Mountain View" />
          </div>
          <button class="carousel-btn next">&#10095;</button>
        </div>
      </section>
    </main>

    <div class="social-media">
      <h1>- Follow us on social media -</h1>
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

    <!-- Footer -->
    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>

    <!-- Carousel Script -->
    <script>
      const track = document.getElementById("carouselTrack");
      const slides = track.children;
      const nextBtn = document.querySelector(".carousel-btn.next");
      const prevBtn = document.querySelector(".carousel-btn.prev");

      let index = 0;
      const total = slides.length;

      function updateCarousel() {
        const width = slides[0].clientWidth;
        track.style.transform = `translateX(-${index * width}px)`;
      }

      nextBtn.addEventListener("click", () => {
        index = (index + 1) % total;
        updateCarousel();
      });

      prevBtn.addEventListener("click", () => {
        index = (index - 1 + total) % total;
        updateCarousel();
      });

      window.addEventListener("resize", updateCarousel);
      window.addEventListener("load", updateCarousel);

      // Auto slide every 3 seconds
      setInterval(() => {
        index = (index + 1) % total;
        updateCarousel();
      }, 3000);
    </script>
  </body>
</html>
