<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Script -->
    {{-- <script src="{{ assets('js/app.js')}}" defer></script> --}}

    <!-- fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ assets('css/app.css') }}">

    <title>Todo App</title>
</head>
<body>
    @yield('content')
</body>
</html>