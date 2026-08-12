@extends('layouts.admin')

@section('title', 'Manage Documents')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-white">Documents</h2>
    <a href="{{ route('admin.documents.create') }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-lg text-white transition-all">
        <i class="fas fa-plus mr-2"></i> Upload Document
    </a>
</div>

@if(session('success'))
    <div class="bg-green-500/10 border border-green-500 text-green-400 p-3 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-gray-800 rounded-2xl overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-700">
            <tr>
                <th class="px-6 py-3 text-left text-gray-300">Title</th>
                <th class="px-6 py-3 text-left text-gray-300">Category</th>
                <th class="px-6 py-3 text-left text-gray-300">Type</th>
                <th class="px-6 py-3 text-left text-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($documents as $document)
                <tr class="border-b border-gray-700">
                    <td class="px-6 py-4 text-white">{{ $document->title }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded text-xs">{{ $document->category }}</span>
                    </td>
                    <td class="px-6 py-4 text-gray-300">{{ strtoupper($document->file_type) }}</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <!-- View Document -->
<a href="{{ route('cv.view', $document->id) }}" target="_blank" class="text-blue-400 hover:text-blue-300 transition-colors">
    <i class="fas fa-eye"></i>
</a>

<!-- Download Document -->
<a href="{{ Storage::url($document->file_path) }}" download class="text-green-400 hover:text-green-300 transition-colors">
    <i class="fas fa-download"></i>
</a>
                            <form action="{{ route('admin.documents.destroy', $document) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-400">No documents uploaded.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection