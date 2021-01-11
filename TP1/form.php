<?php

// déclaration des tableaux des diplômes et des pays
$diplome = array('', 'Sans', 'Bac', 'Bac + 2', 'Bac + 3 ou supérieur');
$country = array(
    '',
    'Afghanistan',
    'Afrique du Sud',
    'Albanie',
    'Algérie',
    'Allemagne',
    'Ancienne République yougoslave de Macédoine',
    'Andorre',
    'Angola',
    'Anguilla',
    'Antarctique',
    'Antigua-et-Barbuda',
    'Antilles néerlandaises',
    'Arabie saoudite',
    'Argentine',
    'Arménie',
    'Aruba',
    'Australie',
    'Autriche',
    'Azerbaïdjan',
    'Bahamas',
    'Bahreïn',
    'Bangladesh',
    'Barbade',
    'Belgique',
    'Belize',
    'Bénin',
    'Bermudes',
    'Bhoutan',
    'Biélorussie',
    'Bolivie',
    'Bosnie-et-Herzégovine',
    'Botswana',
    'Brésil',
    'Brunei Darussalam',
    'Bulgarie',
    'Burkina Faso',
    'Burundi',
    'Cambodge',
    'Cameroun',
    'Canada',
    'Cap-Vert',
    'Chili',
    'Chine',
    'Chypre',
    'Colombie',
    'Comores',
    'Congo',
    'Costa Rica',
    'Côte d\'Ivoire',
    'Croatie',
    'Cuba',
    'Danemark',
    'Djibouti',
    'Dominique',
    'Égypte',
    'El Salvador',
    'Émirats arabes unis',
    'Équateur',
    'Érythrée',
    'Espagne',
    'Estonie',
    'États fédérés de Micronésie',
    'États-Unis',
    'Éthiopie',
    'Fidji',
    'Finlande',
    'France',
    'Gabon',
    'Gambie',
    'Géorgie',
    'Géorgie du Sud-et-les Iles Sandwich du Sud',
    'Ghana',
    'Gibraltar',
    'Grèce',
    'Grenade',
    'Groenland',
    'Guadeloupe',
    'Guam',
    'Guatemala',
    'Guinée',
    'Guinée équatoriale',
    'Guinée-Bissau',
    'Guyane',
    'Guyane française',
    'Haïti',
    'Honduras',
    'Hong Kong',
    'Hongrie',
    'Ile Bouvet',
    'Ile Christmas',
    'Ile Norfolk',
    'Ile Pitcairn',
    'Iles Aland',
    'Iles Cayman',
    'Iles Cocos (Keeling)',
    'Iles Cook',
    'Iles Féroé',
    'Iles Heard-et-MacDonald',
    'Iles Malouines',
    'Iles Mariannes du Nord',
    'Iles Marshall',
    'Iles mineures éloignées des États-Unis',
    'Iles Salomon',
    'Iles Turques-et-Caïques',
    'Iles Vierges britanniques',
    'Iles Vierges des États-Unis',
    'Inde',
    'Indonésie',
    'Iraq',
    'Irlande',
    'Islande',
    'Israël',
    'Italie',
    'Jamahiriya arabe libyenne',
    'Jamaïque',
    'Japon',
    'Jordanie',
    'Kazakhstan',
    'Kenya',
    'Kirghizistan',
    'Kiribati',
    'Koweït',
    'Lesotho',
    'Lettonie',
    'Liban',
    'Libéria',
    'Liechtenstein',
    'Lituanie',
    'Luxembourg',
    'Macao',
    'Madagascar',
    'Malaisie',
    'Malawi',
    'Maldives',
    'Mali',
    'Malte',
    'Maroc',
    'Martinique',
    'Maurice',
    'Mauritanie',
    'Mayotte',
    'Mexique',
    'Monaco',
    'Mongolie',
    'Montserrat',
    'Mozambique',
    'Myanmar',
    'Namibie',
    'Nauru',
    'Népal',
    'Nicaragua',
    'Niger',
    'Nigéria',
    'Niué',
    'Norvège',
    'Nouvelle-Calédonie',
    'Nouvelle-Zélande',
    'Oman',
    'Ouganda',
    'Ouzbékistan',
    'Pakistan',
    'Palaos',
    'Panama',
    'Papouasie-Nouvelle-Guinée',
    'Paraguay',
    'Pays-Bas',
    'Pérou',
    'Philippines',
    'Pologne',
    'Polynésie française',
    'Porto Rico',
    'Portugal',
    'Province chinoise de Taiwan',
    'Qatar',
    'République arabe syrienne',
    'République centrafricaine',
    'République de Corée',
    'République de Moldavie',
    'République démocratique du Congo',
    'République dominicaine',
    'République islamique d\'Iran',
    'République populaire démocratique de Corée',
    'République Populaire du Laos',
    'République tchèque',
    'République-Unie de Tanzanie',
    'Réunion',
    'Roumanie',
    'Royaume-Uni',
    'Russie',
    'Rwanda',
    'Sahara occidental',
    'Saint-Christophe-et-Niévès',
    'Saint-Marin',
    'Saint-Pierre-et-Miquelon',
    'Saint-Siège (Cité du Vatican)',
    'Saint-Vincent-et-les Grenadines',
    'Sainte-Hélène',
    'Sainte-Lucie',
    'Samoa',
    'Samoa américaines',
    'Sao Tomé-et-Principe',
    'Sénégal',
    'Serbie-et-Monténégro',
    'Seychelles',
    'Sierra Leone',
    'Singapour',
    'Slovaquie',
    'Slovénie',
    'Somalie',
    'Soudan',
    'Sri Lanka',
    'Suède',
    'Suisse',
    'Suriname',
    'Svalbard et Jan Mayen',
    'Swaziland',
    'Tadjikistan',
    'Tchad',
    'Territoire britannique de l\'océan Indien',
    'Territoire Francais du Sud',
    'Territoires palestiniens occupés',
    'Thaïlande',
    'Timor oriental',
    'Togo',
    'Tokelau',
    'Tonga',
    'Trinité-et-Tobago',
    'Tunisie',
    'Turkménistan',
    'Turquie',
    'Tuvalu',
    'Ukraine',
    'Uruguay',
    'Vanuatu',
    'Vénézuéla',
    'Vietnam',
    'Wallis-et-Futuna',
    'Yémen',
    'Zambie',
    'Zimbabwe'
);

