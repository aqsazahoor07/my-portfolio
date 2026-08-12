@extends('layouts.admin')

@section('title', 'Edit Project')

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold text-white mb-6">Edit Project</h2>
    
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 rounded-2xl p-6">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label class="block text-gray-300 mb-2">Project Title</label>
            <input type="text" name="title" value="{{ $project->title }}" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-300 mb-2">Project URL</label>
            <input type="url" name="url" value="{{ $project->url }}" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-300 mb-2">Technologies Used</label>
            <input type="text" name="technologies" value="{{ $project->technologies }}" placeholder="PHP, Laravel, MySQL" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500">
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-300 mb-2">Description</label>
            <textarea name="description" rows="3" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500">{{ $project->description }}</textarea>
        </div>
        
        <div class="mb-6">
            <label class="block text-gray-300 mb-2">Project Image</label>
            @if($project->image_path)
                <div class="mb-2">
                    <img src="{{ Storage::url($project->image_path) }}" alt="Current Image" class="h-32 rounded-lg">
                </div>
            @endif
            <input type="file" name="image" accept="image/*" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500">
        </div>
        
        <button type="submit" class="w-full py-3 bg-blue-500 hover:bg-blue-600 rounded-lg text-white font-semibold transition-all">
            Update Project
        </button>
    </form>
</div>
@endsection