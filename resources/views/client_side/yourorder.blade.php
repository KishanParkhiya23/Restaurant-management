@extends('client_side.master.main')

@section('title', 'login Page')

@section('extra-css')
    <style>
        .hero-wrap.hero-wrap-2 .slider-text {
            height: 500px;
        }

        .order {
            background-color: gray;
            border-radius: 5px;
        }

        .card-body {
            padding: 1rem
        }

        table th,
        table td {
            text-align: center
        }
    </style>
@endsection

@section('content')

    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ asset('client_side/images/bg_3.jpg') }}); height:315px !important; "
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread" style="font-size:40px">Previous Order</h1>
                    <p class="breadcrumbs" style="margin:0 0 210px">
                        <span class="mr-2">
                            <a href="{{ route('home') }}">Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Order</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="order-table" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table align-middle mb-0 bg-white ">
                        <thead class="bg-light">
                            <tr>
                                <th>Order id</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Item</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    #order0025
                                </td>
                                <td>
                                    20th jan , 2002
                                </td>
                                <td>12:35 AM</td>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline">3</span>
                                </td>
                                <td>
                                    <span>$6835</span>
                                </td>
                                <td>
                                    <a href="{{ route('user.vieworder') }}"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    #order0025
                                </td>
                                <td>
                                    20th jan , 2002
                                </td>
                                <td>12:35 AM</td>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline">3</span>
                                </td>
                                <td>
                                    <span>$6835</span>
                                </td>
                                <td>
                                    <a href="{{ route('user.vieworder') }}"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    #order0025
                                </td>
                                <td>
                                    20th jan , 2002
                                </td>
                                <td>12:35 AM</td>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline">3</span>
                                </td>
                                <td>
                                    <span>$6835</span>
                                </td>
                                <td>
                                    <a href="{{ route('user.vieworder') }}"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    {{-- <section>
        <div class="container order mt-5">
            <h2>Order History</h2>
            <div class="card shadow-0 border mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <p>Order ID</p>
                        </div>
                        <div class="col-md-2">
                            <p>Date</p>
                        </div>
                        <div class="col-md-2">
                            <p>Time</p>
                        </div>
                        <div class="col-md-2">
                            <p>Item</p>
                        </div>
                        <div class="col-md-2">
                            <p>Total</p>
                        </div>
                        <div class="col-md-2">
                            <p>Action</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

@endsection
