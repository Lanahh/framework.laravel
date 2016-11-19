<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet" />
</head>
<body>

@section('navbar')
<nav>
    <a href="#">home</a> |
    <a href="#">About</a>
</nav>
@show


<div>
    @yield('content')
</div>


<footer>
    My footer
</footer>
<script src="{{ asset('js/test.js') }}"></script>
</body>
</html>