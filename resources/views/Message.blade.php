<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css1/transit .css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <header>
        <h4 class="header" > Découvrez notre liste de transitaires au Burkina Faso, des professionnels de confiance pour gérer vos besoins logistiques.</h4>
       </header>
       <table class="table table-striped">

        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <td>{{ $message->nom }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message }}</td>
                <td>
                    <a href="#"> <button class="button">Contacter</button></a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



</body>
</html>
