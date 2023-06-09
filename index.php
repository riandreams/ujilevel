
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POKERASTORE</title>
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Work+Sans:wght@600&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="source/assets/css/style_index.css">

  <!-- 
    - preload images_index
  -->
  <link rel="preload" as="image" href="source/assets/images_index/hero-banner.png">
  <link rel="preload" as="image" href="source/assets/images_index/hero-banner-bg.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header active" data-header>
    <div class="container">

      <a href="#" class="logo">
        <h3 class="">POKERA<span class="logo-kanan">STORE</span></h3>
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="home-link navbar-link" data-nav-link>home</a>
          </li>
          <li class="navbar-item">
            <a href="#topup" class="topup-link navbar-link" data-nav-link>topup</a>
          </li>
        </ul>
      </nav>

      <?php
      session_start();

      // Cek apakah pengguna sudah login
      if (isset($_SESSION['user'])) {
        $username = $_SESSION['user'];
        echo 'Halo, ' . $username . '!';
        echo '<a href="logout.php" class="btn" data-btn>Logout</a>';
      } else {
        echo '<a href="#" class="btn" data-btn>Login</a>';
      }
      ?>


      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <div class="hero has-before" id="home">
        <div class="container">

          <p class="section-subtitle">POKERASTORE</p>

          <h1 class="h1 title hero-title">Tempat Top Up nya <br> True Gamers!</h1>

          <!-- <a href="#" class="btn" data-btn>Join With Us</a> -->

          <div class="hero-banner">
            <img src="source/assets/images_index/hero-banner.png" width="850" height="414" alt="hero banner" class="w-100">

            <img src="source/assets/images_index/hero-banner-bg.png" alt="" class="hero-banner-bg">
          </div>

        </div>
      </div>

      <!-- Top UP -->

      <section class="section-topup">
        <div class="container">
          <div class="header-topup">
            <div id="topup" class="logo-topup">
              <h1>Top Up</h1>
              <div class="border-bottom"></div>
            </div>
          </div>
          <div class="main-topup">
            <div class="main-topup-container">
              <div class="list-game-topup">
                <div class="kotak3">
                  <div class="kotak1">
                    <a href="../Topup/index.html"><img class="icon-game" src="source/assets/images_index/mlbb-icon.jpeg"
                        alt=""></a>
                    <div class="kotak-bawah">
                      <p class="judul-game mx-7">Mobile Legends</p>
                      <p class="judul-game mt-1">Bang Bang</p>
                    </div>
                  </div>
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/lol.jpeg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx-7">Leauge Of Legends</p>
                      <p class="judul-game mt-1">Wildrift</p>
                    </div>
                  </div>
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/aov-1.jpg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx-7">Arena Of Valor</p>
                      <p class="judul-game mt-1">Garena</p>
                    </div>
                  </div>
                </div>
                <div class="kotak2">
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/pubg.png" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx">PUBG Mobile</p>
                    </div>
                  </div>
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/ff.jpeg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx-7">Free Fire</p>
                      <p class="judul-game mt-1">Indonesia</p>
                    </div>
                  </div>
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/valo.jpeg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx">Valorant</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-game-topup">
                <div class="kotak3">
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/genshin.jpeg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx">Genshin Impact</p>
                    </div>
                  </div>
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/honkai.jpeg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx">Honkai Impact 3</p>
                    </div>
                  </div>
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/starrail.jpeg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx">Star Rail</p>
                    </div>
                  </div>
                </div>
                <div class="kotak2">
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/marvel.jpg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx">Marvel Super War</p>
                    </div>
                  </div>
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/ragnarog.jpg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx-7">Ragnarog M:</p>
                      <p class="judul-game mt-1">Eternal Love</p>
                    </div>
                  </div>
                  <div class="kotak1">
                    <img class="icon-game" src="source/assets/images_index/manga.jpg" alt="">
                    <div class="kotak-bawah">
                      <p class="judul-game mx">MangaToon</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>
  <!-- footer -->
  <footer class="footer">

    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">

          </a>

          <p class="footer-text">
            POKERA STORE adalah tempat top up games yang aman, murah dan terpercaya. Proses cepat 1-3 Detik. Open 24
            jam. Payment terlengkap. Jika ada kendala silahkan hubungi contact yang ada pada bawah website ini.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Usefull Links</p>

          <ul>

            <li>
              <a href="#" class="footer-link">Help Center</a>
            </li>

            <li>
              <a href="#" class="footer-link">Privacy and Policy</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms of Use</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contact Us</a>
            </li>

          </ul>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Contact Us</p>

          <div class="contact-item">
            <span class="span">Location:</span>

            <address class="contact-link">
              <a href="#" class="contact-link">Jakarta</a>
            </address>
          </div>

          <div class="contact-item">
            <span class="span">Contact Us:</span>

            <a href="mailto:#" class="contact-link">pokari@gmail.com</a>
          </div>

          <div class="contact-item">
            <span class="span">Phone:</span>

            <a href="tel:+62" class="contact-link">+62 821-5566-7788</a>
          </div>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Ingin mendapat kan nontifikasi setiap hari nya?</p>

          <form action="index.html" method="get" class="footer-form">
            <input type="email" name="email_address" required placeholder="Your Email" autocomplete="off"
              class="input-field">

            <button type="submit" class="btn" data-btn>Kirim</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="coppyright">
          <p class="kecil">
            Copyright © 2023 by POKERA STORE. All Rights Reserved - Terms and conditions - <a class="copyright-link"
              href="#">
              <p>Privacy Policy</p>
            </a>
          </p>
        </div>
      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - #CUSTOM CURSOR
  -->

  <div class="cursor" data-cursor></div>





  <!-- 
    - custom js link
  -->
  <script src="source/assets/js/script_index.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>