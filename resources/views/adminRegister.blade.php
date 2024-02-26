<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">

</head>
<body>
       <div class="box" id="register">
          <span class="borderLine" id="bord1">></span>
            <form action="{{ route('adminInscription.store') }}" method="POST">
                @csrf
                <h2> Inscription  d'un administrateur</h2>
                <div class="inputBox">
                    @if($errors->has('nom'))
                    <div class="text-danger">{{ $errors->first('nom') }}</div>
                   @endif
                    <input type="text" name="nom" id="" >

                       <span>nom</span>
                       <i></i>
                       </div>
                <div class="inputBox">
                    <input type="text" name="prenom" id="" >
                       <span>Prénom</span>
                       <i></i>
                       </div>
                       <div class="inputBox">
                        <input type="tel" name="telephone" id="" >
                           <span>Numero de Téléphone</span>
                           <i></i>
                           </div>
                       <div class="inputBox">
                        <input type="email" name="email" id="" >
                           <span>email</span>
                           <i></i>
                           </div>
                <div class="inputBox">
                    <input type="password" name="password" id="" >
                       <span>Mot de passe </span>
                       <i></i>

                       </div>
                       <div class="inputBox">
                     <input type="password" name="password_confirmation" id="" >
                     @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button class="submit-button" type="submit">S'inscrire</button>


            </form>
        </div>
    </div>
</div>


</body>
</html>
