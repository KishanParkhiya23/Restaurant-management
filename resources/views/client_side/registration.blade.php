@extends('client_side.master.main')

@section('title', 'Registration Page')

@section('extra-css')

    <link rel="stylesheet" href="{{ asset('client_side/css/reg.css') }}">
    <style>
        nav {
            display: none !important;
        }

        .is-invalid {
            color: 1px solid red !important;
        }

        .error-text {
            font-size: 0.8rem;
            color: red;
            text-align: left;
        }
    </style>

@endsection

@section('extra-js')

@endsection

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});height:315px !important;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Registration</h1>
                    <p class="breadcrumbs" style="margin:0 0 210px">
                        <span class="mr-2">
                            <a href="{{ route('home') }}">Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Registration
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
                            <h4 class="login-title">Registration</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="contactForm" method="POST" action="{{ route('user.regdatasave') }}"
                                        class="log-form">
                                        @csrf
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" id="name" name="fullname"
                                                class=" @error('fullname') is-invalid @enderror form-control"
                                                placeholder="Full Name">
                                            @error('fullname')
                                                <div class="error-text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="number" name="contact" id="contactno"
                                                class="form-control @error('contact') is-invalid @enderror"
                                                placeholder="Contact No">
                                            @error('contact')
                                                <div class="error-text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="email" name="email" id="email"
                                                class=" @error('email') is-invalid @enderror form-control"
                                                placeholder="Email">
                                            @error('email')
                                                <div class="error-text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="password" name="password" id="msg_subject"
                                                class="@error('password') is-invalid @enderror form-control"
                                                placeholder="Password">
                                            @error('password')
                                                <div class="error-text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-group flexbox">
                                                <label class="check-box">
                                                    <input type="checkbox" class="check-box-input" checked>
                                                    <span class="remember-text">Remember me</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" id="submit" class="login-btn">Registration</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        {{-- <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="clear"></div>
                                            <div class="sign-icon">
                                                <ul>
                                                    <li><a class="facebook" href="#">Facebook</a></li>
                                                    <li><a class="twitter" href="#">twitter</a></li>
                                                    <li><a class="google" href="#">google+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div> --}}
                                        <div class="acc-not">Already have an account? <a href="{{ route('user.login') }}"
                                                style="color:#c8a97e">Log in instead</a></div>
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
