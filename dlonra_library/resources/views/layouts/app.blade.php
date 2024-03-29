<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DLonra Library</title>
    <!-- fa icons -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
  
        @include('layouts.inc.front-navbar')

        <main>
            @yield('content')
        </main>
    </div>
        <!-- Scripts -->
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('frontend/js/jquery-3.6.1.min.js') }}" defer></script>
        <script src="{{ asset('js/datatables.min.js') }}" defer></script>
</body>
</html>
