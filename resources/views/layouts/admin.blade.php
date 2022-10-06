<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @include('admin.partials.style')
</head>
<body>
   <div class="main-wrapper main-wrapper-1" id="app">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            @include('admin.partials.topnav')
        </nav>
        <div class="main-sidebar sidebar-style-2">
            @include('admin.partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Page Content -->
            @yield('content')
        </div>
        <footer class="main-footer">
            {{-- @include('admin.partials.footer') --}}
        </footer>
    </div>

    @include('admin.partials.script')
    @include('admin.partials.notif')
</body>
</html>
