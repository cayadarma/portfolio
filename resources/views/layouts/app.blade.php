<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'cayadarmaa portfolio') </title>

    {{-- Font modern dari Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap 5 CSS via CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons (untuk icon sosmed, toggle, dll) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    {{-- Custom Theme CSS kita --}}
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

    @yield('extra-css')
</head>

{{--
    PENTING: atribut data-theme di tag <html> nanti diisi otomatis oleh JS
    sebelum body dirender, supaya tidak ada "flash" warna putih sebelum
    dark mode aktif. Script kecil ini sengaja diletakkan di <head>,
    paling atas, dan dijalankan langsung (bukan nunggu DOMContentLoaded).
--}}
<script>
    (function () {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
        }
    })();
</script>

<body data-bs-spy="scroll" data-bs-target="#navbarMain" data-bs-offset="80" tabindex="0">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    {{-- Bootstrap JS Bundle (termasuk Popper, untuk navbar collapse dll) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Script toggle theme kita --}}
    <script src="{{ asset('assets/js/theme-toggle.js') }}"></script>

    @yield('extra-js')
</body>
</html>