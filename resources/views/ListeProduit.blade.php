<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOKRE | Transitaires </title>
    <link rel="stylesheet" href="{{ asset('css1/transit .css') }}">
</head>

  <div class="container">
         <header>
         <h4 class="header2"> <span>Liste des produits</span></h4>
        </header>

        <table>
            <thead>
                <tr>
                    <th>Photos</th>
                    <th>Nom du Produit</th>
                    <th>Nom de la categorie </th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Points de Vente</th>
                    <th>Actions</th>
                </tr>
            </thead>


            @foreach ($products as $product)
               <tbody>
              <tr>
                <td> <div class="w-1/4">
                    <img src="{{ asset('images/' . $product->photo) }}" alt="{{ $product->product_name }}" class="w-full image-style">
                    <!-- Ajoutez la classe 'image-style' à l'image -->
                </div></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>

                <td>{{ $product->description }}</td>
                <td>{{ $product->prix }} FCFA</td>
                <td>{{ $product->Nos_points_de_vente }}</td>
                <td>
                    <a href="{{ route('updateProduct.store',$product->id) }}" class="btn-modifier">Modifier</a>

                    <form action="{{ route('destroy.store', $product->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-supprimer" onclick="return confirm('Voulez vous vraiment supprimer?')" >Supprimer</button>
                    </form>
                </td>
              </tr>
            </tbody>
            @endforeach
        </table>



    </div>



</html>
