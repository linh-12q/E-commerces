@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6">Latest Posts</h2>
    <div class="grid gap-4">
        @foreach($posts as $post)
            <div class="p-5 bg-white rounded shadow">
                <h3 class="text-xl font-semibold text-blue-500">{{ $post['title'] }}</h3>
                <p class="text-gray-600">{{ $post['excerpt'] }}</p>
                <a href="/posts/{{ $post['id'] }}" class="text-sm text-blue-400 underline">Read More</a>
            </div>
        @endforeach
    </div>
@endsection