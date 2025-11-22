<?php
session_start();
include('connect.php');
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Home - Muskan Creasions</title></head>
<body>
  <header>
    <h1>Muskan Creasions</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?> | <a href="logout.php">Logout</a></p>
  </header>

  <main>
    <h2>Featured Collection</h2>
    <p><a href="collection.php">View Collections</a></p>

    <h3>Latest Products</h3>
    <div style="display:flex;flex-wrap:wrap;gap:20px;">
      <?php
      $res = $conn->query("SELECT p.id, p.name, p.price, p.image, c.name AS category FROM products p LEFT JOIN categories c ON p.category_id=c.id ORDER BY p.created_at DESC LIMIT 6");
      while ($row = $res->fetch_assoc()) {
        echo '<div style="width:200px;border:1px solid #ddd;padding:10px;">';
        echo '<a href="product.php?id='.$row['id'].'"><img src="images/'.htmlspecialchars($row['image']).'" style="width:100%;height:150px;object-fit:cover;"></a>';
        echo '<h4>'.htmlspecialchars($row['name']).'</h4>';
        echo '<p>₹'.htmlspecialchars($row['price']).'</p>';
        echo '</div>';
      }
      ?>
    </div>
  </main>
</body>
</html>
