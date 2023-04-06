@extends('client_side.master.main')

@section('title', 'Home Page')

@section('content')

<section class="home-slider owl-carousel js-fullheight">
    <div class="slider-item js-fullheight" style="background-image: url({{ asset('client_side/images/bg_1.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Fork & Spoon</span>
                    <h1 class="mb-4">Best Restaurant</h1>
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image: url({{ asset('client_side/images/bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Fork & Spoon</span>
                    <h1 class="mb-4">Nutritious &amp; Tasty</h1>
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Fork & Spoon</span>
                    <h1 class="mb-4">Delicious &amp; Specialties</h1>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="featured">
                    <div class="row">
                        @foreach ($menu as $item)
                        <div class="col-md-3 {{ $loop->last || $loop->first ? 'd-none' : '' }}">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url({{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg') }});">
                                </div>
                                <div class="text text-center">
                                    <h3>{{ $item['name'] }}</h3>
                                    <p><span>{{ $item['poppings'] }}</span></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-wrap-about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex">
                <div class="img img-1 mr-md-2" style="background-image: url({{ asset('client_side/images/about.jpg') }});"></div>
                <div class="img img-2 ml-md-2" style="background-image: url({{ asset('client_side/images/about-1.jpg') }});"></div>
            </div>
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                <div class="heading-section mb-4 my-5 my-md-0">
                    <span class="subheading">About</span>
                    <h2 class="mb-4">Fork & Spoon Restaurant</h2>
                </div>
                <p>A restaurant (sometimes known as a diner) is a place where cooked food is sold to the public, and
                    where people sit down to eat it. It is also a place where people go to enjoy the time and to eat a
                    meal.</p>
                <pc class="time">
                    <span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
                    <span><a href="tel://9313443788">+9313443788</a></span>
                    </p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-9">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="18">0</strong>
                                <span>Years of Experienced</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="{{ count($totalMenuItem) }}">0</strong>
                                <span>Menus/Dish</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="{{ count($totalChef) }}">0</strong>
                                <span>Staffs</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="15000">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center text-md-left">
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-4">Catering Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-cake"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Birthday Party</h3>
                        <p>Plan all celebration details which include everything from appetizer trays, main dishes,
                            drink menus, and the overall party layout.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-meeting"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Business Meetings</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-tray"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Wedding Party</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Menu</h2>
            </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
            @foreach ($menu as $item)
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img {{ $loop->iteration % 4 == 3 || $loop->iteration % 4 == 0 ? 'order-md-last' : '' }}" style="background-image: url({{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-menu-image.jpg') }});">
                    </div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>{{ $item['name'] }}</h3>
                                </div>
                            </div>
                            <p>{{ $item['poppings'] }}
                            </p>
                            <p class="mt-3 mb-n1"><a href="{{ route('user.menu') }}">View More >> </a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Chef</span>
                <h2 class="mb-4">Our Master Chef</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($chefs as $chef)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url({{ asset($chef['image']) }});"></div>
                    <div class="text pt-4">
                        <h3>{{ $chef['name'] }}</h3>
                        <span class="position mb-2">{{ $chef['speciality'] }}</span>
                        <p class="secondary">{{ $chef['discription'] }}</p>
                        <div class="faded">
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section testimony-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Happy Customer</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_1.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">“Everyone loved the hotel and the food. Sam and Dan were very
                                    impressed in what a very well oiled machine you run!”</p>
                                <p class="name"> Christine Bollmann</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_2.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">“We received everyone was impressed and you will be on the top of our
                                    list for our next meeting in New Orleans.”</p>
                                <p class="name">National MI</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_3.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">“Thank you for everything—All the Hotel Monteleone staff are amazing
                                    and we really appreciate the help and level of service.”</p>
                                <p class="name">Art Leonard</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_4.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">“The banquet managers were wonderful, especially Dennis. They met our
                                    every need in a timely manner.”</p>
                                <p class="name">Sigma Tau Gamma</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_3.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">“The rooms were clean, very comfortable, and the staff was amazing.
                                    They went over and beyond to help make our stay enjoyable.”</p>
                                <p class="name">Ian Boner</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Recent Posts</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($stories as $story)
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="javascript:void(0)" class="block-20" style="background-image: url({{ asset($story['image'] != null ? $story['image'] : 'client_side/images/image_6.jpg')}});">
                    </a>
                    <div class="text p-3">
                        <div class="meta">
                            <div>{{$story['date']}}</div>
                        </div>
                        <h3 class="heading"><a href="#">{{$story['title']}}</a></h3>
                        <p class="clearfix">
                            <!-- <a href="#" class="float-left read">Read more</a> -->
                            <a href="{{ route('user.stories') }}">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection