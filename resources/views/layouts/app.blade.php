<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Aqsa Zahoor - Portfolio')</title>



<!-- Styles -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

@stack('styles')

    
</head>
<body class="theme-dark transition-colors duration-500">
    <!-- Circular Scroll Progress -->
<div id="scrollCircle" class="fixed bottom-6 right-6 z-[99999] w-12 h-12 cursor-pointer hover:scale-110 transition-transform duration-300">
    <svg class="transform -rotate-90 w-12 h-12">
        <!-- Background Circle -->
        <circle cx="24" cy="24" r="20" stroke="rgba(255,255,255,0.05)" stroke-width="3" fill="none"/>
        <!-- Progress Circle -->
        <circle id="scrollCircleFill" cx="24" cy="24" r="20" 
                stroke="url(#circleGradient)" stroke-width="3" fill="none" 
                stroke-linecap="round"
                stroke-dasharray="125.6" stroke-dashoffset="125.6"/>
        <!-- Gradient -->
        <defs>
            <linearGradient id="circleGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#3b82f6"/>
                <stop offset="100%" stop-color="#8b5cf6"/>
            </linearGradient>
        </defs>
    </svg>
    <!-- Percentage -->
    <span id="circlePercent" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-[9px] font-bold text-white/70 font-mono">0%</span>
</div>
    <!-- Navigation -->
  
<nav class="fixed top-0 left-0 right-0 z-50 bg-[#0a0a1a]/80 backdrop-blur-xl border-b border-white/5">
    <div class="container mx-auto px-4 sm:px-6 py-2">
    
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500/20 to-purple-500/20 flex items-center justify-center border border-blue-500/30">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Aqsa Zahoor" class="w-8 h-8 object-cover rounded-lg">
                </div>
                <span class="text-lg font-bold text-white font-serif">Aqsa <span class="text-blue-400">Zahoor</span></span>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="#home" class="nav-link px-3 py-1.5 rounded-md text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300">Home</a>
                <a href="#about" class="nav-link px-3 py-1.5 rounded-md text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300">About</a>
                <a href="#skills" class="nav-link px-3 py-1.5 rounded-md text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300">Skills</a>
                <a href="#projects" class="nav-link px-3 py-1.5 rounded-md text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300">Projects</a>
                <a href="#experience" class="nav-link px-3 py-1.5 rounded-md text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300">Experience</a>
                <a href="#education" class="nav-link px-3 py-1.5 rounded-md text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300">Education</a>
                <a href="#contact" class="nav-link px-3 py-1.5 rounded-md text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300">Contact</a>
                <a href="{{ route('admin.login') }}" class="admin-login-btn px-4 py-1.5 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-full text-white text-xs font-semibold transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] ml-1">
                    <i class="fas fa-user-shield mr-1"></i>
                </a>
            </div>

            <!-- Mobile Menu Button + Theme Toggle -->
            <div class="flex items-center gap-3 md:hidden">
                <!-- Admin Icon for Mobile -->
                <a href="{{ route('admin.login') }}" class="text-gray-300 hover:text-white transition-colors">
                    <i class="fas fa-user-shield text-lg"></i>
                </a>
                
                <!-- Mobile Menu Toggle Button -->
                <button onclick="toggleMobileMenu()" class="text-gray-300 hover:text-white transition-colors focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden mt-3 pt-3 border-t border-white/10">
            <div class="flex flex-col space-y-1">
                <a href="#home" class="nav-link px-4 py-2.5 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 font-serif">Home</a>
                <a href="#about" class="nav-link px-4 py-2.5 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 font-serif">About</a>
                <a href="#skills" class="nav-link px-4 py-2.5 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 font-serif">Skills</a>
                <a href="#projects" class="nav-link px-4 py-2.5 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 font-serif">Projects</a>
                <a href="#experience" class="nav-link px-4 py-2.5 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 font-serif">Experience</a>
                <a href="#education" class="nav-link px-4 py-2.5 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 font-serif">Education</a>
                <a href="#contact" class="nav-link px-4 py-2.5 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-white/5 transition-all duration-300 font-serif">Contact</a>
                <a href="{{ route('admin.login') }}" class="admin-login-btn px-4 py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-lg text-white text-sm font-semibold transition-all duration-300 text-center font-serif flex items-center justify-center gap-2 mt-2">
                    <i class="fas fa-user-shield"></i> Admin Panel
                </a>
            </div>
        </div>
    </div>
</nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>


