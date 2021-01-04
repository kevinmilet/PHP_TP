<?php

require ('form.php');

?>

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
    <div class="container mt-3">
        <div class="row mx-2">
            <form action="" method="post" id="user-form">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" placeholder="Nom" name="lastname">
                        <p class="font-italic text-danger"><?=$error['lastnameError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" placeholder="Prénom" name="firstname">
                        <p class="font-italic text-danger"><?=$error['firstnameError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" class="form-control" placeholder="Date de naissance (jj/mm/yyyy)" name="birthday">
                        <p class="font-italic text-danger"><?=$error['birthdayError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <select type="text" class="form-control" name="birthcountry">
                            <option value="">Pays de naissance</option>
                            <optgroup label="A">
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
                            </optgroup>
                            <optgroup label="B">
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
                            </optgroup>
                            <optgroup label="C">
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
                            </optgroup>
                            <optgroup label="D">
                                <option form-control value="DK">Danemark</option>
                                <option form-control value="DJ">Djibouti</option>
                                <option form-control value="DM">Dominique</option>
                            </optgroup>
                            <optgroup label="E">
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
                            </optgroup>
                            <optgroup label="F">
                                <option form-control value="FJ">Fidji</option>
                                <option form-control value="FI">Finlande</option>
                                <option form-control value="FR">France</option>
                            </optgroup>
                            <optgroup label="G">
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
                            </optgroup>
                            <optgroup label="H">
                                <option form-control value="HT">Haïti</option>
                                <option form-control value="HN">Honduras</option>
                                <option form-control value="HK">Hong Kong</option>
                                <option form-control value="HU">Hongrie</option>
                            </optgroup>
                            <optgroup label="I">
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
                            </optgroup>
                            <optgroup label="J">
                                <option form-control value="LY">Jamahiriya arabe libyenne</option>
                                <option form-control value="JM">Jamaïque</option>
                                <option form-control value="JP">Japon</option>
                                <option form-control value="JO">Jordanie</option>
                            </optgroup>
                            <optgroup label="K">
                                <option form-control value="KZ">Kazakhstan</option>
                                <option form-control value="KE">Kenya</option>
                                <option form-control value="KG">Kirghizistan</option>
                                <option form-control value="KI">Kiribati</option>
                                <option form-control value="KW">Koweït</option>
                            </optgroup>
                            <optgroup label="L">
                                <option form-control value="LS">Lesotho</option>
                                <option form-control value="LV">Lettonie</option>
                                <option form-control value="LB">Liban</option>
                                <option form-control value="LR">Libéria</option>
                                <option form-control value="LI">Liechtenstein</option>
                                <option form-control value="LT">Lituanie</option>
                                <option form-control value="LU">Luxembourg</option>
                            </optgroup>
                            <optgroup label="M">
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
                            </optgroup>
                            <optgroup label="N">
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
                            </optgroup>
                            <optgroup label="O">
                                <option form-control value="OM">Oman</option>
                                <option form-control value="UG">Ouganda</option>
                                <option form-control value="UZ">Ouzbékistan</option>
                            </optgroup>
                            <optgroup label="P">
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
                            </optgroup>
                            <optgroup label="Q">
                                <option form-control value="QA">Qatar</option>
                            </optgroup>
                            <optgroup label="R">
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
                            </optgroup>
                            <optgroup label="S">
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
                            </optgroup>
                            <optgroup label="T">
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
                            </optgroup>
                            <optgroup label="U">
                                <option form-control value="UA">Ukraine</option>
                                <option form-control value="UY">Uruguay</option>
                            </optgroup>
                            <optgroup label="V">
                                <option form-control value="VU">Vanuatu</option>
                                <option form-control value="VE">Vénézuéla</option>
                                <option form-control value="VN">Vietnam</option>
                            </optgroup>
                            <optgroup label="W">
                                <option form-control value="WF">Wallis-et-Futuna</option>
                            </optgroup>
                            <optgroup label="Y">
                                <option form-control value="YE">Yémen</option>
                            </optgroup>
                            <optgroup label="Z">
                                <option form-control value="ZM">Zambie</option>
                                <option form-control value="ZW">Zimbabwe</option>
                            </optgroup>
                        </select>
                        <p class="font-italic text-danger"><?=$error['birthcountryError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" class="form-control" name="nationality" placeholder="Nationalité">
                        <p class="font-italic text-danger"><?=$error['nationalityError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" placeholder="Adresse" name="adress">
                        <p class="font-italic text-danger"><?=$error['adressError'] ?? ''?></p>
                    </div>
                    <div class="col-md-2 mb-2">
                        <input type="text" class="form-control" placeholder="Code Postal" name="cp">
                        <p class="font-italic text-danger"><?=$error['cpError'] ?? ''?></p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" class="form-control" placeholder="Ville" name="city">
                        <p class="font-italic text-danger"><?=$error['cityError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <p class="font-italic text-danger"><?=$error['emailError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" placeholder="Téléphone" name="phone">
                        <p class="font-italic text-danger"><?=$error['phoneError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <select type="text" class="form-control" placeholder="Diplôme" name="diplome">
                            <option value="">Diplôme</option>
                            <option value="sans">Sans</option>
                            <option value="bac">Bac</option>
                            <option value="bac+2">Bac + 2</option>
                            <option value="bac+3">Bac + 3 ou supérieur</option>
                        </select>
                        <p class="font-italic text-danger"><?=$error['diplomeError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" placeholder="Numéro Pôle Emploi (8 chiffres, 2 lettres)" name="poleEmploi">
                        <p class="font-italic text-danger"><?=$error['peError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="number" class="form-control mr-2" placeholder="Nombre de badges" min="0" name="badges">
                        <p class="font-italic text-danger"><?=$error['badgesError'] ?? ''?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" placeholder="Lien codecademy" name="codecademy">
                        <p class="font-italic text-danger"><?=$error['urlError'] ?? ''?></p>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi
                            ?</label>
                        <textarea name="hero" class="form-control" cols="30" rows="10"></textarea>
                        <p class="font-italic text-danger"><?=$error['heroError'] ?? ''?></p>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou
                            informatique)</label>
                        <textarea name="hacks" class="form-control" cols="30" rows="10"></textarea>
                        <p class="font-italic text-danger"><?=$error['hacksError'] ?? ''?></p>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou
                            l'informatique
                            avant de remplir ce formulaire ?</label>
                        <textarea name="experience" class="form-control" cols="30" rows="10"></textarea>
                        <p class="font-italic text-danger"><?=$error['experienceError'] ?? ''?></p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
            </form>
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