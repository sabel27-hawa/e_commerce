@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- NAVIGATION -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Ma Boutique</h1>
            <nav>
                <a href="#" class="text-gray-600 hover:text-blue-600 mx-2">Accueil</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 mx-2">Produits</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 mx-2">Panier</a>
            </nav>
        </div>
    </header>

    <!-- CONTENU PRINCIPAL -->
    <main class="py-10">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Nos Produits</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products as $product)
                    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-48 w-full object-cover rounded-t-2xl">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-700">{{ $product->name }}</h3>
                            <p class="text-sm text-gray-500 mb-2">{{ Str::limit($product->description, 60) }}</p>
                            <div class="text-blue-600 font-bold mb-3">{{ number_format($product->price, 0, ',', ' ') }} FCFA</div>
                            <div class="flex justify-between">
                                <a href="{{ route('products.show', $product->id) }}"
                                   class="bg-blue-500 text-white text-sm px-3 py-1 rounded hover:bg-blue-600">Détails</a>
                                <form method="POST" action="{{ route('cart.add', $product->id) }}">
                                    @csrf
                                    <button type="submit" class="bg-green-500 text-white text-sm px-3 py-1 rounded hover:bg-green-600">
                                        Ajouter
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    
</div>
@endsection