<!-- ===== FOOTER WITH BORDER ===== -->
<footer class="relative overflow-hidden mt-20 border-t-2 border-blue-500/30 footer-bg">
    <!-- Decorative Background -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent"></div>
        <div class="absolute -top-20 -right-20 w-72 h-72 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-purple-500/3 rounded-full blur-3xl"></div>
    </div>

    <!-- Left Border -->
    <div class="absolute left-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-blue-500/30 to-transparent"></div>
    
    <!-- Right Border -->
    <div class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-blue-500/30 to-transparent"></div>

    <div class="relative z-10 glass-dark backdrop-blur-xl border-x border-blue-500/10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10">
                
                <!-- Column 1: Brand -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/20">
                            <span class="text-white font-bold text-sm"> <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Aqsa Zahoor" class="w-full h-full object-cover"></span>
                        </div>
                        <div>
                            <span class="text-lg font-bold text-primary">Aqsa <span class="text-blue-400">Zahoor</span></span>
                            <p class="text-[10px] text-secondary/60 font-light tracking-widest uppercase">Web Developer</p>
                        </div>
                    </div>
                    <p class="text-secondary/70 text-sm leading-relaxed max-w-xs">
                        Crafting responsive, user-friendly websites with clean code and modern design.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-9 h-9 bg-white/5 hover:bg-blue-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] border border-white/5 hover:border-blue-500/30">
                            <i class="fab fa-github text-sm"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-white/5 hover:bg-blue-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] border border-white/5 hover:border-blue-500/30">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-white/5 hover:bg-purple-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(168,85,247,0.2)] border border-white/5 hover:border-purple-500/30">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-white/5 hover:bg-blue-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] border border-white/5 hover:border-blue-500/30">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-white/5 hover:bg-blue-500/20 rounded-full flex items-center justify-center text-secondary/60 hover:text-white transition-all duration-300 hover:scale-110 hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] border border-white/5 hover:border-blue-500/30">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h4 class="text-white font-semibold text-sm mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 bg-blue-500 rounded-full"></span>
                        Quick Links
                    </h4>
                    <ul class="space-y-2.5">
                        <li><a href="#home" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">Home</a></li>
                        <li><a href="#about" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">About</a></li>
                        <li><a href="#skills" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">Skills</a></li>
                        <li><a href="#projects" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">Projects</a></li>
                        <li><a href="#experience" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">Experience</a></li>
                        <li><a href="#education" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">Education</a></li>
                        <li><a href="#contact" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h4 class="text-white font-semibold text-sm mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 bg-blue-500 rounded-full"></span>
                        Services
                    </h4>
                    <ul class="space-y-2.5">
                        <li><a href="#" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">Web Development</a></li>
                        <li><a href="#" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">UI/UX Design</a></li>
                        <li><a href="#" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">Responsive Design</a></li>
                        <li><a href="#" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">E-commerce Solutions</a></li>
                        <li><a href="#" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">SEO Optimization</a></li>
                        <li><a href="#" class="text-secondary/70 hover:text-blue-400 text-sm transition-all duration-300 hover:translate-x-1 inline-block border-b border-transparent hover:border-blue-400/30 pb-0.5">API Integration</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info -->
                <div>
                    <h4 class="text-white font-semibold text-sm mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 bg-blue-500 rounded-full"></span>
                        Get In Touch
                    </h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 group border-b border-white/5 pb-3 hover:border-blue-500/20 transition-colors duration-300">
                            <i class="fas fa-map-marker-alt text-blue-400/60 text-sm mt-0.5 group-hover:text-blue-400 transition-colors duration-300"></i>
                            <span class="text-secondary/70 text-sm group-hover:text-white/80 transition-colors duration-300">Multan, Pakistan</span>
                        </li>
                        <li class="flex items-start gap-3 group border-b border-white/5 pb-3 hover:border-blue-500/20 transition-colors duration-300">
                            <i class="fas fa-envelope text-blue-400/60 text-sm mt-0.5 group-hover:text-blue-400 transition-colors duration-300"></i>
                            <a href="mailto:aqsazahoor07@gmail.com" class="text-secondary/70 text-sm group-hover:text-blue-400 transition-colors duration-300">aqsazahoor07@gmail.com</a>
                        </li>
                        <li class="flex items-start gap-3 group border-b border-white/5 pb-3 hover:border-blue-500/20 transition-colors duration-300">
                            <i class="fas fa-phone text-blue-400/60 text-sm mt-0.5 group-hover:text-blue-400 transition-colors duration-300"></i>
                            <a href="tel:+923268789961" class="text-secondary/70 text-sm group-hover:text-blue-400 transition-colors duration-300">+923268789961</a>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <i class="fas fa-clock text-blue-400/60 text-sm mt-0.5 group-hover:text-blue-400 transition-colors duration-300"></i>
                            <span class="text-secondary/70 text-sm group-hover:text-white/80 transition-colors duration-300">Mon - Fri: 9:00 AM - 6:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Divider with Border -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-blue-500/20"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-gray-900/50 px-4 text-blue-400/40 text-xs border border-blue-500/20 rounded-full py-0.5">✦ ✦ ✦</span>
                </div>
            </div>

        
        <!-- Bottom Footer -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-3">
    <p class="text-secondary/40 text-[10px]">
        &copy; {{ date('Y') }} <span class="text-blue-400/60 font-medium">Aqsa Zahoor</span>. All rights reserved.
    </p>
    
    <div class="flex items-center gap-4">
        <a href="{{ route('privacy.policy') }}" class="text-secondary/30 hover:text-blue-400 text-[9px] uppercase tracking-wider transition-colors">Privacy Policy</a>
        <span class="w-px h-3 bg-white/5"></span>
        <a href="{{ route('terms.service') }}" class="text-secondary/30 hover:text-blue-400 text-[9px] uppercase tracking-wider transition-colors">Terms of Service</a>
        <span class="w-px h-3 bg-white/5"></span>
        <a href="{{ route('sitemap') }}" class="text-secondary/30 hover:text-blue-400 text-[9px] uppercase tracking-wider transition-colors">Sitemap</a>
         <span class="w-px h-3 bg-white/5"></span>
    <a href="{{ route('documentation') }}" class="text-secondary/30 hover:text-blue-400 text-[9px] uppercase tracking-wider transition-colors">Documentation</a>
    </div>

    
</div>
        </div>
    </div>
</footer>
    <!-- At the end of body -->
<script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('scripts')
</body>
</html>