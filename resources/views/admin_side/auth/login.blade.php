@extends('layouts.blankLayout')

@section('title', 'Login Page')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="javascript:void(0)" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">@include('layouts.sections.logo')</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2 text-center fw-bold">Log in Your Self</h4>
                    <p class="mb-4 text-center">Please log in yourself for more information</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('admin.login.check') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email or username" autofocus>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href="{{route('admin.forget-password')}}">
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="my-2">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>

                        <div class="my-2">
                            <a href="{{route('auth.google')}}" class="btn btn-secondary w-100"><i class="fa-brands fa-google" style="color: #fff;"></i>&nbsp;&nbsp;Continue with google</a>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="{{ route('admin.registration') }}">
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>
</div>
@endsection