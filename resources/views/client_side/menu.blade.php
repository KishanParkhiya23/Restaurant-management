@extends('client_side.master.main')

@section('title', 'Menu Page')

@section('content')

        <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg')}});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate text-center mb-4">
                        <h1 class="mb-2 bread">Specialties</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-section">
            <div class="container">
                <div class="ftco-search">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill"
                                    href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                    aria-selected="true">Breakfast</a>

                                <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                    role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>

                                <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                                    role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>

                                <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                                    role="tab" aria-controls="v-pills-4" aria-selected="false">Drinks</a>

                                <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5"
                                    role="tab" aria-controls="v-pills-5" aria-selected="false">Desserts</a>

                                <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6"
                                    role="tab" aria-controls="v-pills-6" aria-selected="false">Wine</a>

                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">

                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="day-1-tab">
                                    <div class="row no-gutters d-flex align-items-stretch">
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/breakfast-1.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Bibingka </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Pice flour</span>, <span>eggs</span>, <span>coconut
                                                                milk</span>, <span>butter</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/breakfast-2.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3> Venezolano</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Egg</span>, <span>onion</span>, <span>tomato</span>,
                                                            <span>annatto powder</span>,<span>coriander</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/breakfast-3.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Champorado </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Rice</span>, <span>cocoa beans</span>, <span>sugar</span>,
                                                            <span>condensed milk</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/breakfast-4.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Lugaw </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Roce</span>, <span>chicken</span>, <span>ginger</span>,
                                                            <span>eggs</span>,<span>fish sauce</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/breakfast-5.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Eggs benedict</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>rggs</span>, <span>butter</span>, <span>bacon</span>,
                                                            <span>salt</span>,<span>white wine vinegar</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/breakfast-6.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>egg cheese sandwich </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>bread</span>,<span>eggs</span>, <span>cheese</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/breakfast-7.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Hotsilog </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Hot dog</span>, <span>eggs</span>, <span>garlic</span>,
                                                            <span>cheese</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/breakfast-8.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>The Strawberry Champorado</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>milk</span>, <span>Strawberry </span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="v-pills-day-2-tab">
                                    <div class="row no-gutters d-flex align-items-stretch">
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/lunch-1.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Grilled Chicken Escalope</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>grapes</span>, <span>spring onion</span>, <span> cherry
                                                                tomatoes</span>, <span>leamon</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/lunch-2.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Zafrani Chicken</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Ginger</span>, <span>Poppy Seeds</span>, <span>Nutmeg
                                                                powder</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/lunch-3.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Hyderabadi Chicken Fry</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Chicken</span>, <span>Lemon Juice</span>, <span>Hung
                                                                Curd</span>, <span> Fried Onions</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/lunch-4.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Stuffed Makhmali</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Cream</span>, <span>Chicken Fillet</span>, <span>Green
                                                                Chili Paste</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/lunch-5.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Herbs and Paprika</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Tortillas</span>, <span>Potatoes</span>,
                                                            <span>Cheese</span>, <span>Thinly sliced vegetables</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/lunch-6.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Mutton Shami Kebab</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Mutton Keema</span>, <span>Chana Dal</span>, <span>Cinnamon
                                                                Stick</span>, <span>Cloves</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/lunch-7.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Tandoori Lamb Chops</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>mint chutney</span>, <span>yogurt and flavoursome
                                                                masalas</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/lunch-8.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Nihari Gosht </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>cardamom</span>, <span>chillies</span>,
                                                            <span>cinnamon</span>, <span>bay leaves</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                    aria-labelledby="v-pills-day-3-tab">
                                    <div class="row no-gutters d-flex align-items-stretch">
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/dinner-1.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Grilled Chicken Salsa</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>carrit</span>, <span>leamon</span>, <span>coriander</span>,
                                                            <span>cheese</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/dinner-2.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Mutton korma</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>noodels</span>, <span>Potatoes</span>, <span>egg</span>,
                                                            <span>onion</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/dinner-3.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>pina colada pork ribs</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>tomoto</span>, <span>garlic</span>, <span>egg</span>,
                                                            <span>cheese</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/dinner-4.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Tandoori lamb chops</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Tortillas</span>, <span>Potatoes</span>,
                                                            <span>cardamom</span>, <span>egg</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/dinner-5.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>malabar fish biryani</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>noodels</span>, <span>Potatoes</span>, <span>butter</span>,
                                                            <span>cheese</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/dinner-6.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>curried parmesan fish fingers</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>bread</span>, <span>cheese</span>, <span>egg</span>,
                                                            <span>butter</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                    aria-labelledby="v-pills-day-4-tab">
                                    <div class="row no-gutters d-flex align-items-stretch">
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/drink-1.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Bellini </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>wine</span>, <span>sparkling</span>, <span>classic</span>,
                                                            <span>light</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/drink-2.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>virgin frozen margarita</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>juice</span>, <span>frozen</span>,
                                                            <span>nonalcoholic</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/drink-3.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>champagne dream</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>champagne</span>, <span>sparkling</span>,
                                                            <span>medium</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/drink-4.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Admiral and cola</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>ice</span>, <span> lime juice</span>, <span>pepsi</span>
                                                        </p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/drink-5.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Holiday hopper</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>liqueur</span>, <span>martini</span>, <span>creamy</span>,
                                                            <span>light</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/drink-6.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>wowo </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>mix vodka</span>, <span>juice</span>, <span>cranberry
                                                            </span>, <span>peach cocktail</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                    aria-labelledby="v-pills-day-5-tab">
                                    <div class="row no-gutters d-flex align-items-stretch">
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/dessert-1.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Low Fat Tiramisu</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>coffee</span>, <span>sugar</span>, <span>rolks</span>,
                                                            <span>brandy</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/dessert-2.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Chocolate bullets</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>milk</span>, <span>lactose</span>, <span>alcohol</span>,
                                                            <span>soybean</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/dessert-3.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Frozen Biscoff rum ball</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>gluten</span>, <span>wheat</span>, <span>egg</span>,
                                                            <span>milk</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/dessert-4.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Ice cream</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Ice</span>, <span>milk </span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/dessert-5.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Lemon crisp cheesecake</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>no-back lemon and white chocolate</span>, <span>cheesecake
                                                            </span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/drink-6.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>The juice hub</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>beverages</span>, <span>ice cream</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-6" role="tabpanel"
                                    aria-labelledby="v-pills-day-6-tab">
                                    <div class="row no-gutters d-flex align-items-stretch">
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/wine-1.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3> Sula Rasa Shiraz</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>,
                                                            <span>Tomatoe</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/wine-2.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Fratelli SETTE</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>,
                                                            <span>Tomatoe</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/wine-3.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Grover La Reserve
                                                                </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>,
                                                            <span>Tomatoe</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/wine-4.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>KRSMA Sangiovese
                                                                </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>,
                                                            <span>Tomatoe</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/wine-5.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Charosa</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>,
                                                            <span>Tomatoe</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img"
                                                    style="background-image: url({{ asset('client_side/images/wine-6.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>J'NOON White
                                                                </h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>,
                                                            <span>Tomatoe</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/wine-7.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Crios Torrontes</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>,
                                                            <span>Tomatoe</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                <div class="menu-img img order-md-last"
                                                    style="background-image: url({{ asset('client_side/images/wine-8.jpg')}});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>Riesling</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">$29</span>
                                                            </div>
                                                        </div>
                                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>,
                                                            <span>Tomatoe</span></p>
                                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
