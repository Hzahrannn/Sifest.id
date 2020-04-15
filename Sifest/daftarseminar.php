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
$metode = "online";
date_default_timezone_set('Asia/Jakarta');
$status = "Belum Lunas";
$waktu = date('Y-m-d H:i:s');


// mysqli_query($koneksi,"insert into surat values('','$judul','$konten', '$kat', '$link', '$waktu')");

//echo "<script>alert('Data Berhasil Ditambah!');location='index.php';</script>";

$sql = "INSERT INTO seminar VALUES ('','$nama','$email', '$univ', '$no', '$line', '$metode', '$status')";
$result = mysqli_query($koneksi,$sql);
	
	if ($result) {
		echo "<script>
			Swal.fire('Berhasil Menndaftar !', 'CP: Mahdiyah Afifah Sari (082279727557) Novita Sari (082178575062)', 'success').then(function(){
				setTimeout(document.location.href = 'seminar.php', 100);
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