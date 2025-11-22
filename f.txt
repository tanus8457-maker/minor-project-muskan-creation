<?php
 session_start();
 ?>

<nav>
  <h1>Muskan Creations</h1>

  <ul>
    <li><a href="f.php">Home</a></li>
    <li><a href="pages/collection.php">Collection</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>

  <div class="nav-right">

    <?php if(isset($_SESSION['username'])) { ?>

      <span style="color:#c49b63;font-weight:bold;">
        👤 Hello, <?php echo $_SESSION['username']; ?>
      </span>
      <a href="backend/logout.php" style="color:red;font-weight:bold;">Logout</a>

    <?php } else { ?>
    
      <a href="login.html">Login</a>
      <a href="register.html">Register</a>

    <?php } ?>

    <a href="#">🛒 Cart</a>
  </div>
</nav>
