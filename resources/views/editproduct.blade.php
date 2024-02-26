<!-- resources/views/products/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Édition de Produit</title>
    <link rel="stylesheet" href="{{ asset('css1/produit.css') }}">
</head>
<body>

    <div class="container">
        <div class="box">
            <div class="container" class="form1">
                <h2>Édition de Produit</h2>
                <form action="{{ route('updateProduct.store', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Utilisez la méthode PUT pour la mise à jour -->
                    <div class="form-group">
                        <label for="product-name">Nom du Produit</label>
                        <input type="text" id="product-name" name="name" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="product-category">Catégorie</label>
                        <select id="product-category" name="category_id" required>
                            @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}" @if($categorie->id == $product->category_id) selected @endif>{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product-images">Images (Ajouter plusieurs images en maintenant la touche Ctrl/cmd enfoncée)</label>
                        <input type="file" name="photo[]" accept="image/*" multiple >
                    </div>
                    <div class="form-group">
                        <label for="product-description">Description</label>
                        <textarea id="product-description" name="description" required>{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Nos_points_de_vente">Nos points de vente</label>
                        <textarea id="Nos_points_de_vente" name="Nos_points_de_vente" required>{{ $product->Nos_points_de_vente }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product-price">Prix</label>
                        <input type="number" id="product-price" name="prix" step="0.01" value="{{ $product->prix }}" required>
                    </div>
                    <div class="form-group">
                        <label for="autres_informations">Informations Complémentaires</label>
                        <textarea id="autres_informations" name="detail" required>{{ $product->detail }}</textarea>
                    </div>
                    <div class="button-section">
                        <button type="submit">Mettre à jour le Produit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
