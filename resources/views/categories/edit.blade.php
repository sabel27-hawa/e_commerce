@extends('layouts.app')

@section('content')
<h1>Modifier la catégorie</h1>
<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
    </div>
    <button class="btn btn-primary">Mettre à jour</button>
</form>
@endsection
