<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from www.themeon.net/nifty/v2.9.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jan 2019 07:00:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo.min.css" rel="stylesheet">

    <!--DataTables [ OPTIONAL ]-->
    <link href="plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

            
    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">HIMSIUNSRI</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                      

                    </ul>
                    <ul class="nav navbar-top-links">






                        

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">               
                  <div class="pad-all text-center">
                        <h3>Welcome back to the Dashboard.</h3>
                        <p1>Scroll down to see quick links and overviews of your Server, To do list, Order status or get some Help using si.</p>
                    </div>
                    </div>             
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

					   
					
					    <div class="row">
					        <div class="col-md-3">
					            <div class="panel panel-warning panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="demo-pli-add-user icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">
										
										<?php 
										
										$table = "seminaroff";
											$sql = "SELECT * FROM $table";
											$query = mysqli_query($koneksi,$sql);
											$data = array();
											while(($row = mysqli_fetch_array($query)) != null){
												$data[] = $row;
											}
											$count = count($data);										
										echo "$count";
										
										?>
										
										</p>
					                    <p class="mar-no">Peserta Seminar<br>Offline</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-info panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        
                                            <i class="demo-pli-file-word icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold"><?php 
										
										$table = "seminar";
										$cari = "Telah Lunas";
										
											$sql = "SELECT * FROM $table where status like '%".$cari."%' ";
											$query = mysqli_query($koneksi,$sql);
											$data = array();
											while(($row = mysqli_fetch_array($query)) != null){
												$data[] = $row;
											}
											$count = count($data);										
										echo "$count";
										
										?></p>
					                    <p class="mar-no">Pendaftar Online Yang Lunas</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-mint panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="demo-pli-camera-2 icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">0</p>
					                    <p class="mar-no">Coming</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-danger panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="demo-pli-video icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">0</p>
					                    <p class="mar-no">Coming</p>
					                </div>
					            </div>
					        </div>
					
					    </div>
					
					<!-- Basic Data Tables -->
                    <!--===================================================-->
                    <div class="panel">
                        <div class="panel-heading">
                            <h1 class="panel-title">Data Peserta Seminar Daftar Offline</h1> 
                        </div>
                        <div class="panel-body">
                            <table id="demo-dt-basic" class="table table-striped table-bordered"  >
                                <thead>
                                    <tr>
                                         
                                        <th>Nama</th>
                                        <th>Asal</th>
                                        <th>No Telpon</th>
                                        <th >Email</th>
                                        <th >Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                
                    <?php
					
                         $urut = (isset($_GET['id']) ? strtolower($_GET['id']) : NULL); 
                            if($urut){
                                $sql = mysqli_query($koneksi, "SELECT * FROM seminaroff ORDER BY id ASC");
                            }else{
                                $sql = mysqli_query($koneksi, "SELECT * FROM seminaroff ORDER BY id ASC");
                            }
                            if(mysqli_num_rows($sql) == 0){
                                echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
                            }else{
                                $no = 1;
                                while($row = mysqli_fetch_assoc($sql)){
                                    echo '
                                    <tr>
                                        
                                        <td>'.$row['nama'].'</td>
                                        <td>'.$row['asal'].'</td>
                                        <td>'.$row['no'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td><a href="del.php?id='.$row['id'].'"><button> Hapus </button></a></td>
                                         
                                        
                                    </tr>
                                    ';
                                    $no++;
                                }
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div> </div>
					
					
				<!--Start Modal-->

                            <div id="daftar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Daftar Peserta Seminar</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="daftarseminar.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label" >Nama :</label>
                                                        <input type="nama" class="form-control" id="field-1" name="nama" placeholder="Nama  " required="">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">Email :</label>
                                                        <input type="email" class="form-control" name="email" id="field-3" placeholder="Email" required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-4" class="control-label">Asal Universitas / Sekolah :</label>
                                                        <input type="text" class="form-control" id="field-4" name="univ" placeholder="Universitas / Sekolah" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-5" class="control-label">No HP :</label>
                                                        <input type="text" class="form-control" id="field-5" name="no" placeholder="Nomor HP" required="">
                                                    </div>
                                                </div> 
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">DAFTAR</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
            </div>
			
			<center> 
                    <div class="form-group">
                        <button type="button" class="theme-btn btn-style-three" data-toggle="modal" data-target="#daftar"> Masukan Data </button> 
                    </div>  
                </center>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================-->
           

            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">


                    <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                    <!--It will only appear on small screen devices.-->
                    <!--================================
                    <div class="mainnav-brand">
                        <a href="index.html" class="brand">
                            <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                            <span class="brand-text">Nifty</span>
                        </a>
                        <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                    </div>
                    -->



                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="img/profile-photos/1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Admin</p>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                       
                                        <a href="logout.php" class="list-group-item">
                                        </a>
                                    </div>
                                </div>


                               


                                <ul id="mainnav-menu" class="list-group">
						
						            <!--Category name-->
						            <li class="list-header">Navigation</li>
						
						            <!--Menu list item-->
						            <li class="active-sub">
						                
                                        <a href="index.php">
                                            <i class="demo-pli-gear"></i>
                                            <span class="menu-title">
                                                Dashboard
                                            </span>
                                        </a>
                                    </li>
						
						         
						            
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">Components</li>
						
						           
						            
                                      <!--Menu list item-->
                                     <li >
                                        
                                        <a href="daftaron.php">
                                            <i class="demo-pli-mail"></i>
                                            <span class="menu-title">
                                                Pendaftar Online Yang Lunas
                                            </span>
                                        </a>
                                    </li>
									<li >
                                        
                                        <a href="daftarof.php">
                                            <i class="demo-pli-mail"></i>
                                            <span class="menu-title">
                                                Pendaftar Offline
                                            </span>
                                        </a>
                                    </li> 
                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>




    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/nifty-demo.min.js"></script>

    
    <!--Flot Chart [ OPTIONAL ]-->
    <script src="plugins/flot-charts/jquery.flot.min.js"></script>
	<script src="plugins/flot-charts/jquery.flot.resize.min.js"></script>
	<script src="plugins/flot-charts/jquery.flot.tooltip.min.js"></script>
     <!--DataTables [ OPTIONAL ]-->
    <script src="plugins/datatables/media/js/jquery.dataTables.js"></script>
    <script src="plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>


    <!--DataTables Sample [ SAMPLE ]-->
    <script src="js/demo/tables-datatables.js"></script>
    <!--Sparkline [ OPTIONAL ]-->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>



    <!--Specify page [ SAMPLE ]-->
    <script src="js/demo/dashboard.js"></script>


    

</body>

<!-- Mirrored from www.themeon.net/nifty/v2.9.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jan 2019 07:01:50 GMT -->
</html>