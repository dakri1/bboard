<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand">Bboard</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">  
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}">Notes<span class="sr-only"></span></a>
                    </li>
                    @guest
                        
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" tabindex="-1" aria-disabled="true">Register</a>
                    </li>
     
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Login</a>
                    </li>
                    @endguest
                    @auth
                        
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" tabindex="-1" aria-disabled="true">My notices</a>
                    </li>
                    
                    <form action="{{ route('logout')}}" method="POST" class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Logout">
                    </form>
                    @endauth

                </ul>
            </div>
        </nav>
        <h1 class="my-3 text-center">Text</h1>
        @yield('content')
    </div>
</body>
</html>