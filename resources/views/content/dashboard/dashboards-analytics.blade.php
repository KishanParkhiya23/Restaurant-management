@extends('layouts.contentNavbarLayout')

@section('title', 'Admin Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/rangeType.css') }}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-6 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Food details here</h5>
                            <p class="mb-4">You have <span class="fw-bold">6</span> types of food available in your resturent.</p>

                            <a href="{{route('user.menu')}}" class="btn btn-sm btn-outline-primary">View All Foods</a>
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
        <div class="col-lg-6 mb-4 order-0">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-6">
                    <div class="card">
                        <div class="card-body" style="padding: 1.25rem 1.5rem ;">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('assets/img/icons/unicons/total-menu.png')}}" alt="chart success" class="rounded">
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total menus</span>
                            <h3 class="card-title mb-2">{{count($totalMenus)}}</h3>
                            <a href="{{route('admin.menu.breakfast.show')}}" class="d-block w-100 mt-auto"><small class="text-success fw-semibold"><i class='bx bx-right-arrow-alt'></i> View More</small></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6">
                    <div class="card">
                        <div class="card-body" style="padding: 1.25rem 1.5rem ;">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('assets/img/icons/unicons/total-customer.png')}}" alt="chart success" class="rounded">
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total customer</span>
                            <h3 class="card-title mb-2">{{count($totalUser)}}</h3>

                            <a href="{{route('admin.user-details.user')}}"><small class="text-success fw-semibold"><i class='bx bx-right-arrow-alt'></i> View More</small></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6">
                    <div class="card">
                        <div class="card-body" style="padding: 1.25rem 1.5rem ;">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('assets/img/icons/unicons/total-chef.png')}}" alt="chart success" class="rounded">
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total chefs</span>
                            <h3 class="card-title mb-2">{{count($totalChef)}}</h3>

                            <a href="{{route('admin.chef.dashboard')}}"><small class="text-success fw-semibold"><i class='bx bx-right-arrow-alt'></i> View More</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-5 order-0">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">{{$totalOrder}} Total Orders</small>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">{{$totalOrder}}</h2>
                            <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="fa-regular fa-clock"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Pending orders</h6>
                                    <small class="text-muted">Orders which is placed by user</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">{{$pending}} orders</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-warning"><i class="fa-regular fa-hourglass-half"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Processing Orders</h6>
                                    <small class="text-muted">Orders which is acceptd by Chef</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">{{$processing}} orders</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i class="fa-regular fa-circle-check"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Completed Orders</h6>
                                    <small class="text-muted">Items are completed and served</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">{{$completed}} orders</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i class="fa-regular fa-rectangle-xmark"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Canceled orders</h6>
                                    <small class="text-muted">Oreders are denied by chef</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">{{$canceled}} orders</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-7">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order From</h5>
                        <small class="text-muted">{{$totalOrder}} Total Orders</small>
                    </div>
                </div>
                <div class="card-body w-100">
                    <div class=" mb-3">
                        <ul class="p-0 py-3 my-2">
                            <li class="d-flex my-4">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-secondary"><i class="fa-solid fa-truck"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Delivery orders</h6>
                                        <input type="range" value="{{$delivery}}" min="0" max="{{$totalOrder}}" disabled style="width: 28rem;">
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">{{$delivery}} orders</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex my-4">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-secondary"><i class="fa-brands fa-get-pocket"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Take-away orders</h6>
                                        <input type="range" value="{{$takeaway}}" min="0" max="{{$totalOrder}}" disabled style="width: 28rem;">
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">{{$takeaway}} orders</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex my-4">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-secondary"><i class="fa-solid fa-bell-concierge"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">On-table orders</h6>
                                        <input type="range" value="{{$onTable}}" min="0" max="{{$totalOrder}}" disabled style="width: 28rem;">
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">{{$onTable}} orders</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <span>
                                    Online food ordering is a process of ordering food from a local restaurant or food cooperative through a web page or app. Much like ordering consumer goods online, many of these allow customers to keep accounts with them in order to make frequent ordering convenient
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection