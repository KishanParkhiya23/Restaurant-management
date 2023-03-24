@extends('layouts.contentNavbarLayout')

@section('title', 'Admin Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
<!-- <style>
    .main {
        background-image: url('https://images.unsplash.com/photo-1606836576983-8b458e75221d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');

        /* background-image: url({{asset('assets/img/backgrounds/stefan-johnson-xIFbDeGcy44-unsplash.jpg')}}); */
        background-size: contain;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        color: white;
    }
</style> -->
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')

<!-- <div class="main">
    fws
</div> -->
<div class="row">
    <div class="col-lg-6 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Food details here</h5>
                        <p class="mb-4">You have <span class="fw-bold">6</span> types of food available in your resturent.</p>

                        <a href="{{route('admin.menu.breakfast.show')}}" class="btn btn-sm btn-outline-primary">View All Foods</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{asset('assets/img/illustrations/dashboard-chef.png')}}" height="155" style="opacity: 0.8;" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection