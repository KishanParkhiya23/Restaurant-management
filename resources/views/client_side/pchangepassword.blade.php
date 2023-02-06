@extends('layouts.blankLayout')

@section('title', 'Change Password')

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4" style="box-shadow: none!important;">

                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="javascript:void(0)" class="app-brand-link gap-2">
                                @include('layouts.sections.logo')
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2 text-center fw-bold">Change Password</h4>
                        <p class="mb-5 text-center">Enter your old password here.</p>

                        <form class="mb-3" action="{{ route('user.pcheckpassword') }}" method="post">
                            @csrf
                            <div class="mb-5 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Enter Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary d-grid w-100">Change</button>
                        </form>
                        <div class="text-center">
                            <a href="{{ route('home') }}" class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Back to profile
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>

@endsection
