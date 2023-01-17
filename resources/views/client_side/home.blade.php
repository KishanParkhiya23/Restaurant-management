@extends('client_side.master.main')

@section('title','Home Page')

@section('content')

<section class="home-slider owl-carousel js-fullheight">
    <div class="slider-item js-fullheight" style="background-image: url({{ asset('client_side/images/bg_1.jpg')}});">
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

    <div class="slider-item js-fullheight" style="background-image: url({{ asset('client_side/images/bg_2.jpg')}});">
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

    <div class="slider-item js-fullheight" style="background-image: url({{ asset('client_side/images/bg_3.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Fork & Spoon</span>
                    <h1 class="mb-4">Delicious Specialties</h1>
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
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url({{ asset('client_side/images/breakfast-1.jpg')}});">
                                </div>
                                <div class="text text-center">
                                    <h3>Bibingka</h3>
                                    <p><span>Pice flour</span>, <span>eggs</span>, <span>coconut milk</span>, <span>butter</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url({{ asset('client_side/images/breakfast-2.jpg')}});">
                                </div>
                                <div class="text text-center">
                                    <h3>Venezolano</h3>
                                    <p><span>Egg</span>, <span>onion</span>, <span>tomato</span>, <span>annatto powder</span>, <span>coriander</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url({{ asset('client_side/images/breakfast-3.jpg')}});">
                                </div>
                                <div class="text text-center">
                                    <h3>Champorado</h3>
                                    <p><span>Rice</span>, <span>cocoa beans</span>, <span>sugar</span>, <span>condensed milk</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url({{ asset('client_side/images/breakfast-4.jpg')}});">
                                </div>
                                <div class="text text-center">
                                    <h3>Eggs benedict</h3>
                                    <p><span>rggs</span>, <span>butter</span>, <span>bacon</span>, <span>salt</span>,<span>white wine vinegar</span></p>
                                    </p>
                                </div>
                            </div>
                        </div>
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
                <div class="img img-1 mr-md-2" style="background-image: url({{ asset('client_side/images/about.jpg')}});"></div>
                <div class="img img-2 ml-md-2" style="background-image: url({{ asset('client_side/images/about-1.jpg')}});"></div>
            </div>
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                <div class="heading-section mb-4 my-5 my-md-0">
                    <span class="subheading">About</span>
                    <h2 class="mb-4">Fork & Spoon Restaurant</h2>
                </div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                    is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <pc class="time">
                    <span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
                    <span><a href="#">+ 1-978-123-4567</a></span>
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
                                <strong class="number" data-number="100">0</strong>
                                <span>Menus/Dish</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="50">0</strong>
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
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
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
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url({{ asset('client_side/images/breakfast-1.jpg')}});">
                    </div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Bibingka</h3>
                                </div>
                                {{-- <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div> --}}
                            </div>
                            <p><span>Pice flour</span>, <span>eggs</span>, <span>coconut milk</span>, <span>butter</span></p>
                            {{-- <p><a href="#" class="btn btn-primary">Order now</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url({{ asset('client_side/images/breakfast-2.jpg')}});">
                    </div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Venezolano</h3>
                                </div>
                                {{-- <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div> --}}
                            </div>
                            <p><span>Egg</span>, <span>onion</span>, <span>tomato</span>, <span>annatto powder</span>, <span>coriander</span></p>
                            {{-- <p><a href="#" class="btn btn-primary">Order now</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img order-md-last" style="background-image: url({{ asset('client_side/images/breakfast-3.jpg')}});"></div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Champorado</h3>
                                </div>
                                {{-- <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div> --}}
                            </div>
                            <p><span>Rice</span>, <span>cocoa beans</span>, <span>sugar</span>, <span>condensed milk</span></p>
                            {{-- <p><a href="#" class="btn btn-primary">Order now</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img order-md-last" style="background-image: url({{ asset('client_side/images/breakfast-5.jpg')}});"></div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Champorado</h3>
                                </div>
                                {{-- <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div> --}}
                            </div>
                            <p><span>Rice</span>, <span>cocoa beans</span>, <span>sugar</span>, <span>condensed milk</span></p>
                            {{-- <p><a href="#" class="btn btn-primary">Order now</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url({{ asset('client_side/images/breakfast-6.jpg')}});">
                    </div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Eggs benedict</h3>
                                </div>
                                {{-- <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div> --}}
                            </div>
                            <p><span>rggs</span>, <span>butter</span>, <span>bacon</span>, <span>salt</span>,<span>white wine vinegar</span></p>
                            {{-- <p><a href="#" class="btn btn-primary">Order now</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url({{ asset('client_side/images/breakfast-4.jpg')}});">
                    </div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Lugaw</h3>
                                </div>
                                {{-- <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div> --}}
                            </div>
                            <p><span>Roce</span>, <span>chicken</span>, <span>ginger</span>, <span>eggs</span>, <span>fish sauce</span></p>
                            {{-- <p><a href="#" class="btn btn-primary">Order now</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="img" style="background-image: url({{asset($chef['image'])}});"></div>
                    <div class="text pt-4">
                        <h3>{{$chef['name']}}</h3>
                        <span class="position mb-2">{{$chef['speciality']}}</span>
                        <p class="secondary">{{$chef['discription']}}</p>
                        <div class="faded">
                            <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- <section class="ftco-section img" style="background-image: url({{ asset('client_side/images/bg_3.jpg')}})"
data-stellar-background-ratio="0.5">
<div class="container">
    <div class="row d-flex">
        <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
            <div class="heading-section ftco-animate mb-5 text-center">
                <span class="subheading">Book a table</span>
                <h2 class="mb-4">Make Reservation</h2>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" id="book_date" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Time</label>
                            <input type="text" class="form-control" id="book_time" placeholder="Time">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Person</label>
                            <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">Person</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group text-center">
                            <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section> --}}

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
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_1.jpg')}})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Jason McClean</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_2.jpg')}})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Stevenson</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_3.jpg')}})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Art Leonard</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_4.jpg')}})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Rose Henderson</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('client_side/images/person_3.jpg')}})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
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
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('client_side/images/image_1.jpg')}}');">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('client_side/images/image_2.jpg')}}');">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('client_side/images/image_3.jpg')}}');">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection