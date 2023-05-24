<?php
include 'config.php';

if (isset($_POST['submitlogin'])) {

	$user = $_POST['username'];
	$pass = $_POST['password'];

	// Escape user inputs to prevent SQL injection
	$user = mysqli_real_escape_string($conn, $user);

	$stmt = $conn->prepare("SELECT username, password FROM tabel_user WHERE username = ?");
	$stmt->bind_param("s", $user);
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$username1 = $row['username'];
		$enkripsi = $row['password'];

		if (password_verify($pass, $enkripsi)) {
			session_start();
			$_SESSION['user'] = $username1;
			header("Location: index.php");
			exit;
		} else {
			echo "Password salah.";
		}
	}
}
?>