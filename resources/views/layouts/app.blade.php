<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Devmarketer</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="nav has-shadow">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item" href="{{ route('home') }}">
                    <img src="{{ asset('images/devmarketer-logo.png') }}" alt="DevMarketer Logo">
                </a>
                <a href="" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                <a href="" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                <a href="" class="nav-item is-tab is-hidden-mobile">Share</a>
            </div>

            <div class="nav-right" style="overflow: visible">
                @if (Auth::guard())
                    <a href="{{ route('login') }}" class="nav-item is-tab">Login</a>
                    <a href="{{ route('register') }}" class="nav-item is-tab">Join the Community</a>
                @else
                    <button class="dropdown is-aligned-right nav-item is-tab">
                        Hey {{ Auth::user()->name }} <span class="icon"><i class="fa fa-caret-down"></i></span>

                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-fw fa-user-circle-o m-r-10"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-bell m-r-10"></i> Notification</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-cog m-r-10"></i> Setting</a></li>
                            <li class="seperator"></li>
                            <li><a href="#"><i class="fa fa-fw fa-sign-out m-r-10"></i> Logout</a></li>
                        </ul>
                    </button>
                @endif
            </div>
        </div>
    </nav>
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
