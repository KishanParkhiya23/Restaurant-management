@extends('layouts.blankLayout')

@section('title', 'Forgot Password')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
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
                    <h4 class="mb-4 text-center fw-bold">Change Password</h4>
                    <p class="mb-1 text-center text-secondary d-block fw-bold">Enter your new password here.</p>
                    <li class="mb-4 text-center" style="font-size: 0.85rem;">Make sure your passwrod is strongest for secure your account.</li>
                    <form class="mb-3" action="{{route('admin.change.save.password')}}" method="post">
                        @csrf
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="enter_password">Enter Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="enter_password" class="form-control @error('enter_password') is-invalid @enderror" name="enter_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="enter_password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('enter_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="reEnter_password">Re-Enter Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="reEnter_password" class="form-control @error('reEnter_password') is-invalid @enderror" name="reEnter_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="reEnter_password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('reEnter_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-grid w-100">Change Password</button>
                    </form>
                    <div class="text-center">
                        @if (!empty(Auth::id()))
                        <a href="{{ route('admin.profile') }}" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to profile
                        </a>
                        @else
                        <a href="{{ route('admin.login') }}" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>


@endsection