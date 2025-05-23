<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    @stack('styles') <!-- For page-specific styles -->
</head>
<body>
    @include('partials.topbar')
    @include('partials.navbar')

    @yield('hero')
    
    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') <!-- For page-specific scripts -->
</body>
</html>