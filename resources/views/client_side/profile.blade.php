@extends('client_side.master.main')

@section('title', 'login Page')

@section('extra-css')

    <link rel="stylesheet" href="{{ asset('client_side\css\profile.css') }}">

    <style>
        nav {
            display: none !important;
        }
    </style>

@endsection

@section('extra-js')

@endsection

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ asset('client_side/images/bg_3.jpg') }}); height:315px !important; "
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Profile</h1>
                    <p class="breadcrumbs" style="margin:0 0 210px">
                        <span class="mr-2">
                            <a href="index.html">Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Profile
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    

@endsection