?>

<!-- formulaire de contact -->
<div class="row mx-2">
    <form action="" method="POST" id="user-form">
    <p class="formError font-italic text-danger"><?=$error['formError'] ?? ''?></p>
        <div class="row">
            <div class="col-md-6 mb-2">
                <label for="lastname">Nom *</label>
                <input type="text" class="form-control" name="lastname" id="lastname" pattern="[A-Za-zéèàùûêâôëç' -]+"
                    title="Uniquement des lettres, des -, des ' et des espaces" value="<?=isset($_POST['lastname']) ? $_POST['lastname'] : ''?>" required>
                <p class="lastnameError font-italic text-danger"><?=$error['lastnameError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="firsttname">Prénom *</label>
                <input type="text" class="form-control" name="firstname" id="firstname" pattern="[A-Za-zéèàùûêâôëç' -]+"
                    title="Uniquement des lettres, des -, des ' et des espaces" value="<?=isset($_POST['firstname']) ? $_POST['firstname'] : ''?>" required>
                <p class="firstnameError font-italic text-danger"><?=$error['firstnameError'] ?? ''?></p>
            </div>
            <div class="col-md-4 mb-2">
                <label for="birthday">Date de naissance *</label>
                <input type="date" class="form-control" min="1900-01-01" max="<?=date('Y-m-d')?>" name="birthday"
                    id="birthday" pattern="([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))" value="<?=isset($_POST['birthday']) ? $_POST['birthday'] : ''?>" required>
                <p class="birthdayError font-italic text-danger"><?=$error['birthdayError'] ?? ''?></p>
            </div>
            <div class="col-md-4 mb-2">
                <label for="birthcountry">Pays de naissance *</label>
                <select class="form-control" name="birthplace" id="birthplace" required>

                    <!-- Boucle pour afficher les pays dans le select -->
                    <?php foreach ($country as $value): ?>
                        <option value="<?=$value?>" <?=isset($_POST['birthplace']) && ($_POST['birthplace'] == $value) ? 'selected' : ''?>><?=$value?></option>
                    <?php endforeach ?>

                </select>
                <p class="birthplaceError error font-italic text-danger"><?=$error['birthplaceError'] ?? ''?></p>
            </div>
            <div class="col-md-4 mb-2">
                <label for="nationality">Nationalité *</label>
                <input type="text" class="form-control" name="nationality" id="nationality"
                    pattern="[A-Za-zéèàùûêâôëç' -]+" title="Uniquement des lettres, des -, des ' et des espaces"  value="<?=isset($_POST['nationality']) ? $_POST['nationality'] : ''?>" required>
                <p class="nationalityError font-italic text-danger"><?=$error['nationalityError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="address">Adresse *</label>
                <input type="text" class="form-control" name="address" id="address" pattern="[0-9A-Za-zéèàùûêâôëç' -]+"
                    title="Uniquement des lettres et des chiffres" value="<?=isset($_POST['address']) ? $_POST['address'] : ''?>" required>
                <p class="addressError font-italic text-danger"><?=$error['addressError'] ?? ''?></p>
            </div>
            <div class="col-md-2 mb-2">
                <label for="cp">Code postal *</label>
                <input type="text" class="form-control" name="cp" minlenght="5" maxlength="5" id="cp"
                    pattern="([0-9]{1}[0-5]{1}[0-9]{3})|(9[7-8]{1}[2-8]{1}[0-9]{2})" title="5 chiffres uniquement" value="<?=isset($_POST['cp']) ? $_POST['cp'] : ''?>" required>
                <p class="cpError font-italic text-danger"><?=$error['cpError'] ?? ''?></p>
            </div>
            <div class="col-md-4 mb-2">
                <label for="city">Ville *</label>
                <input type="text" class="form-control" name="city" id="city" pattern="[A-Za-zéèàùûêâôëç' -]+"
                    title="Uniquement des lettres, des -, des ' et des espaces" value="<?=isset($_POST['city']) ? $_POST['city'] : ''?>" required>
                <p class="cityError font-italic text-danger"><?=$error['cityError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="email">Email *</label>
                <input type="email" class="form-control" name="email" id="email"
                    pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Email au format xxx@xxx.xxx" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>" required>
                <p class="emailError font-italic text-danger"><?=$error['emailError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="phone">Téléphone *</label>
                <input type="text" class="form-control" name="phone" id="phone" minlength="10" maxlength="10"
                    pattern="[0-9]*" title="10 chiffres uniquement" value="<?=isset($_POST['phone']) ? $_POST['phone'] : ''?>" required>
                <p class="phoneError font-italic text-danger"><?=$error['phoneError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="diplome">Diplôme *</label>
                <select class="form-control" name="diplome" id="diplome" required>

                    <!-- Boucle pour afficher les diplômes dans le select -->
                    <?php foreach ($diplome as $value): ?>
                        <option value="<?=$value?>" <?=isset($_POST['diplome']) && ($_POST['diplome'] == $value) ? 'selected' : ''?>><?=$value?></option>
                    <?php endforeach ?>

                </select>
                <p class="diplomeError font-italic text-danger"><?=$error['diplomeError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="poleEmploi">Numéro Pôle emploi (Laisser vide si pas de numéro)</label>
                <input type="text" class="form-control" placeholder="8 chiffres, 2 lettres" name="poleEmploi"
                    id="poleEmploi" maxlength="10" pattern="[0-9]{8}[A-Z]{2}"
                    title="8 chiffres et 2 lettres ou laisser vide" value="<?=isset($_POST['poleEmploi']) ? $_POST['poleEmploi'] : ''?>">
                <p class="peError font-italic text-danger"><?=$error['peError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="badges">Badges</label>
                <input type="number" class="form-control mr-2" min="1" name="badges" id="badges" value="<?=isset($_POST['badges']) ? $_POST['badges'] : ''?>">
                <p class="badgesError font-italic text-danger"><?=$error['badgesError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="codecademy">Lien Codecademy</label>
                <input type="url" class="form-control" name="codecademy" id="codecademy" value="<?=isset($_POST['codecademy']) ? $_POST['codecademy'] : ''?>">
                <p class="urlError font-italic text-danger"><?=$error['urlError'] ?? ''?></p>
            </div>
            <div class="col-md-12 mb-2">
                <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi
                    ? *</label>
                <textarea name="hero" class="form-control" cols="30" rows="10" id="hero" required><?=isset($_POST['hero']) ? $_POST['hero'] : ''?></textarea>
                <p class="heroError font-italic text-danger"><?=$error['heroError'] ?? ''?></p>
            </div>
            <div class="col-md-12 mb-2">
                <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou
                    informatique) *</label>
                <textarea name="hacks" class="form-control" cols="30" rows="10" id="hacks" required><?=isset($_POST['hacks']) ? $_POST['hacks'] : ''?></textarea>
                <p class="hacksError font-italic text-danger"><?=$error['hacksError'] ?? ''?></p>
            </div>
            <div class="col-md-12 mb-2">
                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce
                    formulaire ? *</p>
                <div class="form-check form-check-inline">
                    <input type="radio" name="exp" class="form-check-input exp" value="Oui" id="oui" <?=isset($_POST['exp']) && $_POST['exp'] == 'Oui' ? 'checked' : ''?> required>
                    <label for="oui" class="form-check-label">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="exp" class="form-check-input exp" value="Non" id="non" <?=isset($_POST['exp']) && $_POST['exp'] == 'Non' ? 'checked' : ''?> required>
                    <label for="non" class="form-check-label">Non</label>
                </div>
                <p class="expError font-italic text-danger"><?=$error['expError'] ?? ''?></p>
            </div>
        </div>
        <p class="font-italic">* Ces champs sont requis</p>
        <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
    </form>
</div>