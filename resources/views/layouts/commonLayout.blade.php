<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customer.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

</head>
<body>
<div id="app">
    <div class="header col-md-12 " style="height:600px;">
        <div class="container">
            <div class="row pl-3">

                <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item pl-1">
                                <a class="nav-link text-white" href="#">LOGO</a>
                            </li>
                            <li class="nav-item dropdown pl-1">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Buy
                                </a>
                                <div class="dropdown-menu by-items" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item custome-item text-white" href="#">Apartment<br>Houses</a>
                                    <a class="dropdown-item custome-item text-white" href="#">Commercial <br> Bungalow<br> Villas</a>
                                </div>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link text-white" href="#">Rent</a>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link text-white" href="#">Land</a>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link disabled text-white" href="#">Property Insider</a>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link disabled text-white" href="#">Finde agent</a>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link disabled text-white" href="#">Property Wanted</a>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link disabled text-white" href="#">Service</a>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link disabled text-white" href="#">Blog</a>
                            </li>
                            <li class="nav-item pl-1">
                                <button type="button" class="btn btn-primary bg-transparent apartment-btn-shape ">List your apartments</button>
                            </li>
                            @guest
                                {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->fullname }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                        </ul>
                    </div>
                </nav>

            </div>
            <div class="">
                @yield('middle')

            </div>

        </div>
    </div>
</div>

<div class="container-fluid">
    @yield('content')
</div>





</body>
</html>

