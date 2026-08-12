@extends('layouts.app')

@section('title', 'Terms of Service - Aqsa Zahoor')

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
                <h1 class="text-3xl md:text-4xl font-bold text-primary mb-6">Terms of Service</h1>
                <p class="text-secondary/60 text-sm mb-8">Last updated: {{ date('F d, Y') }}</p>
                
                <div class="space-y-6 text-secondary leading-relaxed">
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">1. Acceptance of Terms</h2>
                        <p class="text-sm">By using this portfolio website, you agree to these terms and conditions.</p>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">2. Use of Content</h2>
                        <p class="text-sm">All content on this website is for informational purposes only. You may not reproduce, distribute, or use my content without permission.</p>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">3. Disclaimer</h2>
                        <p class="text-sm">The information provided on this website is for general informational purposes only.</p>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">4. Contact</h2>
                        <p class="text-sm">For any questions about these terms, please contact me at <a href="mailto:aqsazahoor07@gmail.com" class="text-blue-400 hover:text-blue-300">aqsazahoor07@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection