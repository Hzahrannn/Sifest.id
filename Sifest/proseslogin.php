<?php
	session_start();
	require_once( "koneksi.php");
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql= "SELECT * FROM daftarlomba WHERE email = '$email'";
	$query = $koneksi->query($sql);
	$hasil = $query->fetch_assoc();
	if($query->num_rows == 0) {
		echo "<div align = 'center' >email Belum Terdaftar!<a href='index.php'>Back</a>";
	} else {
		if ($password <> $hasil['password']){
			echo "<div align = 'center' >Password Salah<a href='index.php'>Back</a>";
		}
		else 
		$_SESSION ['email'] = $hasil['email'];
		{
		header('location: masuk.php');
		}
	}
	?>