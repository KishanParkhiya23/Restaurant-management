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
            <form action="{{route('user.save-order',3)}}" method="POST">
                @csrf
                <div class="d-flex">
                    <div style="flex: 4;">
                        <ul class="nav nav-pills mb-3 shadow-sm my-4 p-2" style="width: 93%;" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link " id="pills-delivery-tab" href="{{route('user.delivery')}}" role="tab" aria-controls="pills-delivery" aria-selected="true">Delivery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-takeaway-tab" href="{{route('user.take-away')}}" role="tab" aria-controls="pills-takeaway" aria-selected="false">Takeaway</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-table-tab" href="{{route('user.ontableorder')}}" role="tab" aria-controls="pills-table" aria-selected="false">On table order</a>
                            </li>
                        </ul>
                        <div class="tab-pane fade position-relative show active" id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab">
                            <label>
                                <span class="fname">Full Name <span class="text-danger">*</span></span>
                                @error('fullname')
                                <div class="required" >{{$message}}</div>
                                @enderror
                                <input class="form-control" type="text" name="fullname" value="{{$user->fullname}}">
                            </label>

                            <label>
                                <span>Email Address <span class="text-danger">*</span></span>
                                @error('email')
                                <div class="required" >{{$message}}</div>
                                @enderror
                                <input class="form-control" type="email" name="email" value="{{$user->email}}">
                            </label>
                            <label>
                                <span>Contact <span class="text-danger">*</span></span>
                                <input class="form-control" type="number" name="contact" value="{{$user->contact}}">
                                @error('contact')
                                <div class="required" >{{$message}}</div>
                                @enderror
                            </label>
                            <label>
                                <span>Select table <span class="text-danger">*</span></span>

                                <select name="table" required>
                                    <option disabled selected>Select a table...</option>
                                    <option value="table-1">table-1</option>
                                    <option value="table-2">table-2</option>
                                    <option value="table-3">table-3</option>
                                    <option value="table-4">table-4</option>
                                    <option value="table-5">table-5</option>
                                    <option value="table-6">table-6</option>
                                </select>
                                @error('table')
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