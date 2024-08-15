<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LRA') }}</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css?family=Source Sans Pro" rel="stylesheet">
        <link rel="stylesheet" href="../../css/app.css">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('includes.header1')

    <main class="py-4">
        @yield('content')
    </main>

    @include('includes.footer')
</body>

</html>
