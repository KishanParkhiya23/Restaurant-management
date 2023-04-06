@php
$data = session()->get('loginData');
@endphp


<div class="py-1 bg-black top">

    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md-2 d-flex topper align-items-center p-0">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text"><a href="tel://9313443788" class="text-light">+9313443788</a></span>
                    </div>
                    <div class="col-md-3 d-flex topper align-items-center p-0">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text"><a href="mailto:forkndspoon010@gmail.com" class="text-light">forkndspoon010@gmail.com</a></span>
                    </div>
                    <div class="col-md-4  p-0">
                        <p class="mb-0 register-link"><span>Open hours:</span> <span>Mon - Sun</span>
                            <span>8:00AM - 11:00PM</span>
                        </p>
                    </div>
                    <div class="col-lg-3 text-right p-0">
                        @if (!session()->has('Ulogin'))
                        <a href="{{ route('user.registration') }}" class="small mr-3"><span class="icon-users">
                            </span>Register</a>
                        <a href="{{ route('user.login') }}" class="small mr-3"><span class="icon-users"> </span>Log
                            In</a>
                        @else
                        <div class="d-inline-block">
                            <div class="dropdown dropleft">
                                <a href="{{route('user.your-cart')}}"><i class="fa-solid fa-bag-shopping" style="font-size: 1.15rem;">
                                        @if (count(get_cart()) > 0)
                                        <span class='badge badge-warning' id='lblCartCount'> {{ count(get_cart()) }} </span>
                                        @endif
                                    </i>
                                </a>

                                <!-- Name display -->
                                <i onclick="myFunction()" class="fa-solid fa-pen mr-2 ml-3" style="font-size:.8rem;cursor: pointer;" title="Edit Username"></i>
                                <span id="myName">
                                    <span class="myP" style="font-size: .9rem">
                                        {{ $data->fullname }}
                                    </span>
                                </span>
                                <!-- Name display -->

                                <!-- Edit display -->
                                <span id="editName" class="d-none">
                                    <i class="fa-solid fa-floppy-disk mx-2" style="font-size:1.2rem;cursor: pointer;" onclick="changeName()" title="Save Username"></i>
                                    <input type="text" value="{{ $data->fullname }}" style="background: none; color: white;" autofocus id="chaneName">
                                </span>
                                <!-- Edit display -->

                                <span id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-user ml-2" style="font-size:1.15rem;cursor: pointer;"></i>
                                </span>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('user.pchange_password') }}"><i class='fa-solid fa-key mr-2'></i>Change password</a>
                                    <a class="dropdown-item" href="{{ route('user.yourorder') }}"><i class='fas fa-cocktail mr-2'></i>Your
                                        order</a>
                                    <a class="dropdown-item" href="{{ route('user.Ulogout') }}"><i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Logout</a>
                                </div>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Fork & Spoon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::is('user/about') ? 'active' : '' }}"><a href="{{ route('user.about') }}" class="nav-link">About</a></li>
                <li class="nav-item {{ Request::is('user/menu') ? 'active' : '' }}"><a href="{{ route('user.menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item {{ Request::is('user/stories') ? 'active' : '' }}"><a href="{{ route('user.stories') }}" class="nav-link">Stories</a></li>
                <li class="nav-item {{ Request::is('user/contact') ? 'active' : '' }}"><a href="{{ route('user.contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="{{ route('user.reservation') }}" class="nav-link">Book a table</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->