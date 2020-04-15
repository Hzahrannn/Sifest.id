<?php
include 'header.php'

									?>


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <span class="float-text">Login</span>
            <h1>Login</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
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
                            <form method="post" action="proseslogin.php">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email " required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>

                                <div class="form-group btn-box">
                                    <button class="theme-btn btn-style-three" type="submit" name="submit-form">Login</button>
                                </div>
                            </form> 
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-sm-12 col-sm-12">
                        <div class="image-box wow fadeIn">
                            <figure class="image"><img src="images/resource/login.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Main Footer -->
    <div class="main-footer style-two">    
        <div class="anim-icons">
            <span class="icon icon-twist-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-6 wow zoomIn" data-wow-delay="400ms"></span>
            <span class="icon icon-twist-line-2 wow zoomIn" data-wow-delay="800ms"></span>
            <span class="icon icon-circle-8 wow zoomIn" data-wow-delay="1200ms"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Get The Latest Offers</span>
                <h2>Subscribe To Newsletter</h2>
            </div>

            <!--Newsletter Form-->
            <div class="newsletter-form">
                <form method="post" action="http://sitetemplate.demo.ithemeslab.com/fizcon/blog.html">
                    <div class="form-group">
                        <input type="email" name="field-name" value="" placeholder="email@gmail.com" required>
                        <button type="submit" class="theme-btn btn-style-three">Send</button>
                    </div>
                </form>
            </div>

            <!-- Social Links -->
            <div class="social-links">
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom clearfix">
                <div class="copyright">Copyright &copy; 2019. All Rights Reserved.</div>
                <ul>
                    <li>We Accept </li>
                    <li><a href="#"><img src="images/icons/cart-1.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/icons/cart-2.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/icons/cart-3.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/icons/cart-4.jpg" alt=""></a></li>
                </ul>
            </div>
            <!-- Copyright -->
        </div>
    </div>
    <!-- End Footer -->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/countdown.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from sitetemplate.demo.ithemeslab.com/fizcon/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2019 07:41:58 GMT -->
</html>