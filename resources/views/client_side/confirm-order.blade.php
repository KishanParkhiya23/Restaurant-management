@extends('client_side.master.main')

@section('title', 'Conffirm order Page')

@section('extra-css')

<link rel="stylesheet" href="{{ asset('client_side/css/reg.css') }}">
<link rel="stylesheet" href="{{asset('client_side/css/confirm-order.css')}}">


@endsection

@section('extra-js')

@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
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
            <div class="d-flex">


                <form action="" method="">
                    <ul class="nav nav-pills mb-3 shadow-sm my-4 p-2" style="width: 93%;" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-delivery-tab" data-toggle="pill" href="#pills-delivery" role="tab" aria-controls="pills-delivery" aria-selected="true">Delivery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-takeaway-tab" data-toggle="pill" href="#pills-takeaway" role="tab" aria-controls="pills-takeaway" aria-selected="false">Tekeaway</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-table-tab" data-toggle="pill" href="#pills-table" role="tab" aria-controls="pills-table" aria-selected="false">On table order</a>
                        </li>
                    </ul>
                    <div class="tab-pane fade show active" id="pills-delivery" role="tabpanel" aria-labelledby="pills-delivery-tab">
                        <label>
                            <span class="fname">Full Name <span class="required">*</span></span>
                            <input class="form-control" type="text" name="fname">
                        </label>

                        <label>
                            <span>Email Address <span class="required">*</span></span>
                            <input class="form-control" type="email" name="city">
                        </label>
                        <label>
                            <span>Phone <span class="required">*</span></span>
                            <input class="form-control" type="number" name="city">
                        </label>
                        <label>
                            <span>Street Address <span class="required">*</span></span>
                            <input class="form-control" type="text" name="houseadd" placeholder="House number and street name" required>
                        </label>
                        <label>
                            <span>&nbsp;</span>
                            <input class="form-control" type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
                        </label>
                        <label>
                            <span>Postcode / ZIP <span class="required">*</span></span>
                            <input class="form-control" type="text" name="city">
                        </label>
                    </div>
                    <div class="tab-pane fade position-relative" style="" id="pills-takeaway" role="tabpanel" aria-labelledby="pills-takeaway-tab">
                        <label>
                            <span class="fname">Full Name <span class="required">*</span></span>
                            <input class="form-control" type="text" name="fname">
                        </label>
                        <label>
                            <span>Email Address <span class="required">*</span></span>
                            <input class="form-control" type="email" name="city">
                        </label>
                        <label>
                            <span>Phone <span class="required">*</span></span>
                            <input class="form-control" type="number" name="city">
                        </label>
                    </div>
                    <div class="tab-pane fade position-relative" style="" id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab">
                        <label>
                            <span class="fname">Full Name <span class="required">*</span></span>
                            <input class="form-control" type="text" name="fname">
                        </label>
                        <label>
                            <span>Email Address <span class="required">*</span></span>
                            <input class="form-control" type="email" name="city">
                        </label>
                        <label>
                            <span>Phone <span class="required">*</span></span>
                            <input class="form-control" type="number" name="city">
                        </label>
                        <label>
                            <span>Select table <span class="required">*</span></span>
                            <select name="selection">
                                <option value="select">Select a table...</option>
                                <option value="table-1">table-1</option>
                                <option value="table-2">table-2</option>
                                <option value="table-3">table-3</option>
                                <option value="table-4">table-4</option>
                                <option value="table-5">table-5</option>
                                <option value="table-6">table-6</option>
                            </select>
                        </label>
                    </div>
                </form>



                <div class="Yorder">
                    <table style="line-height: 20px;">
                        <tr>
                            <th colspan="2">Your order</th>
                        </tr>
                        @foreach ($food as $item)
                        <tr>
                            <td>{{ $item->foods->name}} <span class="text-danger">x</span> {{ $item->quantity}}(Qty)</td>
                            <td>${{ $item->foods->prize}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>Subtotal</td>
                            <td>${{get_cart_total()}}</td>
                        </tr>
                    </table><br>
                    <div>
                        <input type="radio" name="dbt" value="cd" checked> Cash on Delivery
                    </div>
                    <button type="button d-block mt-auto">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection