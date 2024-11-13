<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blooger') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> --}}

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-black py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    {{-- <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'blogger') }}
                    </a> --}}
                  <a href="{{ url('/') }}"><img class="logo" src="{{ asset('images/whiteLogo.svg') }}" alt="OSM" ></a>
                </div>
                <nav class="space-x-6 text-l sm:text-base">
                    <a class="no-underline  text-green-600  hover:text-white" href="/blog">Blog</a>
                    <a class="no-underline  text-green-600  hover:text-white" href="/about">About Us</a>
                    <a class="no-underline  text-green-600  hover:text-white" href="/quotes">Quotes</a>
                    <a class="no-underline  text-green-600  hover:text-white" href="/contact">Contact</a>
                    @guest
                        <a class="no-underline  text-green-600  hover:text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline  text-green-600  hover:text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span class="text-white" > | {{ Auth::user()->name }} |</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline text-green-600"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest

                </nav>
            </div>
        </header>



        <div>
            @yield('content')
        </div>


        <div>
            @include('layouts.footer')
        </div>

    </div>



    <div class="icon-whats">
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-e180f630-013d-456d-9e9c-159256b03185" data-elfsight-app-lazy></div>
    </div>

</body>
</html>
