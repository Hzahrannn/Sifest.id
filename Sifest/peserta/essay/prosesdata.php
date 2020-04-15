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
 
		$email 	  = $_POST['email']; 

		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('rar','zip','docx','pdf','doc');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);

			/*$query = "INSERT INTO `essay` (`nama`, `email`, `file`)
					 VALUES ('$namaa', '$email', '$nama') where email ='$email'"; */

			$query ="UPDATE essay SET  email='$email', file='$nama' where email = '$email' ";
			$hasil = mysqli_query($koneksi, $query);

					if($hasil){
						echo "
						<script>
							Swal.fire('File Berhasil dikirimkan. !', 'Terimakasih.', 'success').then(function(){
								setTimeout(document.location.href = 'index.php', 100);
								})
						</script>";
					}else{
						echo "
						<script>
							Swal.fire('Upload Bukti Pembayaran GAGAL !', 'Jika mengalami  kesulitan  silahkan chat admin.', 'error').then(function(){
								setTimeout(document.location.href = 'dataessay.php', 100);
								})
						</script>";
					}
				}else{
					echo "
						<script>
							Swal.fire('Ukuran File terlalu Besar !', 'Silahkan coba lagi.', 'error').then(function(){
								setTimeout(document.location.href = 'dataessay.php', 100);
								})
						</script>";
				}
			}else{
					echo "
						<script>
							Swal.fire('FILE YANG DIBOLEHKAN .RAR /  .ZIP !', 'Silahkan coba lagi.', 'error').then(function(){
								setTimeout(document.location.href = 'dataessay.php', 100);
								})
						</script>"; 
			}
		}
		?>
 
	</body>
</html>