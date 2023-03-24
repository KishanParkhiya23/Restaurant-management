@extends('client_side.master.main')

@section('title', 'Menu Page')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Specialties</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="ftco-search">
            <div class="row">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Breakfast</a>

                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>

                        <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Drinks</a>

                        <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Desserts</a>

                        <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Wine</a>

                    </div>
                </div>
                <div class="col-md-12 tab-wrap">

                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                            <div class="row no-gutters d-flex align-items-stretch">
                                @foreach ($breakfast as $item)
                                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                        <div class="menu-img img {{ $loop->iteration % 4 == 3 || $loop->iteration % 4 == 0  ? 'order-md-last' : '' }}" style="background-image: url({{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg')}});"></div>
                                        <div class="text d-flex align-items-center">
                                            <div>
                                                <div class="d-flex">
                                                    <div class="one-half">
                                                        <h3>{{$item['name']}}</h3>
                                                    </div>
                                                    <div class="one-forth">
                                                        <span class="price"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{$item['prize']}}</span>
                                                    </div>
                                                </div>
                                                <p>{{$item['poppings']}}
                                                </p>
                                                <p><a href="{{ route('user.forder',$item['id']) }}" class="btn btn-primary">Order now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                            <div class="row no-gutters d-flex align-items-stretch">

                                @foreach ($lunch as $item)
                                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                        <div class="menu-img img {{ $loop->iteration % 4 == 3 || $loop->iteration % 4 == 0  ? 'order-md-last' : '' }}" style="background-image: url({{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg')}});"></div>
                                        <div class="text d-flex align-items-center">
                                            <div>
                                                <div class="d-flex">
                                                    <div class="one-half">
                                                        <h3>{{$item['name']}}</h3>
                                                    </div>
                                                    <div class="one-forth">
                                                        <span class="price"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{$item['prize']}}</span>
                                                    </div>
                                                </div>
                                                <p>{{$item['poppings']}}
                                                </p>
                                                <p><a href="{{ route('user.forder',$item['id']) }}" class="btn btn-primary">Order now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                            <div class="row no-gutters d-flex align-items-stretch">
                                @foreach ($dinner as $item)
                                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                        <div class="menu-img img {{ $loop->iteration % 4 == 3 || $loop->iteration % 4 == 0  ? 'order-md-last' : '' }}" style="background-image: url({{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg')}});"></div>
                                        <div class="text d-flex align-items-center">
                                            <div>
                                                <div class="d-flex">
                                                    <div class="one-half">
                                                        <h3>{{$item['name']}}</h3>
                                                    </div>
                                                    <div class="one-forth">
                                                        <span class="price"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{$item['prize']}}</span>
                                                    </div>
                                                </div>
                                                <p>{{$item['poppings']}}
                                                </p>
                                                <p><a href="{{ route('user.forder',$item['id']) }}" class="btn btn-primary">Order now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                            <div class="row no-gutters d-flex align-items-stretch">
                                @foreach ($drinks as $item)
                                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                        <div class="menu-img img {{ $loop->iteration % 4 == 3 || $loop->iteration % 4 == 0  ? 'order-md-last' : '' }}" style="background-image: url({{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg')}});"></div>
                                        <div class="text d-flex align-items-center">
                                            <div>
                                                <div class="d-flex">
                                                    <div class="one-half">
                                                        <h3>{{$item['name']}}</h3>
                                                    </div>
                                                    <div class="one-forth">
                                                        <span class="price"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{$item['prize']}}</span>
                                                    </div>
                                                </div>
                                                <p>{{$item['poppings']}}
                                                </p>
                                                <p><a href="{{ route('user.forder',$item['id']) }}" class="btn btn-primary">Order now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
                            <div class="row no-gutters d-flex align-items-stretch">
                                @foreach ($desserts as $item)
                                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                        <div class="menu-img img {{ $loop->iteration % 4 == 3 || $loop->iteration % 4 == 0  ? 'order-md-last' : '' }}" style="background-image: url({{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg')}});"></div>
                                        <div class="text d-flex align-items-center">
                                            <div>
                                                <div class="d-flex">
                                                    <div class="one-half">
                                                        <h3>{{$item['name']}}</h3>
                                                    </div>
                                                    <div class="one-forth">
                                                        <span class="price"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{$item['prize']}}</span>
                                                    </div>
                                                </div>
                                                <p>{{$item['poppings']}}
                                                </p>
                                                <p><a href="{{ route('user.forder',$item['id']) }}" class="btn btn-primary">Order now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
                            <div class="row no-gutters d-flex align-items-stretch">
                                @foreach ($wine as $item)
                                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                        <div class="menu-img img {{ $loop->iteration % 4 == 3 || $loop->iteration % 4 == 0 ? 'order-md-last' : '' }}" style="background-image: url({{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg')}});"></div>
                                        <div class="text d-flex align-items-center">
                                            <div>
                                                <div class="d-flex">
                                                    <div class="one-half">
                                                        <h3>{{$item['name']}}</h3>
                                                    </div>
                                                    <div class="one-forth">
                                                        <span class="price"><i class="fa-solid fa-indian-rupee-sign fa-xs"></i> {{$item['prize']}}</span>
                                                    </div>
                                                </div>
                                                <p>{{$item['poppings']}}
                                                </p>
                                                <p><a href="{{ route('user.forder',$item['id']) }}" class="btn btn-primary">Order now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
