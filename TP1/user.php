<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" class="css">
    <title>PHP - TP 1</title>
</head>
<body>

    <p><strong>Nom : </strong><?=$lastname?></p>
    <p><strong>Prénom : </strong><?=$firstname?></p>
    <p><strong>Date de naissance : </strong><?=$birthday?></p>
    <p><strong>Pays de naissance : </strong><?=$birthcountry?></p>
    <p><strong>Nationalité : </strong><?=$nationality?></p>
    <p><strong>Adresse : </strong><?=$adress.' '.$cp.' '.$city?></p>
    <p><strong>Email : </strong><?=$email?></p>
    <p><strong>Téléphone : </strong><?=$phone?></p>
    <p><strong>Diplôme : </strong><?=$diplome?></p>
    <p><strong>Numéro Pôle emploi : </strong><?=$poleEmploi?></p>
    <p><strong>Badges : </strong><?=$badges?></p>
    <p><strong>Lien Codecademy : </strong><?=$codecademy?></p>
    <p><strong>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? : </strong></p><br>
    <p><?=$hero?></p>
    <p><strong>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </strong></p><br>
    <p><?=$kacks?></p>
    <p><strong>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? : </strong></p><br>
    <p><?=$exp?></p>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>
</html>