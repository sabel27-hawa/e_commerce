@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold text-center mb-8">Toutes les Catégories</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($categories as $category)
                <a href="{{ route('products.by.category', $category->id) }}">
                    {{ $category->name }}
                </a>

            @endforeach
        </div>
    </div>
@endsection
