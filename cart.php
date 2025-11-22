<?php
session_start();
?>

<h2>Your Cart</h2>

<?php
if (empty($_SESSION['cart'])) {
    echo "<p>No items in cart</p>";
} else {
    foreach ($_SESSION['cart'] as $item) {
        echo "<div>";
        echo "<img src='" . $item['image'] . "' width='120'>";
        echo "<h3>" . $item['name'] . "</h3>";
        echo "<p>Price: ₹" . $item['price'] . "</p>";
        echo "</div><hr>";
    }
}
?>
