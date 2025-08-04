@extends('layouts.app')

@section('content')
<h1>Ajouter une catégorie</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <button class="btn btn-success">Enregistrer</button>
</form>
@endsection
