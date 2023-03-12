@extends('layouts.contentNavbarLayout')

@section('title', 'Admin Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
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
<!-- <div class="row">
    <div class="col-xl-6">
        <h6 class="text-muted">Your all food catagory</h6>
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                @foreach ($foodCatagory as $catagory)
                <li class="nav-item">
                    <button type="button" class="nav-link {{$loop->first ? 'active' : ''}}" role="tab" data-bs-toggle="tab" data-bs-target="#catagory{{$catagory['id']}}" aria-controls="navs-top-home" aria-selected="true">{{ucfirst($catagory['catagory'])}}</button>
                </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach ($foodCatagory as $catagory)
                <div class="tab-pane fade{{ $loop->first ? 'show active' : ' '}}" id="catagory{{$catagory['id']}}" role="tabpanel">
                    <b class="d-block">{{ ucfirst($catagory['catagory']) }}</b>
                    <a href="#" class="text-primary">View more</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> -->
@endsection