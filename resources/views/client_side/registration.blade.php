@extends('client_side.master.main')

@section('title', 'Registration Page')

@section('extra-css')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Team| Aievari</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

        <!-- all css here -->

        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- Animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">

        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <!-- all js here -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- stellar js -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- magnific js -->
    <script src="js/magnific.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- Form validator js -->
    <script src="js/form-validator.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

@section('content')

    <!-- Start breadcumb Area -->
    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline">
                            <h3>Login</h3>
                        </div>
                        <ul class="breadcrumb-bg">
                            <li class="home-bread">Home</li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcumb Area -->
    <!-- Start Slider Area -->
    <div class="login-area page-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="login-page">
                        <div class="login-form">
                            <h4 class="login-title">LOGIN</h4>
                            <div class="row">
                                <form id="contactForm" method="POST"
                                    action="http://rockstheme.com/rocks/aievari-live/contact.php" class="log-form">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Username"
                                            required data-error="Please enter your name">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="password" id="msg_subject" class="form-control" placeholder="Password"
                                            required data-error="Please enter your message subject">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-group flexbox">
                                            <label class="check-box">
                                                <input type="checkbox" class="check-box-input" checked>
                                                <span class="remember-text">Remember me</span>
                                            </label>

                                            <a class="text-muted" href="#">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" id="submit" class="login-btn">Login</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="clear"></div>
                                        <div class="separetor"><span>Or with Sign</span></div>
                                        <div class="sign-icon">
                                            <ul>
                                                <li><a class="facebook" href="#">Facebook</a></li>
                                                <li><a class="twitter" href="#">twitter</a></li>
                                                <li><a class="google" href="#">google+</a></li>
                                            </ul>
                                            <div class="acc-not">Don't have an account <a href="signup.html"> Sign
                                                    up</a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection