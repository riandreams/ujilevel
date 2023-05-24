<?php
include 'config.php';

if (isset($_POST['submitdaftar'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	// Escape user inputs to prevent SQL injection
	$username = mysqli_real_escape_string($conn, $username);
	$email = mysqli_real_escape_string($conn, $email);

	// Hash password using bcrypt
	$enkripsi = password_hash($password, PASSWORD_DEFAULT);

	// Insert user data into table using prepared statements
	$stmt = $conn->prepare("INSERT INTO tabel_user (username, password, email) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $username, $enkripsi, $email);
	$stmt->execute();
	$stmt->close();

	session_start();
	$_SESSION['user'] = $username;
	header("Location: index.php");
}
?>