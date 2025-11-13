<?php
include('connect.php');

$email = $_POST['email'];
$password = $_POST['password'];

// Check if email already exists
$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
if (mysqli_num_rows($check) > 0) {
  echo "<script>alert('Email already registered!'); window.history.back();</script>";
} else {
  $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration successful! Please login.'); window.location.href='login.html';</script>";
  } else {
    echo "<script>alert('Something went wrong!'); window.history.back();</script>";
  }
}
?>
