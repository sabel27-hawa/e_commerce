@extends('layouts.admin')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - Mini E-commerce')</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Admin Navbar -->
    <nav class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/admin') }}" class="text-xl font-bold text-white">Tableau de bord Admin</a>
            <div>
                <a href="{{ route('admin.products.index') }}" class="hover:text-gray-300 mx-2">Produits</a>
                <a href="{{ route('admin.categories.index') }}" class="hover:text-gray-300 mx-2">Catégories</a>
                <a href="{{ route('logout') }}" class="hover:text-gray-300 mx-2"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t py-4 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Mini E-commerce Admin.
        </div>
    </footer>

    <!-- Formulaire de déconnexion -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

</body>
</html>
@endsection
