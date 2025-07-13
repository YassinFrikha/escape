<?php 
include './logic/session.php'; 
include './logic/get_product_by_id.php';

// Get error or message from URL parameters
$error = $_GET['error'] ?? null;
$message = $_GET['message'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php 
        echo htmlspecialchars($product['name'] ?? 'Product'); 
      ?> - ESCAPE
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/product.css" />
  </head>
  <body>
    <?php include './components/navbar.php'; ?>

    <header><h1></h1></header>

    <?php if ($error): ?>
      <p style="color: red; font-weight: bold; text-align: center;">
        <?php echo htmlspecialchars($error); ?>
      </p>
    <?php endif; ?>

    <?php if ($message): ?>
      <p style="color: green; font-weight: bold; text-align: center;">
        <?php echo htmlspecialchars($message); ?>
      </p>
    <?php endif; ?>

    <?php if ($product): ?>
      <div class="container">

        <h1 style="text-align: center;">
          <?php echo htmlspecialchars($product['name']); ?>
        </h1>

        <img
          src="<?php echo htmlspecialchars($product['image_url']); ?>"
          alt="<?php echo htmlspecialchars($product['name']); ?>"
          class="product-image"
        />

        <p class="description">
          <?php echo htmlspecialchars($product['description']); ?>
        </p>

        <div class="form-group">
          <label for="quantity">Quantity: </label>
          <input type="number" id="quantity" name="quantity" min="1" value="1" />
          <div class="total-price">
            Total: <span id="price"><?php echo htmlspecialchars($product['price']); ?></span> TND
          </div>
        </div>

        <div class="rating">
          <?php
            $rating = round($product['rating'] * 2) / 2;
            $fullStars = floor($rating);
            $halfStar = ($rating - $fullStars) == 0.5 ? 1 : 0;
            $emptyStars = 5 - $fullStars - $halfStar;
            echo str_repeat("★", $fullStars);
            if ($halfStar) echo "☆";
            echo str_repeat("☆", $emptyStars);
          ?>
        </div>

        <div class="buttons">
          <button class="buy-btn" onclick="purchaseProduct()">Buy Now</button>
          <button class="cancel-btn" onclick="window.location.href='store.php'">Cancel</button>
        </div>

      </div>
    <?php endif; ?>

    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>

    <script>
      const quantityInput = document.getElementById("quantity");
      const priceSpan = document.getElementById("price");
      const unitPrice = <?php echo json_encode((float) ($product['price'] ?? 0)); ?>;
      const productId = <?php echo json_encode((int) ($product['id'] ?? 0)); ?>;

      function updatePrice() {
        const qty = parseInt(quantityInput.value) || 1;
        priceSpan.textContent = (qty * unitPrice).toFixed(2);
      }

      function purchaseProduct() {
        const qty = parseInt(quantityInput.value) || 1;
        const baseUrl = <?php 
          echo json_encode(isset($_SESSION['user']) 
            ? "services/purchase_product.php" 
            : "login.php"); 
        ?>;
        const finalUrl = baseUrl + (baseUrl.includes('?') ? '&' : '?') + 'id=' + productId + '&quantity=' + qty;
        window.location.href = finalUrl;
      }

      quantityInput.addEventListener("input", updatePrice);
      window.addEventListener("load", updatePrice);
    </script>
  </body>
</html>
