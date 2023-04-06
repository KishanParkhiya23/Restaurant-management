<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fork & spoon - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('client_side/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_side/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('client_side/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_side/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_side/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('client_side/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('client_side/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('client_side/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('client_side/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('client_side/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('client_side/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('client_side/css/style.css') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/icon.png') }}" />

    @yield('extra-css')

</head>

<body>

    @include('client_side.master.header')

    @yield('content')

    @include('client_side.master.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#c8a97e" />
        </svg>
    </div>



    <script>
        function myFunction() {
            $('#myName').css('display', 'none');
            $('.dropdown .fa-pen').css('display', 'none');
            $('#editName').removeClass('d-none');
        }

        function changeName() {
            let name = $('#chaneName').val();
            let token = "{{ csrf_token() }}";

            $.ajax({
                type: 'POST',
                url: `/user/change/name`,
                data: {
                    "name": name,
                    "_token": token
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    }
                }
            })

        }
    </script>
    <script src="https://kit.fontawesome.com/88bf84b9d4.js" crossorigin="anonymous"></script>
    <script src="{{ asset('client_side/js/jquery.min.js') }}"></script>
    <script src="{{ asset('client_side/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('client_side/js/popper.min.js') }}"></script>
    <script src="{{ asset('client_side/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client_side/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('client_side/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('client_side/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('client_side/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client_side/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client_side/js/aos.js') }}"></script>
    <script src="{{ asset('client_side/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('client_side/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('client_side/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('client_side/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('client_side/js/google-map.js') }}"></script>
    <script src="{{ asset('client_side/js/main.js') }}"></script>
    @yield('extra-js')


</body>

</html>