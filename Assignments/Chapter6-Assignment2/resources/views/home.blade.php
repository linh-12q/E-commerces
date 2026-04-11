@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is your main dashboard area.</p>
    <div style="margin-top: 20px; padding: 15px; border-left: 5px solid #3182ce; background: #ebf8ff;">
    @if($role === 'admin')
        <h3>Admin Panel</h3>
        <p>Welcome, Administrator. You have full access.</p>
    @else
        <h3>User Dashboard</h3>
        <p>Welcome back! You are logged in as a standard user.</p>
    @endif
</div>
@endsection