@extends('layouts.blankLayout')

@section('title', 'Register Page')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">

@endsection

@section('content')


<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">

            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="javascript:void(0)" class="app-brand-link gap-2">
                            @include('layouts.sections.logo')
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2 text-center">Register Your Self</h4>
                    <p class="mb-4 text-center">Join with us and enjoy life every day</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('admin.registration.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your username" autofocus>

                            @error('name') <span class="text-danger"> {{$message}} </span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact no.</label>
                            <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Enter your contact" autofocus>
                            @error('contact') <span class="text-danger"> {{$message}} </span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email">
                            @error('email') <span class="text-danger"> {{$message}} </span> @enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('password') <span class="text-danger"> {{$message}} </span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="profile_img" class="form-label">Upload your profile image </label>
                            <input class="form-control" type="file" id="profile_img" name="profile_img">
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                                <label class="form-check-label" for="terms-conditions">
                                    I agree to privacy policy & terms
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">
                            Sign up
                        </button>
                    </form>

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="{{ route('admin.login') }}">
                            <span>Log in instead</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Register Card -->
    </div>
</div>

@endsection