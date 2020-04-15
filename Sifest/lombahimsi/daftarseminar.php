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
	header("Location: index.php");
}

$nama = $_POST['nama'];
$asal= $_POST['univ'];
$no = $_POST['no'];
$email = $_POST['email'];
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');


// mysqli_query($koneksi,"insert into surat values('','$judul','$konten', '$kat', '$link', '$waktu')");

//echo "<script>alert('Data Berhasil Ditambah!');location='index.php';</script>";

$sql = "INSERT INTO seminaroff VALUES ('','$nama','$asal', '$no', '$email')";
$result = mysqli_query($koneksi,$sql);
	
	if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Berhasil Menndaftar !', 'success').then(function(){
				setTimeout(document.location.href = 'daftarof.php', 100);
				})
				</script>";
	}
	else{
		echo "<script>
			Swal.fire('Gagal.', 'Gagal Mendaftar !', 'error').then(function(){
				setTimeout(document.location.href = 'daftarof.php', 100);
				})
				</script>";
	}
?>

</body>
</html>