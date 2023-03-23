@extends('client_side.master.main')

@section('title', 'Stories Page')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg')}});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('client_side/images/image_1.jpg')}});">
                        </a>
                        <div class="text p-3">
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
                        <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('client_side/images/image_2.jpg')}});">
                        </a>
                        <div class="text p-3">
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
                        <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('client_side/images/image_3.jpg')}});">
                        </a>
                        <div class="text p-3">
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
                        <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('client_side/images/image_4.jpg')}});">
                        </a>
                        <div class="text p-3">
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
                        <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('client_side/images/image_5.jpg')}});">
                        </a>
                        <div class="text p-3">
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
                        <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('client_side/images/image_6.jpg')}});">
                        </a>
                        <div class="text p-3">
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

