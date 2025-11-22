<?php
session_start();
?>

<!--NAMASTE-->
<!DOCTYPE html>
<head>
   <title>Minor Projects</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
  background-color: #fffafc;
  color: #333;
}
html {
  scroll-behavior: smooth;
}



    /* Navigation */
    header {
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 60px;
      position: relative;
    }

    nav h1 {
      color: #c49b63;
      font-size: 28px;
      font-weight: 700;
      letter-spacing: 1px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 15px;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: #c49b63;
    }
   .nav-right {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .nav-right a {
      text-decoration: none;
      font-weight: bold;
      color: #333;
    }

    .nav-right a:hover {
      color: goldenrod;
    }
     /* PROFILE AREA */
    .profile-area {
      position: absolute;
      top: 15px;
      right: 15px;
    }

    .profile-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
    }
     .profile-box {
      display: none;
      position: absolute;
      right: 0;
      background: white;
      padding: 10px 15px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px gray;
      width: 150px;
    }

    .profile-area:hover .profile-box {
      display: block;
    }



    /* Hero Section */
    .hero {
       background-image: url("Project/ic1.png"); 
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
     position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 700px;
    }

    .hero-content h2 {
      font-size: 50px;
      margin-bottom: 15px;
    }

    .hero-content p {
      font-size: 18px;
      margin-bottom: 25px;
    }

    .btn {
      background-color: #c49b63;
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #a97c4f;
    }

    /* Featured Section */
    .featured {
      padding: 80px 60px;
      text-align: center;
    }

    .featured h2 {
      font-size: 32px;
      margin-bottom: 40px;
      color: #c49b63;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .product {
      text-decoration: none;
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
      transition: 0.3s;

    }

    .product:hover {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);

    }

    .product img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .product a h3{ 
      text-decoration: none;
      color: #333333ff;
      padding: 15px;
      font-size: 20px;
}     

  .product a h3:hover {
      color: goldenrod;
    }

    /* About Section */
    .about {
      background-color: #fdf8f2;
      padding: 80px 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .about-text {
      flex: 1;
      padding-right: 30px;
      min-width: 300px;
    }

    .about-text h2 {
      font-size: 30px;
      color: #c49b63;
      margin-bottom: 20px;
    }

    .about-text p {
      font-size: 18px;
      line-height: 1.6;
    }

    .about img {
      width: 400px;
      border-radius: 15px;
      min-width: 250px;
    }

    /* Footer */
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 25px 0;
      margin-top: 50px;
    }

    footer p {
      font-size: 16px;
    }

    @media (max-width: 768px) {
      nav {
        padding: 15px 20px;
      }

      .about {
        flex-direction: column;
        text-align: center;
      }

      .about img {
        margin-top: 30px;
      }

      .hero-content h2 {
        font-size: 36px;
      }
    }
    /* Contact Section */
.contact-section {
  padding: 60px 20px;
  background: #fffafc;
  color: #333;
}
.contact-section .container {
  max-width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  align-items: center;
  padding: 0 20px;
}
.contact-left {
  text-align: center;
}
.contact-image {
  max-width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}
.contact-right h3 {
  font-size: 26px;
  color: #c49b63;
  margin-bottom: 8px;
}
.contact-right p {
  margin-bottom: 12px;
  line-height: 1.5;
}
.contact-info {
  list-style: none;
  padding: 0;
  margin: 0 0 18px 0;
}
.contact-info li {
  margin-bottom: 8px;
  font-size: 15px;
}
.contact-info a { color: #333; text-decoration: none; font-weight: 600; }
.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px 12px;
  margin-bottom: 10px;
  border-radius: 8px;
  border: 1px solid #e0dcd7;
  font-size: 15px;
  background: #fff;
}
.contact-form .btn {
  background:#c49b63;
  color:#fff;
  padding: 10px 16px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 16px;
}
.contact-form .btn:hover { background: #a97c4f; }

.contact-section .note {
  margin-top: 10px;
  font-size: 13px;
  color: #666;
}

/* Responsive */
@media (max-width: 800px) {
  .contact-section .container {
    grid-template-columns: 1fr;
  }
  .contact-left { order: 2; }
  .contact-right { order: 1; }
}

.profile-area {
    position: absolute;
    top: 20px;
    right: 20px;
}

.profile-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
}

