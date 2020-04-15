<?php 
    
$koneksi = mysqli_connect("localhost","sifestid","sinergihimsi.2020","sifestid_himsi");

	function aman($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}

function dataessay($data) {
    global $koneksi;

        $nim = $_SESSION['email'];
        $query  = "SELECT * FROM essay WHERE email = '$nim'";
        $result = mysqli_query($koneksi, $query);
         

        return $result;

}
 

function data($data) {
	global $koneksi;

		$nim = $_SESSION['email'];
        $query  = "SELECT * FROM daftarlomba WHERE email = '$nim'";
        $result = mysqli_query($koneksi, $query);
         

        return $result;

}

function edit($edit) {
	global $koneksi;

            $nim = $_GET['nim'];
            $dat = "SELECT * FROM user WHERE nim='$nim'";
            $sql = mysqli_query($koneksi,$dat);
            if(mysqli_num_rows($sql) == 0){
              header("Location: index.php");
                //include('index.php');
            }
            else{
                $row = mysqli_fetch_assoc($sql);
            }
            if(isset($_POST['save'])){
                $nim		= $_POST['nim'];
                $nama       = $_POST['nama'];
                $jk         = $_POST['jk'];
                $no         = $_POST['no'];
                $line       = $_POST['line'];

            $cek = mysqli_query($koneksi, "UPDATE user SET `nim`='$nim', `nama`='$nama', `jk`='$jk', `no`='$no', `line`='$line'  
            			WHERE nim='$nim'") 
            		or die (mysqli_error());

                if($cek){
                   header("Location: profile.php?nim=".$_GET['nim']."&pesan=sukses");
                }
                else{
                    echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
                }
            }
            
            if(isset($_GET['pesan']) == 'sukses'){
                echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
            }
            
}

?>

 