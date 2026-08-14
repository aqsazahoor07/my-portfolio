@extends('layouts.admin')

@section('title', 'Debug Test')

@section('content')
    <div style="color: white; padding: 50px; text-align: center; background: #1a1a2e; border-radius: 20px;">
        <h1 style="font-size: 50px; color: #4ade80;">TEST PAGE</h1>
        <p style="font-size: 20px; color: #94a3b8;">If you see this only ONCE, the layout is fine.</p>
        <p style="font-size: 20px; color: #fbbf24;">If you see this TWICE, the layout is being loaded twice.</p>
        <p style="margin-top: 20px; color: #60a5fa;">Current Time: {{ date('Y-m-d H:i:s') }}</p>
    </div>
@endsection