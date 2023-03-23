@extends('layouts.blankLayout')

@section('title', 'Register Page')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">

<style>
    .card-body {
        padding: 1.5rem 0.5rem;
    }

    .authentication-wrapper.authentication-basic .authentication-inner {
        max-width: 66%;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

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
                    <h4 class="mb-2 text-center fw-bold">Register Your Self</h4>
                    <p class="mb-4 text-center">Join with us and enjoy life every day</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('admin.registration.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" value="{{old('firstname')}}" id="firstname" name="firstname" placeholder="Enter your first name" autofocus>
                                        @error('firstname') <span class="text-danger"> {{$message}} </span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" value="{{old('lastname')}}" id="lastname" name="lastname" placeholder="Enter your last name" autofocus>
                                    @error('lastname') <span class="text-danger"> {{$message}} </span> @enderror

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contactOne" class="form-label">Contact no.</label>
                                        <input type="number" class="form-control @error('contact') is-invalid @enderror" value="{{old('contact')}}" id="contact" name="contact" placeholder="Enter your contact number" autofocus>
                                        @error('contact') <span class="text-danger"> {{$message}} </span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror" value="{{old('city')}}" id="city" name="city" placeholder="Enter your city" autofocus>
                                        @error('city') <span class="text-danger"> {{$message}} </span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Date of birth</label>
                                        <input type="text" value="{{old('dob')}}" id="my_date_picker" class="form-control @error('dob') is-invalid @enderror" name="dob" autofocus autocomplete="off">
                                        @error('dob') <span class="text-danger"> {{$message}} </span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Select Gender</label>
                                        <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                                            <option value="" selected disabled>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        @error('gender') <span class="text-danger"> {{$message}} </span> @enderror

                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" name="email" placeholder="Enter your email">
                                @error('email') <span class="text-danger"> {{$message}} </span> @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="************" aria-describedby="password" />
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
                        </div>

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
<script>
    $("#my_date_picker").datepicker({
        maxDate: '-1d',
    });
</script>

@endsection