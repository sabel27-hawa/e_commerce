@extends('layouts.app')

@section('content')
<h1>Modifier le produit</h1>
<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Prix</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Catégorie</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if($product->category_id==$category->id) selected @endif>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Image actuelle</label><br>
        <img src="{{ asset('storage/'.$product->image) }}" width="100">
    </div>
    <div class="mb-3">
        <label class="form-label">Nouvelle image (facultatif)</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button class="btn btn-primary">Mettre à jour</button>
</form>
@endsection
