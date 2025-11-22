<?php
session_start();
include('connect.php');

if (!isset($_POST['product_id'])) {
    header("Location: f.php");
    exit();
}

$id = $_POST['product_id'];

// Get product details from database
$sql = "SELECT * FROM products WHERE id='$id'";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

// Create cart if not exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add product to cart
$_SESSION['cart'][] = $product;

header("Location: cart.php");
exit();
?>
