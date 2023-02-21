@extends('client_side.master.main')

@section('title', 'login Page')

@section('extra-css')

    <style>
        nav {
            display: none !important;
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
                    <h1 class="mb-2 bread">Order</h1>
                    <p class="breadcrumbs" style="margin:0 0 210px">
                        <span class="mr-2">
                            <a href="{{ route('home') }}">Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Order
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Start -->
    <div class="container mt-5 mb-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Item</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                      <p>order31788</p>
                    </td>
                    <td>
                      <p>20-02-2023</p>
                    </td>
                    <td>
                      <p>04:02pm</p>
                    </td>
                    <td>
                      <p>2</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">116 <i class="fa-solid fa-indian-rupee-sign"></i></span>
                    </td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                          <i class="fa-solid fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>order31788</p>
                    </td>
                    <td>
                      <p>20-02-2023</p>
                    </td>
                    <td>
                      <p>04:02pm</p>
                    </td>
                    <td>
                      <p>2</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">116 <i class="fa-solid fa-indian-rupee-sign"></i></span>
                    </td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                          <i class="fa-solid fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>order31788</p>
                    </td>
                    <td>
                      <p>20-02-2023</p>
                    </td>
                    <td>
                      <p>04:02pm</p>
                    </td>
                    <td>
                      <p>2</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">116 <i class="fa-solid fa-indian-rupee-sign"></i></span>
                    </td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                          <i class="fa-solid fa-eye"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Cart End -->

    </section>

@endsection
