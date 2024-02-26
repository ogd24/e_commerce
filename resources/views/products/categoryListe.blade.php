<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOKRE | Categories </title>
    <link rel="stylesheet" href="{{ asset('css1/transit .css') }}">
</head>

  <div class="container">
         <header>
         <h4 class="header2"> <span>Liste des categories</span></h4>
        </header>

        <table>
            <thead>
                <tr>

                    <th>Nom de la categorie </th>
                    <th>Actions </th>
                </tr>
            </thead>


           
               <tbody>
              <tr>


                <td>{{ $categorie->name }}</td>

                <td>
                    <a href="" class="btn-modifier">Modifier</a>

                    <form action="" method="POST" style="display: inline;">
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
