@extends('client_side.master.main')

@section('title', 'Your order')

@section('extra-css')
<link rel="stylesheet" href="{{asset('client_side/css/addToCart.css')}}">
<style>
    .submit-order:hover {
        color: #eee !important;
    }
</style>
@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Order</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <a href="{{route('user.yourorder')}}"><span>Your orders <i class="ion-ios-arrow-forward"></i></span></a><span> View order</span></p>
            </div>
        </div>
    </div>
</section>
@if (count($food) > 0)
<div class="container bg-white rounded-top mt-5" id="zero-pad">
    <section class="h-100 mb-5" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Your order</h3>
                        <div>
                            <p class="mb-0 text-muted"><span>Items:</span> {{count($food)}}</p>
                        </div>
                    </div>
                    @foreach ($food as $key => $item)
                    <div class="card rounded-3 mb-4" id="food_1">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2 p-0">
                                    <img src="{{asset(isset($item->orderFoods->image) ? $item->orderFoods->image : 'client_side/images/menu/no-menu-image.jpg')}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-5 col-lg-5 col-xl-5">
                                    <p class="lead fw-normal mb-0">
                                        {{$item->orderFoods->name}}
                                    </p>
                                    <p><span class="text-muted">item type</span></p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    {{$item->quantity}} items
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 p-0">
                                    <h5 class="mb-0"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{ $item->orderFoods->prize * $item->quantity}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="badge {{$item->status == 0 ? 'badge-danger' : ($item->status == 1 ? 'badge-warning' : ( $item->status == 2 ? 'badge-success' : 'badge-secondary' ))}}  rounded-pill d-inline py-2">
                                        {{ $item->status == 0 ? 'Pending'  : ( $item->status == 1 ? 'Processing' : ( $item->status == 2 ? 'Completed' : 'Cancel' ) ) }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

@else

@endif

@endsection