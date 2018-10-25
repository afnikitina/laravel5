<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
        @yield('styles')

    </head>
    <body>
        @include('includes.header')
        <div class="container main">
            @yield('content')
        </div>
    </body>
</html>
