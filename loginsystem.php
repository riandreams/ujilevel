<?php
session_start();

// Koneksi ke database MySQL
$host = 'localhost'; // Ganti dengan host database kamu
$user = 'root'; // Ganti dengan username database kamu
$pass = ''; // Ganti dengan password database kamu
$dbname = 'database_topup'; // Ganti dengan nama database kamu

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Ambil data dari form login
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Cek apakah username dan password benar
$query = "SELECT * FROM tabel_user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
	// Jika benar, set session dan arahkan ke halaman selamat datang
	$_SESSION['username'] = $username;
	header('Location: index.php');
} else {
	// Jika salah, arahkan ke halaman login kembali
	header('Location: register.php');
    echo "<p>Username atau Password salah! silahkan coba lagi.</p>";
}

mysqli_close($conn);
?>
