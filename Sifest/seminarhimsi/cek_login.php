 <?php
 
 // menghubungkan dengan koneksi
include "koneksi.php";

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)){
	echo "<script>alert('Username belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
	else if (empty($password)){
		echo "<script>alert('Password belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	}
	else {
		session_start();

		// menyeleksi data admin dengan username dan password yang sesuai
		$data = mysqli_query($koneksi, "SELECT * from admin where username='$username' and password='$password'");

		// menghitung jumlah data yang ditemukan
		$cek = mysqli_num_rows($data);

	if ($cek> 0){
		$_SESSION['username'] = $username;
		header("location:index.php"); 
	}
	else {
		echo "<script>alert('Username atau Password salah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	}
}
?>