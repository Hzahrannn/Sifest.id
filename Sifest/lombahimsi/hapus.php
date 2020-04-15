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




$id=$_GET['id'];
$status = "Belum Bayar";


$sql = "UPDATE daftarlomba set status='$status' where id='$id'";
$result = mysqli_query($koneksi,$sql);
	
	if ($result) {
		echo "<script>
			Swal.fire('Berhasil Update', '', 'success').then(function(){
				setTimeout(document.location.href = 'daftarlunas.php', 100);
				})
				</script>";
	}
	else{
		echo "<script>
			Swal.fire('Gagal Checkout', 'Coba Lagi!', 'error').then(function(){
				setTimeout(document.location.href = 'daftarlunas.php', 100);
				})
				</script>";
	}
?>

</body>
</html>