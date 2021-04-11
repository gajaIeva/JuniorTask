<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Campings</title>
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        
        @yield('head')

    </head>
    <body class="antialiased">
     <nav>
        <ul>
            <li class="logo-img"><a href="#"><i class="fas fa-map-marker"></i></a></li>
            <li class="navbar-item"><a href="{{ route('campings.index') }}">Home</a></li>
            <li class="navbar-item"><a href="#">About</a></li>
        </ul>  
     </nav>

    <div class="flex-container">
        <div class="main-content">
            @yield ('content')
        </div>

        <div class="aside-content">
            @yield ('aside')
        </div>
    </div>

    </body>
</html>