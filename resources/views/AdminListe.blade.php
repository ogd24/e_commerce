<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOKRE | Transitaires </title>
    <link rel="stylesheet" href="{{ asset('css1/transit .css') }}">
</head>
@include('components\nav')


  <div class="container">
    <header>
        <h4 class="header2"> <span>Liste des administrateur </span></h4>
       </header>

         <table>
            <thead>
                <tr>

                    <th>Nom de l'administateur </th>
                    <th>Prénomom de l'administateur </th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


              @foreach ($administrateurs as $administrateur)
              <tr>
                  <td>{{ $administrateur->nom }}</td>


                  <td>{{ $administrateur->prenom }}</td>
                  <td>{{ $administrateur->email }}</td>
                  <td>{{ $administrateur->telephone }}</td>
                  <td>
                    <a href="" class="btn-modifier" class=" .action-buttons">Modifier</a>
                    <form action="" method="post"style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-supprimer" onclick="return confirm('Voulez vous vraiment supprimer?')" >Supprimer</button>
                    </form>
                </td>
              </tr>
          @endforeach
            </tbody>
        </table>



    </div>

    @include('components.footer')

</html>
