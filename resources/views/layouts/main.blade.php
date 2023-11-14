<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>

<body>
    @include('../components/header')
    <main>
        @yield('content')
        @include('../components/footer')
    </main>
    @yield('modal')
    @yield('script')
</body>

</html>
