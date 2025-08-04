<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mini E-commerce')</title>

    <!-- Tailwind CSS CDN (ou ton CSS local si tu préfères) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600">Mini E-commerce</a>
            <div>
                <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-indigo-600 mx-2">Produits</a>
                <a href="{{ route('categories.index') }}" class="text-gray-700 hover:text-indigo-600 mx-2">Catégories</a>
                <a href="{{ route('cart.index') }}" class="text-gray-700 hover:text-indigo-600 mx-2">Panier</a>
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
            &copy; {{ date('Y') }} Mini E-commerce. Tous droits réservés.
        </div>
    </footer>

</body>
</html>
