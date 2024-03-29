<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css1/company.css') }}">


    <title>Enregistrement  de l'entreprise</title>
</head>
<body>
    <div class="container">
        <div class="box">

            <form action="{{ route('entrepriseenregist')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Enregistrement  de l'entreprise</h2>
                <div>
                    <label for="nom">Nom de l'entreprise :</label>
                    <input type="text"  name="nom" required>
                </div>


                <div>
                    <label for="logo">Logo de l'entreprise :</label>
                    <input type="file"  name="picture" accept="image/*" required>
                </div>


                <div>
                    <label for="adresse">Adresse de l'entreprise :</label>
                    <textarea  name="adresse" required></textarea>
                </div>


                <div>
                    <label for="email">E-mail de contact :</label>
                    <input type="email"  name="email" required>
                </div>
                <div>
                    <label for="telephone">Numéro de téléphone :</label>
                    <input type="number"  name="telephone" required>
                </div>
                <div>
                    <label for="RCCM">Registre de Commerce et de Crédit Mobilier (RCCM) :</label>
                    <input type="text"  name="RCCM" required>
                </div>
                <div>
                    <label for="IFU"> Identifiant Financier Unique (IFU):</label>
                    <input type="text" name="IFU" required>
                </div>

                <div>
                    <label for="nom">Nom du répresentant Legal :</label>
                    <input type="text" name="nomRepresentant" required>
                </div>
                <div>
                    <label for="nom">Prénom du répresentant Legal :</label>
                    <input type="text" name="prenomRepresentant" required>
                </div>
                <div>
                    <label for="email">E-mail du réprésentant Legal :</label>
                    <input type="email" name="emailRepresentant" required>
                </div>
                <div>
                    <label for="telephone">Numéro de téléphone du réprésentant:</label>
                    <input type="number"  name="telephoneRepresentant" required>
                </div>
                <div>
                    <label for="CNI"> Numéro du CNI du représentant Légal :</label>
                    <input type="text" name="CNI" required>
                </div>

                <div>
                    <label for="mot_de_passe">Mot de passe :</label>
                    <input type="password"  name="password" required>
                </div>




                <button type="submit">Enrégistrer</button>
            </form>
        </div>
    </div>


</body>
</html>
