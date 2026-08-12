@extends('layouts.admin')

@section('title', 'Messages')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-white">Messages</h2>
    <span class="text-secondary text-sm">
        Total: {{ $contacts->count() }} | 
        Unread: {{ $contacts->where('is_read', false)->count() }}
    </span>
</div>

@if(session('success'))
    <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="space-y-4">
    @forelse($contacts as $contact)
    <div class="bg-gray-800/50 rounded-2xl p-6 border {{ $contact->is_read ? 'border-gray-700/50' : 'border-blue-500/30' }}">
        <div class="flex items-start justify-between">
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-2 flex-wrap">
                    <h3 class="text-white font-semibold">{{ $contact->name }}</h3>
                    @if(!$contact->is_read)
                        <span class="bg-blue-500/20 text-blue-400 text-xs px-2 py-0.5 rounded-full">New</span>
                    @endif
                    @if($contact->is_replied)
                        <span class="bg-green-500/20 text-green-400 text-xs px-2 py-0.5 rounded-full">Replied</span>
                    @endif
                    <span class="text-gray-400 text-xs">{{ $contact->created_at->diffForHumans() }}</span>
                </div>
                <p class="text-gray-400 text-sm">{{ $contact->email }}</p>
                @if($contact->subject)
                    <p class="text-blue-400 text-sm font-medium mt-1">{{ $contact->subject }}</p>
                @endif
                <p class="text-gray-300 text-sm mt-2">{{ Str::limit($contact->message, 100) }}</p>
            </div>
            <div class="flex gap-2 flex-shrink-0 ml-4">
                <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-blue-400 hover:text-blue-300 text-sm transition-colors">
                    <i class="fas fa-eye text-lg"></i>
                </a>
                @if(!$contact->is_read)
                <form action="{{ route('admin.contacts.mark-read', $contact->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="text-blue-400 hover:text-blue-300 text-sm transition-colors">
                        <i class="fas fa-check-circle text-lg"></i>
                    </button>
                </form>
                @endif
                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-400 hover:text-red-300 text-sm transition-colors" onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash text-lg"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="text-center py-12 bg-gray-800/30 rounded-2xl border border-gray-700/50">
        <i class="fas fa-inbox text-5xl text-gray-600 mb-4"></i>
        <p class="text-gray-400">No messages yet.</p>
    </div>
    @endforelse
</div>
@endsection