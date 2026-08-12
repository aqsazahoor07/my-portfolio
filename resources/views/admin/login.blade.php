<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px #1a1a2e inset !important;
            -webkit-text-fill-color: #ffffff !important;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>
<body>
    <div class="w-full max-w-md px-4">
        <div class="login-card rounded-2xl p-8 md:p-10">
            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-xl shadow-blue-500/20">
                    <i class="fas fa-user-shield text-2xl text-white"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Admin Login</h2>
                <p class="text-gray-400 text-sm mt-1">Enter your credentials to access dashboard</p>
            </div>
            
            @if($errors->any())
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $errors->first() }}
                </div>
            @endif
            
            @if(session('success'))
                <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('admin.login') }}" method="POST" autocomplete="off">
                @csrf
                
                <!-- Email Field -->
                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-envelope mr-2 text-blue-400"></i> Email Address
                    </label>
                    <div class="relative">
                        <input type="email" 
                               name="email" 
                               id="email"
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                               placeholder="admin@example.com"
                               autocomplete="off"
                               value="{{ old('email') }}">
                    </div>
                </div>
                
                <!-- Password Field -->
                <div class="mb-6">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-key mr-2 text-blue-400"></i> Password
                    </label>
                    <div class="relative">
                        <input type="password" 
                               name="password" 
                               id="password"
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                               placeholder="Enter your password"
                               autocomplete="new-password">
                        <button type="button" 
                                onclick="togglePassword()" 
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between mb-6">
    <label class="flex items-center gap-2 text-gray-400 text-sm cursor-pointer">
        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-white/10 bg-white/5 text-blue-500">
        Remember me
    </label>
    <a href="{{ route('admin.password.request') }}" class="text-blue-400 hover:text-blue-300 text-sm transition-colors">
        Forgot Password?
    </a>
</div>
                
                
                <!-- Login Button -->
                <button type="submit" 
                        class="w-full py-3 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] flex items-center justify-center gap-2">
                    <i class="fas fa-sign-in-alt"></i>
                    Login
                </button>
            </form>
            
            <!-- Footer -->
            <div class="mt-6 text-center">
                <p class="text-gray-500 text-xs">
                    <i class="fas fa-shield-alt mr-1 text-blue-400/50"></i>
                    Secure Admin Panel
                </p>
            </div>
        </div>
    </div>
    
    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.getElementById('passwordIcon');
            
            if (password.type === 'password') {
                password.type = 'text';
                icon.className = 'fas fa-eye-slash';
            } else {
                password.type = 'password';
                icon.className = 'fas fa-eye';
            }
        }
        
        // Clear fields on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Don't clear if there's old input
            if (!document.querySelector('input[name="email"]').value) {
                document.getElementById('email').value = '';
            }
            document.getElementById('password').value = '';
        });
    </script>
</body>
</html>