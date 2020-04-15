<?php
include 'header.php'
?>
<!--Start Modal-->

                            <div id="daftar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Daftar Peserta E-Sport</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="daftarlomba.php" method="POST">
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
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-6" class="control-label">ID Line :</label>
                                                        <input type="text" class="form-control" id="field-6" name="line" placeholder="ID Line" required="">
                                                    </div>
                                                </div>
                                            </div>
											<div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-7" class="control-label">Password :</label>
                                                        <input type="password" class="form-control" name="password" id="field-7" placeholder="password" required="">
                                                    </div>

                                                </div>
                                            </div>
											<div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="lomba" value="esport"required="">
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

                             

<!--End Modal-->
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
        <div class="auto-container">
            <span class="float-text">E-SPORT</span>
            <h1>LOMBA E-SPORT SIFEST 2019</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>Lomba</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Event -->
    <section class="about-event">
        <div class="anim-icons">
            <span class="icon icon-circle-13"></span>
            <span class="icon icon-circle-14"></span>
            <span class="icon icon-circle-14"></span>
            <span class="icon icon-triangle-1"></span>
            <span class="icon icon-triangle-2"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">   
                        <div class="sec-title"><h2>Join our biggest Competition  in 2019 !!!</h2></div>
                        <div class="info-box">
                            <h5>Lomba E-SPORT</h5>
                            <div class="text">E-Sport merupakan salah satu kompetisi yang ditujukan untuk Siswa/i SMA dan Mahasiswa/i Perguruan Tinggi. Lomba E-Sport kali ini hanya mengadakan Lomba Mobile Legends yang dimana 1 tim terdiri dari 5 pemain. Tujuannya agar para peserta yang mengikuti kompetisi ini dapat bersaing secara fairplay untuk meraih kemenangan.</div>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box wow fadeInRight">
                        <figure class="image-box"><img src="images/icons/logo-esport.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Event -->
    
   <!-- Events Section -->
    <section class="events-section">
        <div class="anim-icons">
            <span class="icon icon-circle-1 wow zoomIn"></span>
            <span class="icon icon-circle-2 wow zoomIn" data-wow-delay="300ms"></span>
            <span class="icon icon-circle-3 wow zoomIn" data-wow-delay="600ms"></span>
            <span class="icon icon-circle-4 wow zoomIn" data-wow-delay="900ms"></span>
        </div>
        <div class="auto-container">
            <div class="events-carousel owl-carousel owl-theme">
                <!-- Slide item -->
                <div class="slide-item">
                    <div class="row">
                        <div class="content-column order-2 col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <span class="title">Perlombaan</span>
                                <h2>E-SPORT</h2>
                                <div class="btn-box"><button type="button" class="theme-btn btn-style-three" data-toggle="modal" data-target="#daftar"> DAFTAR SEKARANG </button></div><br><br>
                                <div class="btn-box"><a href="download.php?filename=Guide_Book_Lomba.pdf"><button class="theme-btn btn-style-one" type="button"> DOWNLOAD GUIDEBOOK </button></a></div>
                            </div>
                        </div>

                        <div class="info-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column" style="background-image: url(images/resource/image-1.png);">
                                <div class="inner">
                                    <div class="info-box location">
                                        <span class="icon flaticon-location-pin"></span>
                                        <div class="text">Gramedia World, Palembang</div>
                                    </div>

                                    <div class="info-box date">
                                        <span class="icon flaticon-small-calendar"></span>
                                        <div class="text">02/11/2019</div>
                                    </div>

                                    <div class="info-box time">
                                        <span class="icon flaticon-clock-1"></span>
                                        <div class="text"> 8:00 - Selesai</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Events Section -->
	
	<!-- Topics Section -->
    <section class="topics-section-two">
        <span class="float-text">TIMELINE</span>
        <div class="anim-icons">
            <span class="icon icon-circle-3"></span>
            <span class="icon icon-circle-5"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title">
                <h2>CEK TIMELINE LOMBA KITA</h2>
            </div>

            <!--Event Topics-->
            <div class="event-topics-tabs">
                <div class="tabs-box">
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab1" class="tab-btn active-btn"><div>Pendaftaran Tim</div></li>
                        <li data-tab="#tab2" class="tab-btn"><div>Penyisihan</div></li>
                        <li data-tab="#tab3" class="tab-btn"><div>Final</div></li>
                    </ul>
                    
                    <!--Tabs Container-->
                    <div class="tabs-content">
                        <!--Tab-->
                        <div class="tab active-tab" id="tab1">
                            <div class="row">
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <span class="date">04/10/2019 - 26/10/2019</span>
                                        <h4>Pendaftaran Tim</h4>
                                        <div class="text">
                                            <p>Pada tahap ini ketua tim mendaftarkan timnya dan melengkapi berkas yang diperlukan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <figure class="image"><img src="images/resource/image-3.png" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab / Active Tab-->
                        <div class="tab" id="tab2">
                            <div class="row">
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <span class="date">01/11/2019</span>
                                        <h4>Penyisihan</h4>
                                        <div class="text">
                                            <p>Babak penyisihan dilakukan secara Online di tempat masing-masing.Yang mana babak penyisihan secara online ini akan di lakukan apabila total team yang mendaftar melebihi 32 team.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <figure class="image"><img src="images/resource/image-3.png" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab3">
                            <div class="row">
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <span class="date">02/11/2019</span>
                                        <h4>Final</h4>
                                        <div class="text">
                                            <p>Tim yang tersisa akan di adu pada tahap ini, yang mana akan diselenggarakan di Gramedia World, Palembang</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <figure class="image"><img src="images/resource/image-3.png" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Product Info Tabs-->  

        </div>
    </section>
    <!--End Topics Section -->

<?php
include 'footer.php';
?>