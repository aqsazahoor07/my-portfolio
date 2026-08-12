@extends('layouts.admin')

@section('title', 'All Admins')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-bold text-white">All Admins</h2>
        <p class="text-gray-400 text-sm">Manage administrators</p>
    </div>
    <a href="{{ route('admin.create') }}" class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded-lg text-white transition-all duration-300 hover:scale-105">
        <i class="fas fa-user-plus mr-2"></i> New Admin
    </a>
</div>

@if(session('success'))
    <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6">
        <i class="fas fa-check-circle mr-2"></i>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl text-sm mb-6">
        <i class="fas fa-exclamation-circle mr-2"></i>
        {{ session('error') }}
    </div>
@endif

<div class="bg-gray-800 rounded-2xl overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-700">
            <tr>
                <th class="px-6 py-3 text-left text-gray-300 text-sm font-semibold">#</th>
                <th class="px-6 py-3 text-left text-gray-300 text-sm font-semibold">Name</th>
                <th class="px-6 py-3 text-left text-gray-300 text-sm font-semibold">Email</th>
                <th class="px-6 py-3 text-left text-gray-300 text-sm font-semibold">Created At</th>
                <th class="px-6 py-3 text-left text-gray-300 text-sm font-semibold">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($admins as $admin)
                <tr class="border-b border-gray-700/50 hover:bg-gray-700/30 transition-colors">
                    <td class="px-6 py-4 text-gray-300">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 text-white font-medium">
                        {{ $admin->name }}
                        @if($admin->id == auth()->guard('admin')->id())
                            <span class="ml-2 text-xs bg-blue-500/20 text-blue-400 px-2 py-0.5 rounded-full">You</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-300">{{ $admin->email }}</td>
                    <td class="px-6 py-4 text-gray-400 text-sm">{{ $admin->created_at->format('d M Y, h:i A') }}</td>
                    <td class="px-6 py-4">
                        @if($admin->id != auth()->guard('admin')->id())
                            <form action="{{ route('admin.delete', $admin->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300 transition-colors" onclick="return confirm('Are you sure you want to delete this admin?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        @else
                            <span class="text-gray-500 text-sm">Cannot delete self</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-gray-400">No admins found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>


@endsection