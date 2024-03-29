<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="btngotodash">
        <a href="{{route('dashboard.books')}}" class="btn btngotodash" >close book</a>
    </div>
    <div id="app">
        
        <main class="container-fluid ebook-main">
            
            @yield('content')
        </main>
    </div>
        <!-- Scripts -->
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('frontend/js/jquery-3.6.1.min.js') }}" defer></script>
        <script src="{{ asset('frontend/js/ebook.js') }}" defer></script>
</body>
</html>
