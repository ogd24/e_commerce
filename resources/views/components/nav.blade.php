


<div class="navbare1">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">







    <!-- Page Preloder -->


    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>

                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
               >
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header w-100% h-25 bg-light border p-3  ">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <style>
                            .slogan {
                                color: #FF5722;
                                margin-top: 15px;
                                margin-left: 30px
                            }
                        </style>
                        <div>
                        <h5 class="slogan">
                        <marquee behavior="" direction=""> LA PLATEFORME DES TRESORS BURKINABE</marquee>
                        </h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">

                            <div class="header__top__right__language">
                                <style>
                                    .logo {
                                        margin-top: -30px;
                                    }
                                </style>
                                <img src="img/language.png" alt="" width="50px" height="50px">
                            </div>
                            @guest
                                @if (Route::has('put'))
                                    <div class="header__top__right__auth">
                                        <a href="inscription"><i class="fa fa-user"></i> <button
                                                class="btn-connexion">Connexion</button></a>
                                    </div>
                                @endif
                            @else
                                @if (Route::has('logout.store'))

                                <div class="header__top__right__auth">
                                    <a class="btn-deconnexion" href="{{ route('logout.store') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ route('logout.store')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>





                                @endif
                            @endguest

                            <style>
                                .btn-deconnexion {
                                    background-color: green;
                                    border: none;
                                    color: #ffffff;
                                    padding: 10px 20px;
                                    border-radius: 5px;
                                    margin-bottom: -25px transition: background-color 0.3s ease;
                                }

                                .btn-deconnexion:hover {
                                    background-color: #FF5722;
                                }

                                .btn-connexion {
                                    background-color: #FF5722;
                                    color: #ffffff;
                                    border: none;
                                    padding: 10px 20px;
                                    border-radius: 5px;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease;

                                }

                                .btn-connexion:hover {
                                    background-color: green;

                                }
                            </style>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="{{ route('Acceuil.sotre') }}"><img class="logo" src="img/logo.png" width="120px" height="100px"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{ route('Acceuil.sotre') }}">Accueil</a></li>
                                <li><a href="{{ route('Qui-sommes-nous-?') }}">A propos</a>
                                </li>
                                <li class=""><a href="{{ route('contact.store') }}">Contact</a></li>
                                <li class=""><a href="{{ route('Transitaire.store') }}">Transitaire</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
    </header>




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</div>

