<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Order Placed</title>
<style>
body {
    font-family: Poppins;
    background: #fffafc;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.box {
    text-align: center;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 0 10px #ddd;
    width: 450px;
}
h2 {
    color: #28a745;
    font-size: 28px;
    margin-bottom: 10px;
}
p {
    font-size: 16px;
}
.btn {
    margin-top: 20px;
    display: inline-block;
    padding: 10px 20px;
    background: #c49b63;
    color: white;
    border-radius: 6px;
    text-decoration: none;
}
</style>
</head>
<body>

<div class="box">
    <h2>🎉 Your Order has been Placed!</h2>
    <p>Thank you for shopping with Muskan Creations.</p>
    <p>Our team will contact you soon for confirmation.</p>

    <a href="index.php" class="btn">Back to Home</a>
</div>

</body>
</html>
