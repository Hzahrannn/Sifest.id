<!DOCTYPE HTML>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>Proses - Admin Panel SI FEST</title>
</head>
<body>
 
<script src="sweetalert2.js"></script>
		<?php 
		include 'koneksi.php';

		$nama  = $_POST['nama'];
		$email = $_POST['email'];
		$univ = $_POST['univ']; 
		$no	   = $_POST['no'];
		$line  = $_POST['line'];

		 

			$query = "INSERT INTO essay VALUES ('', '$nama', '$email', '$univ', '$no', '$line', '')";
			$hasil = mysqli_query($koneksi, $query);

			if($hasil){
						echo "
						<script>
							Swal.fire('Data Berhasil disimpan. !', 'Terimakasih.', 'success').then(function(){
								setTimeout(document.location.href = 'index.php', 100);
								})
						</script>";
					}
			else{
						echo "
						<script>
							Swal.fire('GAGAL !', 'Jika mengalami  kesulitan  silahkan chat admin.', 'error').then(function(){
								setTimeout(document.location.href = 'dataessay.php', 100);
								})
						</script>";
					}
		
		?>
 
	</body>
</html>