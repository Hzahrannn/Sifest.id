<?php
include "koneksi.php";

session_start();

$email = $_SESSION['email'];
$query = "SELECT * FROM daftarlomba WHERE email = '$email'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result);

if (!isset($_SESSION['email'])){
	header ("location:login.php");
}

elseif ($data['status'] == 'Belum') {
	header("location:kontak.php");
}
?>

halo

<a href="logout.php">logout<a>