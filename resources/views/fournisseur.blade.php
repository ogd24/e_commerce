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
         <h4 class="header2"> <span>Liste des entreprises fournisseurs</span></h4>
        </header>

        <table>
            <thead>
                <tr>

                    <th>Nom</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>RCCM</th>
                    <th>IFU</th>
                    <th>nomRépresentant</th>
                    <th>PrénomRépresentant</th>
                    <th>EmailRépresentant</th>
                    <th>TéléphoneRépresentant</th>
                    <th>CNI</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fournisseurs as $fournisseur)
                    <tr>


                        <td>{{ $fournisseur->nom }}</td>
                        <td>{{ $fournisseur->email }}</td>
                        <td>{{ $fournisseur->adresse }}</td>
                        <td>{{ $fournisseur->telephone }}</td>
                        <td>{{ $fournisseur->RCCM }}</td>
                        <td>{{ $fournisseur->IFU }}</td>
                        <td>{{ $fournisseur->nomRepresentant }}</td>
                        <td>{{ $fournisseur->prenomRepresentant }}</td>
                        <td>{{ $fournisseur->emailRepresentant }}</td>
                        <td>{{ $fournisseur->telephoneRepresentant }}</td>
                        <td>{{ $fournisseur->CNI }}</td>
                        <td>
                            <a href="" class="btn-modifier" class=" .action-buttons">Modifier</a>
                            <form action="" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-supprimer">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>



</html>

