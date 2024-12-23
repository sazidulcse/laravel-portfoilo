<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>sazidul-rahman-emon</title>

  <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-carousel/owl.carousel.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/css/perfect-scrollbar.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('vendor/nice-select/css/nice-select.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('vendor/fancybox/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/virtual.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/topbar.virtual.css')}}">
</head>

<body class="theme-red">

  @include('layout.header')

  @yield('content')

  @include('layout.footer')



  <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="{{asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>

  <script src="{{asset('vendor/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  
  <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>

  <script src="{{asset('vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>

  <script src="{{asset('vendor/fancybox/js/jquery.fancybox.min.js')}}"></script>

  <script src="{{asset('vendor/wow/wow.min.js')}}"></script>

  <script src="{{asset('vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>

  <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>

  <script src="{{asset('js/google-maps.js')}}"></script>

  <script src="{{asset('js/topbar-virtual.js')}}"></script>

  <script async defer
    src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap')}}"></script>

</body>

</html>