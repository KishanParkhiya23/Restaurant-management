@extends('client_side.master.main')

@section('title', 'Contact Page')

@section('extra-css')
<style>
    .required {
        color: rgb(252, 72, 72);
        /* margin-top: -0.2rem; */
        font-size: 0.8rem;
    }
</style>
@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Contact</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
                <form action="{{route('user.contact.save')}}" method="post">
                    @csrf
                    <div class="form-group">
                        @error('name')
                        <span class="text-danger required">{{$message}}</span>
                        @enderror
                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                    </div>
                    <div class="form-group">
                        @error('email')
                        <span class="text-danger required">{{$message}}</span>
                        @enderror
                        <input type="text" class="form-control" placeholder="Your Email" name="email">
                    </div>
                    <div class="form-group">
                        @error('subject')
                        <span class="text-danger required">{{$message}}</span>
                        @enderror
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        @error('message')
                        <span class="text-danger required">{{$message}}</span>
                        @enderror
                        <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4 font-weight-bold">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="dbox">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="dbox">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="dbox">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="dbox">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection