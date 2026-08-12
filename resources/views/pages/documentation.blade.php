@extends('layouts.app')

@section('title', 'Documentation - Aqsa Zahoor')

@section('content')
<section class="py-24 relative">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Back Button -->
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 mb-6 transition-colors group">
                <i class="fas fa-arrow-left text-sm group-hover:-translate-x-1 transition-transform"></i>
                <span class="text-sm">Back to Home</span>
            </a>
            
            <div class="glass-effect rounded-3xl p-8 md:p-12 border border-white/5">
                <!-- Header -->
                <div class="text-center mb-10">
                    <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-1.5 mb-4">
                        <i class="fas fa-code text-blue-400 text-xs"></i>
                        <span class="text-blue-400 text-[10px] font-semibold uppercase tracking-wider">Documentation</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-primary">Project Documentation</h1>
                    <p class="text-secondary/60 text-sm mt-2">Complete documentation for my portfolio website</p>
                </div>
                
                <!-- Quick Nav -->
                <div class="flex flex-wrap gap-2 mb-8 p-4 bg-white/5 rounded-xl border border-white/5">
                    <a href="#overview" class="px-3 py-1.5 text-xs text-secondary hover:text-blue-400 transition-colors bg-white/5 rounded-lg">Overview</a>
                    <a href="#features" class="px-3 py-1.5 text-xs text-secondary hover:text-blue-400 transition-colors bg-white/5 rounded-lg">Features</a>
                    <a href="#tech-stack" class="px-3 py-1.5 text-xs text-secondary hover:text-blue-400 transition-colors bg-white/5 rounded-lg">Tech Stack</a>
                    <a href="#database" class="px-3 py-1.5 text-xs text-secondary hover:text-blue-400 transition-colors bg-white/5 rounded-lg">Database</a>
                    <a href="#installation" class="px-3 py-1.5 text-xs text-secondary hover:text-blue-400 transition-colors bg-white/5 rounded-lg">Installation</a>
                    <a href="#admin" class="px-3 py-1.5 text-xs text-secondary hover:text-blue-400 transition-colors bg-white/5 rounded-lg">Admin Panel</a>
                </div>
                
                <!-- Overview -->
                <div id="overview" class="mb-10">
                    <h2 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-5 bg-blue-500 rounded-full"></span>
                        Overview
                    </h2>
                    <p class="text-secondary text-sm leading-relaxed">
                        A modern, responsive portfolio website built with <span class="text-blue-400">Laravel</span> and 
                        <span class="text-blue-400">Tailwind CSS</span> to showcase my web development skills, 
                        projects, and professional experience. The website features a beautiful glass-morphism 
                        design, dark/light theme toggle, and a full admin panel for content management.
                    </p>
                </div>
                
                <!-- Features -->
                <div id="features" class="mb-10">
                    <h2 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-5 bg-blue-500 rounded-full"></span>
                        Features
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/5 hover:border-blue-500/20 transition-all duration-300">
                            <i class="fas fa-mobile-screen text-blue-400 text-lg mb-2"></i>
                            <h4 class="text-white text-sm font-semibold">Responsive Design</h4>
                            <p class="text-secondary text-xs">Fully responsive on mobile, tablet, and desktop</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/5 hover:border-blue-500/20 transition-all duration-300">
                            <i class="fas fa-moon text-blue-400 text-lg mb-2"></i>
                            <h4 class="text-white text-sm font-semibold">Dark/Light Theme</h4>
                            <p class="text-secondary text-xs">Toggle between dark and light modes</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/5 hover:border-blue-500/20 transition-all duration-300">
                            <i class="fas fa-glass-water text-blue-400 text-lg mb-2"></i>
                            <h4 class="text-white text-sm font-semibold">Glass Morphism</h4>
                            <p class="text-secondary text-xs">Modern glass effect UI design</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/5 hover:border-blue-500/20 transition-all duration-300">
                            <i class="fas fa-arrow-up text-blue-400 text-lg mb-2"></i>
                            <h4 class="text-white text-sm font-semibold">Scroll Animations</h4>
                            <p class="text-secondary text-xs">Smooth scroll reveal animations</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/5 hover:border-blue-500/20 transition-all duration-300">
                            <i class="fas fa-envelope text-blue-400 text-lg mb-2"></i>
                            <h4 class="text-white text-sm font-semibold">Contact Form</h4>
                            <p class="text-secondary text-xs">Send messages with validation</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/5 hover:border-blue-500/20 transition-all duration-300">
                            <i class="fas fa-star text-blue-400 text-lg mb-2"></i>
                            <h4 class="text-white text-sm font-semibold">Feedback System</h4>
                            <p class="text-secondary text-xs">Star ratings and testimonials</p>
                        </div>
                    </div>
                </div>
                
                <!-- Tech Stack -->
                <div id="tech-stack" class="mb-10">
                    <h2 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-5 bg-blue-500 rounded-full"></span>
                        Technologies Used
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="text-white text-sm font-semibold mb-2">Backend</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded-full border border-blue-500/10">Laravel 12.x</span>
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded-full border border-blue-500/10">MySQL</span>
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded-full border border-blue-500/10">PHP 8.2+</span>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-semibold mb-2">Frontend</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded-full border border-blue-500/10">Tailwind CSS</span>
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded-full border border-blue-500/10">JavaScript</span>
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded-full border border-blue-500/10">Font Awesome</span>
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-xs rounded-full border border-blue-500/10">Google Fonts</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Database -->
                <div id="database" class="mb-10">
                    <h2 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-5 bg-blue-500 rounded-full"></span>
                        Database Schema
                    </h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-white/5">
                                    <th class="text-left text-white py-2 px-3">Table</th>
                                    <th class="text-left text-white py-2 px-3">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-2 px-3 text-blue-400 font-mono text-xs">admins</td>
                                    <td class="py-2 px-3 text-secondary text-xs">Admin users for panel access</td>
                                </tr>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-2 px-3 text-blue-400 font-mono text-xs">contacts</td>
                                    <td class="py-2 px-3 text-secondary text-xs">Contact form messages</td>
                                </tr>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-2 px-3 text-blue-400 font-mono text-xs">documents</td>
                                    <td class="py-2 px-3 text-secondary text-xs">Uploaded CV and documents</td>
                                </tr>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-2 px-3 text-blue-400 font-mono text-xs">feedbacks</td>
                                    <td class="py-2 px-3 text-secondary text-xs">User feedback with star ratings</td>
                                </tr>
                                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                                    <td class="py-2 px-3 text-blue-400 font-mono text-xs">projects</td>
                                    <td class="py-2 px-3 text-secondary text-xs">Portfolio projects</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Installation -->
                <div id="installation" class="mb-10">
                    <h2 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-5 bg-blue-500 rounded-full"></span>
                        Installation
                    </h2>
                    <div class="bg-gray-900/50 rounded-xl p-4 border border-white/5">
                        <pre class="text-secondary text-xs leading-relaxed overflow-x-auto">
