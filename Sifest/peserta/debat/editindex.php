<!DOCTYPE HTML>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>Proses - Admin Panel SI FEST</title>
</head>
<body>
 
<script src="../js/sweetalert2.js"></script>
		<?php 
		include 'koneksi.php';
        $id     = $_POST['id'];
		$nama1 	= $_POST['nama1'];
		$nama2 	= $_POST['nama2'];
		$nama3 	= $_POST['nama3'];
		$email = $_POST['email'];
		$asal1	= $_POST['asal1']; 
		$no1	= $_POST['no1'];
		$line1  = $_POST['line1'];

		 

			 

			$query = "UPDATE debat SET `nama1`='$nama1', `asal1`='$asal1', `email`='$email', `no1`='$no1', `line1`='$line1', `nama2`='$nama2', `nama3`='$nama3' where id = '$id' ";
			$hasil = mysqli_query($koneksi, $query);

			if($hasil){
						echo "
						<script>
							Swal.fire('Data Berhasil di Edit. !', 'Terimakasih.', 'success').then(function(){
								setTimeout(document.location.href = 'index.php', 100);
								})
						</script>";
					}
			else{
						echo "
						<script>
							Swal.fire('Data Gagal di Edit !', 'Silahkan coba lagi.', 'error').then(function(){
								setTimeout(document.location.href = 'index.php', 100);
								})
						</script>";
					}
		
		?>
 
	</body>
</html>