<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Tutorial')</title>
</head>
<body>
    <ul>
        <li><a href="/laravel_tutorial/public/">Home</a></li>
        <li><a href="/laravel_tutorial/public/about">About Us</a></li>
        <li><a href="/laravel_tutorial/public/contact">Contact</a></li>
    </ul>

    @yield('content')
</body>
</html>