@extends('layouts.app') {{-- Using the layout --}}

@section('title', 'Student List UI')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-xl overflow-hidden">
    <div class="bg-purple-600 p-4">
        <h1 class="text-white text-xl font-bold">Student List</h1>
    </div>
    
    <ul class="divide-y divide-gray-200">
        {{-- Loop through the student array --}}
        @foreach($students as $student)
            <li class="p-4 hover:bg-gray-50 flex justify-between items-center">
                <div>
                    <p class="text-sm font-medium text-gray-900">{{ $student['name'] }}</p>
                    <p class="text-xs text-gray-500">Student Scholar</p>
                </div>
                <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">
                    Age: {{ $student['age'] }}
                </span>
            </li>
        @endforeach
    </ul>
</div>
@endsection