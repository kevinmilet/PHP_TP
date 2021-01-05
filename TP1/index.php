<?php

require 'form.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" class="css">
    <title>PHP - TP 1</title>
</head>

<body>
    <div class="container my-3">
        <div class="row mx-2">
            <form action="" method="post" id="user-form">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="lastname">Nom *</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" pattern="[A-Za-zéèàùûêâôëç' -]+" title="Uniquement des lettres, des -, des ' et des espaces">
                        <p class="lastnameError font-italic text-danger"><?=$error['lastnameError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="firsttname">Prénom *</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" pattern="[A-Za-zéèàùûêâôëç' -]+" title="Uniquement des lettres, des -, des ' et des espaces">
                        <p class="firstnameError font-italic text-danger"><?=$error['firstnameError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="birthday">Date de naissance *</label>
                        <input type="date" class="form-control" min="1900-01-01" max="2020-12-31" name="birthday" id="birthday">
                        <p class="birthdayError font-italic text-danger"><?=$error['birthdayError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="birthcountry">Pays de naissance *</label>
                        <select type="text" class="form-control" name="birthplace" id="birthplace">
                            <option form-control value=""></option>
                            <option form-control value="AF">Afghanistan</option>
                            <option form-control value="ZA">Afrique du Sud</option>
                            <option form-control value="AL">Albanie</option>
                            <option form-control value="DZ">Algérie</option>
                            <option form-control value="DE">Allemagne</option>
                            <option form-control value="MK">Ancienne République yougoslave de Macédoine</option>
                            <option form-control value="AD">Andorre</option>
                            <option form-control value="AO">Angola</option>
                            <option form-control value="AI">Anguilla</option>
                            <option form-control value="AQ">Antarctique</option>
                            <option form-control value="AG">Antigua-et-Barbuda</option>
                            <option form-control value="AN">Antilles néerlandaises</option>
                            <option form-control value="SA">Arabie saoudite</option>
                            <option form-control value="AR">Argentine</option>
                            <option form-control value="AM">Arménie</option>
                            <option form-control value="AW">Aruba</option>
                            <option form-control value="AU">Australie</option>
                            <option form-control value="AT">Autriche</option>
                            <option form-control value="AZ">Azerbaïdjan</option>
                            <option form-control value="BS">Bahamas</option>
                            <option form-control value="BH">Bahreïn</option>
                            <option form-control value="BD">Bangladesh</option>
                            <option form-control value="BB">Barbade</option>
                            <option form-control value="BE">Belgique</option>
                            <option form-control value="BZ">Belize</option>
                            <option form-control value="BJ">Bénin</option>
                            <option form-control value="BM">Bermudes</option>
                            <option form-control value="BT">Bhoutan</option>
                            <option form-control value="BY">Biélorussie</option>
                            <option form-control value="BO">Bolivie</option>
                            <option form-control value="BA">Bosnie-et-Herzégovine</option>
                            <option form-control value="BW">Botswana</option>
                            <option form-control value="BR">Brésil</option>
                            <option form-control value="BN">Brunei Darussalam</option>
                            <option form-control value="BG">Bulgarie</option>
                            <option form-control value="BF">Burkina Faso</option>
                            <option form-control value="BI">Burundi</option>
                            <option form-control value="KH">Cambodge</option>
                            <option form-control value="CM">Cameroun</option>
                            <option form-control value="CA">Canada</option>
                            <option form-control value="CV">Cap-Vert</option>
                            <option form-control value="CL">Chili</option>
                            <option form-control value="CN">Chine</option>
                            <option form-control value="CY">Chypre</option>
                            <option form-control value="CO">Colombie</option>
                            <option form-control value="KM">Comores</option>
                            <option form-control value="CG">Congo</option>
                            <option form-control value="CR">Costa Rica</option>
                            <option form-control value="CI">Côte d'Ivoire</option>
                            <option form-control value="HR">Croatie</option>
                            <option form-control value="CU">Cuba</option>
                            <option form-control value="DK">Danemark</option>
                            <option form-control value="DJ">Djibouti</option>
                            <option form-control value="DM">Dominique</option>
                            <option form-control value="EG">Égypte</option>
                            <option form-control value="SV">El Salvador</option>
                            <option form-control value="AE">Émirats arabes unis</option>
                            <option form-control value="EC">Équateur</option>
                            <option form-control value="ER">Érythrée</option>
                            <option form-control value="ES">Espagne</option>
                            <option form-control value="EE">Estonie</option>
                            <option form-control value="FM">États fédérés de Micronésie</option>
                            <option form-control value="US">États-Unis</option>
                            <option form-control value="ET">Éthiopie</option>
                            <option form-control value="FJ">Fidji</option>
                            <option form-control value="FI">Finlande</option>
                            <option form-control value="FR">France</option>
                            <option form-control value="GA">Gabon</option>
                            <option form-control value="GM">Gambie</option>
                            <option form-control value="GE">Géorgie</option>
                            <option form-control value="GS">Géorgie du Sud-et-les Îles Sandwich du Sud</option>
                            <option form-control value="GH">Ghana</option>
                            <option form-control value="GI">Gibraltar</option>
                            <option form-control value="GR">Grèce</option>
                            <option form-control value="GD">Grenade</option>
                            <option form-control value="GL">Groenland</option>
                            <option form-control value="GP">Guadeloupe</option>
                            <option form-control value="GU">Guam</option>
                            <option form-control value="GT">Guatemala</option>
                            <option form-control value="GN">Guinée</option>
                            <option form-control value="GQ">Guinée équatoriale</option>
                            <option form-control value="GW">Guinée-Bissau</option>
                            <option form-control value="GY">Guyane</option>
                            <option form-control value="GF">Guyane française</option>
                            <option form-control value="HT">Haïti</option>
                            <option form-control value="HN">Honduras</option>
                            <option form-control value="HK">Hong Kong</option>
                            <option form-control value="HU">Hongrie</option>
                            <option form-control value="BV">Ile Bouvet</option>
                            <option form-control value="CX">Ile Christmas</option>
                            <option form-control value="NF">Île Norfolk</option>
                            <option form-control value="PN">Île Pitcairn</option>
                            <option form-control value="AX">Iles Aland</option>
                            <option form-control value="KY">Iles Cayman</option>
                            <option form-control value="CC">Iles Cocos (Keeling)</option>
                            <option form-control value="CK">Iles Cook</option>
                            <option form-control value="FO">Îles Féroé</option>
                            <option form-control value="HM">Îles Heard-et-MacDonald</option>
                            <option form-control value="FK">Îles Malouines</option>
                            <option form-control value="MP">Îles Mariannes du Nord</option>
                            <option form-control value="MH">Îles Marshall</option>
                            <option form-control value="UM">Îles mineures éloignées des États-Unis</option>
                            <option form-control value="SB">Îles Salomon</option>
                            <option form-control value="TC">Îles Turques-et-Caïques</option>
                            <option form-control value="VG">Îles Vierges britanniques</option>
                            <option form-control value="VI">Îles Vierges des États-Unis</option>
                            <option form-control value="IN">Inde</option>
                            <option form-control value="ID">Indonésie</option>
                            <option form-control value="IQ">Iraq</option>
                            <option form-control value="IE">Irlande</option>
                            <option form-control value="IS">Islande</option>
                            <option form-control value="IL">Israël</option>
                            <option form-control value="IT">Italie</option>
                            <option form-control value="LY">Jamahiriya arabe libyenne</option>
                            <option form-control value="JM">Jamaïque</option>
                            <option form-control value="JP">Japon</option>
                            <option form-control value="JO">Jordanie</option>
                            <option form-control value="KZ">Kazakhstan</option>
                            <option form-control value="KE">Kenya</option>
                            <option form-control value="KG">Kirghizistan</option>
                            <option form-control value="KI">Kiribati</option>
                            <option form-control value="KW">Koweït</option>
                            <option form-control value="LS">Lesotho</option>
                            <option form-control value="LV">Lettonie</option>
                            <option form-control value="LB">Liban</option>
                            <option form-control value="LR">Libéria</option>
                            <option form-control value="LI">Liechtenstein</option>
                            <option form-control value="LT">Lituanie</option>
                            <option form-control value="LU">Luxembourg</option>
                            <option form-control value="MO">Macao</option>
                            <option form-control value="MG">Madagascar</option>
                            <option form-control value="MY">Malaisie</option>
                            <option form-control value="MW">Malawi</option>
                            <option form-control value="MV">Maldives</option>
                            <option form-control value="ML">Mali</option>
                            <option form-control value="MT">Malte</option>
                            <option form-control value="MA">Maroc</option>
                            <option form-control value="MQ">Martinique</option>
                            <option form-control value="MU">Maurice</option>
                            <option form-control value="MR">Mauritanie</option>
                            <option form-control value="YT">Mayotte</option>
                            <option form-control value="MX">Mexique</option>
                            <option form-control value="MC">Monaco</option>
                            <option form-control value="MN">Mongolie</option>
                            <option form-control value="MS">Montserrat</option>
                            <option form-control value="MZ">Mozambique</option>
                            <option form-control value="MM">Myanmar</option>
                            <option form-control value="NA">Namibie</option>
                            <option form-control value="NR">Nauru</option>
                            <option form-control value="NP">Népal</option>
                            <option form-control value="NI">Nicaragua</option>
                            <option form-control value="NE">Niger</option>
                            <option form-control value="NG">Nigéria</option>
                            <option form-control value="NU">Niué</option>
                            <option form-control value="NO">Norvège</option>
                            <option form-control value="NC">Nouvelle-Calédonie</option>
                            <option form-control value="NZ">Nouvelle-Zélande</option>
                            <option form-control value="OM">Oman</option>
                            <option form-control value="UG">Ouganda</option>
                            <option form-control value="UZ">Ouzbékistan</option>
                            <option form-control value="PK">Pakistan</option>
                            <option form-control value="PW">Palaos</option>
                            <option form-control value="PA">Panama</option>
                            <option form-control value="PG">Papouasie-Nouvelle-Guinée</option>
                            <option form-control value="PY">Paraguay</option>
                            <option form-control value="NL">Pays-Bas</option>
                            <option form-control value="PE">Pérou</option>
                            <option form-control value="PH">Philippines</option>
                            <option form-control value="PL">Pologne</option>
                            <option form-control value="PF">Polynésie française</option>
                            <option form-control value="PR">Porto Rico</option>
                            <option form-control value="PT">Portugal</option>
                            <option form-control value="TW">Province chinoise de Taiwan</option>
                            <option form-control value="QA">Qatar</option>
                            <option form-control value="SY">République arabe syrienne</option>
                            <option form-control value="CF">République centrafricaine</option>
                            <option form-control value="KR">République de Corée</option>
                            <option form-control value="MD">République de Moldavie</option>
                            <option form-control value="CD">République démocratique du Congo</option>
                            <option form-control value="DO">République dominicaine</option>
                            <option form-control value="IR">République islamique d'Iran</option>
                            <option form-control value="KP">République populaire démocratique de Corée</option>
                            <option form-control value="LA">République Populaire du Laos</option>
                            <option form-control value="CZ">République tchèque</option>
                            <option form-control value="TZ">République-Unie de Tanzanie</option>
                            <option form-control value="RE">Réunion</option>
                            <option form-control value="RO">Roumanie</option>
                            <option form-control value="GB">Royaume-Uni</option>
                            <option form-control value="RU">Russie</option>
                            <option form-control value="RW">Rwanda</option>
                            <option form-control value="EH">Sahara occidental</option>
                            <option form-control value="KN">Saint-Christophe-et-Niévès</option>
                            <option form-control value="SM">Saint-Marin</option>
                            <option form-control value="PM">Saint-Pierre-et-Miquelon</option>
                            <option form-control value="VA">Saint-Siège (Cité du Vatican)</option>
                            <option form-control value="VC">Saint-Vincent-et-les Grenadines</option>
                            <option form-control value="SH">Sainte-Hélène</option>
                            <option form-control value="LC">Sainte-Lucie</option>
                            <option form-control value="WS">Samoa</option>
                            <option form-control value="AS">Samoa américaines</option>
                            <option form-control value="ST">Sao Tomé-et-Principe</option>
                            <option form-control value="SN">Sénégal</option>
                            <option form-control value="CS">Serbie-et-Monténégro</option>
                            <option form-control value="SC">Seychelles</option>
                            <option form-control value="SL">Sierra Leone</option>
                            <option form-control value="SG">Singapour</option>
                            <option form-control value="SK">Slovaquie</option>
                            <option form-control value="SI">Slovénie</option>
                            <option form-control value="SO">Somalie</option>
                            <option form-control value="SD">Soudan</option>
                            <option form-control value="LK">Sri Lanka</option>
                            <option form-control value="SE">Suède</option>
                            <option form-control value="CH">Suisse</option>
                            <option form-control value="SR">Suriname</option>
                            <option form-control value="SJ">Svalbard et Jan Mayen</option>
                            <option form-control value="SZ">Swaziland</option>
                            <option form-control value="TJ">Tadjikistan</option>
                            <option form-control value="TD">Tchad</option>
                            <option form-control value="IO">Territoire britannique de l'océan Indien</option>
                            <option form-control value="TF">Territoire Francais du Sud</option>
                            <option form-control value="PS">Territoires palestiniens occupés</option>
                            <option form-control value="TH">Thaïlande</option>
                            <option form-control value="TL">Timor oriental</option>
                            <option form-control value="TG">Togo</option>
                            <option form-control value="TK">Tokelau</option>
                            <option form-control value="TO">Tonga</option>
                            <option form-control value="TT">Trinité-et-Tobago</option>
                            <option form-control value="TN">Tunisie</option>
                            <option form-control value="TM">Turkménistan</option>
                            <option form-control value="TR">Turquie</option>
                            <option form-control value="TV">Tuvalu</option>
                            <option form-control value="UA">Ukraine</option>
                            <option form-control value="UY">Uruguay</option>
                            <option form-control value="VU">Vanuatu</option>
                            <option form-control value="VE">Vénézuéla</option>
                            <option form-control value="VN">Vietnam</option>
                            <option form-control value="WF">Wallis-et-Futuna</option>
                            <option form-control value="YE">Yémen</option>
                            <option form-control value="ZM">Zambie</option>
                            <option form-control value="ZW">Zimbabwe</option>
                        </select>
                        <p class="birthplaceError error font-italic text-danger"><?=$error['birthplaceError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="nationality">Nationalité *</label>
                        <input type="text" class="form-control" name="nationality" id="nationality" pattern="[A-Za-zéèàùûêâôëç' -]+" title="Uniquement des lettres, des -, des ' et des espaces">
                        <p class="nationalityError font-italic text-danger"><?=$error['nationalityError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="address">Adresse *</label>
                        <input type="text" class="form-control" name="address" id="address" pattern="[0-9A-Za-zéèàùûêâôëç' -]+" title="Uniquement des lettres et des chiffres">
                        <p class="addressError font-italic text-danger"><?=$error['addressError'] ?? ''?></p>
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="cp">Code postal *</label>
                        <input type="text" class="form-control" name="cp" minlenght="5" maxlength="5" id="cp" pattern="\d{2}?\d{3}" title="5 chiffres uniquement">
                        <p class="cpError font-italic text-danger"><?=$error['cpError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="city">Ville *</label>
                        <input type="text" class="form-control" name="city" id="city" pattern="[A-Za-zéèàùûêâôëç' -]+" title="Uniquement des lettres, des -, des ' et des espaces">
                        <p class="cityError font-italic text-danger"><?=$error['cityError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" name="email" id="email" pattern="[\w-\.]+@([\w-]+\.)+[\w-]{2,5}" title="Email au format xxx@xxx.xxx">
                        <p class="emailError font-italic text-danger"><?=$error['emailError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="phone">Téléphone *</label>
                        <input type="text" class="form-control" name="phone" id="phone" minlength="10" maxlength="10" pattern="[0-9]*" title="10 chiffres uniquement">
                        <p class="phoneError font-italic text-danger"><?=$error['phoneError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="Diplôme">Diplôme *</label>
                        <select type="text" class="form-control" name="diplome" id="diplome">
                            <option form-control value=""></option>
                            <option form-control value="Sans">Sans</option>
                            <option form-control value="Bac">Bac</option>
                            <option form-control value="Bac + 2">Bac + 2</option>
                            <option form-control value="Bac + 3 ou supérieur">Bac + 3 ou supérieur</option>
                        </select>
                        <p class="diplomeError font-italic text-danger"><?=$error['diplomeError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="poleEmploi">Numéro Pôle emploi (Laisser vide si pas de numéro)</label>
                        <input type="text" class="form-control" placeholder="8 chiffres, 2 lettres"
                            name="poleEmploi" id="poleEmploi" maxlength="10" pattern="[0-9]{8}[A-Z]{2}" title="8 chiffres et 2 lettres ou laisser vide">
                        <p class="peError font-italic text-danger"><?=$error['peError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="badges">Badges</label>
                        <input type="number" class="form-control mr-2" min="1"
                            name="badges" id="badges">
                        <p class="badgesError font-italic text-danger"><?=$error['badgesError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="codecademy">Lien Codecademy</label>
                        <input type="text" class="form-control" name="codecademy" id="codecademy">
                        <p class="urlError font-italic text-danger"><?=$error['urlError'] ?? ''?></p>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi
                            ? *</label>
                        <textarea name="hero" class="form-control" cols="30" rows="10" id="hero"></textarea>
                        <p class="heroError font-italic text-danger"><?=$error['heroError'] ?? ''?></p>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou
                            informatique) *</label>
                        <textarea name="hacks" class="form-control" cols="30" rows="10" id="hacks"></textarea>
                        <p class="hacksError font-italic text-danger"><?=$error['hacksError'] ?? ''?></p>
                    </div>
                    <div class="col-md-12 mb-2">
                        <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? *</p>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="exp" class="form-check-input exp" value="Oui" id="oui" required>
                            <label for="oui" class="form-check-label">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="exp" class="form-check-input exp" value="Non" id="non" required>
                            <label for="non" class="form-check-label">Non</label>
                        </div>
                        <p class="expError font-italic text-danger"><?=$error['expError'] ?? ''?></p>
                    </div>
                </div>
                <p class="font-italic">* Ces champs sont requis</p>
                <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
            </form>
        </div>
    </div>

    <div class="container py-3">
        <?php
include 'user.php';
?>
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
    <!-- <script src="assets/js/script.js"></script> -->
</body>

</html>