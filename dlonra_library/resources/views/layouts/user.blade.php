<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DLonra Library') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="container-fluid dashboard-main">
            @include('dashboard.sidebar')
            <div class="content">
                <button class="btn md-4" id="menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke="#969696" stroke-width="1" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 17">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg>
                </button>
                @yield('content')
            </div>
        </main>
    </div>
<!-- Scripts -->
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/jquery-3.6.1.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/dashboard.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="{{ asset('js/datatables.min.js') }}" defer></script>

<script>
$(document).ready( function () {
    $('#myBooksTable').DataTable();
} );
</script>
</body>
</html>
