<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Admin</title>
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
    </style>
</head>
<body>
    <div class="w-full max-w-md px-4">
        <div class="login-card rounded-2xl p-8 md:p-10">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-xl shadow-blue-500/20">
                    <i class="fas fa-key text-2xl text-white"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Forgot Password</h2>
                <p class="text-gray-400 text-sm mt-1">Enter your email to reset password</p>
            </div>

            @if(session('success'))
                <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if(session('warning'))
                <div class="bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 px-4 py-3 rounded-xl text-sm mb-6">
                    <p class="font-semibold mb-2">⚠️ {{ session('warning') }}</p>
                    <a href="{{ session('reset_link') }}" target="_blank" class="text-yellow-400 hover:text-yellow-300 underline break-all">
                        {{ session('reset_link') }}
                    </a>
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.password.email') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-envelope mr-2 text-blue-400"></i> Email Address
                    </label>
                    <input type="email" 
                           name="email" 
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                           placeholder="admin@example.com"
                           value="{{ old('email') }}"
                           required>
                </div>

                <button type="submit" class="w-full py-3 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] flex items-center justify-center gap-2">
                    <i class="fas fa-paper-plane"></i> Send Reset Link
                </button>
            </form>

            <div class="mt-6 text-center">
                <a href="{{ route('admin.login') }}" class="text-gray-400 hover:text-white text-sm transition-colors">
                    <i class="fas fa-arrow-left mr-1"></i> Back to Login
                </a>
            </div>
        </div>
    </div>

    <script>
        console.log('Forgot Password page loaded');
        
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function() {
                console.log('Form submitted - sending reset link');
            });
        });
    </script>
</body>
</html>