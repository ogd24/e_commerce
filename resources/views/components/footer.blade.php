


<footer class=" mon-footer">

    <div class="container w-100% h-25 ">
        <div class="row" >
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img class="width=120px height=100px" src="img/logo.png" alt=""></a>


                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget p-5">
                        <strong>Address</strong>: Avenue Maurice Yaméogo Rue 12 Koudougou <br>
                        <strong>Téléphone</strong>: +226-60074165 <br>
                        <strong>Email</strong>:LOOKRE@gmail.com


                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget p-5 header__menu">
                    <ul>
                       <h6>Useful Links </h6>
                       <ul>
                        <li><a href="{{ route('Acceuil.sotre') }}">Accueil</a></li>
                        <li><a href="{{ route('Qui-sommes-nous-?') }}">Apropos</a>
                        </li>
                        <li class=""><a href="{{ route('contact.store') }}">Contact</a></li>
                        <li class=""><a href="{{ route('Transitaire.store') }}">Transitaire</a></li>
                    </ul>
                    </ul>
                    <div class="footer__widget__social p-5">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>

                    </div>
                </div>
            </div>
        </div>
         {{-- <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div> --}}
    </div>

    <style>
        .mon-footer{
            background-color: #F5F5F5;
            margin-top: 50px;
            width: 100%;
            height: 300px;

        }
    </style>

</footer>
