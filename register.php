<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jewellry_db";  // ← YOUR DATABASE NAME

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get Form Values
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if email already exists
$check = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($check);

if ($result->num_rows > 0) {
    echo "<script>alert('Email already exists! Try another email.'); window.history.back();</script>";
    exit();
}

// Hash Password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert User
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration Successful! Please login now.'); 
    window.location.href='login.html';</script>";
} else {
    echo "<script>alert('Error while registering!'); window.history.back();</script>";
}

$conn->close();
?>
