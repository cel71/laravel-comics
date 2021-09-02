<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <header>
        @include('templates.header')
    </header>
    <div class="container">
        @yield('box centrale')
    </div>
    <div class="icons">
        @include('templates.icons')
    </div>
    <div class="linkbar">
        @include('templates.linkbar')
    </div>
    <footer>
        @include('templates.footer')
    </footer>
</body>
</html>