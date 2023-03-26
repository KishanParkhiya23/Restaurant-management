@extends('layouts.blankLayout')

@section('title', 'Get Password')

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
                    <h4 class="mb-4 text-center fw-bold">Get Password</h4>
                    <p class="mb-1 text-center text-secondary d-block fw-bold">Create your password here.</p>
                    <li class="mb-4 text-center" style="font-size: 0.85rem;">Make sure your passwrod is strongest for secure your account.</li>
                    <form class="mb-3" action="{{ route('auth.save-password') }}" method="post">
                        @csrf
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Create Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary d-grid w-100">Next</button>
                    </form>
                    <!-- <div class="text-center">
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
                    </div> -->
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>


@endsection