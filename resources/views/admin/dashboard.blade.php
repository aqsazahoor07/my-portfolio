@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')

<!-- ===== Welcome Section ===== -->
<div class="mb-8">
    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-6 md:p-8 border border-gray-700/50 hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_20px_60px_rgba(59,130,246,0.05)]">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-white">
                    Welcome back, <span class="text-blue-400">{{ $admin->name }}</span>
                </h1>
                <p class="text-gray-400 text-sm mt-1">
                    Here's what's happening with your portfolio today.
                </p>
            </div>
            <div class="flex items-center gap-4">
                <div class="relative">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center shadow-lg shadow-blue-500/30 ring-2 ring-blue-500/20">
                        <span class="text-white font-bold text-xl">{{ substr($admin->name, 0, 1) }}</span>
                    </div>
                    <div class="absolute -bottom-0.5 -right-0.5 w-4 h-4 bg-green-500 rounded-full border-2 border-gray-900"></div>
                </div>
                <div>
                    <p class="text-white font-medium">{{ $admin->name }}</p>
                    <p class="text-gray-400 text-sm">{{ $admin->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== Stats Cards ===== -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
    
    <!-- Documents -->
    <div class="group bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-6 border border-gray-700/50 hover:border-blue-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_60px_rgba(59,130,246,0.1)]">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Documents</p>
                <h3 class="text-3xl font-bold text-white mt-1 group-hover:text-blue-400 transition-colors duration-300">{{ $documents->count() }}</h3>
            </div>
            <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center group-hover:bg-blue-500/30 group-hover:scale-110 transition-all duration-300">
                <i class="fas fa-file-alt text-blue-400 text-xl group-hover:text-blue-300 transition-colors duration-300"></i>
            </div>
        </div>
        <div class="mt-3 pt-3 border-t border-gray-700/50">
            <span class="text-xs text-gray-500">Total uploaded</span>
        </div>
    </div>

    <!-- Projects -->
    <div class="group bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-6 border border-gray-700/50 hover:border-green-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_60px_rgba(34,197,94,0.1)]">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">Projects</p>
                <h3 class="text-3xl font-bold text-white mt-1 group-hover:text-green-400 transition-colors duration-300">{{ $projects->count() }}</h3>
            </div>
            <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center group-hover:bg-green-500/30 group-hover:scale-110 transition-all duration-300">
                <i class="fas fa-code text-green-400 text-xl group-hover:text-green-300 transition-colors duration-300"></i>
            </div>
        </div>
        <div class="mt-3 pt-3 border-t border-gray-700/50">
            <span class="text-xs text-gray-500">Total projects</span>
        </div>
    </div>

    <!-- CV Status -->
    <div class="group bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-6 border border-gray-700/50 hover:border-cyan-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_60px_rgba(6,182,212,0.1)]">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-sm font-medium">CV Status</p>
                @php
                    $cv = $documents->where('category', 'cv')->first();
                @endphp
                <h3 class="text-3xl font-bold text-white mt-1">
                    <span class="{{ $cv ? 'text-green-400' : 'text-red-400' }}">
                        {{ $cv ? 'Uploaded' : 'Missing' }}
                    </span>
                </h3>
            </div>
            <div class="w-12 h-12 {{ $cv ? 'bg-green-500/20' : 'bg-red-500/20' }} rounded-xl flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                <i class="fas {{ $cv ? 'fa-check-circle' : 'fa-exclamation-circle' }} {{ $cv ? 'text-green-400' : 'text-red-400' }} text-xl"></i>
            </div>
        </div>
        <div class="mt-3 pt-3 border-t border-gray-700/50">
            <span class="text-xs text-gray-500">{{ $cv ? 'Ready to download' : 'Please upload CV' }}</span>
        </div>
    </div>

    <!-- Messages -->
<div class="group bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-6 border border-gray-700/50 hover:border-purple-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_60px_rgba(168,85,247,0.1)]">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-400 text-sm font-medium">Messages</p>
            @php
                $unreadCount = App\Models\Contact::where('is_read', 0)->count();
            @endphp
            <h3 class="text-3xl font-bold text-white mt-1 group-hover:text-purple-400 transition-colors duration-300">{{ $unreadCount }}</h3>
        </div>
        <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center group-hover:bg-purple-500/30 group-hover:scale-110 transition-all duration-300 relative">
            <i class="fas fa-envelope text-purple-400 text-xl group-hover:text-purple-300 transition-colors duration-300"></i>
            @if($unreadCount > 0)
                <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full text-white text-[10px] font-bold flex items-center justify-center">{{ $unreadCount }}</span>
            @endif
        </div>
    </div>
    <div class="mt-3 pt-3 border-t border-gray-700/50">
        <a href="{{ route('admin.contacts.index') }}" class="text-xs text-blue-400 hover:text-blue-300 transition-colors flex items-center gap-1">
            View all messages <i class="fas fa-arrow-right text-[8px]"></i>
        </a>
    </div>
</div>
</div>

<!-- ===== Recent Activity ===== -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    
    <!-- Recent Documents -->
    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-6 border border-gray-700/50 hover:border-blue-500/20 transition-all duration-500">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-white flex items-center gap-2">
                <i class="fas fa-file-alt text-blue-400"></i>
                Recent Documents
            </h3>
            <a href="{{ route('admin.documents.index') }}" class="text-xs text-blue-400 hover:text-blue-300 transition-colors flex items-center gap-1">
                View all <i class="fas fa-arrow-right text-[8px]"></i>
            </a>
        </div>
        <div class="space-y-2">
            @forelse($documents->take(5) as $document)
                <div class="flex items-center justify-between p-3 rounded-xl bg-gray-700/30 hover:bg-gray-700/50 transition-all duration-300 hover:translate-x-1 border border-transparent hover:border-blue-500/20">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-file text-blue-400 text-xs"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-white text-sm font-medium truncate">{{ $document->title }}</p>
                            <p class="text-gray-400 text-xs capitalize">{{ $document->category }}</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded text-[10px] font-medium flex-shrink-0">{{ strtoupper($document->file_type) }}</span>
                </div>
            @empty
                <div class="text-center py-6 text-gray-500 text-sm">No documents uploaded yet.</div>
            @endforelse
        </div>
    </div>

    <!-- Recent Projects -->
    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-6 border border-gray-700/50 hover:border-green-500/20 transition-all duration-500">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-white flex items-center gap-2">
                <i class="fas fa-code text-green-400"></i>
                Recent Projects
            </h3>
            <a href="{{ route('admin.projects.index') }}" class="text-xs text-blue-400 hover:text-blue-300 transition-colors flex items-center gap-1">
                View all <i class="fas fa-arrow-right text-[8px]"></i>
            </a>
        </div>
        <div class="space-y-2">
            @forelse($projects->take(5) as $project)
                <div class="flex items-center justify-between p-3 rounded-xl bg-gray-700/30 hover:bg-gray-700/50 transition-all duration-300 hover:translate-x-1 border border-transparent hover:border-green-500/20">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-8 h-8 rounded-lg bg-green-500/20 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-folder-open text-green-400 text-xs"></i>
                        </div>
                        <p class="text-white text-sm font-medium truncate">{{ $project->title }}</p>
                    </div>
                    <a href="{{ $project->url }}" target="_blank" class="text-blue-400 hover:text-blue-300 transition-colors hover:scale-110 transform duration-300 flex-shrink-0">
                        <i class="fas fa-external-link-alt text-sm"></i>
                    </a>
                </div>
            @empty
                <div class="text-center py-6 text-gray-500 text-sm">No projects added yet.</div>
            @endforelse
        </div>
    </div>
</div>

<!-- ===== Quick Actions ===== -->
<div class="mb-8">
    <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
        <i class="fas fa-bolt text-yellow-400"></i>
        Quick Actions
    </h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <a href="{{ route('admin.documents.create') }}" class="group bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-5 text-center border border-gray-700/50 hover:border-blue-500/40 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_15px_50px_rgba(59,130,246,0.05)]">
            <div class="w-12 h-12 mx-auto bg-blue-500/20 rounded-xl flex items-center justify-center group-hover:bg-blue-500/30 group-hover:scale-110 transition-all duration-300">
                <i class="fas fa-upload text-blue-400 text-xl group-hover:text-blue-300 transition-colors duration-300"></i>
            </div>
            <p class="text-white text-sm font-medium mt-3 group-hover:text-blue-400 transition-colors duration-300">Upload Document</p>
            <p class="text-gray-500 text-[10px] mt-1">Add new document</p>
        </a>

        <a href="{{ route('admin.projects.create') }}" class="group bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-5 text-center border border-gray-700/50 hover:border-green-500/40 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_15px_50px_rgba(34,197,94,0.05)]">
            <div class="w-12 h-12 mx-auto bg-green-500/20 rounded-xl flex items-center justify-center group-hover:bg-green-500/30 group-hover:scale-110 transition-all duration-300">
                <i class="fas fa-plus-circle text-green-400 text-xl group-hover:text-green-300 transition-colors duration-300"></i>
            </div>
            <p class="text-white text-sm font-medium mt-3 group-hover:text-green-400 transition-colors duration-300">Add Project</p>
            <p class="text-gray-500 text-[10px] mt-1">Create new project</p>
        </a>

        <a href="{{ route('admin.password.change') }}" class="group bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-5 text-center border border-gray-700/50 hover:border-yellow-500/40 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_15px_50px_rgba(234,179,8,0.05)]">
            <div class="w-12 h-12 mx-auto bg-yellow-500/20 rounded-xl flex items-center justify-center group-hover:bg-yellow-500/30 group-hover:scale-110 transition-all duration-300">
                <i class="fas fa-key text-yellow-400 text-xl group-hover:text-yellow-300 transition-colors duration-300"></i>
            </div>
            <p class="text-white text-sm font-medium mt-3 group-hover:text-yellow-400 transition-colors duration-300">Change Password</p>
            <p class="text-gray-500 text-[10px] mt-1">Update security</p>
        </a>

        <a href="{{ route('admin.create') }}" class="group bg-gradient-to-br from-gray-800/80 to-gray-900/80 rounded-2xl p-5 text-center border border-gray-700/50 hover:border-purple-500/40 transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_15px_50px_rgba(168,85,247,0.05)]">
            <div class="w-12 h-12 mx-auto bg-purple-500/20 rounded-xl flex items-center justify-center group-hover:bg-purple-500/30 group-hover:scale-110 transition-all duration-300">
                <i class="fas fa-user-plus text-purple-400 text-xl group-hover:text-purple-300 transition-colors duration-300"></i>
            </div>
            <p class="text-white text-sm font-medium mt-3 group-hover:text-purple-400 transition-colors duration-300">Create Admin</p>
            <p class="text-gray-500 text-[10px] mt-1">Add new admin</p>
        </a>
    </div>
</div>



@endsection