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
         <h4 class="header" > Découvrez notre liste de transitaires au Burkina Faso, des professionnels de confiance pour gérer vos besoins logistiques.</h4>
        </header>

         <table>
            <thead>
                <tr>

                    <th>Nom de l'entreprise</th>
                    <th>Situation Géographique</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


              @foreach ($transitaires as $transitaire)
              <tr>
                  <td>{{ $transitaire->nom }}</td>
                  <td>{{ $transitaire->adresse }}</td>
                  <td>{{ $transitaire->email }}</td>
                  <td>{{ $transitaire->telephone }}</td>

                  <td>   <a href="https://wa.me/c/22660074165
                    " class="btn-modifier">Contacter</a>
                  </td>

              </tr>
          @endforeach
            </tbody>
        </table>



    </div>

    @include('components.footer')

</html>
