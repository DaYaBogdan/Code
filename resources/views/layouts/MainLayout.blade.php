<!DOCTYPE html>

<html>

<head>
    <title>@yield('header-title')</title>
    <meta charset="utf-8" />
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body>
    @include('includes.sidebar')
    <div class="strip">
        @yield('content')
    </div>
</body>

</html>