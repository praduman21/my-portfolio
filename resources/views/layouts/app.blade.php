<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Software Developer</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts (Futuristic & Elegant: Inter or Space Grotesk) -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* Prevent Horizontal Scrolling on Mobile */
        html, body {
            max-width: 100vw;
            overflow-x: hidden;
            position: relative;
        }
        
        /* Base Global Styling (Inline CSS rule strictly followed) */
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #0a0a0a; /* Deep dark background */
            color: #e0e0e0;
            overflow-x: hidden;
        }
        
        /* Firefox Support */
        html {
            scrollbar-behavior: smooth;
            scrollbar-width: thin;
            scrollbar-color: #00f2fe #050505;
        }

        /* Chrome, Edge, and Safari Support */
        ::-webkit-scrollbar {
            width: 10px; /* Scrollbar ki motayi */
        }

        /* Track (Peeche ka rasta) */
        ::-webkit-scrollbar-track {
            background: #050505; 
            border-left: 1px solid rgba(255, 255, 255, 0.05); /* Halka sa border track ko alag dikhane ke liye */
        }

        /* Thumb (Jo handle hum pakad ke scroll karte hain) */
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #0d6efd, #00f2fe); /* Tumhara signature gradient */
            border-radius: 10px;
            border: 2px solid #050505; /* Track ke color ka border taaki thumb thoda inset (andar) lage */
        }

        /* Thumb par Hover karne ka effect */
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #00c6ff, #0072ff); /* Hover par thoda aur bright */
        }
    </style>
    
    <!-- Custom Page Specific Styles -->
    @yield('styles')
</head>
<body class="bg-dark text-light">

    <div id="scroll-progress" style="position: fixed; top: 0; left: 0; width: 100%; 
        height: 3px; background: linear-gradient(90deg, #0d6efd, #00f2fe); z-index: 99999; 
        transform-origin: left; transform: scaleX(0);">
    </div>

    <!-- Header / Navbar -->
    @include('partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Page Specific Scripts -->
    @yield('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            // 1. GSAP ScrollTrigger ko activate karo
            gsap.registerPlugin(ScrollTrigger);

            // EFFECT 5: Top Scroll Progress Indicator
            gsap.to("#scroll-progress", {
                scaleX: 1, // 0 se 100% width fill hogi
                ease: "none",
                scrollTrigger: {
                    trigger: document.documentElement,
                    start: "top top",
                    end: "bottom bottom",
                    scrub: 0.2
                }
            });

        });
    </script>

    
</body>
</html>