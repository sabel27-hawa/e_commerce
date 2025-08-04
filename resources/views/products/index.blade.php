@extends('layouts.app')

@section('title', 'Liste des produits')

@section('content')
<div class="container mt-4">
    <h2>Liste des produits</h2>
    <!-- Ici tu affiches la liste de produits -->

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Ajouter un produit</a>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    @else
                        <img src="images/iphone 14.jpg" class="card-img-top" alt="Image par défaut">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>{{ $product->price }} FCFA</strong></p>

                        <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-auto">
                            @csrf
                            <button class="btn btn-sm btn-success w-100">Ajouter au panier</button>
                        </form>

                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning mt-2">Modifier</a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger w-100" onclick="return confirm('Supprimer ce produit ?')">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
