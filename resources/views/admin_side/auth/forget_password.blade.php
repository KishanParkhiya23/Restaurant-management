@extends('layouts.blankLayout')

@section('title', 'Forgot Password')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('extraa-js')
<script>
    $('button[type="submit"]').click(function() {
        $(this).html("Please wait ...");
    });
</script>
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
                    <h4 class="mb-2 text-center fw-bold">Forgot Password?</h4>
                    <p class="mb-4 text-center">Enter your email and we'll send you instructions to reset your password</p>
                    <form class="mb-3" action="{{route('admin.send.mail')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary d-grid w-100">Send Reset Link</button>
                    </form>
                    <div class="text-center">
                        <a href="{{ route('admin.login') }}" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>

@endsection