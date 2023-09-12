<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FarmFresh - Organic Farm Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img3/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib3/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css3/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css3/style.css" rel="stylesheet">
</head>

<body>
   @include('components.nav')



   {{-- <p class="text-large">Ce texte est plus grand.</p>
   <p class="text-larger">Ce texte est encore plus grand.</p>
   <p class="text-xl">Ce texte est très grand.</p> --}}


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5 w-50px">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <p class="display-5 text-white mb-md-4 text-larger">Connectez-vous à l'excellence de la créativité burkinabè avec nous</p>

                    <a href="" class="py-md-3 px-md-5 me-3 home" >Home</a>
                    <style>
                        .home{

                            background-color: #FF5722;
                            color: white;
                        }
                        .about{
                       background-color: rgba(52, 173, 84, .85);
                       color: white;
                        }
                        .about1{

                        }
                    </style>
                    <a href="" class=" py-md-3 px-md-5 about">A propos</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->



     <div class="">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <img src="{{ asset('img3/fille.png') }}" alt="">
                <img src="{{ asset('img3/fille.png')}}">

                </div>
                <div class="col-lg-8 pb-5">
                    <div class="mb-3 pb-2">
 <h4 class="display-5">Nous célébrons les créateurs et les artisans du Burkina Faso.</h4>
                    </div>
                    <style>
                        .phrase{

                            color: #FF5722;
                            font
                        }
                        /* Ajoutez ces styles CSS à votre feuille de style */
.animated-title {
    font-size: 24px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    color: #FF5722;
}

.animated-title:hover {
    animation: shake 0.5s;
    animation-iteration-count: 1;
 color: rgba(52, 173, 84, .85);
}

@keyframes shake {
    0% { transform: translate(0, 0); }
    20% { transform: translate(-5px, 0); }
    40% { transform: translate(5px, 0); }
    60% { transform: translate(-5px, 0); }
    80% { transform: translate(5px, 0); }
    100% { transform: translate(0, 0); }
}
/* Ajoutez ces styles CSS à votre feuille de style */
.quote {

    border-left: 4px solid #FF5722; /* Bordure orange sur le côté gauche */
    padding: 20px; /* Espacement intérieur pour le contenu */
    font-size: 18px;
    font-size: 24px;
    color: #333;
    font-style: italic; /* Police en italique */
    margin: 20px 0; /* Marge supérieure et inférieure pour l'espacement */
    margin-left: -300px;
}

