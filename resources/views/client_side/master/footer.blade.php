<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Feliciano</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Open Hours</h2>
                    <ul class="list-unstyled open-hours">
                        <li class="d-flex"><span>Monday</span><span>9:00am-12:00pm</span></li>
                        <li class="d-flex"><span>Tuesday</span><span>9:00am-12:00pm</span></li>
                        <li class="d-flex"><span>Wednesday</span><span>9:00am-12:00pm</span></li>
                        <li class="d-flex"><span>Thursday</span><span>9:00am-12:00pm</span></li>
                        <li class="d-flex"><span>Friday</span><span>9:00am-12:00pm</span></li>
                        <li class="d-flex"><span>Saturday</span><span>9:00am-12:00pm</span></li>
                        <li class="d-flex"><span>Sunday</span><span> 9:00am-12:00pm</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Instagram</h2>
                    <div class="thumb d-sm-flex">
                        <a href="{{ route('user.stories') }}" class="thumb-menu img" style="background-image: url( {{ asset('client_side/images/insta-1.jpg') }} );">
                        </a>
                        <a href="{{ route('user.stories') }}" class="thumb-menu img" style="background-image: url( {{ asset('client_side/images/insta-2.jpg') }} );">
                        </a>
                        <a href="{{ route('user.stories') }}" class="thumb-menu img" style="background-image: url( {{ asset('client_side/images/insta-3.jpg') }} );">
                        </a>
                    </div>
                    <div class="thumb d-flex">
                        <a href="{{ route('user.stories') }}" class="thumb-menu img" style="background-image: url( {{ asset('client_side/images/insta-4.jpg') }} );">
                        </a>
                        <a href="{{ route('user.stories') }}" class="thumb-menu img" style="background-image: url( {{ asset('client_side/images/insta-5.jpg') }} );">
                        </a>
                        <a href="{{ route('user.stories') }}" class="thumb-menu img" style="background-image: url( {{ asset('client_side/images/insta-6.jpg') }} );">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p class="text-center">Copyright © by <a href="{{ route('home') }}">Fork & Spoon</a> in 2022</p>
    </div>
</footer>