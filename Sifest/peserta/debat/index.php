<?php 
include "koneksi.php";
include "function.php";

session_start();

$data = mysqli_fetch_array(data($_GET)); 
 
        $email2 = $_SESSION['email'];
        $query2  = "SELECT * FROM debat WHERE email = '$email2'";
        $result = mysqli_query($koneksi, $query2);

$dataq = mysqli_fetch_array($result);

if (!isset($_SESSION['email'])){
header ("location:../login.php");
} 
elseif ($data['lomba'] == 'esport') {
  header("location:../esport/index.php");
}
elseif ($data['lomba'] == 'essay') {
  header("location:../essay/index.php");
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
       

        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">Data Team</div>
        <ul class="sidebar-menu list-unstyled">
              
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted active"><i class="o-user-1 mr-3 text-gray"></i><span>Data Team Debat</span></a></li> 
               
                
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
                    <h3 class="h6 text-uppercase mb-0">Data Team</h3>
                  </div>
                  <div class="card-body">
                    <form  class="form-horizontal">

                        <br>
                          <?php  
                            if ($dataq['nama1'] == NULL) { ?>
                             <button type="button" class="btn btn-info" data-toggle="modal" data-target='#tambah'>Tambah Data</button><br><br> <?php
                            }
                            else { ?>

                            
                            <?php
                            }
                           ?>
                          <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit Data Team</button>-->  
                        <br><br><br><br>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Ketua</label>
                        <div class="col-md-9">
                          <input type="text" name="nama1" value=" <?= $dataq['nama1']; ?>  " placeholder="Nama Ketua" class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Anggota 1</label>
                        <div class="col-md-9">
                          <input type="text"  name="nama2" value=" <?= $dataq['nama2']; ?>  " class="form-control" disabled="">
                        </div>
                      </div> 
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Anggota 2</label>
                        <div class="col-md-9">
                          <input type="text"  name="nama3" value=" <?= $dataq['nama3']; ?>  " class="form-control" disabled="">
                        </div>
                      </div> 
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Universiteas / Asal Sekolah</label>
                        <div class="col-md-9">
                          <input type="text" name="asal1" value=" <?= $dataq['asal1']; ?>  " class="form-control" disabled=""> 
                        </div>
                      </div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Email</label>
                        <div class="col-md-9">
                          <input type="text" name="email" value=" <?= $dataq['email']; ?>  " class="form-control" disabled=""> 
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">No HP</label>
                        <div class="col-md-9">
                          <input type="text" name="no1" value=" <?= $dataq['no1']; ?>  " class="form-control" disabled="">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">ID Line</label>
                        <div class="col-md-9">
                          <input type="text"  name="line1" value=" <?= $dataq['line1']; ?>  " class="form-control" disabled="">
                        </div>
                      </div> 
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

<!--Start Modal-->

                            <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Data Team Debat</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="prosesindex.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label" >Nama Ketua :</label>
                                                        <input type="text" class="form-control" id="field-1" name="nama1"  required="">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-6" class="control-label">Nama Anggota 1 :</label>
                                                        <input type="text" class="form-control" name="nama2" id="field-6"   required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-7" class="control-label">Nama Anggota 2 :</label>
                                                        <input type="text" class="form-control" name="nama3" id="field-7"   required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Universitas / Asal Sekolah :</label>
                                                        <input type="text" class="form-control" name="asal1" id="field-2"   required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">No HP :</label>
                                                        <input type="text" class="form-control" id="field-3" name="no1"   required="">
                                                    </div>
                                                </div> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-4" class="control-label">ID Line :</label>
                                                        <input type="text" class="form-control" id="field-4" name="line1"  required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-5" class="control-label">Email :</label>
                                                        <input type="email" class="form-control" name="email" id="field-5" placeholder=""   required="">Isi email saat pertama mendaftar!
                                                    </div>

                                                </div>
                                            </div>

                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">KIRIM</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Data Team Debat</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="editindex.php" method="POST">
                                                         <input type="hidden" name="id" value="<?= $dataq['id'];?>"  class="form-control"  disabled="">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label" >Nama Ketua :</label>
                                                        <input type="text" class="form-control" id="field-1" name="nama1" value=" <?= $dataq['nama1']; ?> "  required="">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-6" class="control-label">Nama Anggota 1 :</label>
                                                        <input type="text" class="form-control" name="nama2" id="field-6" value=" <?= $dataq['nama2']; ?> "  required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-7" class="control-label">Nama Anggota 3 :</label>
                                                        <input type="text" class="form-control" name="nama3" id="field-7" value=" <?= $dataq['nama3']; ?> "  required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Universitas / Asal Sekolah :</label>
                                                        <input type="text" class="form-control" name="asal1" id="field-2" value=" <?= $dataq['asal1']; ?> "  required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">No HP :</label>
                                                        <input type="text" class="form-control" id="field-3" name="no1" value=" <?= $dataq['no1']; ?> "  required="">
                                                    </div>
                                                </div> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-4" class="control-label">ID Line :</label>
                                                        <input type="text" class="form-control" id="field-4" name="line1" value=" <?= $dataq['line1']; ?> " required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-5" class="control-label">Email :</label>
                                                        <input type="email" class="form-control" name="email" id="field-5" value=" <?= $dataq['email']; ?> "  required="">
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