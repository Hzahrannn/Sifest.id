 <!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
</head>
<body>
<script src="js/sweetalert2.js"></script>

<?php
session_start();
session_destroy();
echo "<script>
			Swal.fire('Terimakasih.', 'Anda berhasil Logout !', 'success').then(function(){
				setTimeout(document.location.href = 'login.php', 100);
				})
				</script>";

//echo "<meta http-equiv='refresh' content='1 url=landing'>";
?>

</body>
</html> 