.profile-box {
    display: none;
    position: absolute;
    right: 0;
    background: white;
    padding: 10px 15px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px gray;
}

.profile-area:hover .profile-box {
    display: block;
}

  </style>
</head>

<body>
  <!-- Navigation -->
  <header>
   <nav>
  <h1>Muskan Creations</h1>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#collection">Collection</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>

  <div class="nav-right">
     <?php if(!isset($_SESSION['username'])) { ?>
    <a href="login.html">Login</a>
    <a href="register.html">Register</a>
      <?php } else { ?>
    <a href="cart.php">🛒 Cart</a>
    <?php } ?>
  </div>
<?php if(isset($_SESSION['username'])) { ?>
<div class="profile-area">
    <img src="Project/icon.png" class="profile-icon">
    <div class="profile-box">
       <strong> Hello, <?php echo $_SESSION['username']; ?></strong>
        <br><br>
        <a href="logout.php">Logout</a>
    </div>
</div>
<?php } ?>

</nav>

  </header>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="hero-content">
      <h2>Elegant Jewelry for Every Occasion</h2>
      <p>Discover timeless pieces handcrafted with love and brilliance.</p>
      <button class="btn">Shop Now</button>
    </div>
  </section>

  <!-- Featured Section -->
 <section id="collection" class="featured">
    <h2>Our Featured Collection</h2>
    <div class="product-grid">
      <div class="product">
        <img src="Project\41.jpg" alt="Necklace">
        <a href="neck.html"><h3>Necklace</h3></a>
      </div>
      <div class="product">
        <img src="Project\37.jpg" alt="Earrings">
        <a href=""><h3>Earrings</h3></a>
      </div>
      <div class="product">
        <img src="Project\11.jpg" alt="Bracelet">
        <a href=""><h3>Bracelet</h3></a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="about-text">
      <h2>About Muskan Creations </h2>
      <p>Muskan Creations is a customized jewellery platform where customers can order jewellery made exactly the way they want.
We design unique, handcrafted pieces based on your ideas, photos, or preferences.
Our goal is to deliver high-quality, affordable, and personalized jewellery that reflects your style.
Whether it’s rings, necklaces, earrings, name pendants, or special occasion designs — we create what you imagine.
You can easily contact us through email or phone to share your design and place your custom order.<br>
Your imagination — our creation.<br>
Muskan Creations brings your dream jewellery to life.</p>
    </div>
    <img src="Project\41.jpg" alt="Jewelry Crafting">
  </section>
  <!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="container">
    <div class="contact-left">
      <img src="Project\43.jpg" alt="Muskan Creations" class="contact-image">
    </div>

    <div class="contact-right">
      <h3>Contact Us</h3>
      <p>Want a custom piece? Send your design or idea — we’ll reply within 24 hours.</p>

      <ul class="contact-info">
        <li><strong>Email:</strong> <a href="mailto:muskancreations@gmail.com">muskancreations@gmail.com</a></li>
        <li><strong>Phone:</strong> <a href="tel:+919876543210">+91 98765 43210</a></li>
        <li><strong>Location:</strong> Chhindwara, Madhya Pradesh</li>
      </ul>

      <form action="contact_submit.php" method="POST" class="contact-form">
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email" required>
        <input type="tel" name="phone" placeholder="Phone (optional)">
        <textarea name="message" rows="4" placeholder="Write your design idea or message..." required></textarea>
        <button type="submit" class="btn">Send Request</button>
      </form>

      <p class="note">You can also send your design image on WhatsApp to the number above.</p>
    </div>
  </div>
</section>


  <!-- Footer -->
  <footer id="contact">
    <p>MUSKAN CREATIONS All Rights Reserved</p>
  </footer>
</body>
</html>
