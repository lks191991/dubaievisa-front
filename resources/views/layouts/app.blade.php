<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="rica">
    <meta name="keywords" content="rica">
    <meta name="author" content="rica">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <title>Rica</title>

    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vampiro+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap" rel="stylesheet">

     <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <!-- Slick slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- Date-time picker CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datepicker.min.css') }}">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- Themify Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color1.css') }}">

</head>

<body>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')


    <!-- latest jquery-->
  <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>

    <!-- date-time picker js -->
    <script src="{{ asset('assets/js/date-picker.js')}}"></script>

    <!-- Timer js-->
   <script src="{{ asset('assets/js/timer.js')}}" defer></script>

    <!-- portfolio js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{ asset('assets/js/zoom-gallery.js')}}"></script>

    <!-- slick js-->
    <script src="{{ asset('assets/js/slick.js')}}"></script>

    <!-- ripple effect js -->
    <script src="{{ asset('assets/js/jquery.ripples.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>

    <!-- Theme js-->
    <script src="{{ asset('assets/js/script.js')}}"></script>

    <script>
        $(document).ready(function () {
            try {
                $('.ripple-effect').ripples({
                    resolution: 256,
                    perturbance: 0.005
                });
            } catch (e) {
                $('.error').show().text(e);
            }
        });
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

</body>

</html>
