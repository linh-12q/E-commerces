@extends('layouts.app')
@section('title', 'Product Catalog')
@section('content')
<h1 class="text-3xl font-bold mb-6 text-gray-800">Our Courses & Books</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($products as $product)
        <div class="bg-white rounded-xl shadow-md p-6 border border-gray-200">
            <h2 class="text-xl font-bold text-purple-800">{{ $product['name'] }}</h2>
            <p class="text-gray-600 mt-2 text-lg font-semibold">${{ $product['price'] }}</p>

            <div class="mt-4">
                {{-- Stock Status logic --}}
                @if($product['stock'] > 0)
                    <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full font-medium">
                        ● In Stock ({{ $product['stock'] }})
                    </span>
                @else
                    <span class="px-3 py-1 bg-red-100 text-red-700 text-sm rounded-full font-medium">
                        ● Out of Stock
                    </span>
                @endif
            </div>

            <button class="mt-6 w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                View Details
            </button>
        </div>
    @endforeach
</div>
@endsection