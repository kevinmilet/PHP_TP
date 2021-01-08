<?php

include 'controllerform.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - TP2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="infosForm">
            <form action="" method="post">

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <label for="civility">Civilité</label>
                        <select name="civility" id="civility" class="form-control">
                            <option value=""></option>
                            <option value="Mr" <?=isset($_POST['civility']) && ($_POST['civility'] == 'Mr') ? 'selected' : ''?>>Mr</option>
                            <option value="Mme" <?=isset($_POST['civility']) && ($_POST['civility'] == 'Mme') ? 'selected' : ''?>>Mme</option>
                        </select>
                        <p class="civError text-danger font-italic"><?=$errors['civError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" pattern="[A-Za-zéèàùûêâôëç' -]+" value="<?=isset($_POST['lastname']) ? $_POST['lastname'] : ''?>">
                        <p class="lastnameError text-danger font-italic"><?=$errors['lastnameError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" pattern="[A-Za-zéèàùûêâôëç' -]+" value="<?=isset($_POST['firstname']) ? $_POST['firstname'] : ''?>">
                        <p class="firstnameError text-danger font-italic"><?=$errors['firstnameError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <label for="age">Age</label>
                        <input type="text" name="age" id="age" class="form-control" minlength="2" maxlength="3" pattern="[0-9]{2,3}" value="<?=isset($_POST['age']) ? $_POST['age'] : ''?>">
                        <p class="ageError text-danger font-italic"><?=$errors['ageError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <label for="society">Société</label>
                        <input type="text" name="society" id="society" class="form-control" pattern="[A-Za-zéèàùûêâôëç' -&]+" value="<?=isset($_POST['society']) ? $_POST['society'] : ''?>">
                        <p class="societyError text-danger font-italic"><?=$errors['societyError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
        </div>

        <div class="data">
        <?php 

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errors)) {
                // afficher les données si le formulaire est envoyé et qu'il n'y a pas d'erreur
                include 'datas.php';
            }

        ?>
        </div>

    </div>

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