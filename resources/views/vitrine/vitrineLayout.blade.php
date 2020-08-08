<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Medical HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href={{ asset("assets/css/bootstrap.min.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/owl.carousel.min.css")}}>
	<link rel="stylesheet" href={{ asset("assets/css/slicknav.css")}}>
    <link rel="stylesheet" href={{ asset("assets/css/flaticon.css")}}>
    <link rel="stylesheet" href={{ asset("assets/css/gijgo.css")}}>
    <link rel="stylesheet" href={{ asset("assets/css/animate.min.css")}}>
    <link rel="stylesheet" href={{ asset("assets/css/animated-headline.css")}}>
	<link rel="stylesheet" href={{ asset("assets/css/magnific-popup.css")}}>
	<link rel="stylesheet" href={{ asset("assets/css/fontawesome-all.min.css")}}>
	<link rel="stylesheet" href={{ asset("assets/css/themify-icons.css")}}>
	<link rel="stylesheet" href={{ asset("assets/css/slick.css")}}>
	<link rel="stylesheet" href={{ asset("assets/css/nice-select.css")}}>
	<link rel="stylesheet" href={{ asset("assets/css/style.css")}}>
</head>
<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src={{ asset("assets/img/logo/loder.png")}} alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Acceuil</a></li>
                                            <li><a href="about.html">A propos</a></li>
                                            <li><a href="doctor.html">Médecins</a></li>
                                            <li><a href="department.html">Departments</a></li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="#" class="btn header-btn">+224 627 75 53 81</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                                            <li><a href="index.html" role="menuitem" tabindex="-1">Acceul</a></li>
                                            <li><a href="about.html" role="menuitem" tabindex="-1">A propos</a></li>
                                            <li><a href="doctor.html" role="menuitem" tabindex="-1">Médecins</a></li>
                                            <li><a href="department.html" role="menuitem" tabindex="-1">Departments</a></li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="blog.html" tabindex="-1">Blog</a>
                                                <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                                    <li><a href="blog.html" role="menuitem" tabindex="-1">Blog</a></li>
                                                    <li><a href="blog_details.html" role="menuitem" tabindex="-1">Blog Details</a></li>
                                                    <li><a href="elements.html" role="menuitem" tabindex="-1">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html" role="menuitem" tabindex="-1">Contact</a></li>
                                        </ul></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>


    @yield('content')



    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg" style="background-image: url(&quot;assets/img/gallery/footer_bg.jpg&quot;);">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <div class="footer-pera">
                                        <p class="info1">Lorem igpsum doldfor sit amet, adipiscing elit, sed do eiusmod tempor cergelit rgh. </p>
                                        <p class="info1">Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-number mb-50">
                                    <h4><span>+564 </span>7885 3222</h4>
                                    <p>youremail@gmail.com</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Send
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright ©<script>document.write(new Date().getFullYear());</script>2020 All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src={{ asset("assets/js/vendor/modernizr-3.5.0.min.js")}}></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src={{ asset("assets/js/vendor/jquery-1.12.4.min.js")}}></script>
    <script src={{ asset("assets/js/popper.min.js") }}></script>
    <script src={{ asset("assets/js/bootstrap.min.js")}}></script>
    <!-- Jquery Mobile Menu -->
    <script src={{ asset("assets/js/jquery.slicknav.min.js")}}></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src={{ asset("assets/js/owl.carousel.min.js")}}></script>
    <script src={{ asset("assets/js/slick.min.js")}}></script>
    <!-- One Page, Animated-HeadLin -->
    <script src={{ asset("assets/js/wow.min.js")}}></script>
    <script src={{ asset("assets/js/animated.headline.js")}}></script>
    <script src={{ asset("assets/js/jquery.magnific-popup.js")}}></script>

    <!-- Date Picker -->
    <script src={{ asset("assets/js/gijgo.min.js")}}></script>
    <!-- Nice-select, sticky -->
    <script src={{ asset("assets/js/jquery.nice-select.min.js")}}></script>
    <script src={{ asset("assets/js/jquery.sticky.js")}}></script>
    
    <!-- counter , waypoint -->
    <script src={{ asset("assets/js/jquery.counterup.min.js")}}></script>
    <script src={{ asset("assets/js/waypoints.min.js")}}></script>
    <script src={{ asset("assets/js/jquery.countdown.min.js")}}></script>
    <!-- contact js -->
    <script src={{ asset("assets/js/contact.js")}}></script>
    <script src={{ asset("assets/js/jquery.form.js")}}></script>
    <script src={{ asset("assets/js/jquery.validate.min.js")}}></script>
    <script src={{ asset("assets/js/mail-script.js")}}></script>
    <script src={{ asset("assets/js/jquery.ajaxchimp.min.js")}}></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src={{ asset("./assets/js/plugins.js")}}></script>
    <script src={{ asset("./assets/js/main.js")}}></script>
</body>