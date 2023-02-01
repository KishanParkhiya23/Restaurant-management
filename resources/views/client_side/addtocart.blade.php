@extends('client_side.master.main')

@section('title', 'Addtocart Page')

@section('extra-css')
<!-- <script src="{{ asset('client_side/js/jquery.min.js') }}"></script> -->
<link rel="stylesheet" href="{{asset('client_side/css/addToCart.css')}}">
@endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Your cart</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Addtocart <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<div class="container bg-white rounded-top mt-5" id="zero-pad">
    <!-- <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12 pt-3">
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
            <div class="d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 mobile">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="150" height="150" alt="" id="image"></div>
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
                    <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span class="fa fa-plus-square text-secondary"></span>
                </div>
                <div class="pl-md-0 pl-1"><b>$19.98</b></div>
                <div class="close"><i class="fa-solid fa-trash"></i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center pt-4 pb-3 mobile border-top">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="150" height="150" alt="" id="image"></div>
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
                    <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span class="fa fa-plus-square text-secondary"></span>
                </div>
                <div class="pl-md-0 pl-1"><b>$41.8</b></div>
                <div class="close"><i class="fa-solid fa-trash"></i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center pt-4 pb-3 mobile border-top">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="150" height="150" alt="" id="image"></div>
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
                    <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span class="fa fa-plus-square text-secondary"></span>
                </div>
                <div class="pl-md-0 pl-1"><b>$41.8</b></div>
                <div class="close"><i class="fa-solid fa-trash"></i></div>
            </div>
        </div>
    </div> -->

    <!-- <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th id="produc" style="width: 70%;">PRODUCTS</th>
                <th id="prc">PRICE</th>
                <th id="quantity">QUANTITY</th>
                <th id="total">TOTAL</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div>
                        <img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="150" height="150" alt="" id="image">
                        <b>
                            Name
                        </b>
                    </div>
                </td>
            </tr>
        </tbody>
    </table> -->

    <section class="h-100 mb-5" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        <div>
                            <p class="mb-0 text-muted"><span>Items:</span> 2</p>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{asset('client_side/images/menu/breakfast-2.jpg')}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">
                                        Venezolano</p>
                                    <p><span class="text-muted">Breakfast</span></p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">$499.00</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{asset('client_side/images/menu/breakfast-3.jpg')}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Champorado</p>
                                    <p><span class="text-muted">Breakfast</span></p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">$499.00</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div class="form-outline flex-fill">
                                <input type="text" id="form1" class="form-control form-control-lg" placeholder="Apply coupan code" style="height: 40px!important;" />
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-lg ms-3" style="height: 40px!important;padding:0.3rem 1.5rem!important">Apply</button>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body d-flex flex-row justify-content-end pb-0">
                            <p class="m-0">Subtotal :&nbsp;
                            <h5 class="m-0"> $199.00</h5>
                            </p><br>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-end pb-0">
                            <p class="text-success m-0 mr-2"> <b> - </b> </p>
                            <p class="m-0"> Coupan :&nbsp;
                            <h5 class="m-0"> $00.00</h5>
                            </p>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-end">
                            <p class="m-0">Total :&nbsp;
                            <h5 class="m-0"> $199.00</h5>
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-block btn-lg">Checkout</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


<!-- <div class="container bg-light rounded-bottom py-4 mb-5" id="zero-pad">
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
                    <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">checkout</button>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
