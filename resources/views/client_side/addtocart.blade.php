@extends('client_side.master.main')

@section('title', 'Addtocart Page')

@section('extra-css')
    <style>
        body {
            background-color: #eeeeee;
        }

        .footer-background {
            background-color: rgb(204, 199, 199);
        }

        @media(max-width:991px) {
            #heading {
                padding-left: 50px;
            }

            #prc {
                margin-left: 70px;
                padding-left: 110px;
            }

            #quantity {
                padding-left: 48px;
            }

            #produc {
                padding-left: 40px;
            }

            #total {
                padding-left: 54px;
            }
        }

        @media(max-width:767px) {
            .mobile {
                font-size: 10px;
            }

            h5 {
                font-size: 14px;
            }

            h6 {
                font-size: 9px;
            }

            #mobile-font {
                font-size: 11px;
            }

            #prc {
                font-weight: 700;
                margin-left: -45px;
                padding-left: 105px;
            }

            #quantity {
                font-weight: 700;
                padding-left: 6px;
            }

            #produc {
                font-weight: 700;
                padding-left: 0px;
            }

            #total {
                font-weight: 700;
                padding-left: 9px;
            }

            #image {
                width: 60px;
                height: 60px;
            }

            .col {
                width: 100%;
            }

            #zero-pad {
                padding: 2%;
                margin-left: 10px;
            }

            #footer-font {
                font-size: 12px;
            }

            #heading {
                padding-top: 15px;
            }
        }
    </style>
@endsection

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Add to cart</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Addtocart <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <div class="container bg-white rounded-top mt-5" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12 pt-3">
                {{-- <div class="d-flex">
                    <div class="pt-1">
                        <h4>My T-shirt</h4>
                    </div>
                    <div class="ml-auto p-2"><a href="#" class="text-dark text-decoration-none"
                            id="mobile-font">LOGIN</a></div>
                    <div class="p-2"><a href="#" class="text-dark text-decoration-none a" id="mobile-font">HELP</a>
                    </div>
                </div> --}}
                <div class="d-flex flex-column pt-4">
                    <div>
                        <h5 class="text-uppercase font-weight-normal">Food item</h5>
                    </div>
                    <div class="font-weight-normal">2 items</div>
                </div>
                <div class="d-flex flex-row px-lg-5 mx-lg-5 mobile" id="heading">
                    <div class="px-lg-5 mr-lg-5" id="produc">PRODUCTS</div>
                    <div class="px-lg-5 ml-lg-5" id="prc">PRICE</div>
                    <div class="px-lg-5 ml-lg-1" id="quantity">QUANTITY</div>
                    <div class="px-lg-5 ml-lg-3" id="total">TOTAL</div>
                </div>
                <div
                    class="d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 border-bottom mobile">
                    <div class="d-flex flex-row align-items-center">
                        <div><img
                                src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                width="150" height="150" alt="" id="image"></div>
                        <div class="d-flex flex-column pl-md-3 pl-1">
                            <div>
                                <h6>COTTON T-SHIRT</h6>
                            </div>
                            <div>Art.No:<span class="pl-2">091091001</span></div>
                            <div>Color:<span class="pl-3">White</span></div>
                            <div>Size:<span class="pl-4"> M</span></div>
                        </div>
                    </div>
                    <div class="pl-md-0 pl-1"><b>$9.99</b></div>
                    <div class="pl-md-0 pl-2">
                        <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span
                            class="fa fa-plus-square text-secondary"></span>
                    </div>
                    <div class="pl-md-0 pl-1"><b>$19.98</b></div>
                    <div class="close">&times;</div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center pt-4 pb-3 mobile">
                    <div class="d-flex flex-row align-items-center">
                        <div><img
                                src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                width="150" height="150" alt="" id="image"></div>
                        <div class="d-flex flex-column pl-md-3 pl-1">
                            <div>
                                <h6>WHITE T-SHIRT</h6>
                            </div>
                            <div>Art.No:<span class="pl-2">056289891</span></div>
                            <div>Color:<span class="pl-3">White</span></div>
                            <div>Size:<span class="pl-4"> XL</span></div>
                        </div>
                    </div>
                    <div class="pl-md-0 pl-1"><b>$20.9</b></div>
                    <div class="pl-md-0 pl-2">
                        <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span
                            class="fa fa-plus-square text-secondary"></span>
                    </div>
                    <div class="pl-md-0 pl-1"><b>$41.8</b></div>
                    <div class="close">&times;</div>
                </div>

            </div>
        </div>
    </div>
    <div class="container bg-light rounded-bottom py-4 mb-5" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <button class="btn btn-sm bg-light border border-dark">GO BACK</button>
                    </div>
                    <div class="px-md-0 px-1" id="footer-font">
                        <b class="pl-md-4">SUBTOTAL<span class="pl-md-4">$61.78</span></b>
                    </div>
                    <div>
                        <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">CONTINUE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
