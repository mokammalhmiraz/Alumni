<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @auth
                @if (Auth::user()->status == 'admin')
                <a class="navbar-brand" href="dashboard">
                    {{ __('Admin Panel') }}
                </a>
                @endif
                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home">{{ __('Home') }}</a>
                        </li>
                    </ul>

                    @auth
                    @if (Auth::user()->status == 'admin')
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="alumni_list">{{ __('Alumni List') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="student_list">{{ __('Student List') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="company_list">{{ __('Company List') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">{{ __('Event List') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">{{ __('Job List') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="request_list">{{ __('Request List') }}</a>
                        </li>
                    </ul>
                    @endif
                    @endauth

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @auth
        @if (Auth::user()->status == 'admin')
        <main class="py-4">
            @yield('admin')

        </main>
        @else
        <main class="py-4">
            @yield('guest')

        </main>
        @endif
        @endauth

    </div>
</body>
</html>




