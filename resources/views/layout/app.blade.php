<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gifted Ideas') }}</title>
</head>

<body>
    @include('includes.header')

    <main class="py-4">
        @yield('content')
    </main>

    @include('includes.footer')
</body>

</html>
