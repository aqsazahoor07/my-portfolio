<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Admin</title>
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
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-xl shadow-green-500/20">
                    <i class="fas fa-lock-open text-2xl text-white"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Reset Password</h2>
                <p class="text-gray-400 text-sm mt-1">Enter your new password</p>
            </div>

            @if($errors->any())
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">

                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-envelope mr-2 text-blue-400"></i> Email Address
                    </label>
                    <input type="email" 
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 cursor-not-allowed"
                           value="{{ $email }}"
                           disabled>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-lock mr-2 text-blue-400"></i> New Password
                    </label>
                    <div class="relative">
                        <input type="password" 
                               name="password" 
                               id="password"
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                               placeholder="Enter new password"
                               required>
                        <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-check-circle mr-2 text-blue-400"></i> Confirm Password
                    </label>
                    <input type="password" 
                           name="password_confirmation" 
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                           placeholder="Confirm new password"
                           required>
                </div>

                <button type="submit" class="w-full py-3 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(34,197,94,0.3)] flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Reset Password
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
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.getElementById('passwordIcon');
            password.type = password.type === 'password' ? 'text' : 'password';
            icon.className = password.type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        }
    </script>
</body>
</html>