<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Informasi</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <style>
      #gambar1 {
      width: 600px;
      height: 400px;
      }
      #gambar2 {
      width: 200px;
      height: 200px;
      margin: 3rem;
      }
      #gambar {
        width: 400px;
        height: 400px;
      }
  </style>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">GEN Z<span> BLOGG</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">Data</a>
      <a href="users.php">User</a>
      <a href="#contact"></a> 
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#contact" id="phone-call-button"><i data-feather="phone-call"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>SELAMAT DATANG <span><br> GEN Z BLOGG</span></h1>
      <a href='#menu' class="cta">TAP MORE</a>
    </main>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img id="gambar3" src="img/menu/stasiun2.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa membuat website informasi ini?</h3>
        <p>Pertama, ini adalah tugas akhir kuliah kami dan kami berfikir untuk membuat sebuah website informasi.</p>
        <p>informasi seputar Kota Cikampek saja, mungkin akan dilanjutkan lebih kompleks lagi kedepan-nya.</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span>Main Place</h2>
    <p>Berikut ini merupakan beberapa tempat yang sangat hype dan wajib anda kunjungi di Cikampek</p>

    <div class="row">
      <div class="menu-card">
        <img id="gambar2" src="img/menu/stasiun.jpg" class="menu-card-img">
        <h3 class="menu-card-title">- Stasiun Cikampek -</h3>
        <p class="menu-card-price">West Cikampek</p>
        <a href="isi/stasiun1.html">CLICK HERE</a>
      </div>
      <div class="menu-card">
        <img id="gambar2" src="img/menu/gacoan.jpg" class="menu-card-img">
        <h3 class="menu-card-title">- Gacoan Cikampek -</h3>
        <p class="menu-card-price">West Cikampek</p>
        <a href="isi/gacoan1.html">CLICK HERE</a>
      </div>
      <div class="menu-card">
        <img id="gambar2" src="img/menu/bendungan.jpg" class="menu-card-img">
        <h3 class="menu-card-title">- Bendungan Situ Kamojing -</h3>
        <p class="menu-card-price">North Cikampek</p>
        <a href="isi/bendungan1.html">CLICK HERE</a>
      </div>
      <div class="menu-card">
        <img id="gambar2" src="img/menu/KebonKembang.jpg" class="menu-card-img">
        <h3 class="menu-card-title">- Kebon Kembang-</h3>
        <p class="menu-card-price">North Cikampek</p>
        <a href="isi/kebonkembang.html">CLICK HERE</a>
      </div>
      <div class="menu-card">
        <img id="gambar2" src="img/menu/mall.jpg"  class="menu-card-img">
        <h3 class="menu-card-title">- Mall Cikampek-</h3>
        <p class="menu-card-price">South Cikampek</p>
        <a href="isi/mall.html">CLICK HERE</a>
      </div>
      <div class="menu-card">
        <img id="gambar2" src="img/menu/ilove.jpeg" class="menu-card-img">
        <h3 class="menu-card-title">- IloveCikampek -</h3>
        <p class="menu-card-price">East Cikampek</p>
        <a href="isi/iloveckp.html">CLICK HERE</a>
      </div>
    </div>
  </section>

  <!-- Products Section start -->
  <section class="products" id="products">
    <h2><span>Data Diri</span> Kami</h2>
    <div class="row">
      <div class="product-card">
        <div class="product-image">
          <img src="img/human/saipul.jpeg">
        </div>
        <div class="product-content">
          <h3>Saeful Azhar</h3>
        </div>
      </div>
      <div class="product-card">
      
        <div class="product-image">
          <img src="img/human/agus.jpeg">
        </div>
        <div class="product-content">
          <h3>Agus Sugiarto</h3>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="img/human/repat.jpg">
        </div>
        <div class="product-content">
          <h3>Muhammad Rep'at</h3>
        </div>
      </div>
       <div class="product-card">
        <div class="product-image">
          <img src="img/human/zakaa.jpeg">
        </div>
        <div class="product-content">
          <h3>Zakaria Firdaus</h3>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="img/human/ihsan.jpg">
        </div>
        <div class="product-content">
          <h3>Abdillah Ihsan</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>anda bisa menghubungi kami dibawah ini</p>
    <div class="row">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63438.8405845142!2d107.39564283932182!3d-6.403337559833409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6972166d96254d%3A0x401576d14fed9f0!2sCikampek%2C%20Kec.%20Cikampek%2C%20Karawang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1686980942801!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      <form action="index.php" method="post">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" name="nama" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" name="email" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" name="no_hp" placeholder="no hp">
        </div>
        <button type="submit" class="btn" name="submit">kirim pesan</button>
        <?php
        //cek data apakah sudah lengkap

        if(isset($_POST['submit'])) {
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $no_hp=$_POST['no_hp'];

        //panggil penghubung atau koneksi database
        include_once("config.php");

        // coding query untuk menyimpan ke database
        $result=mysqli_query($mysqli, "INSERT INTO pesan(nama,email,no_hp) VALUES('$nama','$email','$no_hp')");

       }
      ?>
      </form>
    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="https://instagram.com"><i data-feather="instagram" target="blank"></i></a>
      <a href="https://twitter.com"><i data-feather="twitter" target="blank"></i></a>
      <a href="https://facebook.com"><i data-feather="facebook" target="blank"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>
  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>
</html>