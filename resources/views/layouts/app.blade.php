<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $portfolio['personal']['full_name'] }} — {{ $portfolio['personal']['role'] }}. {{ $portfolio['personal']['short_bio'] }}">
    <meta name="keywords" content="portfolio, tiara ariyanto putri, software engineer, ui ux designer, ipb university, web developer">
    <meta property="og:title" content="{{ $portfolio['personal']['full_name'] }} — {{ $portfolio['personal']['role'] }}">
    <meta property="og:description" content="{{ $portfolio['personal']['short_bio'] }}">
    <meta property="og:type" content="website">

    <title>{{ $portfolio['personal']['full_name'] }} — {{ $portfolio['personal']['role'] }}</title>

    <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Devicon Icons -->
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFFDF7] text-stone-800 font-sans antialiased selection:bg-[#F2D887]/60 selection:text-[#1F3D2B] min-h-screen flex flex-col relative w-full overflow-x-clip">

    <!-- Ambient Interactive Parallax Background Layer (Butter Yellow #F2D887, Warm Cream #FFF9E9, Powder Blue #B9C8E8) -->
    <div id="parallax-bg" class="fixed inset-0 -z-10 pointer-events-none overflow-hidden w-full max-w-full" aria-hidden="true">
        <!-- Subtle warm cream canvas wash -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#FFF9E9] via-[#FFFDF7] to-[#F5F8FC]"></div>

        <!-- Parallax Floating Gradient Orbs -->
        <div class="parallax-orb absolute -top-28 -left-24 w-72 sm:w-[32rem] lg:w-[36rem] h-72 sm:h-[32rem] lg:h-[36rem] rounded-full bg-[#F2D887]/24 blur-3xl" data-speed="0.07" data-axis="both"></div>
        <div class="parallax-orb absolute top-1/4 -right-28 w-80 sm:w-[34rem] lg:w-[40rem] h-80 sm:h-[34rem] lg:h-[40rem] rounded-full bg-[#B9C8E8]/30 blur-3xl" data-speed="-0.05" data-axis="both"></div>
        <div class="parallax-orb absolute top-2/3 -left-32 w-72 sm:w-[32rem] lg:w-[38rem] h-72 sm:h-[32rem] lg:h-[38rem] rounded-full bg-[#F2D887]/20 blur-3xl" data-speed="0.05" data-axis="both"></div>
        <div class="parallax-orb absolute -bottom-24 right-1/4 w-80 sm:w-[36rem] lg:w-[42rem] h-80 sm:h-[36rem] lg:h-[42rem] rounded-full bg-[#B9C8E8]/25 blur-3xl" data-speed="-0.07" data-axis="both"></div>
    </div>

    <!-- Navigation Header (Centered Rounded Pill Bar - Sticky with Smooth Transitions on Scroll) -->
    <header id="navbar-header" class="sticky top-0 z-50 w-full pt-3 sm:pt-6 px-3 sm:px-4 flex justify-center transition-all duration-300 pointer-events-none">
        <nav id="navbar-pill" class="pointer-events-auto w-full max-w-fit px-1.5 sm:px-6 py-1 sm:py-2.5 rounded-full bg-white/95 backdrop-blur-md border border-[#B9C8E8]/40 shadow-sm shadow-[#B9C8E8]/20 flex items-center justify-center transition-all duration-300">
            
            <!-- Desktop & Mobile Pill Nav Links -->
            <div id="navbar-links" class="flex items-center gap-0.5 sm:gap-1.5 text-[11px] sm:text-sm font-semibold tracking-wide text-stone-600 transition-all duration-300">
                <a href="#hero" class="nav-pill-item px-2.5 sm:px-4 py-1 sm:py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-all whitespace-nowrap">Home</a>
                <a href="#education" class="nav-pill-item px-2 sm:px-4 py-1 sm:py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-all whitespace-nowrap">Education</a>
                <a href="#experience" class="nav-pill-item px-2 sm:px-4 py-1 sm:py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-all whitespace-nowrap">Experience</a>
                <a href="#projects" class="nav-pill-item px-2 sm:px-4 py-1 sm:py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-all whitespace-nowrap">Projects</a>
                <a href="#contact" class="nav-pill-item px-2.5 sm:px-4 py-1 sm:py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-all whitespace-nowrap">Contact</a>
            </div>

        </nav>
    </header>

    <!-- Main Content (Centered, Max-width 1280px Container) -->
    <main class="flex-1 w-full">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 pt-6 sm:pt-10 pb-2 sm:pb-4">
            @yield('content')
        </div>
    </main>

    <!-- Modern Aesthetic Footer -->
    <footer class="mt-4 sm:mt-6 border-t border-[#B9C8E8]/30 bg-[#FFFDF7]/90 backdrop-blur-sm py-4">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs text-stone-600 font-medium">
            <span class="font-bold text-stone-800">© 2026 Tiara Ariyanto Putri.</span>
        </div>
    </footer>

    <!-- Circular Back to Top Button -->
    <button 
        id="back-to-top" 
        type="button" 
        class="fixed bottom-6 right-6 z-40 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/90 backdrop-blur-md border border-[#B9C8E8]/50 shadow-md shadow-[#B9C8E8]/30 hover:bg-[#FFF9E9] hover:border-[#F2D887] text-[#1F3D2B] flex items-center justify-center transition-all duration-300 opacity-0 pointer-events-none translate-y-3 cursor-pointer group active:scale-95" 
        aria-label="Back to top"
    >
        <svg class="w-5 h-5 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <!-- Toast Notification Container -->
    <div id="toast-container" class="fixed bottom-5 right-5 z-50 flex flex-col gap-2 max-w-sm pointer-events-none"></div>
</body>
</html>
