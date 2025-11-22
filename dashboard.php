<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
<a href="logout.php">Logout</a>
