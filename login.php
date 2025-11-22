
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jewellry_db";  // ← Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password_input = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    if (password_verify($password_input, $row['password'])) {

        $_SESSION['username'] = $row['name'];
        $_SESSION['email'] = $row['email'];

        header("Location: f.php");   // your home page
        exit();

    } else {
        echo "<script>alert('Incorrect Password!'); window.history.back();</script>";
    }
} 
else {
    echo "<script>alert('No user found!'); window.history.back();</script>";
}

$conn->close();
?>

