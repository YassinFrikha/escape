<?php 
include './logic/session.php'; 
require_once './logic/db_connect.php';

$userId = $_SESSION['user']['id'];

// Fetch user's purchases
$sql = "SELECT pu.id AS purchase_id, pr.id AS product_id, pr.name, pr.price, pr.image_url, pu.quantity, pu.date, pu.approved
        FROM purchase pu
        JOIN product pr ON pu.product_id = pr.id
        WHERE pu.user_id = ?
        ORDER BY pu.date DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <?php include './components/website-icon.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ESCAPE - Shopping History</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;800&display=swap" rel="stylesheet" />
  <link href="./css/profile.css" rel="stylesheet" />
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
      overflow: hidden;
      font-family: 'Nunito', sans-serif;
      color: #2e3d2f;
    }
    thead {
      background-color: #2e7d32;
      color: white;
    }
    th, td {
      padding: 15px 20px;
      text-align: left;
      vertical-align: middle;
    }
    tbody tr:nth-child(odd) {
      background-color: #dcedc8;
    }
    tbody tr:nth-child(even) {
      background-color: #f1f8e9;
    }
    img.product-thumb {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
    }
    .details-btn, .delete-btn {
      padding: 8px 14px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s ease;
      color: white;
      text-decoration: none;
      display: inline-block;
      width: 150px;
      text-align: center;
    }
    .details-btn {
      background-color: #388e3c;
      margin-right: 10px;
      width: 150px !important;
    }
    .details-btn:hover {
      background-color: #2e7d32;
    }
    .delete-btn {
      background-color: #e53935;
      width: 150px !important;
    }
    .delete-btn:hover {
      background-color: #c62828;
    }
    .status-pending {
      color: #f9a825;
      font-weight: bold;
    }
    .status-delivering {
      color: #1976d2;
      font-weight: bold;
    }
    .status-delivered {
      color: #2e7d32;
      font-weight: bold;
    }
    form {
      display: inline;
      margin: 0;
    }

    .content-area {
      max-width: calc(100vw - 450px);
      overflow-x: auto;
      }

      .table-container {
        overflow-x: auto;
        width: 100%;
      }

      table {
        min-width: 1000px;
        white-space: nowrap;
      }

      th, td {
        white-space: nowrap;
      }
      .details-btn, .delete-btn {
        white-space: nowrap;
      }
  </style>
</head>
<body>
  <?php include './components/navbar.php'; ?>

  <section class="hero">
    <div>
      <h1>Welcome to ESCAPE</h1>
      <p>Your gateway to unforgettable eco-friendly camping experiences in Tunisia</p>
    </div>
  </section>

  <div class="container">
    <div class="sidebar">
      <button onclick="location.href='./profile.php'">Update Profile</button>
      <button onclick="location.href='./change-password.php'">Change Password</button>
      <button onclick="location.href='./trips-history.php'">Trips History</button>
      <button onclick="location.href='./shopping-history.php'" class="current_active">Shopping History</button>
      <button onclick="location.href='./logic/logout.php'" class="logout-btn">Logout</button>
    </div>

    <div class="content-area">
      <h2>Your Shopping History</h2>

      <?php if (isset($_GET['error'])): ?>
        <p style="color: red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
      <?php elseif (isset($_GET['success'])): ?>
        <p style="color: green;"><?php echo htmlspecialchars($_GET['success']); ?></p>
      <?php endif; ?>

      <?php if ($result->num_rows === 0): ?>
        <p>You have not purchased any products yet.</p>
      <?php else: ?>
        <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price (TND)</th>
            <th>Quantity</th>
            <th>Total Price (TND)</th> <!-- NEW COLUMN -->
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
          <tbody>
            <?php while ($purchase = $result->fetch_assoc()): ?>
              <tr>
              <td><img src="<?php echo htmlspecialchars($purchase['image_url']); ?>" alt="Product" class="product-thumb" /></td>
              <td><?php echo htmlspecialchars($purchase['name']); ?></td>
              <td><?php echo number_format($purchase['price'], 2); ?> TND</td>
              <td><?php echo intval($purchase['quantity']); ?></td>
              <td><?php echo number_format($purchase['price'] * $purchase['quantity'], 2); ?> TND</td> <!-- TOTAL PRICE -->
              <td><?php echo date("Y-m-d", strtotime($purchase['date'])); ?></td>
              <td class="<?php 
                if ($purchase['approved'] == 0) echo 'status-pending';
                elseif ($purchase['approved'] == 1) echo 'status-delivering';
                else echo 'status-delivered';
              ?>">
                <?php 
                  if ($purchase['approved'] == 0) echo 'Pending';
                  elseif ($purchase['approved'] == 1) echo 'Delivering';
                  else echo 'Delivered';
                ?>
              </td>
              <td>
                <a href="product.php?id=<?php echo $purchase['product_id']; ?>" class="details-btn">More Details</a>
                <?php if ($purchase['approved'] == 0): ?>
                  <form action="services/delete_purchase.php" method="post" onsubmit="return confirm('Are you sure you want to cancel this order?');">
                    <input type="hidden" name="purchase_id" value="<?php echo $purchase['purchase_id']; ?>" />
                    <input type="hidden" name="product_id" value="<?php echo $c['product_id']; ?>" /> <!-- NEW -->
                    <input type="hidden" name="quantity" value="<?php echo $purchase['quantity']; ?>" />     <!-- NEW -->
                    <button type="submit" class="delete-btn">Cancel</button>
                  </form>
                <?php else: ?>
                  <button class="delete-btn" disabled style="opacity:0.6; cursor:not-allowed;">Cancel</button>
                <?php endif; ?>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
