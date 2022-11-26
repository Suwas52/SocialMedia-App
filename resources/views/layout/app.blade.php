<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article App</title>
    @vite(['resources/js/app.js'])


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="{{route('layoutApp')}}">Article App</a>

            @auth
            <div class="contain ">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-person d-block center mx-5" viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
                <a href="{{route('login')}}" class=" navbar-brand d-">{{auth()->user()->name}}</a>
            </div>
            @endauth

            @guest
            <ul class=" navbar-nav">
                <li class="nav-item ">
                    <a class="navbar-brand " href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item ">
                    <a class="navbar-brand " href="{{route('register')}}">Register</a>
                </li>
            </ul>
            @endguest
        </div>
    </nav>



    <!-- dynamic content -->
    @yield('content')

</body>

</html>