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

elseif (!isset($data['status'] = 'Belum')) {
	header("location:masuk.php");
}
?>