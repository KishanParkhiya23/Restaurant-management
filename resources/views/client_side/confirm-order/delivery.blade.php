@extends('client_side.master.main')

@section('title', 'Confirm order Page')

@section('extra-css')

<link rel="stylesheet" href="{{ asset('client_side/css/reg.css') }}">

<link rel="stylesheet" href="{{asset('client_side/css/confirm-order.css')}}">

@endsection

@section('extra-js')

@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }})" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Place order</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"></span><span>Place order <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <!-- content -->
    <div class="tab-content" id="pills-tabContent p-3">
        <div class="container my-5">
            <form action="{{route('user.save-order',1)}}" method="POST">
                @csrf
                <div class="d-flex">
                    <div style="flex: 4;">
                        <ul class="nav nav-pills mb-3 shadow-sm my-4 p-2" style="width: 93%;" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-delivery-tab" href="{{route('user.delivery')}}">Delivery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-takeaway-tab" href="{{route('user.take-away')}}">Takeaway</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-table-tab" href="{{route('user.ontableorder')}}">On table order</a>
                            </li>
                        </ul>
                        <div class="tab-pane fade show active" id="pills-delivery" role="tabpanel" aria-labelledby="pills-delivery-tab">
                            <label>
                                <span class="fname">Full Name <span class="text-danger">*</span></span>
                                <input class="form-control" type="text" name="fullname" value="{{$user->fullname}}">
                                @error('fullname')
                                <div class="required" >{{$message}}</div>
                                @enderror
                            </label>

                            <label>
                                <span>Email Address <span class="text-danger">*</span></span>
                                <input class="form-control" type="email" name="email" value="{{$user->email}}">
                                @error('email')
                                <div class="required" >{{$message}}</div>
                                @enderror
                            </label>
                            <label>
                                <span>Contact <span class="text-danger">*</span></span>
                                <input class="form-control" type="number" name="contact" value="{{$user->contact}}">
                                @error('contact')
                                <div class="required" >{{$message}}</div>
                                @enderror
                            </label>
                            <label>
                                <span>Street Address <span class="text-danger">*</span></span>
                                <input class="form-control" type="text" name="address" placeholder="House number and street name" value="{{old('address')}}">
                                @error('address')
                                <div class="required" >{{$message}}</div>
                                @enderror
                            </label>
                            <!-- <label>
                                <span>&nbsp;</span>
                                <input class="form-control" type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
                            </label> -->
                            <label>
                                <span>Postcode / ZIP <span class="text-danger">*</span></span>
                                <input class="form-control" type="number" maxlength="6" name="zipcode" value="{{old('zipcode')}}">
                                @error('zipcode')
                                <div class="required" >{{$message}}</div>
                                @enderror
                            </label>
                        </div>
                    </div>
                    <div class="Yorder">
                        <table style="line-height: 20px;">
                            <tr>
                                <th colspan="2">Your order</th>
                            </tr>
                            @foreach ($food as $item)
                            <tr>
                                <td style="width: 75%!important;">{{ $item->foods->name}} <span class="text-danger">x</span> {{ $item->quantity}}(Qty)</td>
                                <td><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{ $item->foods->prize}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>Subtotal</td>
                                <td><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{get_cart_total()}}</td>
                            </tr>
                        </table><br>
                        <div>
                            <input type="radio" name="dbt" value="cd" checked> Cash on Delivery
                        </div>
                        <button type="button d-block mt-auto">Place Order</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection