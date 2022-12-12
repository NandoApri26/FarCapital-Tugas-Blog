<!doctype html>
<html>
<head>
    @include('templating.header')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @include('templating.navbar')
        @yield('content')
    </div>
</body>
</html>