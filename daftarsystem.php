<?php
session_start();

// Koneksi ke database MySQL
$host = 'localhost'; // Ganti dengan host database kamu
$user = 'root'; // Ganti dengan username database kamu
$pass = ''; // Ganti dengan password database kamu
$dbname = 'database_topup'; // Ganti dengan nama database kamu

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Ambil data dari form daftar akun
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Cek apakah username sudah ada di dalam database
$query = "SELECT * FROM tabel_user WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
	// Jika username belum terdaftar, masukkan data ke dalam tabel users
	$query = "INSERT INTO tabel_user (username, password, email) VALUES ('$username', '$password', '$email')";
	$result = mysqli_query($conn, $query);

	if ($result) {
		// Jika berhasil, arahkan ke halaman selamat datang
		$_SESSION['username'] = $username;
		header('Location: index.php');
	} else {
		// Jika gagal, arahkan kembali ke halaman daftar akun
		header('Location: register.html');
	}
} else {
	// Jika username sudah terdaftar, arahkan kembali ke halaman daftar akun
	header('Location: register.html');
}

mysqli_close($conn);
?>
