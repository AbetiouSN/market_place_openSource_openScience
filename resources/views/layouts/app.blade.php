<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NASAGAR</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    NASAGAR
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

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
                                    {{ Auth::user()->name }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>


<br><br><br><br><br><br><br><br>

<footer class="bg-black text-white text-center py-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-4 content-text-left">
                <h5><strong>Informations</strong></h5><br>
                <p>NASAGAR<br>TANGER Moroco <br>+212698571217</p>
            </div>
            <div class="col-md-4 text-center">
                <h5><strong>Liens Rapides</strong></h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">Accueil</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">Services</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">À Propos</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-light">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-md-right">
                <h5><strong>Suivez-nous</strong></h5>
                <ul class="list-unstyled d-flex justify-content-end align-items-center">
                    <li class="mx-3"><a href="#"><i class="fab fa-facebook" style="color: yellow;"></i></a></li>
                    <li class="mx-3"><a href="#"><i class="fab fa-twitter" style="color: yellow;"></i></a></li>
                    <li class="mx-3"><a href="#"><i class="fab fa-instagram" style="color: yellow;"></i></a></li>
                    <li class="mx-3"><a href="#"><i class="fab fa-youtube" style="color: yellow;"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-4 mg-r-0">
            <div class="col-md-12 text-center ">
                <img src="go2.jpeg" alt="Your Logo" width="70" height="70">
                <p>&copy; 2023 NASAGAR. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>









</body>
</html>
