@extends('layouts.admin')

@section('title', 'Feedbacks')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-white">Feedbacks & Reviews</h2>
    <span class="text-secondary text-sm">
        Total: {{ $feedbacks->count() }} | 
        Pending: {{ $feedbacks->where('is_approved', false)->count() }}
    </span>
</div>

@if(session('success'))
    <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-sm mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="space-y-4">
    @forelse($feedbacks as $feedback)
    <div class="bg-gray-800/50 rounded-2xl p-6 border {{ $feedback->is_approved ? 'border-green-500/30' : 'border-yellow-500/30' }}">
        <div class="flex items-start justify-between">
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-2 flex-wrap">
                    <h3 class="text-white font-semibold">{{ $feedback->name }}</h3>
                    <div class="flex items-center gap-1">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-gray-600' }} text-sm"></i>
                        @endfor
                    </div>
                    @if($feedback->is_approved)
                        <span class="bg-green-500/20 text-green-400 text-xs px-2 py-0.5 rounded-full">Approved</span>
                    @else
                        <span class="bg-yellow-500/20 text-yellow-400 text-xs px-2 py-0.5 rounded-full">Pending</span>
                    @endif
                    <span class="text-gray-400 text-xs">{{ $feedback->created_at->diffForHumans() }}</span>
                </div>
                <p class="text-gray-400 text-sm">{{ $feedback->email }}</p>
                <p class="text-gray-300 text-sm mt-2 leading-relaxed">"{{ $feedback->comment }}"</p>
            </div>
            <div class="flex gap-2 flex-shrink-0 ml-4">
                @if(!$feedback->is_approved)
                <form action="{{ route('admin.feedbacks.approve', $feedback->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="text-green-400 hover:text-green-300 text-sm transition-colors" title="Approve">
                        <i class="fas fa-check-circle text-lg"></i>
                    </button>
                </form>
                @endif
                <form action="{{ route('admin.feedbacks.delete', $feedback->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-400 hover:text-red-300 text-sm transition-colors" onclick="return confirm('Are you sure?')" title="Delete">
                        <i class="fas fa-trash text-lg"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="text-center py-12 bg-gray-800/30 rounded-2xl border border-gray-700/50">
        <i class="fas fa-star text-5xl text-gray-600 mb-4"></i>
        <p class="text-gray-400">No feedbacks yet.</p>
    </div>
    @endforelse
</div>
@endsection