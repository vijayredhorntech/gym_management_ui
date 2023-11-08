<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    @stack('styles')
    @vite('resources/css/app.css')
</head>
 <body class="relative h-screen overflow-hidden">
    @include('admin.layouts.navbar')
    @yield('content')

    @stack('scripts')
</body>
</html>
