@extends('layouts.admin')

@section('title', 'Upload Document')

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold text-white mb-6">Upload Document</h2>
    
    <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 rounded-2xl p-6">
        @csrf
        
        <div class="mb-4">
            <label class="block text-gray-300 mb-2">Title</label>
            <input type="text" name="title" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-300 mb-2">Category</label>
            <select name="category" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500" required>
                <option value="cv">CV</option>
                <option value="certificate">Certificate</option>
                <option value="other">Other</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-300 mb-2">File</label>
            <input type="file" name="file" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500" required>
            <p class="text-gray-400 text-sm mt-1">Supported: PDF, Word, Images, Videos (Max 10MB)</p>
        </div>
        
        <div class="mb-6">
            <label class="block text-gray-300 mb-2">Description</label>
            <textarea name="description" rows="3" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500"></textarea>
        </div>
        
        <button type="submit" class="w-full py-3 bg-blue-500 hover:bg-blue-600 rounded-lg text-white font-semibold transition-all">
            Upload Document
        </button>
    </form>
</div>
@endsection