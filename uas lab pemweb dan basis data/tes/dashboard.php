<?php
session_start();
require_once 'db.php';

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    // Jika tidak, mungkin redirect ke halaman login
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Harmony Gardens</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">

  <style>
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropbtn {
    background-color: #241515;
    color: white;
    padding: 12px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: white;
    padding: 12px 16px;
    display: block;
    text-decoration: none;
  }

  .dropdown-content a:hover {
    background-color: #cc4e4e;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: #540b0b;
  }
</style>

</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Harmony<span>Gardens</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#products">Product</a>
      <!-- <a href="#contact">Kontak</a> -->
      <a href="#testimoni">Testimoni</a>
    </div>

    <!-- <div class="navbar-extra">
  <a href="#" id="search-button"><i data-feather="search"></i></a>
  <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
  <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a> -->

  <div class="dropdown">
    <button class="dropbtn"><?php echo $_SESSION['username']; ?></button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
      <a href="change_password.php">Change Password</a>
    </div>
  </div>
</div>

    </div>
  </div>
</nav>

    <!-- Search Form start -->
    <!-- <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
      
    </div> -->
    <!-- Search Form end -->


  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1>Elegan <span> dan Aestetic </span></h1>
        <p>Harmony Gardens is beautiful flower</p>
      </main>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2>About</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/about 3.jpeg" alt="produk Kami">
      </div>
      <div class="content">
        <h3>Apa itu Harmony Gardens?</h3>
        <p>Harmony Gardens adalah toko bouquet bunga terpercaya yang sudah teruji dan terkenal sejak dulu</p>
        <p>bouquet di Harmony Gardens dapat dipesan untuk berbagai macam kebutuhan dan acara.</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Products Section start -->
  <section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>Belanja yang terbaik.</p>

    <div class="row">
      <div class="product-card">
        <div class="product-image">
          <img src="img/products/produk.jpg" alt="Product">
        </div>
        <div class="product-content">
          <h3>Aestetic flowers</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 150K <span>IDR 200K</span></div>
        </div>
      </div>

      <div class="row">
      <div class="product-card">
        <div class="product-image">
          <img src="img/products/produk 2.jpg" alt="Product 2">
        </div>
        <div class="product-content">
          <h3>Medium flowers</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 150K <span>IDR 200K</span></div>
        </div>
      </div>

      <div class="row">
      <div class="product-card">
        <div class="product-image">
          <img src="img/products/produk 4.jpg" alt="Product 3">
        </div>
        <div class="product-content">
          <h3>Classic flowers</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 150K <span>IDR 200K</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <!-- <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
  
    <div class="row">
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1163.7207405756624!2d98.65888947759251!3d3.562296680158708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f97601b85fb%3A0x61aad0b3bbb7313a!2sUniversity%20of%20North%20Sumatra%20-%20Faculty%20of%20Computer%20Science%20and%20Information%20Technology!5e0!3m2!1sid!2sid!4v1703238787342!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>-->
    
      <!-- <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp">
        </div>
        <button type="submit" class="btn">kirim pesan</button>
      </form>

    </div>
  </section> -->
  <!-- Contact Section end -->
  
  <!-- testimoni  start -->
  <!-- Testimoni Form start -->
<section class="testimoni-form" id="testimoni-form">
    <h2>Tulis Testimoni</h2>
    <form action="submit_testimoni.php" method="post" enctype="multipart/form-data">
        Content: <textarea name="content" required></textarea><br>
        Image: <input type="file" name="image"><br>
        <input type="submit" value="Post">
</section>
<!-- Testimoni Form end -->

<!-- Testimoni Section start -->
<section class="testimoni" id="testimoni">
    <h2><span>Testimoni</span> Pelanggan Kami</h2>
    <p>Apa kata pelanggan tentang kami?</p>

    <?php
    // Query untuk mendapatkan testimoni dengan nama pengguna
    $stmt = $conn->prepare("SELECT t.*, u.username FROM testimoni t INNER JOIN users u ON t.user_id = u.id ORDER BY t.created_at DESC");
    $stmt->execute();
    $testimonies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($testimonies as $testimony) {
        echo '<div class="testimoni-card">';
        echo '<p>"' . htmlspecialchars($testimony['content']) . '"</p>';
        echo '<img src="' . htmlspecialchars($testimony['image_path']) . '" alt="Testimony Image">';
        echo '<span class="testimoni-author">Pengguna: ' . htmlspecialchars($testimony['username']) . '</span>';

        // Tambahkan logika untuk mengedit dan menghapus testimoni
        if (isset($_SESSION['user_id']) && $testimony['user_id'] == $_SESSION['user_id']) {
            echo '<a href="edit_testimoni.php?id=' . $testimony['id'] . '">Edit</a>';
            echo '<a href="delete_testimoni.php?id=' . $testimony['id'] . '">Delete</a>';
        }

        echo '</div>';
    }
    ?>

</section>
<!-- Testimoni Section end -->
  <!-- testimoni end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#products">Products</a>
      <!-- <a href="#contact">Kontak</a> -->
      <a href="#testimoni">Testimoni</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Harmony Gardens</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/produk 1.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Produk</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 150K <span>IDR 200K</span></div>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Modal Box Item Detail end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>