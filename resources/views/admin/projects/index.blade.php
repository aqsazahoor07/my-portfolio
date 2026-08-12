@extends('layouts.admin')

@section('title', 'Manage Projects')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-white">Projects</h2>
    <a href="{{ route('admin.projects.create') }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-lg text-white transition-all">
        <i class="fas fa-plus mr-2"></i> Add Project
    </a>
</div>

@if(session('success'))
    <div class="bg-green-500/10 border border-green-500 text-green-400 p-3 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($projects as $project)
        <div class="bg-gray-800 rounded-2xl overflow-hidden">
            <div class="h-48 bg-gray-700">
                @if($project->image_path)
                    <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-gray-500">
                        <i class="fas fa-code text-4xl"></i>
                    </div>
                @endif
            </div>
            <div class="p-4">
                <h3 class="text-lg font-bold text-white">{{ $project->title }}</h3>
                <p class="text-gray-400 text-sm mt-1">{{ Str::limit($project->description, 100) }}</p>
                <div class="flex justify-between items-center mt-4">
                    <a href="{{ $project->url }}" target="_blank" class="text-blue-400 hover:text-blue-300 text-sm">
                        <i class="fas fa-external-link-alt mr-1"></i> Visit
                    </a>
                    <div class="flex gap-2">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-yellow-400 hover:text-yellow-300">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-300" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center text-gray-400 py-8">
            No projects added.
        </div>
    @endforelse
</div>
@endsection