<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    @php
        use App\Models\Contact;
        use App\Models\Feedback;
    @endphp
    
    <style>
        /* ===== BASE ===== */
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: #0a0a1a;
        }
        
        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 5px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.02);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #3b82f6, #8b5cf6);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #60a5fa, #a78bfa);
        }
        
        /* ===== SIDEBAR ===== */
        .sidebar {
            background: rgba(15, 15, 35, 0.95);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255, 255, 255, 0.04);
            box-shadow: 4px 0 30px rgba(0, 0, 0, 0.3);
        }
        
        .sidebar-logo {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(139, 92, 246, 0.2));
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: all 0.4s ease;
        }
        
        .sidebar-logo:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px rgba(59, 130, 246, 0.15);
        }
        
        .sidebar-link {
            position: relative;
            padding: 12px 16px;
            border-radius: 12px;
            color: rgba(255, 255, 255, 0.5);
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            margin-bottom: 2px;
        }
        
        .sidebar-link::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.05));
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .sidebar-link:hover {
            color: #ffffff;
            transform: translateX(4px);
        }
        
        .sidebar-link:hover::before {
            opacity: 1;
        }
        
        .sidebar-link i {
            width: 20px;
            text-align: center;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }
        
        .sidebar-link:hover i {
            transform: scale(1.1);
            color: #60a5fa;
        }
        
        .sidebar-link .text {
            position: relative;
            z-index: 1;
        }
        
        .sidebar-link .badge {
            margin-left: auto;
            padding: 2px 10px;
            border-radius: 50px;
            font-size: 0.65rem;
            font-weight: 600;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: #ffffff;
            position: relative;
            z-index: 1;
            animation: pulse-badge 2s ease-in-out infinite;
        }
        
        .sidebar-link .badge.yellow {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }
        
        .sidebar-link .badge.green {
            background: linear-gradient(135deg, #10b981, #059669);
        }
        
        @keyframes pulse-badge {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .sidebar-link.active {
            color: #ffffff;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.15), rgba(139, 92, 246, 0.08));
            border: 1px solid rgba(59, 130, 246, 0.15);
        }
        
        .sidebar-link.active i {
            color: #60a5fa;
        }
        
        /* ===== SECTION HEADERS ===== */
        .section-header {
            color: rgba(255, 255, 255, 0.2);
            font-size: 0.6rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            padding: 0 16px;
            margin: 8px 0 12px;
        }
        
        /* ===== DIVIDER ===== */
        .sidebar-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.06), transparent);
            margin: 12px 16px;
        }
        
        /* ===== USER CARD ===== */
        .user-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.04);
            border-radius: 14px;
            padding: 14px;
            margin-top: 16px;
            transition: all 0.3s ease;
        }
        
        .user-card:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(59, 130, 246, 0.15);
        }
        
        .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.8rem;
            color: #ffffff;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.2);
        }
        
        /* ===== LOGOUT BUTTON ===== */
        .logout-btn {
            color: rgba(239, 68, 68, 0.6);
            transition: all 0.3s ease;
        }
        
        .logout-btn:hover {
            color: #ef4444;
            background: rgba(239, 68, 68, 0.08);
        }
        
        /* ===== MAIN CONTENT ===== */
        .main-content {
            background: linear-gradient(180deg, #0a0a1a, #0f0f2a);
            min-height: 100vh;
            padding: 32px;
            margin-left: 256px;
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .sidebar {
                width: 220px;
                transform: translateX(-100%);
            }
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="flex min-h-screen">
        <!-- ===== SIDEBAR ===== -->
        <aside class="sidebar w-64 min-h-screen fixed left-0 top-0 overflow-y-auto z-50">
            <!-- Logo -->
            <div class="p-5 border-b border-white/5">
                <div class="flex items-center gap-3">
                    <div class="sidebar-logo w-11 h-11 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/10">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Aqsa Zahoor" class="w-8 h-8 object-cover rounded-lg">
                    </div>
                    <div>
                        <span class="text-white font-bold text-base block tracking-tight">Admin Panel</span>
                        <span class="text-gray-500 text-[10px] tracking-wider uppercase">{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="p-3">
                <!-- Main -->
                <div class="section-header">Main</div>
                
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                    <i class="fas fa-chart-pie"></i>
                    <span class="text">Dashboard</span>
                </a>
                
                <a href="{{ route('admin.documents.index') }}" class="sidebar-link">
                    <i class="fas fa-file-alt"></i>
                    <span class="text">Documents</span>
                </a>
                
                <a href="{{ route('admin.projects.index') }}" class="sidebar-link">
                    <i class="fas fa-code"></i>
                    <span class="text">Projects</span>
                </a>
                
                <!-- Communications -->
                <div class="section-header mt-4">Communications</div>
                
                <a href="{{ route('admin.contacts.index') }}" class="sidebar-link">
                    <i class="fas fa-envelope"></i>
                    <span class="text">Messages</span>
                    @php
                        $unreadCount = Contact::where('is_read', false)->count();
                    @endphp
                    @if($unreadCount > 0)
                        <span class="badge">{{ $unreadCount }}</span>
                    @endif
                </a>
                
                <a href="{{ route('admin.feedbacks.index') }}" class="sidebar-link">
                    <i class="fas fa-star"></i>
                    <span class="text">Feedbacks</span>
                    @php
                        $pendingCount = Feedback::where('is_approved', false)->count();
                    @endphp
                    @if($pendingCount > 0)
                        <span class="badge yellow">{{ $pendingCount }}</span>
                    @endif
                </a>
                
                <!-- Management -->
                <div class="section-header mt-4">Management</div>
                
                <a href="{{ route('admin.create') }}" class="sidebar-link">
                    <i class="fas fa-user-plus" style="color: #34d399;"></i>
                    <span class="text">Create Admin</span>
                </a>
                
                <a href="{{ route('admin.list') }}" class="sidebar-link">
                    <i class="fas fa-users" style="color: #60a5fa;"></i>
                    <span class="text">All Admins</span>
                </a>
                
                <!-- Account -->
                <div class="section-header mt-4">Account</div>
                
                <a href="{{ route('admin.password.change') }}" class="sidebar-link">
                    <i class="fas fa-key" style="color: #fbbf24;"></i>
                    <span class="text">Change Password</span>
                </a>
                
                <div class="sidebar-divider"></div>
                
                <!-- Logout -->
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="sidebar-link logout-btn w-full text-left">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="text">Logout</span>
                    </button>
                </form>
                
                <!-- User Card -->
                <div class="user-card">
                    <div class="flex items-center gap-3">
                        <div class="user-avatar">
                            {{ substr(Auth::guard('admin')->user()->name ?? 'A', 0, 1) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-white text-sm font-medium truncate">{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</p>
                            <p class="text-gray-500 text-[10px] truncate">{{ Auth::guard('admin')->user()->email ?? 'admin@portfolio.com' }}</p>
                        </div>
                        <div class="w-2 h-2 rounded-full bg-green-500 shadow-lg shadow-green-500/30"></div>
                    </div>
                </div>
            </nav>
        </aside>
        
        <!-- ===== MAIN CONTENT ===== -->
        <main class="main-content flex-1 ml-64 min-h-screen">
            @yield('content')
            <!-- ===== BACK BUTTON (Show on all pages except dashboard) ===== -->
    @if(!request()->routeIs('admin.dashboard'))
        <div class="px-4 sm:px-6 lg:px-8 pt-4">
            <a href="{{ url()->previous() }}" 
               class="group inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/5 border border-white/10 hover:border-blue-400/40 text-white/60 hover:text-white transition-all duration-300 hover:scale-105 hover:shadow-[0_10px_30px_rgba(59,130,246,0.1)] mb-4">
                <i class="fas fa-arrow-left text-sm group-hover:-translate-x-1 transition-transform duration-300"></i>
                <span class="text-sm font-medium">Go Back</span>
            </a>
        </div>
    @endif
        </main>
    </div>
</body>
</html>