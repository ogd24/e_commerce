<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css1/test.css') }}">
    <title>LOOKRE| Tableau de bord Administrateur  </title>
    <link rel="stylesheet" href="{{ asset('css1/transit .css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css5/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css5/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">







         <!-- Sidebar -->
        <ul   id="accordionSidebar">




    <style>
        /* Styles pour la navbar */
        .sidebar {

        width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: green;

            padding-top: 50px; /* Espace en haut pour le titre */
            max-height: 600px; /* Vous pouvez ajuster la hauteur selon vos besoins */
    /* Activez le défilement vertical si le contenu dépasse la hauteur maximale */
    overflow-y: auto;
        }

        .sidebar h4 {
            text-align: center;
            color: black;

        }

        .sidebar a {
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            color: white; /* Couleur du texte */
            display: block;
        }

        .sidebar a:hover {
            color:#f53c04; /* Couleur au survol */
        }



²
.container {
    display: flex;
    justify-content: center;
    align-items: center;


}

.links-container {
    text-align: center;
}

.links-container a {
    display: block;
    margin: 5px 0;
    padding: 8px 12px;
    font-size: 14px;
    text-decoration: none;
    color: white;
    background-color: rgb(243, 33, 33);

   ; /* Bordure blanche autour des boutons */
    border-radius: 10px; /* Bordures arrondies */
    transition: background-color 0.3s, color 0.3s; /* Animation au survol */
}

.links-container a:hover {
    color: #333; /* Couleur du texte au survol */
    background-color: white; /* Fond blanc au survol */
}

/* Style de base pour l'onglet de messagerie */
.messenger-tab {
    display: flex;
    align-items: center;

    color: #fff; /* Couleur du texte */
    padding: 10px 20px; /* Espacement intérieur */
    cursor: pointer;
}

/* Style de l'icône (à ajuster selon la classe d'icône que vous utilisez) */
.messenger-tab i {
    font-size: 24px; /* Taille de l'icône */
    margin-right: 10px; /* Espacement entre l'icône et le texte */
}
.btn-custom {
    background-color: orangered; /* Couleur de fond orange */
    color: white; /* Texte en blanc pour le contraste */
    border-color: orangered; /* Couleur de la bordure orange */
}

.btn-custom:hover {
    background-color:orangered; /* Couleur de fond orange foncé au survol */
    border-color: orangered; /* Couleur de la bordure orange foncé au survol */
}


                </style>


            <div class="sidebar">
                <h4>Tableau de Bord Administrateur </h4>
                <a href="{{ route('Acceuil.sotre') }}">Accueil</a>
                <a href="{{ route('contact.store') }}">Contact</a>
                <a href="ListeProduit">Liste des Produits</a>
                <a href="{{ route('Transitaire.store') }}">Transitaire</a>
                <a href="fournisseur">Liste des fournisseurs</a>
                <a href="{{ route('adminListe.store') }}">Liste des administrateurs</a>
                <a href="{{ route('moderateurListe.store') }}">Liste des modérateurs</a>
                <a href="#">Liste des Blog</a>
                <a href="#">Autres Pages</a>

                <div class="container">

                        <div class="links-container">
                            <a href="category">Add a category</a>
                            <a href="{{ route('adminInscription.store') }}">Add an admin</a>
                            <a href="compagny">Add a supplier</a>
                            <a href="transitaire">Add a transit</a>
                            <a href="{{ route('moderateurInscription.store') }}">Add a moderator</a>
                            <a href="#">Add a blog</a>

                              </div>

                        </div>


    </div>
            </div>

            <div class="content">
                <!-- Le contenu de votre page irait ici -->
            </div>


            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow w-75px">



                    <!-- barre de recherche -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Recherchez ici..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-custom" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- <a  class="logout-button"  href="/deconnexion">Déconnexion</a>
                    <a class="logout-button" href="{{ route('logout.store') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Déconnexion
                    </a> --}}
                    <div class="header__top__right__auth">
                        <a class="logout-button" href="{{ route('logout.store') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout.store')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    </ul>

                </div>

            </div>
                </nav>
                <div class="navbar">
                    <a href="#home">Accueil</a>
                    <a href="#products">Liste des Produits</a>
                    <div class="messenger-tab">
            <a href="" >   <i class="fas fa-envelope"></i> <span>Messenger</span></a>

                </div>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


{{-- POUR LA NAVBAR --}}


<style>



        /* Style pour la navbar */
        .navbar {
            overflow: hidden;
            background-color: #f53c04;
        width: 500px;

        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

        .navbar a:hover {

            color: #48a11f;
        }


/* Style pour le bouton de déconnexion */
.logout-button a {
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid #fff;
    border-radius: 5px;
    margin-right: -200px;
}

.logout-button a:hover {
    background-color: #fff;
    color: #3498db;
}

    </style>











                    <!-- Content Row -->

                        <!-- Earnings (Monthly) Card Example -->








                    <!-- Bootstrap core JavaScript-->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js5/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="js5/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="vendor/chart.js/Chart.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="js5/demo/chart-area-demo.js"></script>
                    <script src="js5/demo/chart-pie-demo.js"></script>

</body>

</html>
