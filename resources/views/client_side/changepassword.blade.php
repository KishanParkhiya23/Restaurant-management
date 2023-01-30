@extends('client_side.master.main')

@section('title', 'ChangePassword Page')

@section('extra-css')

    <style>
        nav {
            display: none !important;
        }

        .profile {
            margin-bottom: 0 !important;
        }

        .input-sm {
            height: 32px !important;
            border-radius: 4px;
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
                    <h1 class="mb-2 bread" style="font-size: 35px">Change Password</h1>
                    <p class="breadcrumbs" style="margin:0 0 210px">
                        <span class="mr-2">
                            <a href="index.html">Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>change Password
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- profile start --}}
    <section class="mt-4" style="background-color: #ffffff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;background: linear-gradient(to right bottom,#c8a97e, #c8a97eb3 )">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <div style="">
                                    <h5>Name</h5>
                                    <p>Web Designer</p>
                                </div>
                            </div>
                            <div class="col-md-8" style="background-color:rgb(241 241 241 / 60%)">
                                <div class="card-body p-4">
                                    <h6>My Profile </h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row">
                                        <div class="col-12 mb-3 p-0">
                                            <label for="inputsm" class="profile">Old Password</label>
                                            <input type="number" name="opassword" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3 p-0">
                                            <label for="inputsm" class="profile">New Password</label>
                                            <input type="number" name="npassword" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3 p-0">
                                            <label for="inputsm" class="profile">Re-type Password</label>
                                            <input type="number" name="rpassword" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div>
                                        <hr class="mt-4">
                                        <button type="button" class="btn btn-primary mb-3 float-right">Save</button>
                                    </div>
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
    {{-- profile end  --}}


@endsection
