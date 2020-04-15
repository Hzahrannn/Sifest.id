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
        
        $id         = $_POST['id'];
		$namateam   = $_POST['namateam'];
		$ketua 	    = $_POST['ketua']; 
		$idakun 	= $_POST['idakun'];
		$no	  	    = $_POST['no'];
		$line  	    = $_POST['line'];
		$email  	= $_POST['email'];
		$asal		= $_POST['asal'];
		$anggota1	= $_POST['anggota1'];
		$anggota2   = $_POST['anggota2'];
		$anggota3   = $_POST['anggota3'];
		$anggota4   = $_POST['anggota4'];
		$anggota5   = $_POST['anggota5'];

		 

			 

			$query = "UPDATE esport SET `namateam`='$namateam', `ketua`='$ketua', `idakun`='$idakun', `no`='$no', `line`='$line', `email`='$email', `asal`='$asal', `anggota1`='$anggota1', `anggota2` = '$anggota2', `anggota3`='$anggota3', `anggota4`='$anggota4', `anggota5`='$anggota5' WHERE id ='$id' ";
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