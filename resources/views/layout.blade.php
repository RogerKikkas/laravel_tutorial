<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Tutorial')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
    <div class="container">
        <ul>
            <li><a href="/laravel_tutorial/public/">Home</a></li>
            <li><a href="/laravel_tutorial/public/about">About Us</a></li>
            <li><a href="/laravel_tutorial/public/contact">Contact</a></li>
            <li><a href="/laravel_tutorial/public/projects">Projects</a></li>
        </ul>
        @yield('content')
    </div>
</body>
</html>