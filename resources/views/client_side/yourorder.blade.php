@extends('client_side.master.main')

@section('title', 'login Page')

@section('extra-css')

<style>
    nav {
        display: none !important;
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
    }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem !important;
    }

    td {
        display: table-cell;
    }

    .input-group>.form-control {
        height: 0% !important;
    }

    .input-group>.form-control {
        border-radius: 0% !important
    }

    .input-group-btn {
        border: none !important
    }
</style>

@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }}); height:315px !important; " data-stellar-background-ratio="0.5">
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




@endsection