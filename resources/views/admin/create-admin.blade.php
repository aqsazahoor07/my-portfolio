@extends('layouts.admin')

@section('title', 'Create New Admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-gray-800 rounded-2xl p-8">
        <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 bg-green-500/20 rounded-full flex items-center justify-center">
                <i class="fas fa-user-plus text-green-400 text-xl"></i>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-white">Create New Admin</h2>
                <p class="text-gray-400 text-sm">Add a new administrator to the system</p>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6">
                <i class="fas fa-check-circle mr-2"></i>
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl text-sm mb-6">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.create.store') }}" method="POST" autocomplete="off">
            @csrf

            <!-- Hidden dummy fields to prevent browser autofill -->
            <input type="text" style="display:none" aria-hidden="true">
            <input type="password" style="display:none" aria-hidden="true">
            <input type="email" style="display:none" aria-hidden="true">

            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-medium mb-2">
                    <i class="fas fa-user mr-2 text-blue-400"></i> Full Name
                </label>
                <input type="text" 
                       name="name" 
                       id="name"
                       class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                       placeholder="Enter admin name"
                       value="{{ old('name') }}"
                       autocomplete="off"
                       required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-medium mb-2">
                    <i class="fas fa-envelope mr-2 text-blue-400"></i> Email Address
                </label>
                <input type="email" 
                       name="email" 
                       id="email"
                       class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                       placeholder="Enter admin email"
                       value="{{ old('email') }}"
                       autocomplete="off"
                       required>
                <p class="text-gray-500 text-xs mt-1">This email will receive login credentials</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-medium mb-2">
                    <i class="fas fa-lock mr-2 text-blue-400"></i> Password
                </label>
                <div class="relative">
                    <input type="password" 
                           name="password" 
                           id="password"
                           class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                           placeholder="Enter password (min 8 characters)"
                           autocomplete="new-password"
                           required>
                    <button type="button" onclick="togglePassword('password')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-eye" id="password_icon"></i>
                    </button>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-gray-300 text-sm font-medium mb-2">
                    <i class="fas fa-check-circle mr-2 text-blue-400"></i> Confirm Password
                </label>
                <div class="relative">
                    <input type="password" 
                           name="password_confirmation" 
                           id="password_confirmation"
                           class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300"
                           placeholder="Confirm password"
                           autocomplete="new-password"
                           required>
                    <button type="button" onclick="togglePassword('password_confirmation')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-eye" id="password_confirmation_icon"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="w-full py-3 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(34,197,94,0.3)] flex items-center justify-center gap-2">
                <i class="fas fa-user-plus"></i> Create Admin
            </button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-gray-500 text-xs">
                <i class="fas fa-info-circle mr-1 text-blue-400/50"></i>
                Password must be at least 8 characters long
            </p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Clear all fields on page load to prevent autofill
        const fields = ['name', 'email', 'password', 'password_confirmation'];
        fields.forEach(function(id) {
            const field = document.getElementById(id);
            if (field) {
                field.value = '';
            }
        });
    });

    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const icon = document.getElementById(fieldId + '_icon');
        if (field.type === 'password') {
            field.type = 'text';
            icon.className = 'fas fa-eye-slash';
        } else {
            field.type = 'password';
            icon.className = 'fas fa-eye';
        }
    }
</script>
@endsection