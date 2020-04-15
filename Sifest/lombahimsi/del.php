<script src="assets/js/sweetalert2.js"></script>
<?php

include 'koneksi.php';
$id  = $_GET['id'];


$sql = "DELETE FROM seminaroff where id='$id'";
$result = mysqli_query($koneksi,$sql);
	
header("location:daftarof.php");
?>