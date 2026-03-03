@extends('layouts.app')

@section('content')
    <div class="bg-white p-8 rounded shadow">
        <a href="/posts" class="text-blue-500">&larr; Back to list</a>
        <h2 class="text-4xl font-bold mt-4">Blog Post #{{ $id }}</h2>
        <p class="mt-6 text-lg leading-relaxed text-gray-700">
            This is the detailed content for post ID {{ $id }}. In a real app, you would fetch this data from a database using a Controller and an Eloquent Model.
        </p>
    </div>
@endsection