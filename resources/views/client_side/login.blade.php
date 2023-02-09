@extends('client_side.master.main')

@section('title', 'login Page')

@section('extra-css')

<link rel="stylesheet" href="{{ asset('client_side/css/reg.css') }}">
<style>
    nav {
        display: none !important;
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
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }}); height:315px !important; " data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Login</h1>
                <p class="breadcrumbs" style="margin:0 0 210px">
                    <span class="mr-2">
                        <a href="{{ route('home') }}">Home
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
                                <form id="LoginForm" method="POST" action="{{ route('user.login.check') }}" class="log-form">
                                    @csrf
                                    @if (Session()->has('Email'))
                                    <div class="alert alert-danger">{{ Session()->get('Email') }}</div>
                                    @endif
                                    @if (Session()->has('password'))
                                    <div class="alert alert-danger">{{ Session()->get('password') }}</div>
                                    @endif
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="name" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username">
                                        @error('email')
                                        <div class="error-text">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="password" id="msg_subject" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
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

                                            <a class="text-muted" href="{{ route('user.forget_password') }}">Forgot
                                                password?</a>
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
                                            <div class="acc-not">New on our platform? <a href="{{ route('user.registration') }}">Create an account</a></div>
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