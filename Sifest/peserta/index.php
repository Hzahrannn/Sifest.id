<?php
include "koneksi.php";
include "function.php";

session_start();

$data = mysqli_fetch_array(data($_GET));

if (!isset($_SESSION['email'])){
header ("location:login.php");
}
elseif ($data['lomba'] == 'essay') {
  header("location:essay/index.php");
}
elseif ($data['lomba'] == 'esport') {
  header("location:esport/index.php");
}
elseif ($data['lomba'] == 'debat') {
  header("location:debat/index.php");
}

?> 