# Clone the repository
git clone https://github.com/yourusername/portfolio.git

# Install dependencies
composer install

# Create .env file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env

# Run migrations
php artisan migrate

# Create storage link
php artisan storage:link

# Start the server
php artisan serve</pre>
                    </div>
                </div>
                
                <!-- Admin Panel -->
                <div id="admin" class="mb-10">
                    <h2 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-5 bg-blue-500 rounded-full"></span>
                        Admin Panel
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/5">
                            <h4 class="text-white text-sm font-semibold">Login Credentials</h4>
                            <div class="mt-2 space-y-1">
                                <p class="text-secondary text-xs"><span class="text-blue-400">Email:</span> admin@portfolio.com</p>
                                <p class="text-secondary text-xs"><span class="text-blue-400">Password:</span> password123</p>
                            </div>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/5">
                            <h4 class="text-white text-sm font-semibold">Features</h4>
                            <ul class="mt-2 space-y-1 text-secondary text-xs">
                                <li>• Dashboard with statistics</li>
                                <li>• Document management</li>
                                <li>• Project management</li>
                                <li>• Contact messages</li>
                                <li>• Feedback approval</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="pt-6 border-t border-white/5 text-center">
                    <p class="text-secondary/40 text-xs">
                        Documentation last updated: {{ date('F d, Y') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection