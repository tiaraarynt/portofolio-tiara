@extends('layouts.app')

@section('content')
<div class="space-y-16 sm:space-y-20 lg:space-y-24 w-full max-w-7xl mx-auto">

    <!-- ========================================== -->
    <!-- HERO SECTION (Clean, Modern, Interactive) -->
    <!-- ========================================== -->
    <section id="hero" class="relative pt-6 sm:pt-10 lg:pt-8 pb-4 sm:pb-6 w-full">
        <!-- Section Variation Gradient: Butter Yellow Top-Left & Powder Blue Bottom-Right -->
        <div class="section-gradient-accent -top-16 -left-16 w-80 h-80 bg-[#F2D887]/28" data-speed="0.06"></div>
        <div class="section-gradient-accent -bottom-10 -right-12 w-96 h-96 bg-[#B9C8E8]/30" data-speed="-0.05"></div>

        <div class="relative z-10 flex flex-col-reverse lg:flex-row items-center justify-between gap-8 lg:gap-12 w-full">
            <!-- Left Text Content -->
            <div class="space-y-4 max-w-2xl flex-1 text-left">
                <!-- Status Availability Pill -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-bold bg-[#FFF9E9] text-[#1F3D2B] border border-[#F2D887]/70 shadow-2xs">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#F2D887] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#F2D887] ring-1 ring-[#1F3D2B]/30"></span>
                    </span>
                    <span>Available for Roles &amp; Internships</span>
                </div>

                <!-- Main Headline -->
                <div class="space-y-1">
                    <div class="text-sm font-semibold text-stone-500 tracking-wide">
                        Hi, I am
                    </div>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-stone-900 tracking-tight leading-tight">
                        {{ $portfolio['personal']['full_name'] }}
                    </h1>
                    <div class="text-lg sm:text-2xl font-bold text-[#1F3D2B] tracking-tight">
                        Software Engineer
                    </div>
                </div>

                <!-- Bio Statement -->
                <p class="text-xs sm:text-sm text-stone-600 leading-relaxed font-normal">
                    Software Engineering graduate from IPB University. I build web applications with Laravel, design user interfaces in Figma, and analyze systems from requirements to testing.
                </p>

                <!-- Action CTA Buttons -->
                <div class="pt-1 flex flex-wrap items-center gap-2.5">
                    <a href="#contact" class="px-5 py-2.5 rounded-full bg-[#1F3D2B] hover:bg-[#284E38] text-white font-bold text-xs transition-all shadow-sm shadow-[#1F3D2B]/20 flex items-center gap-2 cursor-pointer">
                        <span>Get in Touch</span>
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>

                    <button type="button" onclick="copyToClipboard('{{ $portfolio['personal']['email'] }}', 'Email Tiara')" class="px-4 py-2.5 rounded-full bg-white border border-[#B9C8E8]/60 text-stone-700 hover:border-[#F2D887] hover:bg-[#FFF9E9] text-xs font-bold transition-all shadow-2xs flex items-center gap-2 cursor-pointer group">
                        <svg class="w-3.5 h-3.5 text-[#1F3D2B] group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span>Copy Email</span>
                    </button>

                    <a href="{{ $portfolio['personal']['whatsapp'] }}" target="_blank" rel="noopener" class="px-4 py-2.5 rounded-full bg-[#FFF9E9] hover:bg-[#FDF3D6] text-[#1F3D2B] text-xs font-bold transition-all flex items-center gap-1.5 border border-[#F2D887]/50 shadow-2xs">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                        <span>WhatsApp</span>
                    </a>

                    <a href="{{ $portfolio['personal']['linkedin'] }}" target="_blank" rel="noopener" class="px-4 py-2.5 rounded-full bg-white hover:bg-[#EDF2FA] text-[#1F3D2B] text-xs font-bold transition-all flex items-center gap-1.5 border border-[#B9C8E8]/50 shadow-2xs">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>

            <!-- Right Profile Photo Card (With Butter Yellow & Powder Blue Gradient Frame) -->
            <div class="flex justify-center flex-shrink-0 my-2 sm:my-0">
                <div class="relative flex items-center justify-center p-2">
                    <div class="w-56 h-56 sm:w-72 sm:h-72 lg:w-80 lg:h-80 rounded-full bg-gradient-to-tr from-[#1F3D2B] via-[#B9C8E8] to-[#F2D887] p-1.5 shadow-xl flex items-center justify-center relative">
                        <!-- Inner Soft Circle Canvas -->
                        <div class="w-full h-full rounded-full bg-gradient-to-b from-[#FFF9E9] via-white to-[#EDF2FA] overflow-hidden relative flex items-end justify-center">
                            <img 
                                src="{{ asset('images/tiara.jpg') }}" 
                                alt="{{ $portfolio['personal']['full_name'] }}" 
                                class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500"
                                loading="eager"
                            >
                        </div>

                        <!-- Floating Badges with Safe Margins -->
                        <div class="absolute top-1 left-0 sm:-top-1 sm:-left-1 px-3 py-1 rounded-full bg-white/95 backdrop-blur-md border border-[#B9C8E8]/40 text-[11px] font-bold text-[#1F3D2B] shadow-sm flex items-center gap-1.5 z-10">
                            <span class="w-2 h-2 rounded-full bg-[#F2D887] ring-1 ring-[#B9C8E8] animate-pulse"></span>
                            <span>IPB Graduate '26</span>
                        </div>

                        <div class="absolute bottom-1 right-0 sm:-bottom-1 sm:-right-1 px-3.5 py-1 rounded-full bg-white/95 backdrop-blur-md border border-[#F2D887]/50 text-[11px] font-bold text-[#1F3D2B] shadow-sm z-10">
                            📍 Bogor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 1. EDUCATION SECTION -->
    <!-- ========================================== -->
    <section id="education" class="relative scroll-mt-24 space-y-6 w-full">
        <!-- Section Variation Gradient: Soft Powder Blue Right Wash -->
        <div class="section-gradient-accent top-4 -right-12 w-80 h-80 bg-[#B9C8E8]/22" data-speed="0.04"></div>

        <div class="relative z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-1 border-b border-[#B9C8E8]/35 pb-3">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-stone-900 tracking-tight">
                    Education
                </h2>
            </div>
            <p class="text-xs font-semibold text-[#1F3D2B]">
                Academic Background
            </p>
        </div>

        <div class="relative z-10 space-y-3 w-full">
            @foreach($portfolio['education'] as $edu)
                <div class="clean-card p-5 sm:p-6 rounded-2xl space-y-2 bg-white border border-[#B9C8E8]/35">
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <span class="text-[11px] font-mono font-bold px-2.5 py-0.5 rounded-full bg-[#FFF9E9] text-[#1F3D2B] border border-[#F2D887]/60 shadow-2xs">
                            {{ $edu['period'] }}
                        </span>
                        <span class="text-[11px] font-bold text-[#1F3D2B] bg-[#EDF2FA] px-3 py-0.5 rounded-full border border-[#B9C8E8]/50">
                            {{ $edu['badge'] }}
                        </span>
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg font-extrabold text-stone-900">
                            {{ $edu['degree'] }}
                        </h3>
                        <div class="text-xs font-bold text-[#1F3D2B] mt-0.5">
                            {{ $edu['institution'] }} • {{ $edu['location'] }}
                        </div>
                    </div>
                    @if(!empty($edu['description']))
                        <p class="text-xs text-stone-600 leading-relaxed font-normal">
                            {{ $edu['description'] }}
                        </p>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 2. ORGANIZATIONAL EXPERIENCE SECTION -->
    <!-- ========================================== -->
    <section id="organizations" class="relative scroll-mt-24 space-y-6 w-full">
        <!-- Section Variation Gradient: Butter Yellow Left Aura -->
        <div class="section-gradient-accent top-8 -left-14 w-84 h-84 bg-[#F2D887]/22" data-speed="-0.04"></div>

        <div class="relative z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-1 border-b border-[#B9C8E8]/35 pb-3">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-stone-900 tracking-tight">
                    Organizational Experience
                </h2>
            </div>
            <p class="text-xs font-semibold text-[#1F3D2B]">
                Active committee &amp; team contribution
            </p>
        </div>

        <div class="relative z-10 space-y-4 w-full">
            @foreach($portfolio['organisations'] as $org)
                <div class="clean-card p-5 sm:p-6 rounded-2xl bg-white border border-[#B9C8E8]/35 hover:border-[#F2D887]/70 transition-all">
                    <div class="flex flex-col sm:flex-row gap-5 items-center">
                        <!-- Left Featured Photo -->
                        <div class="w-full sm:w-56 md:w-60 lg:w-64 flex-shrink-0">
                            <div class="group relative aspect-4/3 rounded-xl overflow-hidden bg-stone-100 border border-[#B9C8E8]/40 shadow-2xs">
                                <img 
                                    src="{{ asset('images/omvi-team.jpg') }}" 
                                    alt="OMVI 2023 VCD Committee Team" 
                                    class="w-full h-full object-cover object-center"
                                    loading="lazy"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-80"></div>
                                <div class="absolute bottom-2 left-2.5 right-2.5 flex items-center justify-between text-white">
                                    <span class="text-[11px] font-bold drop-shadow-sm">
                                        OMVI 2023 Committee
                                    </span>
                                    <span class="text-[9px] font-mono px-2 py-0.5 rounded-full bg-white/20 backdrop-blur-md border border-white/25 text-white font-semibold">VCD Team</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Content Info -->
                        <div class="space-y-2.5 flex-1 min-w-0 w-full">
                            <!-- Period, Badge & Scope Pills -->
                            <div class="flex flex-wrap items-center gap-1.5">
                                <span class="text-[10px] font-mono font-bold px-2.5 py-0.5 rounded-full bg-[#FFF9E9] text-[#1F3D2B] border border-[#F2D887]/60 shadow-2xs">
                                    {{ $org['period'] }}
                                </span>
                                <span class="text-[10px] font-bold text-[#1F3D2B] bg-[#EDF2FA] px-2.5 py-0.5 rounded-full border border-[#B9C8E8]/50">
                                    Committee &amp; Events
                                </span>
                                <span class="text-[10px] font-medium text-stone-500 px-2 py-0.5 rounded-md bg-stone-50 border border-stone-200">
                                    Campus Annual Event
                                </span>
                            </div>

                            <!-- Role Title & Organization Name -->
                            <div>
                                <h3 class="text-sm sm:text-base font-extrabold text-stone-900 leading-snug">
                                    {{ $org['role'] }}
                                </h3>
                                <div class="text-[11px] sm:text-xs font-bold text-[#1F3D2B] mt-0.5">
                                    {{ $org['organisation'] }}
                                </div>
                            </div>

                            <!-- Bullet Points Responsibilities -->
                            <div class="space-y-1 pt-0.5 border-t border-stone-100">
                                <div class="flex items-start gap-1.5 text-xs text-stone-600 leading-normal">
                                    <span class="text-[#1F3D2B] font-bold mt-0.5 shrink-0 text-[10px]">✦</span>
                                    <span>Designed promotional Instagram posts and story updates.</span>
                                </div>
                                <div class="flex items-start gap-1.5 text-xs text-stone-600 leading-normal">
                                    <span class="text-[#1F3D2B] font-bold mt-0.5 shrink-0 text-[10px]">✦</span>
                                    <span>Designed official event merchandise including T-shirts, lanyards, and staff ID cards.</span>
                                </div>
                                <div class="flex items-start gap-1.5 text-xs text-stone-600 leading-normal">
                                    <span class="text-[#1F3D2B] font-bold mt-0.5 shrink-0 text-[10px]">✦</span>
                                    <span>Created visual stage concepts, backdrops, and event hall decorations.</span>
                                </div>
                            </div>

                            <!-- Applied Tools & Deliverables Tags -->
                            <div class="pt-1 flex flex-wrap items-center gap-1">
                                <span class="text-[10px] font-mono font-bold text-stone-400 mr-1">Deliverables:</span>
                                <span class="px-2 py-0.5 rounded-md text-[9px] font-bold font-mono bg-[#FFF9E9] text-[#1F3D2B] border border-[#F2D887]/40">Canva</span>
                                <span class="px-2 py-0.5 rounded-md text-[9px] font-bold font-mono bg-[#EDF2FA] text-[#1F3D2B] border border-[#B9C8E8]/40">Merchandise Design</span>
                                <span class="px-2 py-0.5 rounded-md text-[9px] font-bold font-mono bg-[#FFF9E9] text-[#1F3D2B] border border-[#F2D887]/40">Stage Setup</span>
                                <span class="px-2 py-0.5 rounded-md text-[9px] font-bold font-mono bg-[#EDF2FA] text-[#1F3D2B] border border-[#B9C8E8]/40">Team Collaboration</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 3. WORK / INTERNSHIP EXPERIENCE -->
    <!-- ========================================== -->
    <section id="experience" class="relative scroll-mt-24 space-y-6 w-full">
        <!-- Section Variation Gradient: Dual Horizontal Blend -->
        <div class="section-gradient-accent -top-10 left-1/4 w-[32rem] h-64 bg-gradient-to-r from-[#B9C8E8]/20 via-[#FFF9E9]/40 to-[#F2D887]/20" data-speed="0.05"></div>

        <div class="relative z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-1 border-b border-[#B9C8E8]/35 pb-3">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-stone-900 tracking-tight">
                    Work &amp; Internship Experience
                </h2>
            </div>
            <!-- Navigation Prev/Next Buttons -->
            <div class="flex items-center gap-1.5">
                <button type="button" onclick="scrollCarousel('exp-scroll-container', -320)" class="w-8 h-8 rounded-full border border-[#B9C8E8]/40 bg-white hover:bg-[#FFF9E9] hover:border-[#F2D887] text-[#1F3D2B] flex items-center justify-center transition-all shadow-2xs cursor-pointer active:scale-95" aria-label="Scroll Left">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button type="button" onclick="scrollCarousel('exp-scroll-container', 320)" class="w-8 h-8 rounded-full border border-[#B9C8E8]/40 bg-white hover:bg-[#FFF9E9] hover:border-[#F2D887] text-[#1F3D2B] flex items-center justify-center transition-all shadow-2xs cursor-pointer active:scale-95" aria-label="Scroll Right">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        <!-- Netflix-style horizontal scroll row with drag/touch/button slide -->
        <div class="relative z-10 w-full">
            <div id="exp-scroll-container" class="netflix-scroll flex items-stretch gap-3.5 sm:gap-4 overflow-x-auto pb-3 pt-1 snap-x snap-mandatory cursor-grab active:cursor-grabbing select-none">
                @foreach($portfolio['experiences'] as $index => $exp)
                    <div class="snap-start flex-shrink-0 w-[275px] sm:w-[295px] clean-card p-4 rounded-2xl {{ $index % 2 === 0 ? 'border-t-3 border-t-[#B9C8E8]' : 'border-t-3 border-t-[#F2D887]' }} bg-white border border-[#B9C8E8]/35 flex flex-col justify-between shadow-2xs hover:shadow-sm transition-all h-[280px]">
                        <div class="flex flex-col h-full">
                            <!-- Top Section: Period + Role + Company -->
                            <div>
                                <div class="flex items-center justify-between text-xs gap-1.5 mb-2">
                                    <span class="font-mono font-bold px-2 py-0.5 rounded-full bg-[#FFF9E9] text-[#1F3D2B] border border-[#F2D887]/60 whitespace-nowrap text-[10px] shadow-2xs">
                                        {{ $exp['period'] }}
                                    </span>
                                    <span class="text-stone-500 font-semibold text-[10px] px-2 py-0.5 rounded bg-[#EDF2FA] border border-[#B9C8E8]/40">
                                        {{ $exp['type'] }}
                                    </span>
                                </div>

                                <div class="min-h-[42px] flex flex-col justify-center">
                                    <h3 class="text-xs sm:text-sm font-extrabold text-stone-900 leading-snug line-clamp-1">
                                        {{ $exp['role'] }}
                                    </h3>
                                    <div class="text-[11px] font-bold text-[#1F3D2B] mt-0.5 truncate">
                                        {{ $exp['company'] }} • {{ $exp['location'] }}
                                    </div>
                                </div>
                            </div>

                            <!-- Bottom Section: Bullet Points -->
                            <div class="space-y-1.5 pt-2 mt-1.5 border-t border-stone-100 flex-1 flex flex-col justify-center">
                                @foreach($exp['points'] as $point)
                                    <div class="flex items-start gap-1.5 text-[11px] text-stone-600 leading-snug">
                                        <span class="text-[#1F3D2B] font-bold shrink-0">•</span>
                                        <span class="line-clamp-2">{{ $point }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 4. PROJECT EXPERIENCE — Focused Carousel -->
    <!-- ========================================== -->
    <section id="projects" class="relative scroll-mt-24 space-y-6 w-full">
        <!-- Section Variation Gradient: Focal Halo behind Carousel Stage -->
        <div class="section-gradient-accent top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[44rem] h-84 bg-[radial-gradient(ellipse,_var(--tw-gradient-stops))] from-[#F2D887]/22 via-[#B9C8E8]/18 to-transparent" data-speed="0.03"></div>

        <div class="relative z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-1 border-b border-[#B9C8E8]/35 pb-3">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-stone-900 tracking-tight">
                    Project Experience
                </h2>
                <p class="text-xs font-semibold text-[#1F3D2B] mt-0.5">
                    Production systems, user experience designs &amp; interactive solutions
                </p>
            </div>

            <!-- Action Controls: Prev/Next Carousel Arrows -->
            <div class="flex items-center gap-2 flex-shrink-0">
                <button type="button" onclick="scrollProjectsByStep(-1)" class="w-9 h-9 rounded-full border border-[#B9C8E8]/40 bg-white hover:bg-[#FFF9E9] hover:border-[#F2D887] text-[#1F3D2B] flex items-center justify-center transition-all shadow-xs cursor-pointer active:scale-95" aria-label="Previous Project">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button type="button" onclick="scrollProjectsByStep(1)" class="w-9 h-9 rounded-full border border-[#B9C8E8]/40 bg-white hover:bg-[#FFF9E9] hover:border-[#F2D887] text-[#1F3D2B] flex items-center justify-center transition-all shadow-xs cursor-pointer active:scale-95" aria-label="Next Project">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        <!-- Horizontal Carousel Stage with Perspective & Depth Padding -->
        <div class="relative z-10 w-full overflow-hidden py-4 sm:py-6">
            <div class="netflix-scroll flex items-center gap-4 sm:gap-6 overflow-x-auto py-8 px-[8vw] sm:px-[18vw] cursor-grab active:cursor-grabbing select-none" id="projects-grid">
                @php
                    $projectVisuals = [
                        'setda-depok-diklat' => [
                            'tag' => 'WEB & GOV SYSTEM',
                            'laptop_screen' => 'bg-gradient-to-br from-[#1F3D2B] via-[#2A4D37] to-[#162C1F]',
                            'header_title' => 'Portal Diklat & SKJ',
                            'header_sub' => 'Sistem Pemkot Depok',
                            'badge' => '🏛️ Production',
                            'preview_lines' => ['Perencanaan Pelatihan ASN', 'Database Standar Kompetensi', 'Black Box Tested & Live']
                        ],
                        'susu-bahagia' => [
                            'tag' => 'UI/UX & E-COMMERCE',
                            'laptop_screen' => 'bg-gradient-to-br from-[#244733] via-[#335C43] to-[#1A3324]',
                            'header_title' => 'Susu Bahagia',
                            'header_sub' => 'Dairy Store UI/UX',
                            'badge' => '🛒 Interactive Prototype',
                            'preview_lines' => ['Waterfall SDLC Design', 'Responsive Web & Mobile', 'Figma High-Fidelity']
                        ],
                        'timun-mas-ar' => [
                            'tag' => 'AR & 3D INTERACTIVE',
                            'laptop_screen' => 'bg-gradient-to-br from-[#1F3D2B] via-[#2D543C] to-[#142A1D]',
                            'header_title' => 'Timun Mas AR',
                            'header_sub' => 'Cultural Learning App',
                            'badge' => '📱 3D Card Scan',
                            'preview_lines' => ['Unity Mobile Camera Engine', 'Blender 3D Character Rig', 'Interactive Card Tracker']
                        ],
                        'arabic-sign-language' => [
                            'tag' => 'MACHINE LEARNING',
                            'laptop_screen' => 'bg-gradient-to-br from-[#1C3627] via-[#2A4E38] to-[#12251A]',
                            'header_title' => 'Arabic Sign AI',
                            'header_sub' => 'Hand Gesture Classifier',
                            'badge' => '🎯 86% Validation Acc',
                            'preview_lines' => ['MobileNetV2 Deep Learning', 'Realtime Computer Vision', 'Data Augmentation Pipeline']
                        ],
                        'connection-bracelet' => [
                            'tag' => 'WEB DEVELOPMENT',
                            'laptop_screen' => 'bg-gradient-to-br from-[#264D36] via-[#356347] to-[#1B3626]',
                            'header_title' => 'Connection',
                            'header_sub' => 'Digital Barcode Web',
                            'badge' => '🌐 Live Hosted',
                            'preview_lines' => ['Interactive QR/Barcode Sync', 'Responsive Mobile First', 'Fast Load Optimization']
                        ],
                        'restaurant-ui-systems' => [
                            'tag' => 'UI/UX & POS SYSTEM',
                            'laptop_screen' => 'bg-gradient-to-br from-[#1E3A2B] via-[#2F593E] to-[#162B1F]',
                            'header_title' => 'Verdant Order UI',
                            'header_sub' => 'Kitchen & POS Design',
                            'badge' => '⚡ Order Efficiency',
                            'preview_lines' => ['POS Cashier Workflow', 'Real-time Kitchen Interface', 'Figma Design System']
                        ],
                    ];
                @endphp

                @foreach($portfolio['projects'] as $index => $project)
                    @php
                        $visual = $projectVisuals[$project['id']] ?? [
                            'tag' => 'DIGITAL PROJECT',
                            'laptop_screen' => 'bg-gradient-to-br from-[#1F3D2B] to-[#162C1F]',
                            'header_title' => $project['title'],
                            'header_sub' => 'System Showcase',
                            'badge' => '✨ Verified',
                            'preview_lines' => ['Modern Architecture', 'Clean Interface', 'User Tested']
                        ];
                    @endphp
                    <div class="project-card-item flex-shrink-0 w-[290px] sm:w-[340px] md:w-[360px] rounded-3xl overflow-hidden bg-white text-stone-900 border border-[#B9C8E8]/40 flex flex-col justify-between shadow-sm cursor-pointer {{ $index === 0 ? 'is-active' : '' }}" data-project-index="{{ $index }}">
                        
                        <!-- Top Image Layer: Layered Device Presentation with Category Badge on Top-Right -->
                        <div class="relative bg-gradient-to-b from-[#FFFDF7] to-stone-50 p-4 pt-3.5 pb-2 border-b border-stone-200/80">
                            <!-- Category Badge on Top-Right Layer -->
                            <div class="flex items-center justify-end mb-2.5">
                                <span class="px-2.5 py-0.5 rounded-md font-mono text-[9px] font-extrabold uppercase bg-[#FFF9E9] text-[#1F3D2B] border border-[#F2D887]/60 shadow-2xs">
                                    {{ $visual['tag'] }}
                                </span>
                            </div>

                            <!-- Layered Laptop Device Graphic with Screen Content -->
                            <div class="relative mx-auto w-full bg-white rounded-t-xl border border-stone-300/80 p-2 shadow-md transition-transform duration-500">
                                <!-- Camera Dot -->
                                <div class="w-1.5 h-1.5 rounded-full bg-stone-400 mx-auto mb-1.5"></div>

                                <!-- Screen Display Canvas with UI Elements -->
                                <div class="h-32 rounded-lg overflow-hidden {{ $visual['laptop_screen'] }} p-2.5 flex flex-col justify-between text-white relative shadow-inner">
                                    <div class="flex items-center justify-between text-[9px] border-b border-white/15 pb-1">
                                        <div class="flex items-center gap-1.5 font-bold tracking-tight">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#F2D887] animate-pulse"></span>
                                            <span>{{ $visual['header_title'] }}</span>
                                        </div>
                                        <span class="text-[8px] font-mono px-1.5 py-0.2 rounded bg-white/20 text-white font-semibold">
                                            {{ $visual['badge'] }}
                                        </span>
                                    </div>

                                    <!-- Screen Interior Highlights -->
                                    <div class="space-y-1 my-auto">
                                        <div class="text-[12px] font-extrabold text-[#FFF9E9] leading-tight">
                                            {{ $visual['header_sub'] }}
                                        </div>
                                        <div class="space-y-0.5">
                                            @foreach($visual['preview_lines'] as $line)
                                                <div class="text-[9px] text-stone-200 flex items-center gap-1 font-medium leading-none">
                                                    <span class="text-[#F2D887] text-[9px]">›</span>
                                                    <span class="truncate">{{ $line }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between text-[8px] text-stone-300 font-mono pt-1 border-t border-white/15">
                                        <span>UI/UX &amp; Codebase</span>
                                        <span class="text-[#F2D887] font-semibold">Active Build</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Laptop Base Plate -->
                            <div class="w-[88%] h-2 bg-stone-300/90 rounded-b-md mx-auto shadow-sm"></div>
                        </div>

                        <!-- Bottom Content Section in Light Theme -->
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between space-y-3 bg-white">
                            <div class="space-y-2">
                                <h3 class="text-base sm:text-lg font-black text-stone-900 tracking-tight leading-snug line-clamp-1 uppercase">
                                    {{ $project['title'] }}
                                </h3>

                                <!-- Pill Tags -->
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach(array_slice($project['tags'], 0, 5) as $tag)
                                        <span class="px-2 py-0.5 rounded-md text-[9px] font-bold font-mono border bg-stone-50 text-stone-700 border-stone-200">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>

                                <p class="text-[11px] text-stone-600 leading-relaxed font-normal line-clamp-3 pt-1">
                                    {{ $project['description'] }}
                                </p>
                            </div>

                            <!-- Footer Links -->
                            <div class="pt-3 border-t border-stone-100 flex items-center justify-between text-xs">
                                <div class="flex items-center gap-3">
                                    <a href="{{ $project['demo_url'] }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1 font-bold text-[#1F3D2B] hover:text-[#284E38] transition-colors text-[11px]">
                                        <i class="bi bi-globe2 text-xs"></i>
                                        <span>Live Demo</span>
                                    </a>
                                    <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1 font-bold text-stone-500 hover:text-[#1F3D2B] transition-colors text-[11px]">
                                        <i class="bi bi-github text-xs"></i>
                                        <span>GitHub</span>
                                    </a>
                                </div>

                                <a href="{{ $project['demo_url'] }}" target="_blank" rel="noopener" class="w-7 h-7 rounded-lg bg-stone-50 border border-stone-200 hover:border-[#F2D887] hover:bg-[#FFF9E9] text-stone-600 hover:text-[#1F3D2B] flex items-center justify-center transition-colors shadow-2xs" title="Open Project Details">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination Indicators Below Carousel -->
        <div class="relative z-10 flex items-center justify-center gap-1.5 pt-1">
            @foreach($portfolio['projects'] as $index => $project)
                <button 
                    type="button" 
                    data-proj-dot="{{ $index }}" 
                    class="h-2 rounded-full transition-all duration-300 cursor-pointer {{ $index === 0 ? 'bg-[#F2D887] ring-1 ring-[#1F3D2B]/20 w-7' : 'bg-[#B9C8E8]/70 w-2 hover:bg-[#B9C8E8]' }}"
                    aria-label="Go to slide {{ $index + 1 }}"
                ></button>
            @endforeach
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 5. CERTIFICATIONS & ACHIEVEMENTS SECTION -->
    <!-- ========================================== -->
    <section id="certifications" class="relative scroll-mt-24 space-y-6 w-full">
        <!-- Section Variation Gradient: Diagonal Powder Blue & Warm Cream Highlights -->
        <div class="section-gradient-accent -top-10 -right-16 w-84 h-84 bg-[#B9C8E8]/24" data-speed="-0.04"></div>
        <div class="section-gradient-accent -bottom-10 -left-16 w-76 h-76 bg-[#F2D887]/20" data-speed="0.04"></div>

        <div class="relative z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-1 border-b border-[#B9C8E8]/35 pb-3">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-stone-900 tracking-tight">
                    Certifications &amp; Achievements
                </h2>
            </div>
            <p class="text-xs font-semibold text-[#1F3D2B]">
                National and academic credentials
            </p>
        </div>

        <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 w-full">
            @foreach($portfolio['certifications'] as $index => $cert)
                @php
                    $icons = ['National' => '🏛️', 'Achievement' => '🥈', 'Professional' => '🎨', 'Leadership' => '⭐'];
                    $icon = $icons[$cert['badge'] ?? ''] ?? '📜';
                @endphp

                <div class="group bg-white rounded-3xl border border-[#B9C8E8]/35 overflow-hidden flex flex-col justify-between hover:border-[#F2D887]/80 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">

                    {{-- Title & Issuer Only --}}
                    <div class="p-5 pb-3 space-y-1">
                        <h3 class="text-sm font-extrabold text-stone-900 leading-snug">
                            {{ $cert['title'] }}
                        </h3>
                        <p class="text-xs text-[#1F3D2B] font-semibold leading-tight">
                            {{ $cert['issuer'] }}
                        </p>
                    </div>

                    {{-- Certificate Image Box --}}
                    <div class="mx-4 mb-4 rounded-2xl overflow-hidden border border-[#B9C8E8]/35 flex-1 min-h-[180px] flex items-center justify-center bg-gradient-to-br from-[#FFF9E9] via-[#FAF6ED] to-[#EDF2FA] relative">
                        @if(!empty($cert['image']))
                            <img
                                src="{{ asset('images/certificates/' . $cert['image']) }}"
                                alt="Certificate – {{ $cert['title'] }}"
                                class="w-full h-full object-contain object-center"
                                loading="lazy"
                            >
                        @else
                            <div class="flex flex-col items-center justify-center gap-2 px-5 py-8 text-center w-full">
                                <div class="w-12 h-12 rounded-2xl bg-white border border-[#B9C8E8]/40 flex items-center justify-center text-xl shadow-sm">
                                    {{ $icon }}
                                </div>
                                <div class="space-y-0.5">
                                    <p class="text-[10px] font-mono font-bold text-[#1F3D2B]/70 uppercase tracking-wider">{{ $cert['badge'] }} Certificate</p>
                                    <p class="text-[9px] text-stone-400 font-medium leading-relaxed">
                                        Verified Credential
                                    </p>
                                </div>
                                <div class="absolute inset-3 rounded-xl border border-dashed border-[#F2D887]/50 pointer-events-none"></div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 6. SKILLS & TECHNICAL TOOLKIT -->
    <!-- ========================================== -->
    <section id="skills" class="relative scroll-mt-24 space-y-6 w-full">
        <!-- Section Variation Gradient: Dual Upper Butter Yellow & Lower Powder Blue -->
        <div class="section-gradient-accent top-14 left-1/4 w-84 h-84 bg-[#F2D887]/20" data-speed="0.05"></div>
        <div class="section-gradient-accent bottom-10 right-1/4 w-[28rem] h-[28rem] bg-[#B9C8E8]/24" data-speed="-0.05"></div>

        <div class="relative z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-1 border-b border-[#B9C8E8]/35 pb-3">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-stone-900 tracking-tight">
                    Skills &amp; Software Stack
                </h2>
            </div>
            <p class="text-xs font-semibold text-[#1F3D2B]">
                Technologies and tools I work with
            </p>
        </div>

        @php
            $skillToolLogos = [
                // 1. Laravel – official flame logo (Simple Icons)
                'Laravel Framework' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="#FF2D20"><path d="M23.642 5.43a.364.364 0 0 1 .014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 0 1-.188.326L9.93 23.949a.316.316 0 0 1-.066.027.299.299 0 0 1-.1.017.283.283 0 0 1-.1-.02.29.29 0 0 1-.066-.024L.531 18.755a.376.376 0 0 1-.188-.326V2.974c0-.038.005-.073.014-.108a.337.337 0 0 1 .014-.073.368.368 0 0 1 .038-.067l.023-.032a.366.366 0 0 1 .053-.045.327.327 0 0 1 .03-.022L5.062.189a.379.379 0 0 1 .378 0l4.48 2.585a.375.375 0 0 1 .048.032.344.344 0 0 1 .052.046l.024.031a.364.364 0 0 1 .04.067.333.333 0 0 1 .012.072c.01.036.014.073.013.11v9.638l3.76-2.168V5.43c0-.037.003-.073.012-.108a.366.366 0 0 1 .013-.073.376.376 0 0 1 .039-.067l.024-.031a.388.388 0 0 1 .051-.045.362.362 0 0 1 .031-.022l4.479-2.584a.379.379 0 0 1 .378 0l4.48 2.584a.356.356 0 0 1 .031.022.388.388 0 0 1 .051.045l.023.031a.376.376 0 0 1 .04.067c.007.022.01.047.012.072zm-.74 5.013V6.232l-1.57.905-2.192 1.264v4.21zm-4.856 8.33v-4.21l-2.162 1.244-6.16 3.528v4.25zM1.126 3.2v15.354l8.322 4.802v-4.25l-4.35-2.476a.372.372 0 0 1-.053-.035.362.362 0 0 1-.046-.05l-.025-.035a.383.383 0 0 1-.035-.07.308.308 0 0 1-.01-.07.354.354 0 0 1-.007-.068V7.58zm4.48-2.404L1.89 3.2l3.716 2.143 3.716-2.143zm4.48 7.65L6.37 6.302l-3.716 2.143 3.716 2.142zm-.376 1.002l-3.712-2.14v4.127l2.193 1.263 1.519.875zm8.322-8.654l-3.716 2.14 3.716 2.143 3.716-2.142zm-.376 4.283L14.44 8.935l-2.192-1.264v4.21l2.192 1.264 1.522.876zm4.48 2.584l-3.712-2.14v4.126l2.193 1.264 1.519.875z"/></svg>',

                // 2. HTML5 & CSS3 / Bootstrap – official HTML5 logo (Simple Icons)
                'HTML5 & CSS3 / Bootstrap' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="#E34F26"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059-.003.236-2.671H5.408l.707 8.063h9.013l-.332 3.738-2.818.761-2.825-.76-.182-2.039H6.287l.352 4.414 5.34 1.482 5.344-1.482.73-8.283H8.531z"/></svg>',

                // 3. Tailwind CSS – official cyan logo (Simple Icons)
                'Tailwind CSS' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="#06B6D4"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.336 13.382 8.975 12 6.001 12z"/></svg>',

                // 4. SQL & Relational DB – official MySQL logo (Simple Icons)
                'SQL & Relational DB' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="#4479A1"><path d="M16.564 7.64c-.207-.549-.575-.97-1.077-1.222-.497-.249-1.097-.306-1.742-.167a5.57 5.57 0 0 0-1.84 1.026c-.53.453-.94.996-1.196 1.583-.244.561-.318 1.155-.224 1.722.096.577.382 1.095.82 1.488.423.38.96.612 1.543.664.577.051 1.18-.084 1.723-.393a5.54 5.54 0 0 0 1.547-1.428c.394-.559.61-1.198.625-1.838a2.91 2.91 0 0 0-.179-1.435zM12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm7.848 15.688c-.378.854-.972 1.573-1.71 2.067-.736.494-1.597.747-2.483.729-.877-.019-1.725-.308-2.434-.828a5.558 5.558 0 0 1-1.683-2.023 5.485 5.485 0 0 1-.486-2.57c.073-.889.39-1.729.907-2.428.514-.694 1.206-1.218 2.001-1.503.784-.282 1.628-.317 2.436-.102.801.212 1.517.659 2.052 1.282.527.614.856 1.37.94 2.164.085.807-.076 1.616-.452 2.327-.145.275-.326.529-.536.756.242.096.496.166.757.208.384.062.776.046 1.15-.049a2.76 2.76 0 0 0 .977-.487c.219-.174.402-.387.538-.631.144-.258.216-.549.212-.843a2.03 2.03 0 0 0-.276-1.026 3.036 3.036 0 0 0-.74-.848c-.08-.063-.097-.179-.039-.263.058-.084.172-.104.258-.046.31.207.574.484.773.81.2.33.298.705.286 1.087a2.53 2.53 0 0 1-.268 1.077 3.3 3.3 0 0 1-.676.812 3.27 3.27 0 0 1-1.185.599 4.14 4.14 0 0 1-1.425.071 4.54 4.54 0 0 1-1.348-.415z"/></svg>',

                // 5. Mobile Programming Basics – official Android logo (Simple Icons)
                'Mobile Programming Basics' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="#3DDC84"><path d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.551 0 .9993.4482.9993.9993.0001.5511-.4483.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4482.9993.9993 0 .5511-.4482.9997-.9993.9997m11.4045-6.02l1.9973-3.4592a.416.416 0 00-.1521-.5676.416.416 0 00-.5676.1521l-2.0223 3.503C15.5902 8.414 13.8533 8.081 12 8.081s-3.5902.333-5.1367.8687L4.841 5.4467a.4161.4161 0 00-.5677-.1521.4157.4157 0 00-.1521.5676l1.9974 3.4592C2.6889 11.1867.3432 14.6589 0 18.761h24c-.3432-4.1021-2.6889-7.5743-6.1185-9.4396"/></svg>',

                // 6. Web Hosting & Deployment – official Cloud & Server icon
                'Web Hosting & Deployment' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1F3D2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"/><path d="M12 12v9"/><path d="m8 17 4-4 4 4"/></svg>',

                // 7. Figma – official multi-color logo (Simple Icons)
                'Figma (Lo-Fi & Hi-Fi Prototype)' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M8 24c2.2 0 4-1.8 4-4v-4H8c-2.2 0-4 1.8-4 4s1.8 4 4 4z" fill="#0ACF83"/><path d="M4 12c0-2.2 1.8-4 4-4h4v8H8c-2.2 0-4-1.8-4-4z" fill="#A259FF"/><path d="M4 4c0-2.2 1.8-4 4-4h4v8H8C5.8 8 4 6.2 4 4z" fill="#F24E1E"/><path d="M12 0h4c2.2 0 4 1.8 4 4s-1.8 4-4 4h-4V0z" fill="#FF7262"/><path d="M20 12c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z" fill="#1ABCFE"/></svg>',

                // 8. Draw.io – official Diagrams.net logo
                'Draw.io (System Flow & UML)' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="7" height="7" rx="1.5" fill="#F08705"/><rect x="14" y="14" width="7" height="7" rx="1.5" fill="#F08705"/><path d="M10 6.5h7a1 1 0 0 1 1 1V14M6.5 10v7a1 1 0 0 0 1 1H14" stroke="#F08705" stroke-width="1.8" stroke-linecap="round"/></svg>',

                // 9. SDLC & Waterfall Method – Software Architecture & Sprint Cycle icon
                'SDLC & Waterfall Method' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 15-6.7L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-15 6.7L3 16"/><path d="M3 21v-5h5"/></svg>',

                // 10. Black Box & Usability Testing – QA Shield Verified Testing icon
                'Black Box & Usability Testing' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>',

                // 11. User Research & Wireframing – Wireframe Layout UI icon
                'User Research & Wireframing' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18M9 21V9"/></svg>',

                // 12. Canva & Visual Assets – official Canva logo (Simple Icons)
                'Canva & Visual Assets' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="#00C4CC"/><path d="M15.5 14.5c-.8.8-1.9 1.2-3.1 1.2-2.5 0-4.4-1.8-4.4-4.5 0-2.6 1.9-4.5 4.5-4.5 1.1 0 2.1.4 2.8 1.1l-1.2 1.3c-.4-.4-1-.7-1.6-.7-1.6 0-2.8 1.3-2.8 2.8s1.2 2.8 2.8 2.8c.7 0 1.3-.3 1.7-.7l1.3 1.2z" fill="#fff"/></svg>',

                // 13. Unity – official Unity 3D logo (Simple Icons)
                'Unity (Augmented Reality)' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="#222C37"><path d="M10.4 17.7 5.7 15l1.6-4.5 4.7 2.7zm3.2 0 3.1-5.5 4.7-2.7 1.6 4.5zm-1.6-7.4-4.7-2.7L8.9 3l4.7 2.7zm-2.4 1.4 2.4-1.4 2.4 1.4v2.7l-2.4 1.4-2.4-1.4zM24 10.3l-2.1-5.7-5.9 1.1L12 0 7.9 5.7 2.1 4.6 0 10.3l4.5 3.7L0 17.7l2.1 5.7 5.9-1.1L12 24l4.1-5.7 5.9 1.1 2.1-5.7-4.5-3.7z"/></svg>',

                // 14. Blender – official Blender logo (Simple Icons)
                'Blender (3D Modeling)' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12.4 12.8a3.5 3.5 0 1 1-3.5-3.5 3.5 3.5 0 0 1 3.5 3.5z" fill="#0055FF"/><path d="M22.8 10.4a6.2 6.2 0 0 0-4.3-1.8l-5.6-5.6a1 1 0 0 0-1.4 0l-.7.7a1 1 0 0 0 0 1.4l3.8 3.8a6.3 6.3 0 1 0 8.2 1.5zm-10.4 6a3.5 3.5 0 1 1 3.5-3.5 3.5 3.5 0 0 1-3.5 3.5z" fill="#E87D0D"/></svg>',

                // 15. Machine Learning – official TensorFlow logo (Simple Icons)
                'Machine Learning (MobileNetV2)' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="#FF6F00"><path d="M1.292 5.856L11.54 0v24l-4.095-2.397V7.613l-6.153 3.57V5.856zM22.708 5.856L12.46 0v24l4.095-2.397V7.613l6.153 3.57V5.856z"/></svg>',

                // 16. VS Code – official Visual Studio Code logo (Simple Icons)
                'VS Code & Android Studio' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="m17.5 2.1-10 7.7-4.8-3.7L1 7.2v9.6l1.7 1.1 4.8-3.7 10 7.7 5.5-2.6V4.7l-5.5-2.6zm-10 11.2L4.2 11l3.3-2.3v4.6zm10.7 4.1-7.2-5.4 7.2-5.4v10.8z" fill="#007ACC"/></svg>',

                // 17. Power BI – official Microsoft Power BI logo (Simple Icons)
                'Power BI & Tableau' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><rect x="3" y="13" width="4" height="8" rx="1" fill="#F2C811"/><rect x="10" y="8" width="4" height="13" rx="1" fill="#E6A100"/><rect x="17" y="3" width="4" height="18" rx="1" fill="#D37E00"/></svg>',

                // 18. Git & GitHub – official Git logo (Simple Icons)
                'Jira & Git / GitHub' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="#F05032"><path d="M23.546 10.93L13.067.452a1.5 1.5 0 0 0-2.126 0L8.808 2.583l3.298 3.298a1.782 1.782 0 0 1 2.27 2.293L17.7 11.5a1.78 1.78 0 1 1-1.07.727L13.5 9.1v5.82a1.78 1.78 0 1 1-1.5 0V8.92a1.78 1.78 0 0 1-.954-2.336L7.744 3.282.454 10.57a1.5 1.5 0 0 0 0 2.126l10.48 10.48a1.5 1.5 0 0 0 2.126 0l10.486-10.12a1.5 1.5 0 0 0 0-2.126z"/></svg>',
            ];
            $defaultLogo = '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1F3D2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>';
        @endphp

        <div class="relative z-10 grid grid-cols-1 md:grid-cols-3 gap-5 w-full">
            @foreach($portfolio['skills'] as $index => $category)
                <div class="clean-card rounded-3xl p-6 flex flex-col justify-between space-y-4 bg-white border border-[#B9C8E8]/35">
                    <div class="space-y-3">
                        <div class="flex items-center gap-2.5">
                            <div class="w-8 h-8 rounded-xl bg-[#FFF9E9] text-[#1F3D2B] border border-[#F2D887]/50 flex items-center justify-center font-bold text-sm shadow-2xs">
                                ✦
                            </div>
                            <h3 class="font-extrabold text-sm sm:text-base text-stone-900">
                                {{ $category['category'] }}
                            </h3>
                        </div>
                        <p class="text-xs text-stone-500 font-medium leading-relaxed">
                            {{ $category['description'] }}
                        </p>

                        <div class="space-y-2 pt-1">
                            @foreach($category['items'] as $item)
                                @php
                                    $logoSvg = $skillToolLogos[$item['name']] ?? $defaultLogo;
                                @endphp
                                <div class="flex items-center gap-2.5 p-2 rounded-xl bg-[#FFFDF7] border border-[#B9C8E8]/35 hover:border-[#F2D887] hover:bg-[#FFF9E9] hover:shadow-2xs transition-all text-xs">
                                    <div class="w-6 h-6 rounded-md bg-white border border-[#B9C8E8]/30 flex items-center justify-center shrink-0 shadow-2xs">
                                        {!! $logoSvg !!}
                                    </div>
                                    <span class="font-bold text-[#1F3D2B] leading-snug">
                                        {{ $item['name'] }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Soft Skills: Neat Individual Chips with Butter Yellow & Powder Blue Accents -->
        <div class="relative z-10 clean-card p-5 sm:p-6 rounded-2xl bg-white/95 border border-[#B9C8E8]/35 space-y-3">
            <p class="text-[11px] font-mono font-extrabold text-[#1F3D2B] uppercase tracking-wider">Soft Skills</p>
            <div class="flex flex-wrap gap-2.5 sm:gap-3">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#FFF9E9] text-[#1F3D2B] text-xs sm:text-sm font-bold border border-[#F2D887]/50 shadow-2xs hover:border-[#B9C8E8] hover:bg-[#EDF2FA] transition-all">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#F2D887] ring-2 ring-[#B9C8E8]/60"></span>
                    Team Collaboration
                </span>
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#FFF9E9] text-[#1F3D2B] text-xs sm:text-sm font-bold border border-[#F2D887]/50 shadow-2xs hover:border-[#B9C8E8] hover:bg-[#EDF2FA] transition-all">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#F2D887] ring-2 ring-[#B9C8E8]/60"></span>
                    Effective Communication
                </span>
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#FFF9E9] text-[#1F3D2B] text-xs sm:text-sm font-bold border border-[#F2D887]/50 shadow-2xs hover:border-[#B9C8E8] hover:bg-[#EDF2FA] transition-all">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#F2D887] ring-2 ring-[#B9C8E8]/60"></span>
                    Problem Solving
                </span>
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#FFF9E9] text-[#1F3D2B] text-xs sm:text-sm font-bold border border-[#F2D887]/50 shadow-2xs hover:border-[#B9C8E8] hover:bg-[#EDF2FA] transition-all">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#F2D887] ring-2 ring-[#B9C8E8]/60"></span>
                    Adaptive &amp; Fast Learner
                </span>
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#FFF9E9] text-[#1F3D2B] text-xs sm:text-sm font-bold border border-[#F2D887]/50 shadow-2xs hover:border-[#B9C8E8] hover:bg-[#EDF2FA] transition-all">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#F2D887] ring-2 ring-[#B9C8E8]/60"></span>
                    Project &amp; Time Management
                </span>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 7. CONTACT SECTION -->
    <!-- ========================================== -->
    <section id="contact" class="relative scroll-mt-24 space-y-6 w-full">
        <!-- Section Variation Gradient: Central Warm Inviting Glow -->
        <div class="section-gradient-accent top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[40rem] h-80 bg-gradient-to-r from-[#F2D887]/22 via-[#FFF9E9]/45 to-[#B9C8E8]/25" data-speed="0.03"></div>

        <div class="relative z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-1 border-b border-[#B9C8E8]/35 pb-3">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-stone-900 tracking-tight">
                    Interested in Hiring or Collaborating?
                </h2>
            </div>
            <p class="text-xs font-semibold text-[#1F3D2B]">
                Fast response via Email &amp; WhatsApp
            </p>
        </div>

        <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5 w-full">
            <!-- 1. LinkedIn -->
            <a href="https://www.linkedin.com/in/tiaraaptr" target="_blank" rel="noopener" class="group clean-card p-6 rounded-3xl bg-white border border-[#B9C8E8]/35 flex flex-col justify-between space-y-5 hover:border-[#F2D887] hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#FFF9E9] to-[#EDF2FA] border border-[#B9C8E8]/40 flex items-center justify-center transition-colors group-hover:scale-105 duration-300 shadow-2xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#0A66C2">
                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76a1.63 1.63 0 1 0 0-3.26 1.63 1.63 0 0 0 0 3.26m1.4 9.74V9.97H5.06v8.53h2.8z"/>
                        </svg>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-stone-50 border border-stone-200/80 group-hover:bg-[#1F3D2B] group-hover:text-white group-hover:border-[#1F3D2B] text-stone-400 flex items-center justify-center transition-all duration-300 shadow-2xs">
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </div>
                </div>

                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-[#1F3D2B]/70">Professional Network</span>
                    <h3 class="text-base font-extrabold text-stone-900 leading-snug">LinkedIn</h3>
                    <p class="text-xs text-stone-600 font-medium truncate pt-0.5">www.linkedin.com/in/tiaraaptr</p>
                </div>

                <div class="pt-3 border-t border-stone-100 flex items-center justify-between text-xs font-bold text-[#1F3D2B]">
                    <span>Connect on LinkedIn</span>
                    <span class="text-xs group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </a>

            <!-- 2. Instagram -->
            <a href="https://www.instagram.com/tir.aptr_" target="_blank" rel="noopener" class="group clean-card p-6 rounded-3xl bg-white border border-[#B9C8E8]/35 flex flex-col justify-between space-y-5 hover:border-[#F2D887] hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#FFF9E9] to-[#EDF2FA] border border-[#B9C8E8]/40 flex items-center justify-center transition-colors group-hover:scale-105 duration-300 shadow-2xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#E1306C">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-stone-50 border border-stone-200/80 group-hover:bg-[#1F3D2B] group-hover:text-white group-hover:border-[#1F3D2B] text-stone-400 flex items-center justify-center transition-all duration-300 shadow-2xs">
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </div>
                </div>

                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-[#1F3D2B]/70">Social &amp; Visuals</span>
                    <h3 class="text-base font-extrabold text-stone-900 leading-snug">Instagram</h3>
                    <p class="text-xs text-stone-600 font-medium truncate pt-0.5">@tir.aptr_</p>
                </div>

                <div class="pt-3 border-t border-stone-100 flex items-center justify-between text-xs font-bold text-[#1F3D2B]">
                    <span>Follow on Instagram</span>
                    <span class="text-xs group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </a>

            <!-- 3. WhatsApp -->
            <a href="https://wa.me/6285691265744" target="_blank" rel="noopener" class="group clean-card p-6 rounded-3xl bg-white border border-[#B9C8E8]/35 flex flex-col justify-between space-y-5 hover:border-[#F2D887] hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#FFF9E9] to-[#EDF2FA] border border-[#B9C8E8]/40 flex items-center justify-center transition-colors group-hover:scale-105 duration-300 shadow-2xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#25D366">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.41 5.83c0 4.54-3.7 8.24-8.24 8.24-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.196 8.196 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24m4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.03-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.37-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.34-.76-1.84-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.22.25-.87.85-.87 2.07 0 1.22.89 2.4 1.01 2.56.13.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.14-1.18-.06-.1-.22-.17-.47-.29z"/>
                        </svg>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-stone-50 border border-stone-200/80 group-hover:bg-[#1F3D2B] group-hover:text-white group-hover:border-[#1F3D2B] text-stone-400 flex items-center justify-center transition-all duration-300 shadow-2xs">
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </div>
                </div>

                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-[#1F3D2B]/70">Direct Messaging</span>
                    <h3 class="text-base font-extrabold text-stone-900 leading-snug">WhatsApp</h3>
                    <p class="text-xs text-stone-600 font-medium truncate pt-0.5">+62 856-9126-5744</p>
                </div>

                <div class="pt-3 border-t border-stone-100 flex items-center justify-between text-xs font-bold text-[#1F3D2B]">
                    <span>Chat on WhatsApp</span>
                    <span class="text-xs group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </a>

            <!-- 4. Email -->
            <a href="mailto:tiaraariyantoputrii@gmail.com" class="group clean-card p-6 rounded-3xl bg-white border border-[#B9C8E8]/35 flex flex-col justify-between space-y-5 hover:border-[#F2D887] hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#FFF9E9] to-[#EDF2FA] border border-[#B9C8E8]/40 flex items-center justify-center transition-colors group-hover:scale-105 duration-300 shadow-2xs">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#1F3D2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-stone-50 border border-stone-200/80 group-hover:bg-[#1F3D2B] group-hover:text-white group-hover:border-[#1F3D2B] text-stone-400 flex items-center justify-center transition-all duration-300 shadow-2xs">
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </div>
                </div>

                <div class="space-y-1">
                    <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-[#1F3D2B]/70">Official Inquiry</span>
                    <h3 class="text-base font-extrabold text-stone-900 leading-snug">Email</h3>
                    <p class="text-xs text-stone-600 font-medium truncate pt-0.5">tiaraariyantoputrii@gmail.com</p>
                </div>

                <div class="pt-3 border-t border-stone-100 flex items-center justify-between text-xs font-bold text-[#1F3D2B]">
                    <span>Send an Email</span>
                    <span class="text-xs group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </a>
        </div>
    </section>

</div>
@endsection
