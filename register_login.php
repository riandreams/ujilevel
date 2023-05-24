<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./Aut/css/Untitled.css" />
  <title>Registrasi/Login</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="POST" action="loginsystem.php" class="sign-in-form">
          <h2 class="title">Masuk</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="username" type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password" />
          </div>
          <input name="submitlogin" type="submit" value="Login" class="btn3 solid" />

          <p class="social-text">Atau Masuk dengan platform sosial</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="daftarsystem.php" method="POST" name="form1" class="sign-up-form">
          <h2 class="title">Daftar</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" />
          </div>
          <input type="submit" name="submitdaftar" class="btn2" value="Daftar" />

          <p class="social-text">Atau Daftar dengan platform sosial</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Baru di sini?</h3>
          <p class="paragraft">Ayo buat akun mu di sini hanya dengan menggunakan email mu!</p>
          <button class="btn transparent" id="sign-up-btn">
            Daftar
          </button>
        </div>
        <img src="./Aut/css/img/hero-banner.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Salah Satu Dari kita ?</h3>
          <p>
            Ayo masuk ke akun anda yang sudah anda bikin di sini !
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Masuk
          </button>
        </div>
        <img src="./Aut/css/img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="./Aut/js/untitled.js"></script>
</body>

</html>