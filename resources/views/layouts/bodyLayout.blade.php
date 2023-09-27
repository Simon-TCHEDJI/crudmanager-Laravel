<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/fonts/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/layouts/bodyLayout.css')}}">
    @yield('style')
    <script src="{{asset('assets/js/layouts/bodyLayout.js')}}" defer></script>
    @yield('script')
    <title>@yield('titre')</title>
</head>
<body>
    <main>
        <div class="main">
            <nav>
                <div class="nav_container">
                    <a href="#" class="logo"><span><a href="#">CRUD Manager</a></span></a>
                    <ul class="menu">
                        <li><a href="#" class="active">Accueil</a></li>
                        <li><a href="#">Articles</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Espace personnel</a></li>
                    </ul>
                    <button class="menuBtn active" id="menuBtnOpen"><i class="fa fa-bars"></i></button>
                    <button class="menuBtn" id="menuBtnClose"><i class="fa fa-times"></i></button>
                </div>
            </nav>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </main>
</body>
</html>
