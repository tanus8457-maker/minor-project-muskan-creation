<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "jewellry_db");

// Query to fetch all products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Our Products</title>
<style>

.product-box {
    width: 250px;
    padding: 15px;
    margin: 15px;
    border: 1px solid #ddd;
    border-radius: 10px;
    display: inline-block;
    text-align: center;
}

.product-box img {
    width: 200px;
    height: 200px;
    border-radius: 10px;
}

.btn {
    background: goldenrod;
    border: none;
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
}
</style>
</head>

<body>

<h2 style="text-align:center;">Our Jewellery Collection</h2>

<?php
while ($row = $result->fetch_assoc()) {

    echo "
    <div class='product-box'>
        <img src='{$row['image']}' alt='Jewellery'>
        <h3>{$row['name']}</h3>
        <p>Price: ₹ {$row['price']}</p>

        <form method='POST' action='add_to_cart.php'>
            <input type='hidden' name='product_id' value='{$row['id']}' />
            <button class='btn'>Add to Cart</button>
        </form>
    </div>
    ";
}
?>

</body>
</html>
