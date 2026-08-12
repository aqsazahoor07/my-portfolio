@extends('layouts.admin')

@section('title', 'Message Details')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-white">Message Details</h2>
        <a href="{{ route('admin.contacts.index') }}" class="text-blue-400 hover:text-blue-300 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i> Back to Messages
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-gray-800/50 rounded-2xl p-6 border border-gray-700/50 mb-6">
        <div class="flex items-center gap-3 mb-4 flex-wrap">
            <h3 class="text-white font-semibold text-lg">{{ $contact->name }}</h3>
            @if(!$contact->is_read)
                <span class="bg-blue-500/20 text-blue-400 text-xs px-2 py-0.5 rounded-full">New</span>
            @endif
            @if($contact->is_replied)
                <span class="bg-green-500/20 text-green-400 text-xs px-2 py-0.5 rounded-full">Replied</span>
            @endif
        </div>
        
        <p class="text-gray-400 text-sm mb-1"><strong>Email:</strong> {{ $contact->email }}</p>
        @if($contact->subject)
            <p class="text-blue-400 text-sm mb-1"><strong>Subject:</strong> {{ $contact->subject }}</p>
        @endif
        <p class="text-gray-400 text-sm mb-4"><strong>Received:</strong> {{ $contact->created_at->format('M d, Y h:i A') }}</p>
        
        <div class="bg-gray-700/30 rounded-xl p-4 mb-4">
            <p class="text-gray-300 text-sm"><strong>Message:</strong></p>
            <p class="text-gray-300 mt-2">{{ $contact->message }}</p>
        </div>
        
        @if($contact->reply)
            <div class="bg-blue-500/10 border border-blue-500/20 rounded-xl p-4">
                <p class="text-blue-400 text-sm"><strong>Your Reply:</strong></p>
                <p class="text-gray-300 mt-2">{{ $contact->reply }}</p>
                <p class="text-gray-400 text-xs mt-2">Replied: {{ $contact->replied_at->format('M d, Y h:i A') }}</p>
            </div>
        @endif
    </div>

    <!-- Reply Form -->
    @if(!$contact->is_replied)
    <div class="bg-gray-800/30 rounded-2xl p-6 border border-gray-700/50">
        <h3 class="text-white font-semibold text-lg mb-4">Reply to {{ $contact->name }}</h3>
        
        <div class="bg-blue-500/10 border border-blue-500/20 rounded-xl p-3 mb-4">
            <p class="text-blue-400 text-sm">
                <i class="fas fa-info-circle mr-2"></i>
                Your reply will be sent to <strong>{{ $contact->email }}</strong> via email.
            </p>
        </div>
        
        <form action="{{ route('admin.contacts.reply', $contact->id) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-medium mb-2">Your Reply</label>
                <textarea name="reply" rows="5" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition-all duration-300" placeholder="Write your reply here..." required></textarea>
            </div>
            
            <button type="submit" class="px-6 py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-lg text-white font-semibold transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] flex items-center gap-2">
                <i class="fas fa-reply"></i>
                Send Reply & Email
            </button>
        </form>
    </div>
    @endif
</div>
@endsection