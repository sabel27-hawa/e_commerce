@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Boutique</h1>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Categories</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            @foreach($categories as $category)
                <a href="#" class="block p-4 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-indigo-600">{{ $category->name }}</h2>
                </a>
            @endforeach
        </div>

        <h2 class="text-2xl font-bold text-gray-800 mb-4">Produits</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-48 w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-900">{{ $product->name }}</h3>
                        <p class="text-gray-600">{{ $product->description }}</p>
                        <p class="mt-2 text-indigo-600 font-bold">{{ number_format($product->price, 2) }} FCFA</p>
                        <p class="text-sm italic text-gray-500">Catégorie : {{ $product->category->name }}</p>
                        <button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">Ajouter au panier</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
