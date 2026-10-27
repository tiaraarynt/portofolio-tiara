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

    <!-- Bootstrap 5 Icons & Modal Utilities -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-utilities.min.css">
    <!-- Devicon Icons -->
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFFDF7] text-stone-800 font-sans antialiased selection:bg-[#F2D887]/60 selection:text-[#1F3D2B] min-h-screen flex flex-col relative overflow-x-hidden">

    <!-- Ambient Interactive Parallax Background Layer (Butter Yellow #F2D887, Warm Cream #FFF9E9, Powder Blue #B9C8E8) -->
    <div id="parallax-bg" class="fixed inset-0 -z-10 pointer-events-none overflow-hidden" aria-hidden="true">
        <!-- Subtle warm cream canvas wash -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#FFF9E9] via-[#FFFDF7] to-[#F5F8FC]"></div>

        <!-- Parallax Floating Gradient Orbs -->
        <div class="parallax-orb absolute -top-28 -left-24 w-[36rem] h-[36rem] rounded-full bg-[#F2D887]/24 blur-3xl" data-speed="0.07" data-axis="both"></div>
        <div class="parallax-orb absolute top-1/4 -right-28 w-[40rem] h-[40rem] rounded-full bg-[#B9C8E8]/30 blur-3xl" data-speed="-0.05" data-axis="both"></div>
        <div class="parallax-orb absolute top-2/3 -left-32 w-[38rem] h-[38rem] rounded-full bg-[#F2D887]/20 blur-3xl" data-speed="0.05" data-axis="both"></div>
        <div class="parallax-orb absolute -bottom-24 right-1/4 w-[42rem] h-[42rem] rounded-full bg-[#B9C8E8]/25 blur-3xl" data-speed="-0.07" data-axis="both"></div>
    </div>

    <!-- Navigation Header (Full Width Flat Seamless Navbar) -->
    <header class="sticky top-0 z-40 w-full bg-[#FFFDF7]/90 backdrop-blur-md border-b border-[#B9C8E8]/35">
        <nav class="w-full px-4 sm:px-8 lg:px-12 py-3 flex items-center justify-between">
            <!-- Brand Name Text -->
            <a href="#hero" class="group flex items-center gap-2">
                <span class="text-sm sm:text-base font-extrabold tracking-tight text-stone-900 group-hover:text-[#1F3D2B] transition-colors">
                    {{ $portfolio['personal']['full_name'] }}
                </span>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-1 text-xs font-bold tracking-wide text-stone-600">
                <a href="#education" class="px-3.5 py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-colors" data-lang-nav="education">Education</a>
                <a href="#organizations" class="px-3.5 py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-colors" data-lang-nav="organizations">Organizations</a>
                <a href="#experience" class="px-3.5 py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-colors" data-lang-nav="experience">Experience</a>
                <a href="#projects" class="px-3.5 py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-colors" data-lang-nav="projects">Projects</a>
                <a href="#certifications" class="px-3.5 py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-colors" data-lang-nav="certifications">Certificates</a>
                <a href="#skills" class="px-3.5 py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-colors" data-lang-nav="skills">Skills</a>
                <a href="#contact" class="px-3.5 py-1.5 rounded-full hover:text-[#1F3D2B] hover:bg-[#FFF9E9] transition-colors" data-lang-nav="contact">Contact</a>
            </div>

            <!-- Action Controls -->
            <div class="flex items-center gap-2">
                <!-- Mobile Menu Button -->
                <button type="button" id="mobile-menu-toggle" aria-label="Menu" aria-expanded="false" class="md:hidden p-1.5 rounded-lg text-stone-600 hover:bg-[#FFF9E9] transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu Drawer (Full Width) -->
        <div id="mobile-menu" class="hidden md:hidden px-4 py-3 border-t border-[#B9C8E8]/30 bg-[#FFFDF7] flex flex-col gap-1 text-sm font-semibold">
            <a href="#education" class="mobile-nav-link px-3 py-2 rounded-xl hover:bg-[#FFF9E9] transition-colors" data-lang-nav="education">Education</a>
            <a href="#organizations" class="mobile-nav-link px-3 py-2 rounded-xl hover:bg-[#FFF9E9] transition-colors" data-lang-nav="organizations">Organizations</a>
            <a href="#experience" class="mobile-nav-link px-3 py-2 rounded-xl hover:bg-[#FFF9E9] transition-colors" data-lang-nav="experience">Experience</a>
            <a href="#projects" class="mobile-nav-link px-3 py-2 rounded-xl hover:bg-[#FFF9E9] transition-colors" data-lang-nav="projects">Projects</a>
            <a href="#certifications" class="mobile-nav-link px-3 py-2 rounded-xl hover:bg-[#FFF9E9] transition-colors" data-lang-nav="certifications">Certificates</a>
            <a href="#skills" class="mobile-nav-link px-3 py-2 rounded-xl hover:bg-[#FFF9E9] transition-colors" data-lang-nav="skills">Skills &amp; Toolkit</a>
            <a href="#contact" class="mobile-nav-link px-3 py-2 rounded-xl hover:bg-[#FFF9E9] transition-colors" data-lang-nav="contact">Contact</a>
        </div>
    </header>

    <!-- Main Content (Full Width Fluid with Compact Padding) -->
    <main class="flex-1 w-full px-3 sm:px-6 md:px-8 lg:px-10 py-5 sm:py-7">
        @yield('content')
    </main>

    <!-- Modern Aesthetic Footer with Soft Border -->
    <footer class="mt-14 border-t border-[#B9C8E8]/30 bg-[#FFFDF7]/90 backdrop-blur-sm py-6 px-3 sm:px-6 md:px-10">
        <div class="w-full flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-stone-600 font-medium">
            <div class="flex items-center gap-2">
                <span class="font-bold text-stone-800">© {{ date('Y') }} {{ $portfolio['personal']['full_name'] }}.</span>
                <span>•</span>
                <span data-lang-text="footer_text">Personal Portfolio • Software Engineer &amp; UI/UX Designer</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ $portfolio['personal']['github'] }}" target="_blank" rel="noopener" class="hover:text-[#1F3D2B] transition-colors font-semibold">GitHub</a>
                <a href="{{ $portfolio['personal']['linkedin'] }}" target="_blank" rel="noopener" class="hover:text-[#1F3D2B] transition-colors font-semibold">LinkedIn</a>
                <a href="{{ $portfolio['personal']['whatsapp'] }}" target="_blank" rel="noopener" class="hover:text-[#1F3D2B] transition-colors font-semibold">WhatsApp</a>
                <a href="#hero" class="hover:text-[#1F3D2B] transition-colors flex items-center gap-1 font-bold ml-2">
                    <span data-lang-text="back_to_top">Back to top</span>
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- Toast Notification Container -->
    <div id="toast-container" class="fixed bottom-5 right-5 z-50 flex flex-col gap-2 max-w-sm pointer-events-none"></div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
