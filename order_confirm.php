<?php
session_start();
include("connect.php");

if(!isset($_POST['product_id'])){
    echo "Invalid Access!";
    exit;
}

$product_id = $_POST['product_id'];
$qty = $_POST['qty'];

$sql = "SELECT * FROM products WHERE id=$product_id";
$res = $conn->query($sql);
$product = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirm Order</title>

<style>
body {
    font-family: Poppins;
    background: #fffafc;
    padding: 40px;
}
.box {
    max-width: 650px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 10px #ddd;
}
h2 {
    color: #c49b63;
    margin-bottom: 10px;
}
input, select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 15px;
}
textarea { height: 100px; }
.btn {
    background: #c49b63;
    padding: 12px 18px;
    width: 100%;
    color: white;
    border-radius: 8px;
    border: none;
    font-size: 16px;
    cursor: pointer;
}
.btn:hover {
    background: #a97c4f;
}
.summary {
    background: #f7efe6;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 20px;
}
</style>

</head>
<body>

<div class="box">
    <h2>Order Summary</h2>

    <div class="summary">
        <p><strong>Product:</strong> <?php echo $product['name']; ?></p>
        <p><strong>Price:</strong> ₹ <?php echo $product['price']; ?></p>
        <p><strong>Quantity:</strong> <?php echo $qty; ?></p>
        <p><strong>Total:</strong> ₹ <?php echo $product['price'] * $qty; ?></p>
    </div>

    <h2>Customer Details</h2>

    <form action="order_success.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <input type="hidden" name="qty" value="<?php echo $qty; ?>">

        <input type="text" name="customer_name" placeholder="Full Name" required>

        <input type="text" name="mobile" placeholder="Mobile Number" required>

        <textarea name="address" placeholder="Full Address" required></textarea>

        <select name="payment_mode" required>
            <option value="">Select Payment Mode</option>
            <option value="Cash on Delivery">Cash on Delivery</option>
            <option value="UPI / Online Payment">UPI / Online Payment</option>
        </select>

        <button class="btn">Place Order</button>
    </form>

</div>

</body>
</html>
