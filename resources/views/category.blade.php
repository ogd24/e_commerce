<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">
</head>
<body>
<div class="box">
    <span class="borderLine"></span>
    <form action="{{ route('categorystore') }}" method="POST">
        <h2> CATEGORY </h2>
        @csrf
    <div class="inputBox">
     <input type="text" name="name" id="" required>
        <span>Ajouter une  categories </span>
        <i></i>
        </div>


            <input type="submit" value="Enrégistrer">

    </form>
</div>





</body>
</html>
