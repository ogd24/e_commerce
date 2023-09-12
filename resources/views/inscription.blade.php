<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css1/connexion.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h3>Créez votre compte </h3>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                {{-- <span>or use your email for registration</span> --}}
                <input type="text" placeholder=" Entrez votre nom"  name="nom" />
                <input type="text" name="prenom" id="" placeholder=" Entrez votre prenom" name="prenom" />
                <input type="email" placeholder=" Entrez votre Email"  name="email" />
                <input type="password" placeholder=" Entrez un mot de passe" name="password"  />
                <input type="password" placeholder=" Confirmer votre mot de passe" />
                <button type="submit">S'inscrire </button>
            </form>
            <style>
                .color{
                    color: #FF5722;
                }
            </style>
        </div>
        <div class="form-container sign-in-container">
            @if ($message = Session::get('success'))
            <div>
                <h5 class="alert color" >
                    {{ $message }}
                </h5>
            </div>
        @endif
            <form action="{{ route('put')}}" method="POST">
                @csrf
                <h3>Connectez-vous maintenant.</h3>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                {{-- <span>or use your account</span> --}}
                <input type="email" placeholder=" Entrez votre Email"  name="email" />
                <input type="password" placeholder=" Entrez votre mot de passe" name="password"  />
                <a href="#">Mot de passe oublié</a>
                <button>Se connecter </button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">

                    <h1>Welcome Back!</h1>
                    <p> Vous avez déja un compte, connectez_vous ici </p>
                    <button class="ghost" id="signIn">Se connecter </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <h6>Rejoignez-nous pour découvrir le riche univers des produits burkinabès. Commencez votre aventure en saisissant vos informations personnelles ici</h6>
                    <button class="ghost" id="signUp">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
            - Read how I created this and how you can join the challenge
            <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
        </p>
    </footer>

    <script src="{{ asset('css1/Auth.js') }}"></script>
</body>
</html>
