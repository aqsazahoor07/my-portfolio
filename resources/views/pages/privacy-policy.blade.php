@extends('layouts.app')

@section('title', 'Privacy Policy - Aqsa Zahoor')

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
                <h1 class="text-3xl md:text-4xl font-bold text-primary mb-6">Privacy Policy</h1>
                <p class="text-secondary/60 text-sm mb-8">Last updated: {{ date('F d, Y') }}</p>
                
                <div class="space-y-6 text-secondary leading-relaxed">
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">1. Information I Collect</h2>
                        <p class="text-sm">I collect information you provide directly, such as your name, email address, and message when you contact me through the contact form.</p>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">2. How I Use Your Information</h2>
                        <ul class="list-disc list-inside space-y-2 text-sm pl-4">
                            <li>To respond to your inquiries and messages</li>
                            <li>To improve my portfolio and services</li>
                            <li>To send you updates if you've subscribed</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">3. Data Security</h2>
                        <p class="text-sm">I implement appropriate security measures to protect your personal information.</p>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">4. Contact Me</h2>
                        <p class="text-sm">If you have any questions about this Privacy Policy, please contact me at <a href="mailto:aqsazahoor07@gmail.com" class="text-blue-400 hover:text-blue-300">aqsazahoor07@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection