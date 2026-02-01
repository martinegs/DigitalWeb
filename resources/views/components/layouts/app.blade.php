<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ $title ?? 'DigitalWeb - Sublimación Textil' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Estilos críticos inline para prevenir FOUC -->
    <style>
        /* Reset básico y estilos críticos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Ocultar contenido hasta que los estilos carguen */
        body {
            position: relative;
            overflow-x: hidden;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #0a0a0a;
            opacity: 0;
            transition: opacity 0.3s ease-in;
        }
        
        body.loaded {
            opacity: 1;
        }
        
        /* Loader de página */
        #page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0a0a0a;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999999;
            transition: opacity 0.3s ease-out;
        }
        
        #page-loader.hide {
            opacity: 0;
            pointer-events: none;
        }
        
        .spinner {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(0, 128, 255, 0.1);
            border-top-color: #0080ff;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Navbar con fondo negro desde el inicio */
        .custom-navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 99999;
            background-color: #000000 !important;
            background: #000000 !important;
            border-bottom: 2px solid #0080ff;
            height: 70px;
        }
        
        /* Logo en navbar - estilos críticos */
        .nav-logo img {
            max-height: 50px;
            width: auto;
            object-fit: contain;
        }
        
        /* Loading placeholder para imágenes - transparente */
        img {
            background-color: transparent;
        }
        
        /* Prevenir salto de contenido */
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Preload recursos críticos -->
    <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preload" href="{{ asset('storage/img/logo.webp') }}" as="image" type="image/webp" fetchpriority="high">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    
    <!-- Fonts con display swap para mejorar rendimiento -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" media="print" onload="this.media='all'; this.onload=null;">
    <noscript><link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"></noscript>

    <!-- Bootstrap CSS con resource hints -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- Custom Styles y Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    @livewireStyles
</head>
<body>
    <!-- Loader de página -->
    <div id="page-loader">
        <div class="spinner"></div>
    </div>
    
    {{ $slot }}

    <!-- Scripts diferidos para mejor rendimiento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer crossorigin="anonymous"></script>
    @stack('scripts')
    @include('components.contact-whatsapp')
    @livewireScripts
    
    <!-- Script para ocultar loader cuando todo esté cargado -->
    <script>
        // Optimización: usar DOMContentLoaded en lugar de load para mostrar antes
        document.addEventListener('DOMContentLoaded', function() {
            const loader = document.getElementById('page-loader');
            const body = document.body;
            
            // Remover loader al detectar que el DOM está listo
            requestAnimationFrame(function() {
                loader.classList.add('hide');
                body.classList.add('loaded');
                setTimeout(() => loader.remove(), 300);
            });
        });
        
        // Fallback para load completo
        window.addEventListener('load', function() {
            const loader = document.getElementById('page-loader');
            if (loader && !loader.classList.contains('hide')) {
                loader.classList.add('hide');
                document.body.classList.add('loaded');
                setTimeout(() => loader.remove(), 300);
            }
        });
    </script>
    
    <!-- Lazy loading nativo (eliminando fallback innecesario) -->
    <script>
        // Las imágenes con loading="lazy" ya son nativas del navegador
        // Este script solo se ejecuta si hay data-src
        document.querySelectorAll('img[data-src]').forEach(img => {
            img.src = img.dataset.src;
        });
    </script>
</body>
</html>
