<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font awesome -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ asset('assets/css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.simpleLens.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nouislider.css') }}">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">
<!-- <link id="switcher" href="{{ asset('assets/css/theme-color/bridge-theme.css') }}" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ asset('assets/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- wpf loader Two -->
{{--<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>--}}
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">

                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                @auth
                                    <li><a href="{{ route('dashboard') }}">My Account</a></li>
                                @endauth
                                <li class="hidden-xs"><a href="{{ route('cart.list') }}">My Cart</a></li>
                                <li class="hidden-xs"><a href="{{ route('checkout.index') }}">Checkout</a></li>

                                @guest
                                    @if (Route::has('login'))
                                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                    @endif
                                @else
                                    <li><a href="javascript:void(0)">{{ Auth::user()->name }}</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="{{ url('/') }}">
                                <span class="fa fa-shopping-cart"></span>
                                <p>{{ config('app.name', 'Laravel') }}<span>By Asfandyar Khan</span></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>

@include('layouts.menu')

@yield('content')

@include('layouts.footer')


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.smartmenus.js') }}"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.smartmenus.bootstrap.js') }}"></script>
<!-- To Slider JS -->
<script src="{{ asset('assets/js/sequence.js') }}"></script>
<script src="{{ asset('assets/js/sequence-theme.modern-slide-in.js') }}"></script>
<!-- Product view slider -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.simpleGallery.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.simpleLens.js') }}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{ asset('assets/js/slick.js') }}"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{ asset('assets/js/nouislider.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
