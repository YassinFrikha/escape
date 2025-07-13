<?php include './logic/session.php'; ?>
<?php include './logic/get_products.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store - ESCAPE</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/store.css" />
  </head>
  <body>
    <!-- Navigation -->
    <?php include './components/navbar.php'; ?>

    <!-- Hero -->
    <header>
      <h1>🛒 ESCAPE Outdoor Store</h1>
    </header>

    <div class="store-container">

      <h2>Explore Our Products</h2>
      <p>
        Discover our range of high-quality camping gear and outdoor equipment.
        Whether you're a seasoned adventurer or a weekend camper, we have
        everything you need for your next trip.
      </p>

      <div class="product-grid">
       <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php else: ?>
    <?php foreach ($products as $product): ?>
      <a  href="product.php?id=<?php echo $product['id']; ?>" class="product-link">
          <div class="product-card">
             <img
            src="<?php echo htmlspecialchars($product['image_url']); ?>"
            alt="<?php echo htmlspecialchars($product['name']); ?>"
        />
            <div class="product-info">
              <h3><?php echo htmlspecialchars($product['name']); ?></h3>
              <div class="product-price"><?php echo htmlspecialchars($product['price']); ?> TND</div>
            </div>
          </div>
        </a>



 
    <?php endforeach; ?>
    <?php endif; ?>

      </div>
    </div>

    

    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>
  </body>
</html>
