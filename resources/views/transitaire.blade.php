<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS Bootstrap (ajoutez ces lignes dans la section head de votre fichier HTML) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div>

</div>

</head>
<body>
    <section class="" style="background-color: #eee;">
        <div class="container ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 form-header ">Sign up</p>

                        <form class="mx-1 mx-md-4" action="{{ route('TransitPost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> Non de l'entreprise </label>
                              <input type="text" id="form3Example1c" class="form-control " name="nom" />

                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example3c"> Email de l'entreprise </label>
                              <input type="email" id="form3Example3c" class="form-control" name="email" />

                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label for="logo">Logo de l'entreprise :</label>
                                <input type="file"  name=" picture " accept="image/*" required>

                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <div class="form-group">
                                    <label for="exampleTextarea">Situation Géographique </label>
                                    <textarea class="form-control" id="exampleTextarea" rows="3" name="adresse"></textarea>
                                </div>

                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> Téléphone de l'entreprise  </label>
                              <input type="tel" id="form3Example1c" class="form-control " name="telephone" />

                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> RCCM de l'entreprise</label>
                              <input type="text" id="form3Example1c" class="form-control " name="RCCM" />

                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> IFU  de l'entreprise </label>
                              <input type="text" id="form3Example1c" class="form-control " name="IFU" />

                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> Nom du Répresentant Légal</label>
                              <input type="text" id="form3Example1c" class="form-control " name="nomRepresentant" />

                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> Prénom du Répresentant Légal</label>
                              <input type="text" id="form3Example1c" class="form-control " name="prenomRepresentant" />

                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> Téléphone du Répresentant Légal</label>
                              <input type="tel" id="form3Example1c" class="form-control " name="telephoneRepresentant" />

                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> CNI/Passport du Répresentant Légal</label>
                              <input type="text" id="form3Example1c" class="form-control " name="CNI" />

                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="form3Example1c"> Email du Répresentant Légal  </label>
                              <input type="email" id="form3Example1c" class="form-control " name="emailRepresentant" />

                            </div>
                          </div>


                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Mot de passe </label>
                            <input type="password" id="form3Example4c" class="form-control" name="password" />

                          </div>
                        </div>





                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn  btn-lg btn-submit">Register</button>
                        </div>

                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<style>
    /* Style de l'en-tête du formulaire */
.form-header {
    background-color: #7fad39;
    padding: 10px; /* Espace intérieur */
    text-align: center; /* Alignement du texte au centre */
    font-size: 24px; /* Taille de police */
    color: #333; /* Couleur du texte */
    border-bottom: 1px solid #ccc; /* Bordure inférieure */
}

/* Style du bouton "Submit" */
.btn-submit {
    background-color: #FF5722; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    padding: 10px 20px; /* Espacement interne (haut-bas, gauche-droite) */
    border: none; /* Suppression de la bordure */
    border-radius: 5px; /* Arrondi des coins */
    cursor: pointer; /* Curseur de la main au survol */
    font-size: 16px; /* Taille de police */
}

/* Style du bouton "Submit" au survol */
.btn-submit:hover {
    background-color: #7fad39;
}

</style>



      <!-- JS Bootstrap (ajoutez ces lignes juste avant la balise de fermeture </body>) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
