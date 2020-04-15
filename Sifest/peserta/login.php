<?php
include 'header.php'

                  ?>


    <!--Page Title-->
    <section class="page-title" style="background-image:url(../images/background/7.jpg);">
        <div class="auto-container">
            <span class="float-text">Login</span>
            <h1>Login</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="../index.php">Home </a></li>
                <li>Login</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="login-form">
                <div class="row clearfix">
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">                    
                        <div class="inner-column">
                            <div class="title-box">
                                <h3>Hello! Welcome Back</h3>
                                <div class="text">Silahkan Login Untuk Mengakses <br>Akun Lomba Anda</div>
                            </div>

                            <!--Login Form-->
                            <form method="post" action="proses_login.php">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email " required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>

                                <div class="form-group btn-box">
                                    <button class="theme-btn btn-style-three" type="submit">Login</button>
                                </div>
                            </form> 
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-sm-12 col-sm-12">
                        <div class="image-box wow fadeIn">
                            <figure class="image"><img src="../images/resource/login.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include 'footer.php';
    ?>