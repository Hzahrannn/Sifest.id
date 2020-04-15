<!DOCTYPE HTML>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>Proses - Admin Panel SI FEST</title>
</head>
<body>
 
<script src="../../assets/js/sweetalert2.js"></script>
		<?php 
		include 'koneksi.php';
		
        $id  = $_POST['id'];
		$nama 	= $_POST['nama']; 
		$email = $_POST['email'];
		$univ	= $_POST['univ']; 
		$no	= $_POST['no'];
		$line  = $_POST['line'];
		

		 

			 

			$query = "UPDATE essay SET `nama`='$nama', `email`='$email', `univ`='$univ', `no`='$no', `line`='$line' where id = '$id' ";
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