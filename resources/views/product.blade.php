<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Enregistrement de Produits</title>
    <link rel="stylesheet" href="{{ asset('css1/produit.css') }}">
</head>
<body>
    <div class="container" class="form1">
        <h2>Enregistrement de Produit</h2>
        <form action="{{ route('Product.store')  }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="product-name">Nom du Produit</label>
                <input type="text" id="product-name" name="name" required>
            </div>
            <div class="form-group">
                <label for="product-category">Catégorie</label>
                <select id="product-category" name="category_id" required class="">
                    @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }} ">{{ $categorie->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product-images">Images (Ajouter plusieurs images en maintenant la touche Ctrl/cmd enfoncée)</label>
                <input type="file" id="product-images" name="photo" accept="image/*" multiple required>
            </div>
            <div class="form-group">
                <label for="product-description">Description</label>
                <textarea id="product-description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="product-description">Nos points de vente </label>
                <textarea id="product-description" name="Nos_points_de_vente" required></textarea>
            </div>
            <div class="form-group">
                <label for="product-price">Prix</label>
                <input type="number" id="product-price" name="prix" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="autres_informations">Informations Complémentaires</label>
                <textarea id="autres_informations" name="detail" required></textarea>
            </div>
            <div class="button-section">
                <button type="submit">Enregistrer le Produit</button>
            </div>
        </form>
    </div>
</body>
</html>
