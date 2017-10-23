<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div id="app">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand kippon-logo-mobile" href="#"><img src=" {{ asset('images/kipponnewlogo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLecture" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lecture en ligne
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarLecture">
                                <a class="dropdown-item" href="#">Magazines</a>
                                <a class="dropdown-item" href="#">Mangas</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Boutique</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="profile-menu">
                <img src=" {{ asset('images/yatta.png') }}" alt="">
            </div>
        </header>

        <main role="main">
            @yield('content')
        </main>

        <footer>

        </footer>

    </div>

    @include('footer')
</body>
</html>
