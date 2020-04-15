<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login Page</title>
</head>
<body>
 
<script src="js/sweetalert2.js"></script>

 <?php
 
 // menghubungkan dengan koneksi
include "koneksi.php";

// menangkap data yang dikirim dari form
$email = $_POST['email']; 
$password2 = md5($_POST['password']);


session_start();

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * from daftarlomba where email='$email' and  password='$password2' "); 
//or die (mysqli_error($koneksi)) ; 

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);  

	if ($cek> 0){
		$_SESSION['email'] = $email;
		echo "<script>
			Swal.fire('Login Sukses !', 'Selamat Datang, di Admin Panel PESERTA SI FEST 2019.', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
		//header("location:index.php"); 
	}
	 
	else {
		echo "<script>
			Swal.fire('Login Gagal !', 'Email atau Password Salah.', 'error').then(function(){
				setTimeout(document.location.href = 'login.php', 100);
				})
				</script>";
	}

?>
</body>
</html>