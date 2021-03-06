<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Redirects Manager')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('template._menu')

<div class="container">
    @yield('content')
</div>


<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>