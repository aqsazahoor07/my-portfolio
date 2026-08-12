@extends('layouts.app')

@section('title', 'Sitemap - Aqsa Zahoor')

@section('content')
<section class="py-24 relative">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Back Button - Fixed -->
            <div class="flex items-center gap-4 mb-6">
                <a href="javascript:history.back()" class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition-colors group">
                    <i class="fas fa-arrow-left text-sm group-hover:-translate-x-1 transition-transform"></i>
                    <span class="text-sm">Go Back</span>
                </a>
                <span class="text-secondary/30 text-xs">|</span>
                <a href="{{ route('home') }}#contact" class="text-blue-400/60 hover:text-blue-400 text-sm transition-colors">
                    <i class="fas fa-home text-xs"></i> Home
                </a>
            </div>
            
            <div class="glass-effect rounded-3xl p-8 md:p-12 border border-white/5">
                <h1 class="text-3xl md:text-4xl font-bold text-primary mb-6">Sitemap</h1>
                <p class="text-secondary/60 text-sm mb-8">Navigate through all pages of my portfolio</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Main Pages -->
                    <div class="space-y-3">
                        <h2 class="text-lg font-semibold text-white border-b border-white/5 pb-2">Main Pages</h2>
                        <ul class="space-y-2">
                            <li><a href="{{ route('home') }}" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-home text-blue-400/50 text-xs"></i> Home
                            </a></li>
                            <li><a href="#about" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-user text-blue-400/50 text-xs"></i> About
                            </a></li>
                            <li><a href="#skills" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-code text-blue-400/50 text-xs"></i> Skills
                            </a></li>
                            <li><a href="#projects" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-folder text-blue-400/50 text-xs"></i> Projects
                            </a></li>
                            <li><a href="#experience" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-briefcase text-blue-400/50 text-xs"></i> Experience
                            </a></li>
                            <li><a href="#education" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-graduation-cap text-blue-400/50 text-xs"></i> Education
                            </a></li>
                            <li><a href="#contact" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-envelope text-blue-400/50 text-xs"></i> Contact
                            </a></li>
                            <li><a href="#feedback" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-star text-blue-400/50 text-xs"></i> Feedback
                            </a></li>
                        </ul>
                    </div>

                    <!-- Legal Pages -->
                    <div class="space-y-3">
                        <h2 class="text-lg font-semibold text-white border-b border-white/5 pb-2">Legal</h2>
                        <ul class="space-y-2">
                            <li><a href="{{ route('privacy.policy') }}" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-shield-alt text-blue-400/50 text-xs"></i> Privacy Policy
                            </a></li>
                            <li><a href="{{ route('terms.service') }}" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-file-contract text-blue-400/50 text-xs"></i> Terms of Service
                            </a></li>
                            <li><a href="{{ route('sitemap') }}" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-sitemap text-blue-400/50 text-xs"></i> Sitemap
                            </a></li>
                        </ul>
                    </div>

                    <!-- Admin -->
                    <div class="space-y-3 md:col-span-2">
                        <h2 class="text-lg font-semibold text-white border-b border-white/5 pb-2">Admin</h2>
                        <ul class="space-y-2">
                            <li><a href="{{ route('admin.login') }}" class="text-secondary hover:text-blue-400 text-sm transition-colors flex items-center gap-2">
                                <i class="fas fa-user-shield text-blue-400/50 text-xs"></i> Admin Login
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection