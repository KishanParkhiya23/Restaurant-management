@extends('client_side.master.main')

@section('title', 'Add to cart Page')

@section('extra-css')
<style>
    nav,
    .top {
        display: none !important;
    }

    #quantity {
        cursor: pointer;
    }

    .hero-wrap.hero-wrap-2 {
        height: 230px;
    }

    .hero-wrap.hero-wrap-2 .slider-text {
        height: 230px;
    }
</style>
@endsection

@section('extra-js')
<script>
    $('#quantity').on("change", function() {
        let amount = $('#prize').val();
        let quantity = $(this).val();
        $('#amount').text(amount * quantity);
    });
</script>
@endsection

@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Add to cart</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('user.menu') }}">Menu <i class="ion-ios-arrow-forward"></i></a></span> <span>Add to cart <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="ftco-search">
            <div class="row p-4">
                <div class="col-lg-6">
                    <img src="{{ asset( isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg')}}" width="90%" class="img-thumbnail d-block" alt="" style="margin: auto auto;">
                </div>
                <div class="col-lg-6">
                    <form action="{{route('user.addtocart',$item['id'])}}" method="post">
                        @csrf
                        <h4 class="mt-4">
                            <strong>
                                <li>{{$item['name']}}</li>
                            </strong>
                        </h4>
                        <p style="font-size: 0.8rem;" class="mb-0 mt-3">Poppings of item :</p>
                        <p>{{$item['poppings']}}</p>

                        <input type="hidden" id="prize" value="{{ $item['prize'] }}">
                        <span><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> <span id="amount">{{ $item['prize'] }}</span></span>
                        <div class="d-flex justify-content-between mt-4">
                            <label for="quantity" class="d-inline-block"><strong>Quantity</strong></label>
                            <select class="form-control w-25 d-inline-block" name="quantity" id="quantity">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <p class="text-right mt-2 text-secondary" style="font-size: .8rem;">At a time you can ordered
                            only 10 item.</p>

                        <div class="mt-5 text-right">
                            <a href="{{ route('user.menu') }}" class="btn btn-secondary w-100" style="border-radius: 0!important;height: 3rem;padding-top:0.7rem;">Cancel</a>
                            <button type="submit" class="btn btn-primary w-100 mt-2" style="border-radius: 0!important;height: 3rem;"><i class="fa-solid fa-cart-plus" style="margin-right: 0.8rem;"></i>Add to cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