.quote p {
    margin: 0; /* Supprime la marge par défaut du paragraphe */
    line-height: 1.4; /* Espacement des lignes pour une meilleure lisibilité */
}
.quote-text{
    color:  rgba(52, 173, 84, .85);
    rgba(52, 173, 84, .85);
    font-size: 24px;
}




                    </style>
                    <h6 class="mb-4 phrase"> Découvrez et soutenez les créations locales exceptionnelles du Burkina Faso. Chez LOOKRE, nous mettons en avant les artisans et producteurs du pays pour contribuer à son émergence économique. Chaque achat sur LOOKRE célèbre notre culture et investit dans notre avenir. Rejoignez-nous dans cette aventure pour célébrer les trésors cachés du Burkina Faso. </h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    {{-- <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Farm Specialist</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Complete Project</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Facts End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto  mb-5" style="max-width: 500px;">
                <h2 class="animated-title">NOS MISSIONS <img src="{{ asset('img/language.png') }}" alt=""></h2>
                <div class="quote">
            <marquee behavior="" direction=""> <h5 class="quote-text">Nous croyons en la beauté de l'artisanat burkinabè,en la qualité des produits fabriqués localement et en la créativité de notre peuple.</h5></marquee>
                </div>

<style>

        /* Style pour les missions */
        .missions {
            background-color: #f8f9fa; /* Couleur de fond */
            padding: 30px; /* Espace intérieur */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
        }

        /* Style pour les numéros de mission */
        .mission-number {
            font-size: 24px; /* Taille de police */
            color: #ff5733; /* Couleur du numéro */
            font-weight: bold; /* Gras */
            margin-right: 10px; /* Marge à droite pour l'espace */
            animation: fadeIn 1s ease-in-out; /* Animation de fondu en entrée */
        }

        /* Style pour le texte de la mission */
        .mission h6 {
            font-size: 18px; /* Taille de police */
            color: #333; /* Couleur du texte */
            margin-bottom: 10px; /* Marge en bas */
            animation: fadeIn 1s ease-in-out; /* Animation de fondu en entrée */
        }

        /* Animation de fondu en entrée */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

                        /* Style pour les missions */
                        .missions {
                            /* background-color: #f8f9fa; Couleur de fond */
                            padding: 30px; /* Espace intérieur */
                            border-radius: 10px; /* Coins arrondis */
                            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); Ombre légère */
                        }

                        /* Style pour les numéros de mission */
                        .mission-number {
                            font-size: 16px; /* Taille de police */
                            color: #ff5733; /* Couleur du numéro */
                            font-weight: bold; /* Gras */
                            margin-right: 10px; /* Marge à droite pour l'espace */
                            animation: fadeIn 1s ease-in-out; /* Animation de fondu en entrée */
                        }

                        /* Style pour le texte de la mission */
                        .mission h6 {
                            font-size: 18px; /* Taille de police */
                            color: #333; /* Couleur du texte */
                            margin-bottom: 10px; /* Marge en bas */
                            animation: fadeIn 1s ease-in-out; /* Animation de fondu en entrée */
                        }

                        /* Animation de fondu en entrée */
                        @keyframes fadeIn {
                            0% {
                                opacity: 0;
                                transform: translateY(10px);
                            }
                            100% {
                                opacity: 1;
                                transform: translateY(0);
                            }
                        }
                    </style>






            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
               <div class="missions">


                    <div class="missions">
                        <div class="mission">
                            <span class="mission-number">1.</span>
                            <h6>Promouvoir l'artisanat local.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">2.</span>
                            <h6>Soutenir les producteurs burkinabè.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">3.</span>
                            <h6>Encourager l'économie locale.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">4.</span>
                            <h6>Valoriser la culture burkinabè.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">5.</span>
                            <h6>Promouvoir l'innovation.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">6.</span>
                            <h6>Créer des opportunités d'affaires.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">7.</span>
                            <h6>Garantir la qualité des produits.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">8.</span>
                            <h6>Faciliter l'accès au marché.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">9.</span>
                            <h6>Promouvoir le développement durable.</h6>
                        </div>
                        <div class="mission">
                            <span class="mission-number">10.</span>
                            <h6>Encourager l'entrepreneuriat local.</h6>
                        </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">


                <img class="img-fluid w-100" src="{{ asset('image_1/coton.png')}}" alt="">
                <img class="img-fluid w-100" src="{{ asset('img3/about.png') }}" alt="">
                <img class="img-fluid w-100" src="{{ asset('image_1/crerales.png')}}" alt="">
                <img class="img-fluid w-100" src="{{ asset('image_1/or.png')}}" alt="">




                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">

                            <div class="missions">
                                <div class="mission">
                                    <span class="mission-number">11.</span>
                                    <h6>Soutenir les initiatives locales.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">12.</span>
                                    <h6>Contribuer à l'émergence du Burkina Faso.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">13.</span>
                                    <h6>Créer des emplois locaux.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">14.</span>
                                    <h6>Préserver le savoir-faire traditionnel.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">15.</span>
                                    <h6>Promouvoir le commerce équitable.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">16.</span>
                                    <h6>Encourager l'exportation locale.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">17.</span>
                                    <h6>Favoriser l'autonomisation des artisans.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">18.</span>
                                    <h6>Valoriser la diversité des talents burkinabè.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">19.</span>
                                    <h6>Renforcer la fierté nationale.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">20.</span>
                                    <h6>Connecter le monde aux trésors burkinabè.</h6>
                                </div>
                                 <div class="mission">
                                    <span class="mission-number">21.</span>
                                    <h6>Promouvoir le commerce équitable.</h6>
                                </div>
                                <div class="mission">
                                    <span class="mission-number">22.</span>
                                    <h6>Connecter le monde aux trésors burkinabè.</h6>
                                </div>
                            </div>




                            </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    @include('components.footer')




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib3/easing/easing.min.js"></script>
    <script src="lib3/waypoints/waypoints.min.js"></script>
    <script src="lib3/counterup/counterup.min.js"></script>
    <script src="lib3/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js3/main.js"></script>
</body>

</html>
