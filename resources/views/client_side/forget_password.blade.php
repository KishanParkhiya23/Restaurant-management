@extends('client_side.master.main')
<style>
    .top {
        display: none !important;
    }
    .ftco-footer{
        display: none !important;
    }
</style>
@section('title', 'Forget Password Page')

@section('extra-css')

    <link rel="stylesheet" href="{{ asset('client_side/css/reg.css') }}">
    <style>
        nav {
            display: none !important;
        }
    </style>

@endsection

@section('extra-js')

@endsection

@section('content')

    <div class="login-area page-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="login-page">
                        <div class="login-form">
                            <h4 class="login-title">Forget Password</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="contactForm" method="POST"
                                        action="http://rockstheme.com/rocks/aievari-live/contact.php" class="log-form">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="email" id="email" class="form-control" placeholder="Email"
                                                required data-error="Please enter your emnail">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" id="submit" class="login-btn">Submit</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
