<?php
session_start();
include("connect.php");

if(!isset($_GET['id'])){
    echo "Product not found!";
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);

if($result->num_rows == 0){
    echo "Invalid Product ID!";
    exit;
}

$product = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>Product Details</title>
<style>
body {
    font-family: Poppins;
    background: #fffafc;
    padding: 40px;
}
.container {
    max-width: 850px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 0 10px #ddd;
    display: flex;
    gap: 25px;
}
.container img {
    width: 350px;
    height: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.details h2 {
    color: #c49b63;
}
.qty-box {
    padding: 10px;
    width: 80px;
    font-size: 16px;
}
.btn {
    background: #c49b63;
    padding: 12px 20px;
    color: white;
    border: none;
    border-radius: 8px;
    margin-top: 15px;
    cursor: pointer;
}
.btn:hover {
    background: #a97c4f;
}
.price-box {
    margin: 10px 0;
    font-weight: bold;
    font-size: 18px;
}
</style>

<script>
function updatePrice() {
    let price = document.getElementById("price").value;
    let qty = document.getElementById("qty").value;
    let total = price * qty;
    document.getElementById("total").innerHTML = "₹ " + total;
}
</script>

</head>
<body>

<div class="container">
    <img src="<?php echo $product['image']; ?>">

    <div class="details">
        <h2><?php echo $product['name']; ?></h2>

        <p><strong>Price:</strong> ₹ <?php echo $product['price']; ?></p>

        <input type="hidden" id="price" value="<?php echo $product['price']; ?>">

        <p><strong>Select Quantity:</strong></p>
        <select id="qty" class="qty-box" onchange="updatePrice()">
            <?php for($i=1; $i<=10; $i++){ ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>

        <p class="price-box">
            <strong>Total Price: </strong> 
            <span id="total">₹ <?php echo $product['price']; ?></span>
        </p>

        <form action="order_confirm.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            <input type="hidden" id="send_qty" name="qty" value="1">

            <button class="btn" onclick="document.getElementById('send_qty').value = document.getElementById('qty').value;">
                Continue
            </button>
        </form>

    </div>
</div>

</body>
</html>
