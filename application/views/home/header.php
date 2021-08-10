<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IPAC Description">
    <title>IPAC</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/x-icon">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/');?>style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-two-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <span><i class="fas fa-map"></i> Address</span>D/1 Sector H, Aliganj, Lucknow - 226024
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open"></i> Email</span>cmjkyppa@gmail.com
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i> Contact</span>+91 945 599 0001
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                    <a class="popup-with-form" href="<?php echo base_url('home/register');?>">
                        <i class="fas fa-edit"></i> Register
                    </a>
                    <a  class="popup-with-form" href="#login-form">
                        <i class="fas fa-user"></i> Login
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a href="<?php echo base_url();?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/download');?>">Download</a>
                        </li>
                        <!-- <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Gallery</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="gallery-2-colum.html">Gallery Two Colum</a></li>
                                                    <li><a href="gallery-3-colum.html">Gallery Three Colum</a></li>
                                                    <li><a href="gallery-4-colum.html">Gallery Four Colum</a></li>
                                                    <li><a href="gallery-6-colum.html">Gallery Six Colum</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Advisor</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="advisor-carousel.html">Advisor Carousel</a></li>
                                                    <li><a href="advisor-2-colum.html">Advisor Two Colum</a></li>
                                                    <li><a href="advisor-3-colum.html">Advisor Three Colum</a></li>
                                                    <li><a href="advisor-carousel-2.html">Advisor Carousel Two</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">User Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="profile.html">Profile</a></li>
                                                    <li><a href="edit-profile.html">Edit Profile</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                </ul>
                                            </div>
                                        </div
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Other Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="404.html">Error Page</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> -->
                       <!--  <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Courses</a>
                            <ul class="dropdown-menu">
                                <li><a href="courses.html">Courses Carousel One</a></li>
                                <li><a href="courses-2.html">Courses Grid One</a></li>
                                <li><a href="courses-3.html">Courses Grid Two</a></li>
                                <li><a href="courses-4.html">Courses Carousel Two</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                            </ul>
                        </li> -->
                      <!--   <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Teachers</a>
                            <ul class="dropdown-menu">
                                <li><a href="teachers.html">Advisor</a></li>
                                <li><a href="teachers-details.html">Advisor Details</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('home/social_media_mgmt');?>">Social Media Management</a></li>
                                <li><a href="<?php echo base_url('home/bulk_message_services');?>">Bulk Message Services</a></li>
                                <li><a href="<?php echo base_url('home/documentary_service');?>">Documentary Service</a></li>
                                <li><a href="<?php echo base_url('home/digital_service');?>">Digital Services</a></li>
                                <li><a href="<?php echo base_url('home/election_mgmt_service');?>">Election Management Services</a></li>
                                <li><a href="<?php echo base_url('home/election_war_room');?>">Election War Room</a></li>
                                <li><a href="<?php echo base_url('home/live_broadcasting');?>">Live Broadcasting </a></li>
                                <li><a href="<?php echo base_url('home/political_research');?>">Political Research </a></li>
                                <li><a href="<?php echo base_url('home/private_call_center');?>">Private Call Center </a></li>
                                <li><a href="<?php echo base_url('home/web_app_email_service');?>">Website/App/Email Services </a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="#">Career</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/media');?>">Media</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/impact');?>">Our Impact</a>
                        </li>
                        <li>
                            <a href="contact.html">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Login Form 
    ============================================= -->
    <form action="#" id="login-form" class="mfp-hide white-popup-block">
        <div class="col-md-4 login-social">
            <h4>Login with social</h4>
            <ul>
                <li class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 login-custom">
            <h4>login to your registered account!</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Login
                    </button>
                </div>
            </div>
            <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
        </div>
    </form>
    <!-- End Login Form -->

    <!-- Start Register Form 
    ============================================= -->
    <form action="#" id="register-form" class="mfp-hide white-popup-block">
        <div class="col-md-4 login-social">
            <h4>Register with social</h4>
            <ul>
                <li class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 login-custom">
            <h4>Register a new account</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Username*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Repeat Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Sign up
                    </button>
                </div>
            </div>
            <p class="link-bottom">Are you a member? <a href="#">Login now</a></p>
        </div>
    </form>
    <!-- End Register Form -->
