<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOKRE | Transitaires </title>
    <link rel="stylesheet" href="{{ asset('css1/transit .css') }}">
</head>
@include('components\nav')
@include('components.nav2')
  <div class="container">
         <header>
         <h4 class="header" > Découvrez notre liste de transitaires au Burkina Faso, des professionnels de confiance pour gérer vos besoins logistiques.</h4>
        </header>

         <table>
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Nom de l'entreprise</th>
                    <th>Situation Géographique</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($transitaires as $transitaire)


                    <td><img src="{{ asset('images/' . $transitaire->picture) }}" </td>
                    <td>{{  $transitaire->nom}}</td>
                    <td>{{$transitaire->adresse}}</td>
                    <td>{{$transitaire->email}}</td>
                    <td>{{$transitaire->telephone}}</td>
                    <td><button class="button">Contacter</button></td>
                </tr>
                @endforeach

            </tbody>
        </table>



    </div>

    @include('components.footer')

</html>
