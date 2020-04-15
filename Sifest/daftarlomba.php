
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 
<script src="assets/js/sweetalert2.js"></script>

<?php  

include 'koneksi.php';


if (!isset($_POST['nama'])) {
	header("Location: seminar.php");
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$univ= $_POST['univ'];
$no = $_POST['no'];
$line = $_POST['line'];
date_default_timezone_set('Asia/Jakarta');
$status = "Belum Bayar";
$password = md5($_POST['password']);
$lomba = $_POST['lomba'];
$waktu = date('Y-m-d H:i:s');


// mysqli_query($koneksi,"insert into surat values('','$judul','$konten', '$kat', '$link', '$waktu')");

//echo "<script>alert('Data Berhasil Ditambah!');location='index.php';</script>";

$sql = "INSERT INTO daftarlomba VALUES ('','$nama','$email', '$univ', '$password','$lomba','$status', '$no', '$line')";
$result = mysqli_query($koneksi,$sql);
	
	if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Berhasil Menndaftar, Silahkan Hubungi Narahubung Untuk Melanjutkan Pembayaran !', 'success').then(function(){
				setTimeout(document.location.href = 'kontak.php', 100);
				})
				</script>";
	}
	else{
		echo "<script>
			Swal.fire('Gagal.', 'Gagal Mendaftar !', 'error').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}
?>

</body>
</html>