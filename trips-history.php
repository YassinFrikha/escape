<?php 
include './logic/session.php'; 
require_once './logic/db_connect.php';

$userId = $_SESSION['user']['id'];

// Fetch user's booked trips with details
$sql = "SELECT a.id AS appointment_id, t.id AS trip_id, t.label, t.category, t.price, a.date, a.approved 
        FROM appointment a 
        JOIN trip t ON a.trip_id = t.id 
        WHERE a.user_id = ? 
        ORDER BY a.date DESC";

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
    <title>ESCAPE - Trips History</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;800&display=swap"
      rel="stylesheet"
    />
    <link href="./css/profile.css" rel="stylesheet" />
    <style>
      /* Trips History table styles */
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
      }
      tbody tr:nth-child(odd) {
        background-color: #dcedc8; /* light green */
      }
      tbody tr:nth-child(even) {
        background-color: #f1f8e9; /* lighter green */
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
        width: 150px !important;
        text-align: center;
      }
      .details-btn {
        background-color: #388e3c;
        margin-right: 10px;
      }
      .details-btn:hover {
        background-color: #2e7d32;
      }
      .delete-btn {
        background-color: #e53935;
        border: none;
      }
      .delete-btn:hover {
        background-color: #c62828;
      }
      .status-approved {
        color: #2e7d32;
        font-weight: bold;
      }
      .status-pending {
        color: #f9a825;
        font-weight: bold;
      }
      /* Form inside table for delete */
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
    <!-- Navigation -->
    <?php include './components/navbar.php'; ?>

    <!-- Hero -->
    <section class="hero">
      <div>
        <h1>Welcome to ESCAPE</h1>
        <p>
          Your gateway to unforgettable eco-friendly camping experiences in Tunisia
        </p>
      </div>
    </section>

    <!-- Profile Layout -->
    <div class="container">
      <div class="sidebar">
        <button onclick="location.href='./profile.php'">Update Profile</button>
        <button onclick="location.href='./change-password.php'">Change Password</button>
        <button onclick="location.href='./trips-history.php'" class="current_active">Trips History</button>
        <button onclick="location.href='./shopping-history.php'">Shopping History</button>
        <button onclick="location.href='./logic/logout.php'" class="logout-btn">Logout</button>
      </div>

      <div class="content-area">
        <h2>Your Trips History</h2>

        <?php if ($result->num_rows === 0): ?>
          <p>You have no trips booked yet.</p>
        <?php else: ?>
          <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Price (TND)</th>
                <th>Booking Date</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($trip = $result->fetch_assoc()): ?>
                <tr>
                  <td><?php echo htmlspecialchars($trip['label']); ?></td>
                  <td><?php echo htmlspecialchars($trip['category']); ?></td>
                  <td><?php echo number_format($trip['price'], 2); ?> TND</td>
                  <td><?php echo date("Y-m-d", strtotime($trip['date'])); ?></td>
                  <td class="<?php echo $trip['approved'] ? 'status-approved' : 'status-pending'; ?>">
                    <?php echo $trip['approved'] ? 'Approved' : 'Pending'; ?>
                  </td>
                  <td>
                  <a href="trip-details.php?id=<?php echo $trip['trip_id']; ?>" class="details-btn">More Details</a>
                  <?php if (!$trip['approved']): ?>
                    <form action="services/delete_booking.php" method="post" onsubmit="return confirm('Are you sure you want to cancel this booking?');" style="display:inline;">
                      <input type="hidden" name="appointment_id" value="<?php echo $trip['appointment_id']; ?>" />
                      <button type="submit" class="delete-btn">Cancel</button>
                    </form>
                  <?php else: ?>
                    <button class="delete-btn" disabled title="Approved bookings cannot be cancelled" style="opacity:0.6; cursor:not-allowed;">Cancel</button>
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
