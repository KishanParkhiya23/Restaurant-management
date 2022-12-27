<div class="py-1 bg-black top">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">youremail@email.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                        <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span>
                            <span>8:00AM - 9:00PM</span>
                        </p>
                    </div>
                    <div class="col-lg-3 text-right">
                        <a href="" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                        <a href="{{ route('user.registration') }}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Feliciano</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('user') ? 'active' : '' }}"><a href="{{ url('/user/') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::is('user/about') ? 'active' : ''}}"><a href="{{route('user.about')}}" class="nav-link">About</a></li>
                <li class="nav-item {{ Request::is('user/menu') ? 'active' : ''}}"><a href="{{route('user.menu')}}" class="nav-link">Menu</a></li>
                <li class="nav-item {{ Request::is('user/stories') ? 'active' : ''}}"><a href="{{route('user.stories')}}" class="nav-link">Stories</a></li>
                <li class="nav-item {{ Request::is('user/contact') ? 'active' : ''}}"><a href="{{ route('user.contact')}}" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="{{route('user.reservation')}}" class="nav-link">Book a table</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->