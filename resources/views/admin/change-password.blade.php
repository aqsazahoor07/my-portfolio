<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - Admin</title>
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
                <h2 class="text-2xl font-bold text-white">Change Password</h2>
                <p class="text-gray-400 text-sm mt-1">Update your admin account password</p>
            </div>

            @if(session('success'))
                <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.password.change.update') }}" method="POST">
                @csrf

                <!-- Current Password -->
                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-lock mr-2 text-blue-400"></i> Current Password
                    </label>
                    <div class="relative">
                        <input type="password" 
                               name="current_password" 
                               id="current_password"
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                               placeholder="Enter your current password"
                               required>
                        <button type="button" 
                                onclick="toggleCurrentPassword()" 
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-eye" id="currentPasswordIcon"></i>
                        </button>
                    </div>
                </div>

                <!-- New Password -->
                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-key mr-2 text-blue-400"></i> New Password
                    </label>
                    <div class="relative">
                        <input type="password" 
                               name="new_password" 
                               id="new_password"
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                               placeholder="Enter new password (min 8 characters)"
                               required>
                        <button type="button" 
                                onclick="toggleNewPassword()" 
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-eye" id="newPasswordIcon"></i>
                        </button>
                    </div>
                    <p class="text-gray-500 text-xs mt-1">Password must be at least 8 characters long</p>
                </div>

                <!-- Confirm New Password -->
                <div class="mb-6">
                    <label class="block text-gray-300 text-sm font-medium mb-2">
                        <i class="fas fa-check-circle mr-2 text-blue-400"></i> Confirm New Password
                    </label>
                    <div class="relative">
                        <input type="password" 
                               name="new_password_confirmation" 
                               id="new_password_confirmation"
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                               placeholder="Confirm your new password"
                               required>
                        <button type="button" 
                                onclick="toggleConfirmPassword()" 
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-eye" id="confirmPasswordIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" 
                        class="w-full py-3 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Change Password
                </button>
            </form>

            <div class="mt-6 text-center">
                <a href="{{ route('admin.dashboard') }}" class="text-gray-400 hover:text-white text-sm transition-colors">
                    <i class="fas fa-arrow-left mr-1"></i> Back to Dashboard
                </a>
            </div>
        </div>
    </div>

    <script>
        function toggleCurrentPassword() {
            const password = document.getElementById('current_password');
            const icon = document.getElementById('currentPasswordIcon');
            password.type = password.type === 'password' ? 'text' : 'password';
            icon.className = password.type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        }

        function toggleNewPassword() {
            const password = document.getElementById('new_password');
            const icon = document.getElementById('newPasswordIcon');
            password.type = password.type === 'password' ? 'text' : 'password';
            icon.className = password.type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        }

        function toggleConfirmPassword() {
            const password = document.getElementById('new_password_confirmation');
            const icon = document.getElementById('confirmPasswordIcon');
            password.type = password.type === 'password' ? 'text' : 'password';
            icon.className = password.type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        }
    </script>
</body>
</html>