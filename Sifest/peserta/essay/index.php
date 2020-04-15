<?php
include "koneksi.php";
include "function.php";

session_start();
 

$data = mysqli_fetch_array(data($_GET)); 

$dataq = mysqli_fetch_array(dataessay($_GET));



if (!isset($_SESSION['email'])){
header ("location:login.php");
} 
elseif ($data['lomba'] == 'esport') {
  header("location:../esport/index.php");
}
elseif ($data['lomba'] == 'debat') {
  header("location:../debat/index.php");
}

?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel SI FEST 2019</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <script src="../js/sweetalert2.js"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <?php 
        if ($data['status'] == 'Belum Bayar') {
          echo "
            <script>
              Swal.fire('Oops !', 'Silahkan lakukan pembayaran terlebih dahulu.', 'error').then(function(){
                setTimeout(document.location.href = '../../kontak.php', 100);
                })
            </script>";
}
     ?>
   <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base"> Dashboard</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item">
            <form id="searchForm" class="ml-auto d-none d-lg-block">
              <div class="form-group position-relative mb-0">
                <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0"><i class="o-search-magnify-1 text-gray text-lg"></i></button>
                <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">
              </div>
            </form>
          </li>
          
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"> 
              <a href="logout.php" class="dropdown-item">Logout</a>
               
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3"> 
       
<?php
$cari = $_SESSION['email'];
       $sql = "SELECT * FROM essay where tanda like '%".$cari."%' ";
											$query = mysqli_query($koneksi,$sql);
											$data = array();
											while(($row = mysqli_fetch_array($query)) != null){
												$data[] = $row;
											} ?>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">Lengkapi Data</div>
        <ul class="sidebar-menu list-unstyled">
              <?php 

               ?>
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted active"><i class="o-user-1 mr-3 text-gray"></i><span>Data Diri</span></a></li>
              <li class="sidebar-list-item"><a href="dataessay.php" class="sidebar-link text-muted"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Input Essay</span></a></li> 
                
                </ul>
             </div>

      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row"> 
              <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Data Diri</h3>
                  </div>
                  <div class="card-body">
                    <form action="prosesindex.php" method="post" class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Lengkap</label>
                        <div class="col-md-9">
                          <input type="text" name="nama" placeholder="Nama" value=" <?php echo $dataq['nama']; ?> " class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Email</label>
                        <div class="col-md-9">
                          <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $dataq['email']; ?>"> 
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Universitas / Asal Sekolah</label>
                        <div class="col-md-9">
                          <input type="text" name="univ" placeholder="Universitas / Asal Sekolah" class="form-control" value="<?php echo $dataq['univ'];?>"> 
                        </div>
                      </div>
                       
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">No HP</label>
                        <div class="col-md-9">
                          <input type="text" name="no" placeholder="No HP" class="form-control" value="<?php echo $dataq['no']; ?>">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">ID Line</label>
                        <div class="col-md-9">
                          <input type="text"  name="line" placeholder="ID Line" class="form-control" value="<?php echo $dataq['line']; ?>">
                        </div>
                      </div> 
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto"> 
                          <?php 
                            if ($dataq['nama'] == NULL) { ?>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <?php
                            }
                            else { ?>

                            
                            <?php
                            }
                           ?>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Your company &copy; 2018-2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <!--Start Modal-->
 


                            <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data Diri</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="editindex.php" method="POST">
                                                        <input type="hidden" class="form-control" id="field-1" name="id" value=" <?= $dataq['id']; ?> "  required="">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label" >Nama Lengkap :</label>
                                                        <input type="nama" class="form-control" id="field-1" name="nama" value=" <?= $dataq['nama']; ?> "  required="">
                                                    </div>
                                                </div> 
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Universitas / Asal Sekolah :</label>
                                                        <input type="text" class="form-control" name="univ" id="field-2" value=" <?= $dataq['univ']; ?> "  required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">No HP :</label>
                                                        <input type="text" class="form-control" id="field-3" name="no" value=" <?= $dataq['no']; ?> "  required="">
                                                    </div>
                                                </div> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-4" class="control-label">ID Line :</label>
                                                        <input type="text" class="form-control" id="field-4" name="line" value=" <?= $dataq['line']; ?> " required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-5" class="control-label">Email :</label>
                                                        <input type="email" class="form-control" name="email" id="field-5" value=" <?= $dataq['email']; ?> "  required="">Diisi email saat  pertama mendaftar!
                                                    </div>

                                                </div>
                                            </div>

                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">EDIT</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>   

<!--End Modal-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>