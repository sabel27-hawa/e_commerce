<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Mon Panier</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart))
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cart as $id => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] * $item['quantity'] }}</td>
                    <td>
                        <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger btn-sm">Retirer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h3>Total : {{ $total }} FCFA</h3>
        <a href="{{ route('cart.clear') }}" class="btn btn-warning">Vider le panier</a>
        <a href="#" class="btn btn-success">Finaliser la commande</a>
    @else
        <p>Votre panier est vide.</p>
    @endif
</div>
</body>
</html>
