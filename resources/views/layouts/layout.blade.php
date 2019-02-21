<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>
        @yield('title') | One Stop Shop
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="page-wrapper">
        <header>
           @include('partials.nav')
        </header>
        <main id="main-page-container">
            <div class="sidebar-container">
                    @include('partials.sidebar')
            </div>
            <div class="content-container">
                    @yield('content')
            </div>

        </main>
    </div>

<script src="{{asset('/js/slick/slick.js')}}"></script>

</body>
</html>