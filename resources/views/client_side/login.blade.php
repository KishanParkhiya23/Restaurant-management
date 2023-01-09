@extends('client_side.master.main')

@section('title', 'login Page')

@section('extra-css')

    <link rel="stylesheet" href="{{ asset('client_side/css/reg.css') }}">
    <style>
        nav {
            display: none !important;
        }
    </style>

@endsection

@section('extra-js')

@endsection

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }}); height:315px !important; "
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Login</h1>
                    <p class="breadcrumbs" style="margin:0 0 210px">
                        <span class="mr-2">
                            <a href="index.html">Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Login
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="login-area page-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="login-page">
                        <div class="login-form">
                            <h4 class="login-title">LOGIN</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="contactForm" method="POST"
                                        action="http://rockstheme.com/rocks/aievari-live/contact.php" class="log-form">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" id="name" class="form-control" placeholder="Username"
                                                required data-error="Please enter your name">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="password" id="msg_subject" class="form-control"
                                                placeholder="Password" required
                                                data-error="Please enter your message subject">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-group flexbox">
                                                <label class="check-box">
                                                    <input type="checkbox" class="check-box-input" checked>
                                                    <span class="remember-text">Remember me</span>
                                                </label>

                                                <a class="text-muted" href="{{ route('user.forget_password') }}">Forgot password?</a>
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
    </div>

@endsection