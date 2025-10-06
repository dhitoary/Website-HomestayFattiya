<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tanda {{ }} adalah sintaks Blade untuk mencetak variabel --}}
    <title>@yield('title', 'Fattiya Homestay')</title>
    
    {{-- Cara benar memanggil file CSS di Laravel --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="navbar">
        <a href="{{ url('/') }}" class="navbar-logo">FattiyaHomestay</a>
        <nav class="navbar-nav">
            <a href="{{ url('/') }}">Home</a>
            <a href="#">Rooms</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
        <a href="#" class="navbar-login-btn">Login</a>
    </header>

    <main>
        {{-- Di sinilah konten unik dari setiap halaman akan disisipkan --}}
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="{{ url('/') }}" class="footer-logo">FattiyaHomestay.</a>
                <p class="footer-tagline">We unleash your beauty stay instantly and memorable.</p>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright 2025 • All rights reserved • Fattiya Homestay</p>
        </div>
    </footer>

</body>
</html>