@extends('layouts.app')

@section('title', 'Aqsa Zahoor - Web Developer Portfolio')

@section('content')
    <!-- ===== HERO SECTION ===== -->
    <section id="home" class="min-h-screen flex items-center relative overflow-hidden hero-bg z-10 lg:z-20">
        <div class="absolute inset-0"></div>

        <div
            class="rounded-2xl md:rounded-3xl container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-24 relative z-10 border border-white/10 py-6 md:py-0 sm:z-0">
            <!-- Status Badge-->
            <div
                class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/20 rounded-full px-3 md:px-4 py-1 md:py-1.5 mb-4 md:mb-8 mt-2 md:mt-4">
                <span class="relative flex h-1.5 w-1.5 md:h-2 md:w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-1.5 w-1.5 md:h-2 md:w-2 bg-green-500"></span>
                </span>
                <span class="text-[8px] md:text-xs text-blue-400 font-semibold uppercase tracking-widest">Available for
                    Work</span>
            </div>

            <div class="flex flex-col items-left text-left">
                <!-- Name -->
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black mb-2 md:mb-4 text-white relative group">
                    <span class="relative inline-block transition-all duration-500 hover:scale-105">
                        <span
                            class="bg-gradient-to-r from-blue-400 via-white to-blue-400 bg-clip-text text-transparent hover:from-blue-500 hover:via-white hover:to-blue-500 transition-all duration-700 hover:drop-shadow-[0_0_30px_rgba(59,130,246,0.5)]">
                            Aqsa Zahoor
                        </span>
                    </span>
                </h1>

                <!-- Title -->
                <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-light mb-1 md:mb-2 relative group">
                    <span class="inline-block transition-all duration-500 hover:scale-105 hover:tracking-wider relative">
                        <span
                            class="bg-gradient-to-r from-white to-blue-400 bg-clip-text text-transparent font-bold hover:from-blue-400 hover:to-white transition-all duration-500">
                            Web Developer
                        </span>
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-white to-blue-400 group-hover:w-full transition-all duration-500"></span>
                    </span>
                </p>

                <!-- Description -->
                <div class="max-w-2xl mt-2 md:mt-4 mb-4 md:mb-6 group">
                    <div
                        class="relative p-3 sm:p-4 md:p-6 rounded-xl md:rounded-2xl transition-all duration-500 hover:shadow-[0_0_40px_rgba(59,130,246,0.1)] hover:border-blue-500/30 border border-transparent hover:bg-white/5">
                        <div
                            class="absolute inset-0 rounded-xl md:rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-700">
                            <div
                                class="absolute -inset-0.5 rounded-xl md:rounded-2xl bg-gradient-to-r from-blue-500/20 via-transparent to-blue-500/20 blur-xl">
                            </div>
                        </div>
                        <div class="relative z-10 space-y-1 md:space-y-3">
                            <p class="text-secondary text-[11px] xs:text-xs sm:text-sm md:text-base leading-relaxed">
                                <span class="text-white font-medium">Hi, I'm Aqsa Zahoor</span> —
                                a <span
                                    class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent font-semibold relative inline-block">
                                    Web Developer
                                    <span
                                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-blue-600 group-hover:w-full transition-all duration-700"></span>
                                </span>
                                with a passion for building <span class="text-blue-400 font-semibold">beautiful,
                                    functional</span> websites.
                            </p>
                            <p class="text-secondary text-[11px] xs:text-xs sm:text-sm md:text-base leading-relaxed">
                                With <span class="text-blue-400 font-semibold">1+ year</span> of experience in
                                <span class="text-blue-400 font-semibold">PHP, Laravel, MySQL, Tailwind CSS, and
                                    Bootstrap</span>,
                                I create <span class="text-blue-400 font-semibold">responsive, high-performance</span> web
                                applications
                                that prioritize <span class="text-blue-400 font-semibold">user experience</span> and <span
                                    class="text-blue-400 font-semibold">clean code</span>.
                            </p>
                            <p
                                class="text-secondary text-[11px] xs:text-xs sm:text-sm md:text-base leading-relaxed hidden xs:block">
                                I believe every line of code should tell a story —
                                <span class="text-blue-400 font-semibold">from concept to deployment</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tech Stack Tags -->
                <div class="flex flex-wrap justify-left gap-1.5 sm:gap-2 md:gap-3 lg:gap-4 mt-1">
                    <span
                        class="px-2 py-1 sm:px-3 sm:py-1.5 md:px-4 md:py-2 glass-effect rounded-full text-[8px] sm:text-[10px] md:text-sm text-white transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.5)] hover:scale-105 hover:bg-blue-500/20 cursor-pointer">
                        <i class="fas fa-code mr-1 md:mr-2 text-[7px] sm:text-[9px] md:text-sm"></i> PHP Laravel
                    </span>
                    <span
                        class="px-2 py-1 sm:px-3 sm:py-1.5 md:px-4 md:py-2 glass-effect rounded-full text-[8px] sm:text-[10px] md:text-sm text-white transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.5)] hover:scale-105 hover:bg-blue-500/20 cursor-pointer">
                        <i class="fas fa-database mr-1 md:mr-2 text-[7px] sm:text-[9px] md:text-sm"></i> MySQL
                    </span>
                    <span
                        class="px-2 py-1 sm:px-3 sm:py-1.5 md:px-4 md:py-2 glass-effect rounded-full text-[8px] sm:text-[10px] md:text-sm text-white transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.5)] hover:scale-105 hover:bg-blue-500/20 cursor-pointer">
                        <i class="fab fa-js-square mr-1 md:mr-2 text-[7px] sm:text-[9px] md:text-sm"></i> JavaScript
                    </span>
                    <span
                        class="hidden xs:inline-block px-2 py-1 sm:px-3 sm:py-1.5 md:px-4 md:py-2 glass-effect rounded-full text-[8px] sm:text-[10px] md:text-sm text-white transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.5)] hover:scale-105 hover:bg-blue-500/20 cursor-pointer">
                        <i class="fab fa-php mr-1 md:mr-2 text-[7px] sm:text-[9px] md:text-sm"></i> PHP
                    </span>
                    <span
                        class="hidden sm:inline-block px-2 py-1 sm:px-3 sm:py-1.5 md:px-4 md:py-2 glass-effect rounded-full text-[8px] sm:text-[10px] md:text-sm text-white transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.5)] hover:scale-105 hover:bg-blue-500/20 cursor-pointer">
                        <i class="fas fa-wind mr-1 md:mr-2 text-[7px] sm:text-[9px] md:text-sm"></i> Tailwind
                    </span>
                </div>

                <!-- Buttons -->
                <div class="flex flex-wrap justify-left gap-2 sm:gap-3 md:gap-4 mt-4 md:mt-8">
                    <a href="#projects"
                        class="px-4 sm:px-6 md:px-8 py-1.5 sm:py-2 md:py-3 glass-effect hover:bg-blue-500/30 rounded-full font-semibold text-white text-[10px] sm:text-xs md:text-sm transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] border border-blue-500/30">
                        <i class="fas fa-briefcase mr-1 md:mr-2"></i> View My Work
                    </a>
                    @if($cv)
                        <a href="{{ route('view.pdf', $cv->id) }}" target="_blank"
                            class="px-4 sm:px-6 md:px-8 py-1.5 sm:py-2 md:py-3 glass-effect hover:bg-blue-500/30 rounded-full font-semibold text-white text-[10px] sm:text-xs md:text-sm transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] border border-blue-500/30">
                            <i class="fas fa-eye mr-1 md:mr-2"></i> View CV
                        </a>
                        <a href="{{ Storage::url($cv->file_path) }}" download
                            class="px-4 sm:px-6 md:px-8 py-1.5 sm:py-2 md:py-3 glass-effect hover:bg-blue-500/30 rounded-full font-semibold text-white text-[10px] sm:text-xs md:text-sm transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] border border-blue-500/30">
                            <i class="fas fa-download mr-1 md:mr-2"></i> Download CV
                        </a>
                    @endif
                </div>

                <!-- Social Icons -->
                <div class="flex gap-2 sm:gap-3 md:gap-4 mt-4 md:mt-8">
                    <a href="mailto:aqsazahoor07@gmail.com"
                        class="group relative w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 flex items-center justify-center glass-effect rounded-full text-white/60 hover:text-white hover:bg-red-500/30 hover:scale-110 transition-all duration-300 hover:shadow-[0_0_25px_rgba(239,68,68,0.4)] border border-white/10 hover:border-red-400/50">
                        <i class="fas fa-envelope text-sm sm:text-base md:text-xl"></i>
                        <span
                            class="absolute -bottom-7 sm:-bottom-8 md:-bottom-10 left-1/2 transform -translate-x-1/2 px-1.5 sm:px-2 md:px-3 py-0.5 sm:py-1 md:py-1.5 bg-gradient-to-r from-red-500/20 to-red-600/20 backdrop-blur-xl border border-red-500/20 rounded-lg text-[8px] sm:text-[9px] md:text-xs text-red-300 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-all duration-300 group-hover:-translate-y-1 shadow-lg shadow-red-500/10 hidden sm:block">
                            Email
                            <span
                                class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 sm:w-2 sm:h-2 bg-red-500/20 rotate-45 border-t border-l border-red-500/20"></span>
                        </span>
                    </a>
                    <a href="tel:+923268789961"
                        class="group relative w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 flex items-center justify-center glass-effect rounded-full text-white/60 hover:text-white hover:bg-green-500/30 hover:scale-110 transition-all duration-300 hover:shadow-[0_0_25px_rgba(34,197,94,0.4)] border border-white/10 hover:border-green-400/50">
                        <i class="fas fa-phone text-sm sm:text-base md:text-xl"></i>
                        <span
                            class="absolute -bottom-7 sm:-bottom-8 md:-bottom-10 left-1/2 transform -translate-x-1/2 px-1.5 sm:px-2 md:px-3 py-0.5 sm:py-1 md:py-1.5 bg-gradient-to-r from-green-500/20 to-green-600/20 backdrop-blur-xl border border-green-500/20 rounded-lg text-[8px] sm:text-[9px] md:text-xs text-green-300 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-all duration-300 group-hover:-translate-y-1 shadow-lg shadow-green-500/10 hidden sm:block">
                            Phone
                            <span
                                class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-500/20 rotate-45 border-t border-l border-green-500/20"></span>
                        </span>
                    </a>
                    <a href="#"
                        class="group relative w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 flex items-center justify-center glass-effect rounded-full text-white/60 hover:text-white hover:bg-purple-500/30 hover:scale-110 transition-all duration-300 hover:shadow-[0_0_25px_rgba(168,85,247,0.4)] border border-white/10 hover:border-purple-400/50">
                        <i class="fab fa-github text-sm sm:text-base md:text-xl"></i>
                        <span
                            class="absolute -bottom-7 sm:-bottom-8 md:-bottom-10 left-1/2 transform -translate-x-1/2 px-1.5 sm:px-2 md:px-3 py-0.5 sm:py-1 md:py-1.5 bg-gradient-to-r from-purple-500/20 to-purple-600/20 backdrop-blur-xl border border-purple-500/20 rounded-lg text-[8px] sm:text-[9px] md:text-xs text-purple-300 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-all duration-300 group-hover:-translate-y-1 shadow-lg shadow-purple-500/10 hidden sm:block">
                            GitHub
                            <span
                                class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 sm:w-2 sm:h-2 bg-purple-500/20 rotate-45 border-t border-l border-purple-500/20"></span>
                        </span>
                    </a>
                    <a href="#"
                        class="group relative w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 flex items-center justify-center glass-effect rounded-full text-white/60 hover:text-white hover:bg-blue-500/30 hover:scale-110 transition-all duration-300 hover:shadow-[0_0_25px_rgba(59,130,246,0.4)] border border-white/10 hover:border-blue-400/50">
                        <i class="fab fa-linkedin text-sm sm:text-base md:text-xl"></i>
                        <span
                            class="absolute -bottom-7 sm:-bottom-8 md:-bottom-10 left-1/2 transform -translate-x-1/2 px-1.5 sm:px-2 md:px-3 py-0.5 sm:py-1 md:py-1.5 bg-gradient-to-r from-blue-500/20 to-blue-600/20 backdrop-blur-xl border border-blue-500/20 rounded-lg text-[8px] sm:text-[9px] md:text-xs text-blue-300 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-all duration-300 group-hover:-translate-y-1 shadow-lg shadow-blue-500/10 hidden sm:block">
                            LinkedIn
                            <span
                                class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 sm:w-2 sm:h-2 bg-blue-500/20 rotate-45 border-t border-l border-blue-500/20"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT SECTION ===== -->
    <section id="about" class="relative overflow-hidden" style="background: #0a0a12;">
        <!-- Premium Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-500/5 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-cyan-500/3 rounded-full blur-3xl">
            </div>
            <!-- Diagonal accent lines -->
            <div class="absolute top-0 right-0 w-1/3 h-px bg-gradient-to-l from-blue-500/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-1/3 h-px bg-gradient-to-r from-blue-500/20 to-transparent"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-24">

            <!-- ===== SECTION TITLE - FIXED SPACING ===== -->

            <div class="text-center mb-10">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-widest">Get To Know Me</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 relative inline-block">
                    <span class="bg-gradient-to-r from-blue-300 via-white to-blue-400 bg-clip-text text-transparent">
                        About Me
                    </span>
                    <span
                        class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent"></span>
                </h2>
                <div class="mt-6 max-w-2xl mx-auto">
                    <p
                        class="text-sm md:text-base inline-block px-6 py-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-white/70 hover:text-white transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/30 hover:scale-105 shadow-lg">
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                        Building fast, responsive, and scalable web applications
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                    </p>
                </div>
            </div>
            <!-- ===== MAIN CONTENT ===== -->
            <div class="max-w-5xl mx-auto">
                <div
                    class="bg-gradient-to-br from-white/5 to-white/[0.02] border border-white/10 rounded-3xl p-8 md:p-10 lg:p-12 backdrop-blur-xl hover:border-blue-500/30 transition-all duration-700 hover:shadow-[0_20px_80px_rgba(59,130,246,0.08)]">

                    <div class="flex flex-col lg:flex-row gap-10 lg:gap-14 items-center">

                        <!-- ===== LEFT: Image with Premium Circle ===== -->
                        <div class="lg:w-[40%] w-full">
                            <div class="relative group">
                                <!-- Main Glow -->
                                <div
                                    class="absolute -inset-8 rounded-full bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-cyan-500/20 blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-1000">
                                </div>

                                <!-- Outer Decorative Rings -->
                                <div
                                    class="absolute -inset-5 rounded-full border border-blue-500/20 group-hover:border-blue-500/40 transition-all duration-700">
                                </div>
                                <div
                                    class="absolute -inset-8 rounded-full border border-dashed border-blue-500/10 group-hover:border-blue-400/30 group-hover:rotate-180 transition-all duration-1000">
                                </div>

                                <!-- Rotating Gradient Ring -->
                                <div class="absolute -inset-3 rounded-full">
                                    <div
                                        class="w-full h-full rounded-full border-2 border-transparent border-t-blue-500/40 border-r-purple-500/40 animate-spin-slow">
                                    </div>
                                </div>

                                <!-- Floating Particles -->
                                <div
                                    class="absolute -top-2 -right-2 w-10 h-10 bg-blue-500/20 rounded-full blur-xl animate-float">
                                </div>
                                <div
                                    class="absolute -bottom-2 -left-2 w-8 h-8 bg-purple-500/20 rounded-full blur-xl animate-float-delay">
                                </div>
                                <div
                                    class="absolute top-1/2 -right-4 w-6 h-6 bg-cyan-500/20 rounded-full blur-lg animate-float-slow">
                                </div>
                                <div
                                    class="absolute top-1/4 -left-4 w-5 h-5 bg-pink-500/20 rounded-full blur-lg animate-float-slow-delay">
                                </div>

                                <!-- Image Circle - Perfect Fit -->
                                <div class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80 mx-auto">
                                    <div
                                        class="relative rounded-full overflow-hidden border-4 border-blue-500/30 group-hover:border-blue-400/60 transition-all duration-500 shadow-2xl shadow-blue-500/10 group-hover:shadow-blue-500/30 group-hover:scale-[1.02] w-full h-full">
                                        <!-- Image - object-cover ensures perfect fit -->
                                        <img src="{{ asset('assets/images/me.jpeg') }}" alt="Aqsa Zahoor - Web Developer"
                                            class="w-full h-full object-cover object-center transition-all duration-700 group-hover:scale-110">

                                        <!-- Premium Gradient Overlay -->
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                        </div>

                                        <!-- Hover Content -->
                                        <div
                                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500">
                                            <div
                                                class="text-center transform translate-y-6 group-hover:translate-y-0 transition-transform duration-500">
                                                <div
                                                    class="w-16 h-16 mx-auto bg-blue-500/30 backdrop-blur-xl rounded-full flex items-center justify-center border border-white/30 shadow-xl">
                                                    <i class="fas fa-code text-blue-300 text-2xl"></i>
                                                </div>
                                                <p class="text-white font-semibold text-sm mt-4 tracking-wider">✦ Web
                                                    Developer ✦</p>
                                                <div
                                                    class="w-12 h-0.5 bg-gradient-to-r from-blue-400 to-cyan-400 mx-auto mt-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Premium Floating Badge -->
                                <div class="absolute -bottom-4 -right-4 lg:-bottom-6 lg:-right-6">
                                    <div
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-5 py-2.5 rounded-full shadow-2xl shadow-blue-500/40 text-xs font-semibold flex items-center gap-3 animate-float group-hover:scale-110 transition-all duration-300">
                                        <span class="relative flex h-2.5 w-2.5">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                            <span
                                                class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                                        </span>
                                        <span class="text-white/90 text-sm">1+ Year</span>
                                        <span class="w-px h-6 bg-white/20"></span>
                                        <span class="text-white/70 text-[10px] tracking-wider">EXPERIENCE</span>
                                        <i class="fas fa-arrow-right text-white/50 text-[10px]"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ===== RIGHT: Content ===== -->
                        <div class="lg:w-[60%] w-full">
                            <!-- Premium Badge -->
                            <div
                                class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-500/10 to-purple-500/10 border border-blue-500/20 rounded-full px-5 py-2 mb-5">
                                <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                                <span class="text-blue-400 text-[10px] font-semibold uppercase tracking-[0.15em]">Web
                                    Developer & Designer</span>
                                <span class="w-px h-4 bg-blue-500/20"></span>
                                <span class="text-cyan-400 text-[10px]">✦ Creative Problem Solver</span>
                            </div>

                            <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-5 leading-tight">
                                Turning Ideas Into
                                <span
                                    class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-400 bg-clip-text text-transparent">Digital
                                    Reality</span>
                            </h3>

                            <!-- ===== Content - Clean & Professional ===== -->
                            <div class="text-gray-300 leading-relaxed text-sm md:text-base space-y-4">
                                <p class="border-l-2 border-blue-500/30 pl-4">
                                    I'm <span class="text-white font-medium">Aqsa Zahoor</span>, a web developer with a
                                    genuine passion for building
                                    things that matter. What started as curiosity about how websites work
                                    has grown into a commitment to creating <span
                                        class="text-blue-400 font-medium">meaningful digital experiences</span>.
                                </p>
                                <p>
                                    I believe in the power of <span class="text-white font-medium">thoughtful design</span>
                                    and
                                    <span class="text-white font-medium">clean, efficient code</span>. Every project I work
                                    on —
                                    whether it's a simple business website or a complex web application —
                                    gets my full attention and care.
                                </p>
                                <p>
                                    With expertise in <span class="text-blue-400 font-medium">PHP, Laravel, MySQL</span>,
                                    and modern frontend tools, I turn ideas into reality. But more than the
                                    technology, I care about the <span class="text-white font-medium">people using
                                        it</span>.
                                    I listen, I ask questions, and I make sure the end result feels right.
                                </p>
                                <p class="text-gray-400 text-sm italic">
                                    "I don't just write code — I create solutions that make a difference."
                                </p>
                            </div>

                            <!-- ===== STATS - Premium ===== -->
                            <div class="grid grid-cols-3 gap-3 mt-6 pt-5 border-t border-white/5">
                                <div class="text-center group">
                                    <div
                                        class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                                        10+</div>
                                    <div
                                        class="text-gray-400 text-xs mt-1 group-hover:text-blue-400 transition-colors duration-300">
                                        Projects</div>
                                    <div
                                        class="w-8 h-0.5 bg-blue-500/30 mx-auto mt-1 group-hover:w-12 transition-all duration-300">
                                    </div>
                                </div>
                                <div class="text-center group">
                                    <div
                                        class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                                        1+</div>
                                    <div
                                        class="text-gray-400 text-xs mt-1 group-hover:text-blue-400 transition-colors duration-300">
                                        Years Exp</div>
                                    <div
                                        class="w-8 h-0.5 bg-blue-500/30 mx-auto mt-1 group-hover:w-12 transition-all duration-300">
                                    </div>
                                </div>
                                <div class="text-center group">
                                    <div
                                        class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                                        100%</div>
                                    <div
                                        class="text-gray-400 text-xs mt-1 group-hover:text-blue-400 transition-colors duration-300">
                                        Satisfaction</div>
                                    <div
                                        class="w-8 h-0.5 bg-blue-500/30 mx-auto mt-1 group-hover:w-12 transition-all duration-300">
                                    </div>
                                </div>
                            </div>

                            <!-- Read More Button -->
                            <button id="readMoreBtn"
                                class="mt-6 px-8 py-3.5 bg-gradient-to-r from-blue-500/20 to-blue-600/20 hover:from-blue-500/30 hover:to-blue-600/30 border border-blue-500/30 hover:border-blue-500/50 rounded-xl text-blue-400 text-sm font-medium transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(59,130,246,0.1)] flex items-center gap-3 group">
                                <span id="btnText">Learn More About Me</span>
                                <i id="btnIcon"
                                    class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ===== READ MORE EXPANDABLE ===== -->
                <div id="readMoreContainer" class="hidden mt-8">
                    <div
                        class="bg-gradient-to-br from-white/5 to-white/[0.02] border border-white/10 rounded-3xl p-8 md:p-10 backdrop-blur-xl hover:border-blue-500/30 transition-all duration-500">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                            <!-- Left Column -->
                            <div class="space-y-6">
                                <div>
                                    <h4 class="text-white font-semibold text-lg mb-5 flex items-center gap-3">
                                        <span
                                            class="w-1 h-8 bg-gradient-to-b from-blue-500 to-cyan-400 rounded-full"></span>
                                        What Drives Me
                                    </h4>
                                    <ul class="space-y-4">
                                        <li
                                            class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5 hover:border-blue-500/20 transition-all duration-300 hover:bg-blue-500/5">
                                            <div
                                                class="w-10 h-10 bg-blue-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-brain text-blue-400 text-sm"></i>
                                            </div>
                                            <div>
                                                <p class="text-white text-sm font-medium">Problem Solving</p>
                                                <p class="text-gray-400 text-xs leading-relaxed">I genuinely enjoy tackling
                                                    complex challenges and finding elegant, simple solutions. It's like
                                                    solving a puzzle where every piece needs to fit perfectly.</p>
                                            </div>
                                        </li>
                                        <li
                                            class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5 hover:border-purple-500/20 transition-all duration-300 hover:bg-purple-500/5">
                                            <div
                                                class="w-10 h-10 bg-purple-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-users text-purple-400 text-sm"></i>
                                            </div>
                                            <div>
                                                <p class="text-white text-sm font-medium">People First</p>
                                                <p class="text-gray-400 text-xs leading-relaxed">Great design is invisible.
                                                    When people use what I build, I want them to focus on their goals — not
                                                    on how the website works.</p>
                                            </div>
                                        </li>
                                        <li
                                            class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5 hover:border-cyan-500/20 transition-all duration-300 hover:bg-cyan-500/5">
                                            <div
                                                class="w-10 h-10 bg-cyan-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-gem text-cyan-400 text-sm"></i>
                                            </div>
                                            <div>
                                                <p class="text-white text-sm font-medium">Quality Always</p>
                                                <p class="text-gray-400 text-xs leading-relaxed">I never settle for "good
                                                    enough." Clean code, attention to detail, and a relentless pursuit of
                                                    excellence define my work.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-6">
                                <div>
                                    <h4 class="text-white font-semibold text-lg mb-5 flex items-center gap-3">
                                        <span
                                            class="w-1 h-8 bg-gradient-to-b from-cyan-400 to-blue-500 rounded-full"></span>
                                        My Creative Process
                                    </h4>
                                    <div class="space-y-4">
                                        <div
                                            class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5 hover:border-blue-500/20 transition-all duration-300 hover:bg-blue-500/5">
                                            <div
                                                class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center flex-shrink-0 text-blue-400 text-sm font-bold">
                                                1</div>
                                            <div>
                                                <p class="text-white text-sm font-medium">Listen & Understand</p>
                                                <p class="text-gray-400 text-xs leading-relaxed">I start by listening.
                                                    Understanding your goals, your users, and your vision is the foundation
                                                    of everything I build.</p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5 hover:border-purple-500/20 transition-all duration-300 hover:bg-purple-500/5">
                                            <div
                                                class="w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center flex-shrink-0 text-purple-400 text-sm font-bold">
                                                2</div>
                                            <div>
                                                <p class="text-white text-sm font-medium">Plan & Design</p>
                                                <p class="text-gray-400 text-xs leading-relaxed">I think through the user
                                                    journey, map out the experience, and plan the architecture. Good
                                                    planning prevents poor performance.</p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5 hover:border-cyan-500/20 transition-all duration-300 hover:bg-cyan-500/5">
                                            <div
                                                class="w-10 h-10 rounded-full bg-cyan-500/20 flex items-center justify-center flex-shrink-0 text-cyan-400 text-sm font-bold">
                                                3</div>
                                            <div>
                                                <p class="text-white text-sm font-medium">Build & Iterate</p>
                                                <p class="text-gray-400 text-xs leading-relaxed">I code with care, test
                                                    rigorously, and iterate until everything works perfectly. Clean,
                                                    maintainable code is my signature.</p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-start gap-4 p-4 bg-white/5 rounded-xl border border-white/5 hover:border-emerald-500/20 transition-all duration-300 hover:bg-emerald-500/5">
                                            <div
                                                class="w-10 h-10 rounded-full bg-emerald-500/20 flex items-center justify-center flex-shrink-0 text-emerald-400 text-sm font-bold">
                                                4</div>
                                            <div>
                                                <p class="text-white text-sm font-medium">Deliver & Support</p>
                                                <p class="text-gray-400 text-xs leading-relaxed">I deliver on time and stand
                                                    behind my work. Long after launch, I'm here to support, improve, and
                                                    ensure your success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mini Testimonials -->
                        <div class="mt-8 pt-6 border-t border-white/5">
                            <h4 class="text-white font-semibold text-base md:text-lg mb-4 flex items-center gap-3">
                                <span class="w-1 h-6 bg-gradient-to-b from-blue-500 to-cyan-400 rounded-full"></span>
                                What People Say
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div
                                    class="bg-white/5 rounded-xl p-4 border border-white/5 hover:border-blue-500/20 transition-all duration-300">
                                    <div class="flex text-yellow-400 text-xs mb-2">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="text-gray-300 text-sm leading-relaxed">"Aqsa has an incredible eye for detail.
                                        The website she built for us exceeded all expectations. She really listens and
                                        delivers something even better than what we imagined."</p>
                                    <p class="text-gray-500 text-[10px] mt-2 flex items-center gap-2">
                                        <span
                                            class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center text-white text-[8px] font-bold">SA</span>
                                        — Sarah Ahmed, Business Owner
                                    </p>
                                </div>
                                <div
                                    class="bg-white/5 rounded-xl p-4 border border-white/5 hover:border-blue-500/20 transition-all duration-300">
                                    <div class="flex text-yellow-400 text-xs mb-2">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="text-gray-300 text-sm leading-relaxed">"Working with Aqsa was a pleasure. She
                                        understood our requirements perfectly and delivered a clean, functional website on
                                        time. Her communication is excellent."</p>
                                    <p class="text-gray-500 text-[10px] mt-2 flex items-center gap-2">
                                        <span
                                            class="w-6 h-6 rounded-full bg-purple-500/20 flex items-center justify-center text-white text-[8px] font-bold">AR</span>
                                        — Ali Raza, Startup Founder
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ===== SKILLS SECTION ===== -->
    <section id="skills" class="relative overflow-hidden skills-section scroll-reveal slide-right skills-bg">
        <div class="absolute inset-0">
            <div class="absolute top-20 right-20 w-72 h-72 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-96 h-96 bg-blue-500/3 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-20">
            <!-- Section Title -->
            <div class="text-center mb-16">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-widest">My Expertise</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 relative inline-block">
                    <span class="bg-gradient-to-r from-blue-300 via-white to-blue-400 bg-clip-text text-transparent">
                        Technical Skills
                    </span>
                    <span
                        class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent"></span>
                </h2>
                <div class="mt-6 max-w-2xl mx-auto">
                    <p
                        class="text-sm md:text-base inline-block px-6 py-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-white/70 hover:text-white transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/30 hover:scale-105 shadow-lg">
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                        Technologies and tools I work with to build amazing digital experiences
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                    </p>
                </div>
            </div>

            <!-- Skills Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-6 max-w-5xl mx-auto">
                <!-- Skill 1 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-orange-500/20 to-orange-600/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(251,146,60,0.15)] border border-white/5 group-hover:border-orange-500/30">
                        <div
                            class="w-16 h-16 mx-auto bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 group-hover:shadow-[0_0_30px_rgba(251,146,60,0.2)]">
                            <i
                                class="fab fa-html5 text-4xl text-orange-500 group-hover:text-orange-400 transition-colors duration-300"></i>
                        </div>
                        <p class="text-primary font-semibold group-hover:text-orange-400 transition-colors duration-300">
                            HTML</p>
                        <div class="w-full h-1 bg-white/5 rounded-full mt-3 overflow-hidden">
                            <div
                                class="h-full bg-gradient-to-r from-orange-500 to-orange-400 rounded-full w-0 group-hover:w-[95%] transition-all duration-1000">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skill 2 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 to-blue-600/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(59,130,246,0.15)] border border-white/5 group-hover:border-blue-500/30">
                        <div
                            class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-500/20 to-blue-600/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 group-hover:shadow-[0_0_30px_rgba(59,130,246,0.2)]">
                            <i
                                class="fab fa-css3-alt text-4xl text-blue-500 group-hover:text-blue-400 transition-colors duration-300"></i>
                        </div>
                        <p class="text-primary font-semibold group-hover:text-blue-400 transition-colors duration-300">CSS
                        </p>
                        <div class="w-full h-1 bg-white/5 rounded-full mt-3 overflow-hidden">
                            <div
                                class="h-full bg-gradient-to-r from-blue-500 to-blue-400 rounded-full w-0 group-hover:w-[90%] transition-all duration-1000">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skill 3 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500/20 to-yellow-600/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(234,179,8,0.15)] border border-white/5 group-hover:border-yellow-500/30">
                        <div
                            class="w-16 h-16 mx-auto bg-gradient-to-br from-yellow-500/20 to-yellow-600/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 group-hover:shadow-[0_0_30px_rgba(234,179,8,0.2)]">
                            <i
                                class="fab fa-js-square text-4xl text-yellow-500 group-hover:text-yellow-400 transition-colors duration-300"></i>
                        </div>
                        <p class="text-primary font-semibold group-hover:text-yellow-400 transition-colors duration-300">
                            JavaScript</p>
                        <div class="w-full h-1 bg-white/5 rounded-full mt-3 overflow-hidden">
                            <div
                                class="h-full bg-gradient-to-r from-yellow-500 to-yellow-400 rounded-full w-0 group-hover:w-[85%] transition-all duration-1000">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skill 4 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-purple-500/20 to-purple-600/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(168,85,247,0.15)] border border-white/5 group-hover:border-purple-500/30">
                        <div
                            class="w-16 h-16 mx-auto bg-gradient-to-br from-purple-500/20 to-purple-600/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 group-hover:shadow-[0_0_30px_rgba(168,85,247,0.2)]">
                            <i
                                class="fab fa-php text-4xl text-purple-500 group-hover:text-purple-400 transition-colors duration-300"></i>
                        </div>
                        <p class="text-primary font-semibold group-hover:text-purple-400 transition-colors duration-300">PHP
                            Core</p>
                        <div class="w-full h-1 bg-white/5 rounded-full mt-3 overflow-hidden">
                            <div
                                class="h-full bg-gradient-to-r from-purple-500 to-purple-400 rounded-full w-0 group-hover:w-[88%] transition-all duration-1000">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skill 5 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-red-500/20 to-red-600/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(239,68,68,0.15)] border border-white/5 group-hover:border-red-500/30">
                        <div
                            class="w-16 h-16 mx-auto bg-gradient-to-br from-red-500/20 to-red-600/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 group-hover:shadow-[0_0_30px_rgba(239,68,68,0.2)]">
                            <i
                                class="fab fa-laravel text-4xl text-red-500 group-hover:text-red-400 transition-colors duration-300"></i>
                        </div>
                        <p class="text-primary font-semibold group-hover:text-red-400 transition-colors duration-300">
                            Laravel</p>
                        <div class="w-full h-1 bg-white/5 rounded-full mt-3 overflow-hidden">
                            <div
                                class="h-full bg-gradient-to-r from-red-500 to-red-400 rounded-full w-0 group-hover:w-[92%] transition-all duration-1000">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skill 6 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500/20 to-cyan-600/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(6,182,212,0.15)] border border-white/5 group-hover:border-cyan-500/30">
                        <div
                            class="w-16 h-16 mx-auto bg-gradient-to-br from-cyan-500/20 to-cyan-600/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 group-hover:shadow-[0_0_30px_rgba(6,182,212,0.2)]">
                            <i
                                class="fas fa-database text-4xl text-cyan-400 group-hover:text-cyan-300 transition-colors duration-300"></i>
                        </div>
                        <p class="text-primary font-semibold group-hover:text-cyan-400 transition-colors duration-300">MySQL
                        </p>
                        <div class="w-full h-1 bg-white/5 rounded-full mt-3 overflow-hidden">
                            <div
                                class="h-full bg-gradient-to-r from-cyan-400 to-cyan-300 rounded-full w-0 group-hover:w-[87%] transition-all duration-1000">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skill 7 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-purple-400/20 to-purple-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(168,85,247,0.15)] border border-white/5 group-hover:border-purple-400/30">
                        <div
                            class="w-16 h-16 mx-auto bg-gradient-to-br from-purple-400/20 to-purple-500/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 group-hover:shadow-[0_0_30px_rgba(168,85,247,0.2)]">
                            <i
                                class="fab fa-bootstrap text-4xl text-purple-400 group-hover:text-purple-300 transition-colors duration-300"></i>
                        </div>
                        <p class="text-primary font-semibold group-hover:text-purple-400 transition-colors duration-300">
                            Bootstrap</p>
                        <div class="w-full h-1 bg-white/5 rounded-full mt-3 overflow-hidden">
                            <div
                                class="h-full bg-gradient-to-r from-purple-400 to-purple-300 rounded-full w-0 group-hover:w-[86%] transition-all duration-1000">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skill 8 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400/20 to-blue-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(6,182,212,0.15)] border border-white/5 group-hover:border-cyan-400/30">
                        <div
                            class="w-16 h-16 mx-auto bg-gradient-to-br from-cyan-400/20 to-blue-500/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 group-hover:shadow-[0_0_30px_rgba(6,182,212,0.2)]">
                            <i
                                class="fas fa-wind text-4xl text-cyan-400 group-hover:text-cyan-300 transition-colors duration-300"></i>
                        </div>
                        <p class="text-primary font-semibold group-hover:text-cyan-400 transition-colors duration-300">
                            Tailwind CSS</p>
                        <div class="w-full h-1 bg-white/5 rounded-full mt-3 overflow-hidden">
                            <div
                                class="h-full bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full w-0 group-hover:w-[93%] transition-all duration-1000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Languages Section -->
            <div class="max-w-3xl mx-auto mt-20">
                <div class="text-center mb-10">
                    <span class="text-blue-400 font-semibold text-sm uppercase tracking-widest">Communication</span>
                    <h3 class="text-3xl md:text-4xl font-bold mt-2 relative inline-block">
                        <span class="bg-gradient-to-r from-blue-300 via-white to-blue-400 bg-clip-text text-transparent">
                            Languages
                        </span>
                        <span
                            class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent"></span>
                    </h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-2xl mx-auto">
                    <!-- Urdu -->
                    <div class="group relative">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <div
                            class="relative glass-effect rounded-2xl p-8 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(59,130,246,0.15)] border border-white/5 group-hover:border-blue-500/30">
                            <div class="relative inline-block">
                                <div
                                    class="w-24 h-24 rounded-full border-4 border-blue-500/30 group-hover:border-blue-400 flex items-center justify-center text-3xl font-bold text-primary transition-all duration-500 group-hover:scale-110 group-hover:shadow-[0_0_40px_rgba(59,130,246,0.2)]">
                                    <span
                                        class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">100%</span>
                                </div>
                                <div
                                    class="absolute -top-1 -right-1 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center shadow-lg shadow-blue-500/30">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                            </div>
                            <p
                                class="text-primary font-semibold mt-4 text-lg group-hover:text-blue-400 transition-colors duration-300">
                                Urdu</p>
                            <p class="text-secondary text-sm">Native Language</p>
                            <div class="w-full h-1 bg-white/5 rounded-full mt-4 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full w-[100%]"></div>
                            </div>
                        </div>
                    </div>
                    <!-- English -->
                    <div class="group relative">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <div
                            class="relative glass-effect rounded-2xl p-8 text-center transition-all duration-500 group-hover:scale-105 group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(6,182,212,0.15)] border border-white/5 group-hover:border-cyan-500/30">
                            <div class="relative inline-block">
                                <div
                                    class="w-24 h-24 rounded-full border-4 border-cyan-500/30 group-hover:border-cyan-400 flex items-center justify-center text-3xl font-bold text-primary transition-all duration-500 group-hover:scale-110 group-hover:shadow-[0_0_40px_rgba(6,182,212,0.2)]">
                                    <span
                                        class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">80%</span>
                                </div>
                                <div
                                    class="absolute -top-1 -right-1 w-6 h-6 bg-cyan-500 rounded-full flex items-center justify-center shadow-lg shadow-cyan-500/30">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                            </div>
                            <p
                                class="text-primary font-semibold mt-4 text-lg group-hover:text-cyan-400 transition-colors duration-300">
                                English</p>
                            <p class="text-secondary text-sm">Professional Working</p>
                            <div class="w-full h-1 bg-white/5 rounded-full mt-4 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-cyan-400 to-blue-400 rounded-full w-[80%]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PROJECTS SECTION ===== -->
    <section id="projects" class="relative overflow-hidden projects-section scroll-reveal fade-up projects-bg">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-72 h-72 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-500/3 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-20">
            <div class="text-center mb-16">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-widest">Portfolio</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 relative inline-block">
                    <span class="bg-gradient-to-r from-blue-300 via-white to-blue-400 bg-clip-text text-transparent">
                        My Projects
                    </span>
                    <span
                        class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent"></span>
                </h2>

                <div class="mt-6 max-w-2xl mx-auto ">
                    <p
                        class="text-xs md:text-base inline-block px-4 py-2 md:px-6 md:py-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-white/70 hover:text-white transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/30 hover:scale-105 shadow-lg">
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                        Here are some of the projects I've worked on
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                    </p>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 max-w-7xl mx-auto">
                @forelse($projects as $project)
                    <div class="group relative">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-blue-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500 group-hover:blur-xl">
                        </div>
                        <div
                            class="relative glass-effect rounded-2xl overflow-hidden transition-all duration-500 group-hover:scale-[1.02] group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(59,130,246,0.15)] border border-white/5 group-hover:border-blue-500/30">
                            <div class="relative h-52 overflow-hidden">
                                @if($project->image_path)
                                    <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }}"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                @else
                                    <div
                                        class="w-full h-full bg-gradient-to-br from-blue-500/20 to-purple-500/20 flex items-center justify-center">
                                        <i
                                            class="fas fa-code text-6xl text-blue-400/30 group-hover:text-blue-400/50 transition-all duration-500 group-hover:scale-110"></i>
                                    </div>
                                @endif
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                                    <div
                                        class="flex gap-3 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                        <a href="{{ $project->url }}" target="_blank"
                                            class="px-5 py-2.5 bg-blue-500 hover:bg-blue-600 rounded-full text-white text-sm font-semibold transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] flex items-center gap-2">
                                            <i class="fas fa-external-link-alt"></i> Live Demo
                                        </a>
                                    </div>
                                </div>
                                @if($project->technologies)
                                    <div class="absolute top-3 right-3 flex flex-wrap gap-1 justify-end">
                                        @foreach(explode(',', $project->technologies) as $tech)
                                            <span
                                                class="px-2 py-1 bg-black/50 backdrop-blur-sm text-blue-300 rounded text-[10px] font-medium border border-white/10">{{ trim($tech) }}</span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-2">
                                    <h3
                                        class="text-lg md:text-xl font-bold text-primary group-hover:text-blue-400 transition-colors duration-300">
                                        {{ $project->title }}
                                    </h3>
                                    <div
                                        class="w-8 h-8 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500/20 transition-all duration-300 group-hover:scale-110">
                                        <i class="fas fa-folder-open text-blue-400 text-sm"></i>
                                    </div>
                                </div>
                                <p class="text-secondary text-sm leading-relaxed mb-4 line-clamp-2">{{ $project->description }}
                                </p>
                                @if($project->technologies)
                                    <div class="flex flex-wrap gap-1.5 mb-4">
                                        @foreach(explode(',', $project->technologies) as $tech)
                                            <span
                                                class="px-2.5 py-1 bg-blue-500/10 hover:bg-blue-500/20 text-blue-300 text-[10px] font-medium rounded-full border border-blue-500/10 hover:border-blue-500/30 transition-all duration-300 hover:scale-105">{{ trim($tech) }}</span>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="flex items-center justify-between pt-4 border-t border-white/5">
                                    <a href="{{ $project->url }}" target="_blank"
                                        class="group/btn inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 text-sm font-medium transition-all duration-300 hover:gap-3">
                                        <span>View Project</span>
                                        <i
                                            class="fas fa-arrow-right text-xs group-hover/btn:translate-x-1 transition-transform duration-300"></i>
                                    </a>
                                    <span class="text-secondary/40 text-xs"><i
                                            class="far fa-calendar-alt mr-1"></i>{{ $project->created_at ? $project->created_at->format('Y') : '2024' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="text-center py-16 glass-effect rounded-3xl border border-white/10">
                            <i class="fas fa-code text-6xl text-blue-400/20 mb-4"></i>
                            <p class="text-secondary text-lg">No projects added yet.</p>
                            <p class="text-secondary/60 text-sm mt-2">Check back soon for updates!</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ===== EXPERIENCE SECTION ===== -->
    <section id="experience" class="relative overflow-hidden experience-section scroll-reveal slide-right experience-bg">
        <div class="absolute inset-0">
            <div class="absolute top-20 right-20 w-72 h-72 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-96 h-96 bg-purple-500/3 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-blue-500/3 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-20">
            <div class="text-center mb-16">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-widest">Career</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 relative inline-block">
                    <span class="bg-gradient-to-r from-blue-300 via-white to-blue-400 bg-clip-text text-transparent">
                        Experience
                    </span>
                    <span
                        class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent"></span>
                </h2>
                <div class="mt-6 max-w-2xl mx-auto ">
                    <p
                        class="text-xs md:text-base inline-block px-4 py-2 md:px-6 md:py-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-white/70 hover:text-white transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/30 hover:scale-105 shadow-lg">
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                        My professional journey and expertise
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                    </p>
                </div>

            </div>

            <div class="relative max-w-4xl mx-auto">
                <div
                    class="absolute left-5 md:left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-500/20 via-blue-500/10 to-transparent transform -translate-x-1/2">
                </div>

                <!-- Experience 1 -->
                <div class="relative group mb-12">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 via-cyan-500/20 to-blue-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500 group-hover:blur-xl">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 md:p-8 transition-all duration-500 group-hover:scale-[1.02] group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(59,130,246,0.15)] border border-white/5 group-hover:border-blue-500/30">
                        <div class="absolute -left-3 md:left-1/2 top-8 transform -translate-x-1/2">
                            <div class="relative">
                                <div
                                    class="w-5 h-5 bg-blue-500 rounded-full border-4 border-black/50 shadow-lg shadow-blue-500/30 group-hover:shadow-blue-500/50 group-hover:scale-110 transition-all duration-300">
                                    <div class="absolute inset-0 rounded-full animate-ping bg-blue-400/50"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row items-start gap-4 md:gap-6">
                            <div class="relative flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:shadow-blue-500/50 group-hover:scale-110 transition-all duration-500">
                                    <i class="fas fa-code text-white text-xl"></i>
                                </div>
                                <div
                                    class="absolute -top-2 -right-2 px-2 py-0.5 bg-green-500/20 border border-green-500/30 rounded-full text-[8px] text-green-400 font-semibold uppercase tracking-wider backdrop-blur-sm">
                                    Current</div>
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-wrap items-start justify-between gap-2 mb-3">
                                    <h3
                                        class="text-xl md:text-2xl font-bold text-primary group-hover:text-blue-400 transition-colors duration-300">
                                        Front-End Developer</h3>
                                    <span
                                        class="px-3 py-1 bg-blue-500/10 border border-blue-500/20 rounded-full text-xs text-blue-400 font-medium whitespace-nowrap"><i
                                            class="far fa-calendar-alt mr-1"></i> 2023 - Present</span>
                                </div>
                                <p class="text-secondary/70 text-sm mb-4"><i
                                        class="fas fa-building mr-2 text-blue-400/50"></i> Freelance / Remote</p>
                                <ul class="space-y-2.5">
                                    <li
                                        class="flex items-start gap-3 text-secondary group-hover:text-secondary/90 transition-colors duration-300">
                                        <span
                                            class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-1.5 flex-shrink-0 group-hover:bg-blue-400 group-hover:shadow-[0_0_10px_rgba(59,130,246,0.3)] transition-all duration-300"></span>
                                        <span class="text-sm leading-relaxed">Created responsive websites using <span
                                                class="text-blue-400 font-medium">HTML, CSS, JavaScript, Tailwind CSS, and
                                                Bootstrap</span></span>
                                    </li>
                                    <li
                                        class="flex items-start gap-3 text-secondary group-hover:text-secondary/90 transition-colors duration-300">
                                        <span
                                            class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-1.5 flex-shrink-0 group-hover:bg-blue-400 group-hover:shadow-[0_0_10px_rgba(59,130,246,0.3)] transition-all duration-300"></span>
                                        <span class="text-sm leading-relaxed">Ensured <span
                                                class="text-blue-400 font-medium">cross-browser compatibility</span> and
                                            mobile-friendly designs</span>
                                    </li>
                                    <li
                                        class="flex items-start gap-3 text-secondary group-hover:text-secondary/90 transition-colors duration-300">
                                        <span
                                            class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-1.5 flex-shrink-0 group-hover:bg-blue-400 group-hover:shadow-[0_0_10px_rgba(59,130,246,0.3)] transition-all duration-300"></span>
                                        <span class="text-sm leading-relaxed">Added interactive elements to improve <span
                                                class="text-blue-400 font-medium">user experience</span></span>
                                    </li>
                                </ul>
                                <div class="flex flex-wrap gap-2 mt-4">
                                    <span
                                        class="px-2.5 py-1 bg-blue-500/10 text-blue-300 text-[10px] font-medium rounded-full border border-blue-500/10">HTML5</span>
                                    <span
                                        class="px-2.5 py-1 bg-blue-500/10 text-blue-300 text-[10px] font-medium rounded-full border border-blue-500/10">CSS3</span>
                                    <span
                                        class="px-2.5 py-1 bg-blue-500/10 text-blue-300 text-[10px] font-medium rounded-full border border-blue-500/10">JavaScript</span>
                                    <span
                                        class="px-2.5 py-1 bg-blue-500/10 text-blue-300 text-[10px] font-medium rounded-full border border-blue-500/10">Tailwind</span>
                                    <span
                                        class="px-2.5 py-1 bg-blue-500/10 text-blue-300 text-[10px] font-medium rounded-full border border-blue-500/10">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="relative group">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-purple-500/20 via-pink-500/20 to-purple-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500 group-hover:blur-xl">
                    </div>
                    <div
                        class="relative glass-effect rounded-2xl p-6 md:p-8 transition-all duration-500 group-hover:scale-[1.02] group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(168,85,247,0.15)] border border-white/5 group-hover:border-purple-500/30">
                        <div class="absolute -left-3 md:left-1/2 top-8 transform -translate-x-1/2">
                            <div class="relative">
                                <div
                                    class="w-5 h-5 bg-purple-500 rounded-full border-4 border-black/50 shadow-lg shadow-purple-500/30 group-hover:shadow-purple-500/50 group-hover:scale-110 transition-all duration-300">
                                    <div class="absolute inset-0 rounded-full animate-ping bg-purple-400/50"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row items-start gap-4 md:gap-6">
                            <div class="relative flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:shadow-purple-500/50 group-hover:scale-110 transition-all duration-500">
                                    <i class="fas fa-server text-white text-xl"></i>
                                </div>
                                <div
                                    class="absolute -top-2 -right-2 px-2 py-0.5 bg-blue-500/20 border border-blue-500/30 rounded-full text-[8px] text-blue-400 font-semibold uppercase tracking-wider backdrop-blur-sm">
                                    Full-Time</div>
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-wrap items-start justify-between gap-2 mb-3">
                                    <h3
                                        class="text-xl md:text-2xl font-bold text-primary group-hover:text-purple-400 transition-colors duration-300">
                                        Back-End Developer</h3>
                                    <span
                                        class="px-3 py-1 bg-purple-500/10 border border-purple-500/20 rounded-full text-xs text-purple-400 font-medium whitespace-nowrap"><i
                                            class="far fa-calendar-alt mr-1"></i> 2023 - Present</span>
                                </div>
                                <p class="text-secondary/70 text-sm mb-4"><i
                                        class="fas fa-building mr-2 text-purple-400/50"></i> Freelance / Remote</p>
                                <ul class="space-y-2.5">
                                    <li
                                        class="flex items-start gap-3 text-secondary group-hover:text-secondary/90 transition-colors duration-300">
                                        <span
                                            class="w-1.5 h-1.5 bg-purple-500 rounded-full mt-1.5 flex-shrink-0 group-hover:bg-purple-400 group-hover:shadow-[0_0_10px_rgba(168,85,247,0.3)] transition-all duration-300"></span>
                                        <span class="text-sm leading-relaxed">Built dynamic functionalities using <span
                                                class="text-purple-400 font-medium">PHP and MySQL</span></span>
                                    </li>
                                    <li
                                        class="flex items-start gap-3 text-secondary group-hover:text-secondary/90 transition-colors duration-300">
                                        <span
                                            class="w-1.5 h-1.5 bg-purple-500 rounded-full mt-1.5 flex-shrink-0 group-hover:bg-purple-400 group-hover:shadow-[0_0_10px_rgba(168,85,247,0.3)] transition-all duration-300"></span>
                                        <span class="text-sm leading-relaxed">Designed databases and wrote <span
                                                class="text-purple-400 font-medium">complex SQL queries</span></span>
                                    </li>
                                    <li
                                        class="flex items-start gap-3 text-secondary group-hover:text-secondary/90 transition-colors duration-300">
                                        <span
                                            class="w-1.5 h-1.5 bg-purple-500 rounded-full mt-1.5 flex-shrink-0 group-hover:bg-purple-400 group-hover:shadow-[0_0_10px_rgba(168,85,247,0.3)] transition-all duration-300"></span>
                                        <span class="text-sm leading-relaxed">Implemented <span
                                                class="text-purple-400 font-medium">user authentication</span> and data
                                            validation</span>
                                    </li>
                                </ul>
                                <div class="flex flex-wrap gap-2 mt-4">
                                    <span
                                        class="px-2.5 py-1 bg-purple-500/10 text-purple-300 text-[10px] font-medium rounded-full border border-purple-500/10">PHP</span>
                                    <span
                                        class="px-2.5 py-1 bg-purple-500/10 text-purple-300 text-[10px] font-medium rounded-full border border-purple-500/10">MySQL</span>
                                    <span
                                        class="px-2.5 py-1 bg-purple-500/10 text-purple-300 text-[10px] font-medium rounded-full border border-purple-500/10">Laravel</span>
                                    <span
                                        class="px-2.5 py-1 bg-purple-500/10 text-purple-300 text-[10px] font-medium rounded-full border border-purple-500/10">REST
                                        APIs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience Stats -->
            <div class="max-w-4xl mx-auto mt-16">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                    <div
                        class="glass-effect rounded-2xl p-5 text-center transition-all duration-500 hover:scale-105 hover:-translate-y-1 hover:shadow-[0_10px_40px_rgba(59,130,246,0.1)] border border-white/5 hover:border-blue-500/20 group">
                        <div
                            class="text-3xl font-black bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
                            1+</div>
                        <p
                            class="text-secondary text-xs uppercase tracking-wider mt-1 group-hover:text-blue-400 transition-colors duration-300">
                            Years Experience</p>
                    </div>
                    <div
                        class="glass-effect rounded-2xl p-5 text-center transition-all duration-500 hover:scale-105 hover:-translate-y-1 hover:shadow-[0_10px_40px_rgba(59,130,246,0.1)] border border-white/5 hover:border-blue-500/20 group">
                        <div
                            class="text-3xl font-black bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
                            5+</div>
                        <p
                            class="text-secondary text-xs uppercase tracking-wider mt-1 group-hover:text-blue-400 transition-colors duration-300">
                            Projects Completed</p>
                    </div>
                    <div
                        class="glass-effect rounded-2xl p-5 text-center transition-all duration-500 hover:scale-105 hover:-translate-y-1 hover:shadow-[0_10px_40px_rgba(59,130,246,0.1)] border border-white/5 hover:border-blue-500/20 group">
                        <div
                            class="text-3xl font-black bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
                            10+</div>
                        <p
                            class="text-secondary text-xs uppercase tracking-wider mt-1 group-hover:text-blue-400 transition-colors duration-300">
                            Happy Clients</p>
                    </div>
                    <div
                        class="glass-effect rounded-2xl p-5 text-center transition-all duration-500 hover:scale-105 hover:-translate-y-1 hover:shadow-[0_10px_40px_rgba(59,130,246,0.1)] border border-white/5 hover:border-blue-500/20 group">
                        <div
                            class="text-3xl font-black bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
                            100%</div>
                        <p
                            class="text-secondary text-xs uppercase tracking-wider mt-1 group-hover:text-blue-400 transition-colors duration-300">
                            Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== EDUCATION SECTION ===== -->
    <section id="education" class="relative overflow-hidden education-section scroll-reveal slide-left education-bg">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-72 h-72 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-cyan-500/3 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-blue-500/3 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-20">
            <!-- Section Title -->
            <div class="text-center mb-14">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-widest">Academic</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 relative inline-block group">
                    <span
                        class="bg-gradient-to-r from-blue-300 via-white to-blue-400 bg-clip-text text-transparent group-hover:from-blue-400 group-hover:via-white group-hover:to-blue-500 transition-all duration-700">
                        Education
                    </span>
                    <span
                        class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent group-hover:via-blue-400 group-hover:scale-x-110 transition-all duration-700"></span>
                </h2>
                <div class="mt-6 max-w-2xl mx-auto">
                    <p
                        class="text-xs md:text-base inline-block px-4 py-2 md:px-6 md:py-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-white/70 hover:text-white transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/30 hover:scale-105 shadow-lg">
                        <i class="fas fa-graduation-cap text-blue-400/50 mr-2 text-xs"></i>
                        My academic journey and qualifications
                        <i class="fas fa-graduation-cap text-blue-400/50 ml-2 text-xs"></i>
                    </p>
                </div>
            </div>

            <!-- Education Cards -->
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <!-- Card 1: Current Education -->
                    <div class="group relative">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 via-cyan-500/20 to-blue-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500 group-hover:blur-xl">
                        </div>

                        <div
                            class=" h-full relative glass-effect rounded-2xl p-8 border border-white/5 transition-all duration-500 group-hover:scale-[1.02] group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(59,130,246,0.15)] group-hover:border-blue-500/30">

                            <!-- Badge -->
                            <div
                                class="inline-flex items-center gap-2 bg-green-500/10 border border-green-500/20 rounded-full px-3 py-1 mb-4">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                                <span
                                    class="text-green-400 text-[10px] font-semibold uppercase tracking-wider">Current</span>
                            </div>

                            <!-- Icon -->
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:shadow-blue-500/50 group-hover:scale-110 transition-all duration-500 mb-4">
                                <i class="fas fa-graduation-cap text-2xl text-white"></i>
                            </div>

                            <h3
                                class="text-xl font-bold text-primary group-hover:text-blue-400 transition-colors duration-300">
                                BS Computer Science</h3>
                            <p class="text-secondary text-sm mt-1">Bahauddin Zakariya University (BZU), Multan</p>

                            <div class="flex items-center gap-4 mt-3 text-sm text-secondary">
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-calendar-alt text-blue-400/60 text-xs"></i>
                                    2023 – 2027
                                </span>
                                <span class="w-px h-4 bg-white/10"></span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-check-circle text-green-400/60 text-xs"></i>
                                    <span class="text-green-400">6th Semester</span>
                                </span>
                            </div>

                            <!-- Progress -->
                            <div class="mt-4">
                                <div class="flex items-center justify-between text-xs text-secondary/60 mb-1">
                                    <span>Degree Progress</span>
                                    <span class="text-blue-400 font-medium">75%</span>
                                </div>
                                <div class="w-full h-1.5 bg-white/5 rounded-full overflow-hidden">
                                    <div
                                        class="h-full bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full w-[75%] relative group-hover:w-[80%] transition-all duration-1000">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent animate-shimmer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Key Subjects -->
                            <div class="mt-4 pt-4 border-t border-white/5">
                                <p class="text-secondary/60 text-[10px] uppercase tracking-wider mb-2">Core Subjects</p>
                                <div class="flex flex-wrap gap-1.5">
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/10 text-blue-300 text-[10px] rounded-full border border-blue-500/10">Data
                                        Structures</span>
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/10 text-blue-300 text-[10px] rounded-full border border-blue-500/10">Algorithms</span>
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/10 text-blue-300 text-[10px] rounded-full border border-blue-500/10">Database
                                        Systems</span>
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/10 text-blue-300 text-[10px] rounded-full border border-blue-500/10">Web
                                        Development</span>
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/10 text-blue-300 text-[10px] rounded-full border border-blue-500/10">Software
                                        Engineering</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: University Info -->
                    <div class="group relative">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-purple-500/20 via-pink-500/20 to-purple-500/20 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500 group-hover:blur-xl">
                        </div>

                        <div
                            class=" h-full relative glass-effect rounded-2xl p-8 border border-white/5 transition-all duration-500 group-hover:scale-[1.02] group-hover:-translate-y-2 group-hover:shadow-[0_20px_60px_rgba(168,85,247,0.15)] group-hover:border-purple-500/30">

                            <!-- Badge -->
                            <div
                                class="inline-flex items-center gap-2 bg-purple-500/10 border border-purple-500/20 rounded-full px-3 py-1 mb-4">
                                <span class="w-1.5 h-1.5 bg-purple-500 rounded-full animate-pulse"></span>
                                <span
                                    class="text-purple-400 text-[10px] font-semibold uppercase tracking-wider">University</span>
                            </div>

                            <!-- Icon -->
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:shadow-purple-500/50 group-hover:scale-110 transition-all duration-500 mb-4">
                                <i class="fas fa-university text-2xl text-white"></i>
                            </div>

                            <h3
                                class="text-xl font-bold text-primary group-hover:text-purple-400 transition-colors duration-300">
                                Bahauddin Zakariya University</h3>
                            <p class="text-secondary text-sm mt-1">Multan, Pakistan</p>

                            <div class="flex items-center gap-4 mt-3 text-sm text-secondary">
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-calendar-alt text-blue-400/60 text-xs"></i>
                                    Est. 1975
                                </span>
                                <span class="w-px h-4 bg-white/10"></span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-star text-yellow-400/60 text-xs"></i>
                                    <span>HEC Recognized</span>
                                </span>
                            </div>

                            <!-- University Description -->
                            <div class="mt-4 p-3 bg-white/5 rounded-xl border border-white/5">
                                <p class="text-secondary text-xs leading-relaxed">
                                    One of Pakistan's oldest and most prestigious universities,
                                    known for excellence in <span class="text-blue-400">Computer Science</span> and
                                    <span class="text-blue-400">Technology</span> education.
                                </p>
                            </div>

                            <!-- Campus Highlights -->
                            <div class="mt-4 pt-4 border-t border-white/5">
                                <p class="text-secondary/60 text-[10px] uppercase tracking-wider mb-2">Campus Highlights</p>
                                <div class="flex flex-wrap gap-1.5">
                                    <span
                                        class="px-2 py-0.5 bg-green-500/10 text-green-300 text-[10px] rounded-full border border-green-500/10">
                                        <i class="fas fa-wifi mr-1"></i> Digital Campus
                                    </span>
                                    <span
                                        class="px-2 py-0.5 bg-blue-500/10 text-blue-300 text-[10px] rounded-full border border-blue-500/10">
                                        <i class="fas fa-book mr-1"></i> Central Library
                                    </span>
                                    <span
                                        class="px-2 py-0.5 bg-purple-500/10 text-purple-300 text-[10px] rounded-full border border-purple-500/10">
                                        <i class="fas fa-laptop mr-1"></i> Computer Labs
                                    </span>
                                    <span
                                        class="px-2 py-0.5 bg-yellow-500/10 text-yellow-300 text-[10px] rounded-full border border-yellow-500/10">
                                        <i class="fas fa-users mr-1"></i> 24/7 Access
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- University Image Section -->
                <div class="mt-8">
                    <div
                        class="glass-effect rounded-2xl p-6 border border-white/5 hover:border-blue-500/20 transition-all duration-500 hover:shadow-[0_10px_40px_rgba(59,130,246,0.05)]">
                        <div class="flex flex-col md:flex-row items-center gap-6">
                            <div class="w-full md:w-1/3">
                                <div class="rounded-xl overflow-hidden border border-white/10 group/img">
                                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&q=80"
                                        alt="Bahauddin Zakariya University"
                                        class="w-full h-48 object-cover transition-transform duration-700 group-hover/img:scale-110">
                                </div>
                            </div>
                            <div class="w-full md:w-2/3">
                                <h4 class="text-white font-semibold text-lg">About BZU</h4>
                                <p class="text-secondary text-sm mt-1">Bahauddin Zakariya University, Multan</p>
                                <p class="text-secondary/70 text-sm mt-2 leading-relaxed">
                                    BZU is a public university in Multan, Pakistan. It offers a wide range of
                                    programs in <span class="text-blue-400">Computer Science</span>,
                                    <span class="text-blue-400">Engineering</span>, and
                                    <span class="text-blue-400">Technology</span>.
                                    The university is known for its research-oriented approach and modern facilities.
                                </p>
                                <div class="flex flex-wrap gap-3 mt-3">
                                    <span
                                        class="px-3 py-1 bg-blue-500/10 text-blue-300 text-[10px] rounded-full border border-blue-500/10">
                                        <i class="fas fa-globe mr-1"></i> W3 Ranked
                                    </span>
                                    <span
                                        class="px-3 py-1 bg-green-500/10 text-green-300 text-[10px] rounded-full border border-green-500/10">
                                        <i class="fas fa-graduation-cap mr-1"></i> 30k+ Students
                                    </span>
                                    <span
                                        class="px-3 py-1 bg-purple-500/10 text-purple-300 text-[10px] rounded-full border border-purple-500/10">
                                        <i class="fas fa-flask mr-1"></i> Research Focus
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="relative overflow-hidden contact-bg scroll-reveal zoom-in contact-bg">
        <div class="absolute inset-0">
            <div class="absolute top-20 right-20 w-72 h-72 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-96 h-96 bg-cyan-500/3 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-blue-500/3 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-20">
            <!-- Section Title -->
            <div class="text-center mb-16">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-widest">Contact</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 relative inline-block group">
                    <span
                        class="bg-gradient-to-r from-blue-300 via-white to-blue-400 bg-clip-text text-transparent group-hover:from-blue-400 group-hover:via-white group-hover:to-blue-500 transition-all duration-700">
                        Get In Touch
                    </span>
                    <span
                        class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent group-hover:via-blue-400 group-hover:scale-x-110 transition-all duration-700"></span>
                </h2>
                <div class="mt-6 max-w-2xl mx-auto">
                    <p
                        class="text-xs md:text-base inline-block px-4 py-2 md:px-6 md:py-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-white/70 hover:text-white transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/30 hover:scale-105 shadow-lg">
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                        {{-- <i class="fas fa-heart text-blue-400/50 mr-1 md:mr-2 text-[10px] md:text-xs"></i> --}}
                        Have a question or want to work together? Let's connect!
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                    </p>
                </div>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-8">

                    <!-- LEFT: Contact Info -->
                    <div class="lg:w-[40%] w-full">
                        <div
                            class="glass-effect rounded-3xl p-8 border border-white/5 h-full transition-all duration-500 hover:border-blue-500/30 hover:shadow-[0_20px_60px_rgba(59,130,246,0.1)] group">
                            <h3
                                class="text-2xl font-bold text-primary mb-6 group-hover:text-blue-400 transition-colors duration-300">
                                Let's Talk</h3>

                            <div class="mb-6">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <span class="w-5 h-[1px] bg-gradient-to-r from-transparent to-blue-400/50"></span>
                                    <span class="text-[10px] text-blue-400/60 uppercase tracking-[0.15em] font-medium">Let's
                                        Connect</span>
                                    <span class="w-5 h-[1px] bg-gradient-to-l from-transparent to-blue-400/50"></span>
                                </div>
                                <p class="text-secondary/70 text-xs md:text-sm leading-relaxed mb-6">
                                    <span class="text-white font-medium">Open to opportunities</span> —
                                    new projects, collaborations, or just a friendly conversation.
                                </p>
                            </div>

                            <div class="space-y-4">
                                <!-- Phone -->
                                <div
                                    class="flex items-center gap-4 p-4 rounded-xl bg-white/5 hover:bg-gradient-to-r hover:from-blue-500/20 hover:to-cyan-500/20 transition-all duration-500 hover:scale-[1.02] hover:-translate-y-1 border border-transparent hover:border-blue-500/30 cursor-pointer group/item">
                                    <div
                                        class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center group-hover/item:bg-blue-500/40 transition-all duration-500 group-hover/item:scale-110 group-hover/item:shadow-[0_0_30px_rgba(59,130,246,0.2)]">
                                        <i
                                            class="fas fa-phone text-blue-400 group-hover/item:text-white transition-colors duration-300"></i>
                                    </div>
                                    <div>
                                        <p
                                            class="text-secondary text-xs group-hover/item:text-blue-400 transition-colors duration-300">
                                            Phone</p>
                                        <a href="tel:+923268789961"
                                            class="text-primary hover:text-blue-400 transition-colors group-hover/item:text-blue-400 group-hover/item:translate-x-1 duration-300 inline-block">
                                            +923268789961
                                        </a>
                                    </div>
                                    <div
                                        class="ml-auto opacity-0 group-hover/item:opacity-100 transition-all duration-300 group-hover/item:translate-x-1">
                                        <i class="fas fa-arrow-right text-blue-400 text-xs"></i>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div
                                    class="flex items-center gap-4 p-4 rounded-xl bg-white/5 hover:bg-gradient-to-r hover:from-cyan-500/20 hover:to-blue-500/20 transition-all duration-500 hover:scale-[1.02] hover:-translate-y-1 border border-transparent hover:border-cyan-500/30 cursor-pointer group/item">
                                    <div
                                        class="w-12 h-12 bg-cyan-500/20 rounded-full flex items-center justify-center group-hover/item:bg-cyan-500/40 transition-all duration-500 group-hover/item:scale-110 group-hover/item:shadow-[0_0_30px_rgba(6,182,212,0.2)]">
                                        <i
                                            class="fas fa-envelope text-cyan-400 group-hover/item:text-white transition-colors duration-300"></i>
                                    </div>
                                    <div>
                                        <p
                                            class="text-secondary text-xs group-hover/item:text-cyan-400 transition-colors duration-300">
                                            Email</p>
                                        <a href="mailto:aqsazahoor07@gmail.com"
                                            class="text-primary hover:text-cyan-400 transition-colors group-hover/item:text-cyan-400 group-hover/item:translate-x-1 duration-300 inline-block">
                                            aqsazahoor07@gmail.com
                                        </a>
                                    </div>
                                    <div
                                        class="ml-auto opacity-0 group-hover/item:opacity-100 transition-all duration-300 group-hover/item:translate-x-1">
                                        <i class="fas fa-arrow-right text-cyan-400 text-xs"></i>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div
                                    class="flex items-center gap-4 p-4 rounded-xl bg-white/5 hover:bg-gradient-to-r hover:from-purple-500/20 hover:to-pink-500/20 transition-all duration-500 hover:scale-[1.02] hover:-translate-y-1 border border-transparent hover:border-purple-500/30 cursor-pointer group/item">
                                    <div
                                        class="w-12 h-12 bg-purple-500/20 rounded-full flex items-center justify-center group-hover/item:bg-purple-500/40 transition-all duration-500 group-hover/item:scale-110 group-hover/item:shadow-[0_0_30px_rgba(168,85,247,0.2)]">
                                        <i
                                            class="fas fa-map-marker-alt text-purple-400 group-hover/item:text-white transition-colors duration-300"></i>
                                    </div>
                                    <div>
                                        <p
                                            class="text-secondary text-xs group-hover/item:text-purple-400 transition-colors duration-300">
                                            Address</p>
                                        <p
                                            class="text-primary group-hover/item:text-purple-400 group-hover/item:translate-x-1 duration-300 inline-block">
                                            Multan, Pakistan
                                        </p>
                                    </div>
                                    <div
                                        class="ml-auto opacity-0 group-hover/item:opacity-100 transition-all duration-300 group-hover/item:translate-x-1">
                                        <i class="fas fa-arrow-right text-purple-400 text-xs"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 pt-6 border-t border-white/5">
                                <p class="text-secondary text-sm mb-4">Follow me on social media</p>
                                <div class="flex gap-3">
                                    <a href="#"
                                        class="w-10 h-10 bg-white/5 hover:bg-blue-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] hover:rotate-12">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-white/5 hover:bg-blue-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] hover:-rotate-12">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-white/5 hover:bg-purple-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(168,85,247,0.2)] hover:rotate-12">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-white/5 hover:bg-blue-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] hover:-rotate-12">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-white/5 hover:bg-purple-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(168,85,247,0.2)] hover:rotate-12">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT: Contact Form -->
                    <div class="lg:w-[60%] w-full">
                        <div
                            class="glass-effect rounded-3xl p-6 md:p-8 lg:p-10 border border-white/5 h-full transition-all duration-500 hover:border-blue-500/30 hover:shadow-[0_20px_60px_rgba(59,130,246,0.1)] group">
                            <h3
                                class="text-2xl font-bold text-primary mb-6 group-hover:text-blue-400 transition-colors duration-300">
                                Send Me a Message</h3>

                            @if(session('success'))
                                <div
                                    class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6 animate-fade-in">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div
                                    class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl text-sm mb-6 animate-fade-in">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="group/input">
                                        <label
                                            class="block text-secondary text-sm font-medium mb-2 group-hover/input:text-blue-400 transition-colors duration-300">Your
                                            Name</label>
                                        <input type="text" name="name"
                                            class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300 focus:shadow-[0_0_30px_rgba(59,130,246,0.1)] hover:border-blue-500/30"
                                            placeholder="John Doe" style="min-width: 100%; box-sizing: border-box;"
                                            required>
                                    </div>
                                    <div class="group/input">
                                        <label
                                            class="block text-secondary text-sm font-medium mb-2 group-hover/input:text-cyan-400 transition-colors duration-300">Email
                                            Address</label>
                                        <input type="email" name="email"
                                            class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-cyan-500 transition-all duration-300 focus:shadow-[0_0_30px_rgba(6,182,212,0.1)] hover:border-cyan-500/30"
                                            placeholder="john@example.com" style="min-width: 100%; box-sizing: border-box;"
                                            required>
                                    </div>
                                </div>

                                <div class="mt-4 group/input">
                                    <label
                                        class="block text-secondary text-sm font-medium mb-2 group-hover/input:text-purple-400 transition-colors duration-300">Subject</label>
                                    <input type="text" name="subject"
                                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-purple-500 transition-all duration-300 focus:shadow-[0_0_30px_rgba(168,85,247,0.1)] hover:border-purple-500/30"
                                        placeholder="Project Inquiry" style="min-width: 100%; box-sizing: border-box;">
                                </div>

                                <div class="mt-4 group/input">
                                    <label
                                        class="block text-secondary text-sm font-medium mb-2 group-hover/input:text-pink-400 transition-colors duration-300">Message</label>
                                    <textarea name="message" rows="5"
                                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-pink-500 transition-all duration-300 focus:shadow-[0_0_30px_rgba(236,72,153,0.1)] hover:border-pink-500/30 resize-y"
                                        placeholder="Write your message here..." required></textarea>
                                </div>

                                <button type="submit"
                                    class="mt-6 w-full py-3.5 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] flex items-center justify-center gap-2 group/btn">
                                    <i
                                        class="fas fa-paper-plane group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform duration-300"></i>
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FEEDBACK SECTION ===== -->
    <section id="feedback" class="relative overflow-hidden scroll-reveal fade-up feedback-bg">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-72 h-72 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-500/3 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-20">
            <!-- Section Title -->
            <div class="text-center mb-12">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-widest">Testimonials</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 relative inline-block group">
                    <span
                        class="bg-gradient-to-r from-blue-300 via-white to-blue-400 bg-clip-text text-transparent group-hover:from-blue-400 group-hover:via-white group-hover:to-blue-500 transition-all duration-700">
                        What People Say
                    </span>
                    <span
                        class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent group-hover:via-blue-400 group-hover:scale-x-110 transition-all duration-700"></span>
                </h2>
                <div class="mt-6 max-w-2xl mx-auto">
                    <p
                        class="text-xs md:text-base inline-block px-4 py-2 md:px-6 md:py-3 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-white/70 hover:text-white transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/30 hover:scale-105 shadow-lg">
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                        Read what my clients and collaborators have to say about working with me.
                        <i class="fas fa-rocket text-blue-400/50 mr-2 text-xs"></i>
                    </p>
                </div>
            </div>

            <div class="max-w-6xl mx-auto">
                @php
                    $allFeedbacks = App\Models\Feedback::where('is_approved', true)->orderBy('created_at', 'desc')->get();
                    $totalFeedbacks = $allFeedbacks->count();
                    $showFeedbacks = $allFeedbacks->take(6);
                    $remainingFeedbacks = $allFeedbacks->skip(6); // Skip first 6
                    $hasMore = $totalFeedbacks > 6;
                @endphp

                @if($totalFeedbacks > 0)
                    <!-- Feedback Grid - First 6 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="feedbackGrid">
                        @foreach($showFeedbacks as $feedback)
                            <div
                                class="glass-effect rounded-2xl p-6 border border-white/5 transition-all duration-500 hover:border-blue-500/30 hover:scale-[1.03] hover:-translate-y-2 hover:shadow-[0_20px_60px_rgba(59,130,246,0.15)] group">

                                <!-- Rating Stars -->
                                <div class="flex items-center gap-1 mb-3">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i
                                            class="fas fa-star {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-gray-600' }} text-sm transition-all duration-300 group-hover:scale-110 {{ $i <= $feedback->rating ? 'group-hover:text-yellow-300' : '' }}"></i>
                                    @endfor
                                </div>

                                <!-- Comment -->
                                <p
                                    class="text-secondary text-sm leading-relaxed group-hover:text-white/80 transition-colors duration-300 line-clamp-3">
                                    "{{ $feedback->comment }}"
                                </p>

                                <!-- User Info -->
                                <div
                                    class="mt-4 pt-4 border-t border-white/5 group-hover:border-blue-500/20 transition-colors duration-300">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm shadow-lg shadow-blue-500/20 group-hover:shadow-blue-500/40 transition-all duration-300 group-hover:scale-110">
                                            {{ substr($feedback->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <p
                                                class="text-primary font-semibold text-sm group-hover:text-blue-400 transition-colors duration-300">
                                                {{ $feedback->name }}</p>
                                            <p
                                                class="text-secondary/60 text-xs group-hover:text-secondary/80 transition-colors duration-300">
                                                {{ maskEmail($feedback->email) }}</p>
                                        </div>
                                        <div
                                            class="ml-auto opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:translate-x-1">
                                            <i class="fas fa-quote-right text-blue-400/30 text-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Remaining Feedbacks (Hidden by default) -->
                    @if($hasMore)
                        <div id="allFeedbacksContainer" class="hidden mt-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach($remainingFeedbacks as $feedback)
                                    <div
                                        class="glass-effect rounded-2xl p-6 border border-white/5 transition-all duration-500 hover:border-blue-500/30 hover:scale-[1.03] hover:-translate-y-2 hover:shadow-[0_20px_60px_rgba(59,130,246,0.15)] group">

                                        <!-- Rating Stars -->
                                        <div class="flex items-center gap-1 mb-3">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i
                                                    class="fas fa-star {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-gray-600' }} text-sm transition-all duration-300 group-hover:scale-110 {{ $i <= $feedback->rating ? 'group-hover:text-yellow-300' : '' }}"></i>
                                            @endfor
                                        </div>

                                        <!-- Comment -->
                                        <p
                                            class="text-secondary text-sm leading-relaxed group-hover:text-white/80 transition-colors duration-300 line-clamp-3">
                                            "{{ $feedback->comment }}"
                                        </p>

                                        <!-- User Info -->
                                        <div
                                            class="mt-4 pt-4 border-t border-white/5 group-hover:border-blue-500/20 transition-colors duration-300">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm shadow-lg shadow-blue-500/20 group-hover:shadow-blue-500/40 transition-all duration-300 group-hover:scale-110">
                                                    {{ substr($feedback->name, 0, 1) }}
                                                </div>
                                                <div>
                                                    <p
                                                        class="text-primary font-semibold text-sm group-hover:text-blue-400 transition-colors duration-300">
                                                        {{ $feedback->name }}</p>
                                                    <p
                                                        class="text-secondary/60 text-xs group-hover:text-secondary/80 transition-colors duration-300">
                                                        {{ maskEmail($feedback->email) }}</p>
                                                </div>
                                                <div
                                                    class="ml-auto opacity-0 group-hover:opacity-100 transition-all duration-500 group-hover:translate-x-1">
                                                    <i class="fas fa-quote-right text-blue-400/30 text-xs"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Read All Button -->
                        <div class="text-center mt-8">
                            <button id="readAllFeedbacksBtn"
                                class="px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-full text-white font-semibold transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] flex items-center gap-2 mx-auto">
                                <span id="feedbackBtnText">Read All Feedbacks</span>
                                <i id="feedbackBtnIcon" class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                                <span class="text-xs bg-white/20 px-2 py-0.5 rounded-full">{{ $totalFeedbacks }}</span>
                            </button>
                        </div>
                    @endif

                @else
                    <div
                        class="text-center py-12 glass-effect rounded-2xl border border-white/5 transition-all duration-500 hover:border-blue-500/30 hover:shadow-[0_10px_40px_rgba(59,130,246,0.1)]">
                        <i class="fas fa-star text-5xl text-blue-400/20 mb-4"></i>
                        <p class="text-secondary">No feedbacks yet. Be the first to share your experience!</p>
                    </div>
                @endif

                <!-- Leave Feedback Button -->

                <div class="text-center mt-10">
                    <button id="openFeedbackModal" class="group relative px-10 py-4 
                       bg-transparent 
                       border-2 border-white/40
                       hover:border-blue-400
                       rounded-full
                       text-white/80 hover:text-white
                       font-light tracking-wider
                       hover:shadow-[0_0_40px_rgba(59,130,246,0.15)]
                       hover:scale-[1.02]
                       transition-all duration-400 ease-out
                       flex items-center gap-4 mx-auto
                       overflow-hidden">

                        <!-- Animated Border Glow -->
                        <span class="absolute inset-0 rounded-full bg-gradient-to-r from-blue-400/0 via-blue-400/10 to-blue-400/0 
                         translate-x-[-100%] group-hover:translate-x-[100%] 
                         transition-transform duration-1000"></span>

                        <!-- Icon -->
                        <span class="w-10 h-10 rounded-full border border-white/10 
                         flex items-center justify-center
                         group-hover:border-blue-400/50 group-hover:bg-blue-400/10
                         transition-all duration-300">
                            <i
                                class="fas fa-pen text-sm text-white/60 group-hover:text-blue-400 transition-colors duration-300"></i>
                        </span>

                        <!-- Text -->
                        <span class="text-sm uppercase tracking-[0.2em] font-medium">
                            Write a Review
                        </span>

                        <!-- Arrow -->
                        <span class="w-8 h-8 rounded-full border border-white/10 
                         flex items-center justify-center
                         group-hover:border-blue-400/50 group-hover:translate-x-1
                         transition-all duration-300">
                            <i
                                class="fas fa-arrow-right text-xs text-white/40 group-hover:text-blue-400 transition-colors duration-300"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FEEDBACK MODAL ===== -->
    <div id="feedbackModal"
        class="fixed inset-0 z-50 flex items-center justify-center px-4 hidden h-md shadow-2xl shadow-white/70">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity duration-300" id="closeFeedbackModal">
        </div>

        <!-- Modal Content -->
        <div
            class="relative glass-effect rounded-3xl p-6 max-w-2xl w-full border border-white/10 shadow-2xl shadow-black/50 animate-modal-popup group hover:border-blue-500/50 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.15)]">

            <!-- Decorative Elements -->
            <div class="absolute -top-3 -right-3 w-16 h-16 bg-blue-500/20 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-3 -left-3 w-16 h-16 bg-purple-500/20 rounded-full blur-2xl"></div>

            <!-- Close Button -->
            <button id="closeFeedbackModalBtn"
                class="absolute top-3 right-3 z-10 w-8 h-8 rounded-full bg-white/5 hover:bg-white/10 border border-white/10 hover:border-blue-500/30 text-secondary/60 hover:text-white transition-all duration-300 flex items-center justify-center group/close">
                <i class="fas fa-times text-sm group-hover/close:rotate-90 transition-transform duration-300"></i>
            </button>

            <!-- Modal Header -->
            <div class="text-center mb-4">
                <div class="relative inline-block group/icon">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto shadow-2xl shadow-blue-500/30 group-hover/icon:shadow-blue-500/50 transition-all duration-500 group-hover/icon:scale-110">
                        <i class="fas fa-star text-2xl text-white"></i>
                    </div>
                    <div class="absolute -inset-1 rounded-full bg-blue-500/20 blur-xl animate-pulse"></div>
                </div>
                <h3 class="text-xl font-bold text-primary mt-2 transition-colors duration-300 group-hover:text-blue-400">
                    Leave a Feedback</h3>
                <p class="text-secondary text-xs transition-colors duration-300 group-hover:text-blue-300/70">Share your
                    experience working with me</p>
            </div>

            @if(session('feedback_success'))
                <div
                    class="bg-green-500/10 border border-green-500/20 text-green-400 px-3 py-1.5 rounded-lg text-xs mb-3 flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-400"></i>
                    {{ session('feedback_success') }}
                </div>
            @endif

            @if($errors->any())
                <div
                    class="bg-red-500/10 border border-red-500/20 text-red-400 px-3 py-1.5 rounded-lg text-xs mb-3 flex items-center gap-2">
                    <i class="fas fa-exclamation-circle text-red-400"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('feedback.store') }}#feedback" method="POST" id="feedbackForm">
                @csrf

                <div class="space-y-3">
                    <!-- Name & Email Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="group/input">
                            <label
                                class="block text-secondary text-xs font-medium mb-1 transition-colors duration-300 group-hover/input:text-blue-400">
                                <i class="fas fa-user text-blue-400/60 mr-1 text-[10px]"></i> Name
                            </label>
                            <input type="text" name="name"
                                class="w-full px-3 py-2 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300 text-sm hover:border-blue-500/30 focus:shadow-[0_0_20px_rgba(59,130,246,0.1)]"
                                placeholder="John Doe" required>
                        </div>

                        <div class="group/input">
                            <label
                                class="block text-secondary text-xs font-medium mb-1 transition-colors duration-300 group-hover/input:text-cyan-400">
                                <i class="fas fa-envelope text-cyan-400/60 mr-1 text-[10px]"></i> Email
                            </label>
                            <input type="email" name="email"
                                class="w-full px-3 py-2 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-cyan-500 transition-all duration-300 text-sm hover:border-cyan-500/30 focus:shadow-[0_0_20px_rgba(6,182,212,0.1)]"
                                placeholder="john@example.com" required>
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="group/input">
                        <label
                            class="block text-secondary text-xs font-medium mb-1 transition-colors duration-300 group-hover/input:text-yellow-400">
                            <i class="fas fa-star text-yellow-400/60 mr-1 text-[10px]"></i> Rating
                        </label>
                        <div
                            class="flex items-center gap-1 rating-stars bg-white/5 rounded-xl p-2 border border-white/5 transition-all duration-300 hover:border-yellow-500/30">
                            <input type="hidden" name="rating" id="modal-rating-value" value="5">
                            <button type="button"
                                class="modal-star-btn text-xl text-yellow-400/60 hover:text-yellow-400 transition-all duration-300 hover:scale-125 focus:outline-none"
                                data-value="1"><i class="fas fa-star"></i></button>
                            <button type="button"
                                class="modal-star-btn text-xl text-yellow-400/60 hover:text-yellow-400 transition-all duration-300 hover:scale-125 focus:outline-none"
                                data-value="2"><i class="fas fa-star"></i></button>
                            <button type="button"
                                class="modal-star-btn text-xl text-yellow-400/60 hover:text-yellow-400 transition-all duration-300 hover:scale-125 focus:outline-none"
                                data-value="3"><i class="fas fa-star"></i></button>
                            <button type="button"
                                class="modal-star-btn text-xl text-yellow-400/60 hover:text-yellow-400 transition-all duration-300 hover:scale-125 focus:outline-none"
                                data-value="4"><i class="fas fa-star"></i></button>
                            <button type="button"
                                class="modal-star-btn text-xl text-yellow-400 hover:scale-125 transition-all duration-300 focus:outline-none"
                                data-value="5"><i class="fas fa-star"></i></button>
                            <span
                                class="text-secondary text-xs ml-2 transition-colors duration-300 group-hover/input:text-yellow-300"
                                id="modal-rating-label">⭐ Excellent</span>
                        </div>
                    </div>

                    <!-- Feedback -->
                    <div class="group/input">
                        <label
                            class="block text-secondary text-xs font-medium mb-1 transition-colors duration-300 group-hover/input:text-purple-400">
                            <i class="fas fa-comment text-purple-400/60 mr-1 text-[10px]"></i> Feedback
                        </label>
                        <textarea name="comment" rows="3"
                            class="w-full px-3 py-2 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-purple-500 transition-all duration-300 text-sm resize-none hover:border-purple-500/30 focus:shadow-[0_0_20px_rgba(168,85,247,0.1)]"
                            placeholder="Share your experience working with me..." required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] flex items-center justify-center gap-3 text-sm group/btn">
                        <i
                            class="fas fa-paper-plane group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform duration-300"></i>
                        Submit Feedback
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection