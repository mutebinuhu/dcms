<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>My Blog in laravel</title>
</head>
<body class="bg-gray-200">
    <nav class="flex justify-between font-bold mb-4 bg-white py-6">
        <ul class="flex items-center">
            <li><a href="{{route('home')}}" class="p-3">Home</a></li>
            <li><a href="{{route('dashboard')}}" class="p-3">Dashboard</a></li>
            <li><a href="" class="p-3"></a>Post</li>
            <li><a href="" class="p-3"></a>Customers</li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li class="">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="font-bold">Logout</button>
                    </form>
                </li>
                <li><a href="" class="p-3">{{auth()->user()->username}}</a></li>
            @endauth
            @guest
                <li><a href="{{route('register')}}" class="p-3">Register</a></li>
                <li><a href="{{route('login')}}" class="p-3">Login</a></li>
            @endguest
        </ul>
    </nav>
        @yield('content')
</body>
</html>