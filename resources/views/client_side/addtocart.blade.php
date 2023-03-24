@extends('client_side.master.main')

@section('title', 'Your cart Page')

@section('extra-css')
<link rel="stylesheet" href="{{asset('client_side/css/addToCart.css')}}">
<style>
    .submit-order:hover {
        color: #eee !important;
    }
</style>
@endsection

@section('extra-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    let token = "{{ csrf_token() }}";

    function deleteItem(data) {
        swal({
            title: `Are you sure for remove this item?`,
            text: "If you delete this, it will be remove from your cart.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: 'DELETE',
                    url: `/user/remove/item/${data.id}`,
                    data: {
                        "id": data.id,
                        "_token": token
                    },
                    success: function(response) {
                        location.reload();
                    }
                })
            }
        });
    }

    function changeCart(data) {
        // let id = data.id;
        let value = $(`#${data.id}`).val();

        $.ajax({
            type: 'POST',
            url: `/user/change/cart/${data.id}`,
            data: {
                "id": data.id,
                "value": value,
                "_token": token
            },
            success: function(response) {
                location.reload();
            }
        })
    }
</script>
@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Your cart</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{route('user.menu')}}">Menu <i class="ion-ios-arrow-forward"></i></a></span><span>Add to cart <i class="ion-ios-arrow-forward"></i></span></p>
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
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        <div>
                            <p class="mb-0 text-muted"><span>Items:</span> {{count($food)}}</p>
                        </div>
                    </div>

                    <!-- @php $total = 0; @endphp -->

                    @foreach ($food as $key => $item)

                    <!-- @php $total += $item->foods->prize * $item->quantity; @endphp -->

                    <div class="card rounded-3 mb-4" id="food_{{$item->foods->id}}">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2 p-0">
                                    <img src="{{asset(isset($item->foods->image) ? $item->foods->image : 'client_side/images/menu/no-menu-image.jpg')}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-5 col-lg-5 col-xl-5">
                                    <p class="lead fw-normal mb-0">
                                        {{ $item->foods->name}}
                                    </p>
                                    <p><span class="text-muted">{{ ucfirst(get_catagory($item->foods->type))}}</span></p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <select class="form-control w-100 d-inline-block" name="quantity" id="{{$item->id}}" onchange="changeCart(this)">
                                        <option value="1" {{$item->quantity == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{$item->quantity == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{$item->quantity == 3 ? 'selected' : '' }}>3</option>
                                        <option value="4" {{$item->quantity == 4 ? 'selected' : '' }}>4</option>
                                        <option value="5" {{$item->quantity == 5 ? 'selected' : '' }}>5</option>
                                        <option value="6" {{$item->quantity == 6 ? 'selected' : '' }}>6</option>
                                        <option value="7" {{$item->quantity == 7 ? 'selected' : '' }}>7</option>
                                        <option value="8" {{$item->quantity == 8 ? 'selected' : '' }}>8</option>
                                        <option value="9" {{$item->quantity == 9 ? 'selected' : '' }}>9</option>
                                        <option value="10" {{$item->quantity == 10 ? 'selected' : '' }}>10</option>
                                    </select>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 p-0">
                                    <h5 class="mb-0"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{ $item->foods->prize * $item->quantity}}</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end p-0">
                                    <a id={{$item->foods->id}} onclick="deleteItem(this)" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div class="form-outline flex-fill">
                                <input type="text" id="form1" class="form-control form-control-lg" placeholder="Apply coupan code" style="height: 40px!important;" />
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-lg ms-3" style="height: 40px!important;padding:0.3rem 1.5rem!important">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container bg-light rounded-bottom py-4 mb-5" id="zero-pad" style="max-width: 1110px!important;">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('user.menu')}}"><button class="btn btn-sm btn-outline-dark">GO BACK TO MENU</button></a>
                </div>
                <div class="px-md-0 px-1" id="footer-font">
                    <b class="pl-md-4">SUBTOTAL <span class="pl-md-3"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> </span><span id="total">{{get_cart_total()}}</span></b>
                </div>
                <div>
                    <a href="{{route('user.delivery')}}" class="btn btn-sm btn-outline-primary px-lg-5 px-3 submit-order">Order</a>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container bg-white rounded-top mt-5" id="zero-pad">
    <section class="h-100 mb-5" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <h3 class="font-weight-bold text-secondary m-0">You don't have any item in cart</h3>
            </div>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <!-- <h3 class="font-weight-bold text-secondary m-0">You don't have any item in cart</h3> -->
                <a href="{{route('user.menu')}}"><i class="fa-solid fa-utensils mr-2"></i> Go to menu <i class="fa-solid fa-utensils ml-2"></i></a>
            </div>
        </div>
    </section>
</div>
@endif

@endsection
