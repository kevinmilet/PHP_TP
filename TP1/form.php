<div class="row mx-2">
    <form action="" method="post" id="user-form">
        <div class="row">
            <div class="col-md-6 mb-2">
                <label for="lastname">Nom *</label>
                <input type="text" class="form-control" name="lastname" id="lastname" pattern="[A-Za-zéèàùûêâôëç' -]+"
                    title="Uniquement des lettres, des -, des ' et des espaces" value="<?=isset($_POST['lastname']) ? $_POST['lastname'] : ''?>">
                <p class="lastnameError font-italic text-danger"><?=$error['lastnameError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="firsttname">Prénom *</label>
                <input type="text" class="form-control" name="firstname" id="firstname" pattern="[A-Za-zéèàùûêâôëç' -]+"
                    title="Uniquement des lettres, des -, des ' et des espaces" value="<?=isset($_POST['firstname']) ? $_POST['firstname'] : ''?>">
                <p class="firstnameError font-italic text-danger"><?=$error['firstnameError'] ?? ''?></p>
            </div>
            <div class="col-md-4 mb-2">
                <label for="birthday">Date de naissance *</label>
                <input type="date" class="form-control" min="1900-01-01" max="<?=date('Y-m-d')?>" name="birthday"
                    id="birthday" pattern="([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))" value="<?=isset($_POST['birthday']) ? $_POST['birthday'] : ''?>">
                <p class="birthdayError font-italic text-danger"><?=$error['birthdayError'] ?? ''?></p>
            </div>
            <div class="col-md-4 mb-2">
                <label for="birthcountry">Pays de naissance *</label>
                <select class="form-control" name="birthplace" id="birthplace">
                    <option value=""></option>
                    <option value="afghanistan">Afghanistan</option>
                    <option value="afrique-du-sud">Afrique du Sud</option>
                    <option value="albanie">Albanie</option>
                    <option value="algerie">Algérie</option>
                    <option value="allemagne">Allemagne</option>
                    <option value="ancienne-republique-yougoslave-de-macedoine">Ancienne République yougoslave de
                        Macédoine</option>
                    <option value="andorre">Andorre</option>
                    <option value="angola">Angola</option>
                    <option value="anguilla">Anguilla</option>
                    <option value="antarctique">Antarctique</option>
                    <option value="antigua-et-barbuda">Antigua-et-Barbuda</option>
                    <option value="antilles-neerlandaises">Antilles néerlandaises</option>
                    <option value="arabie-saoudite">Arabie saoudite</option>
                    <option value="argentine">Argentine</option>
                    <option value="armenie">Arménie</option>
                    <option value="aruba">Aruba</option>
                    <option value="australie">Australie</option>
                    <option value="autriche">Autriche</option>
                    <option value="azerbaidjan">Azerbaïdjan</option>
                    <option value="bahamas">Bahamas</option>
                    <option value="bahrein">Bahreïn</option>
                    <option value="bangladesh">Bangladesh</option>
                    <option value="barbade">Barbade</option>
                    <option value="belgique">Belgique</option>
                    <option value="belize">Belize</option>
                    <option value="benin">Bénin</option>
                    <option value="bermudes">Bermudes</option>
                    <option value="bhoutan">Bhoutan</option>
                    <option value="bielorussie">Biélorussie</option>
                    <option value="bolivie">Bolivie</option>
                    <option value="bosnie-et-herzegovine">Bosnie-et-Herzégovine</option>
                    <option value="botswana">Botswana</option>
                    <option value="bresil">Brésil</option>
                    <option value="brunei-darussalam">Brunei Darussalam</option>
                    <option value="bulgarie">Bulgarie</option>
                    <option value="burkina-faso">Burkina Faso</option>
                    <option value="burundi">Burundi</option>
                    <option value="cambodge">Cambodge</option>
                    <option value="cameroun">Cameroun</option>
                    <option value="canada">Canada</option>
                    <option value="cap-vert">Cap-Vert</option>
                    <option value="chili">Chili</option>
                    <option value="chine">Chine</option>
                    <option value="chypre">Chypre</option>
                    <option value="colombie">Colombie</option>
                    <option value="comores">Comores</option>
                    <option value="congo">Congo</option>
                    <option value="costa-rica">Costa Rica</option>
                    <option value="cote-d-ivoire">Côte d'Ivoire</option>
                    <option value="croatie">Croatie</option>
                    <option value="cuba">Cuba</option>
                    <option value="danemark">Danemark</option>
                    <option value="djibouti">Djibouti</option>
                    <option value="dominique">Dominique</option>
                    <option value="egypte">Égypte</option>
                    <option value="el-salvador">El Salvador</option>
                    <option value="emirats-arabes-unis">Émirats arabes unis</option>
                    <option value="equateur">Équateur</option>
                    <option value="erythree">Érythrée</option>
                    <option value="espagne">Espagne</option>
                    <option value="estonie">Estonie</option>
                    <option value="etats-federes-de-micronesie">États fédérés de Micronésie</option>
                    <option value="etats-unis">États-Unis</option>
                    <option value="ethiopie">Éthiopie</option>
                    <option value="fidji">Fidji</option>
                    <option value="finlande">Finlande</option>
                    <option value="france">France</option>
                    <option value="gabon">Gabon</option>
                    <option value="gambie">Gambie</option>
                    <option value="georgie">Géorgie</option>
                    <option value="georgie-du-sud-et-les-iles-sandwich-du-sud">Géorgie du Sud-et-les Îles Sandwich du
                        Sud</option>
                    <option value="ghana">Ghana</option>
                    <option value="gibraltar">Gibraltar</option>
                    <option value="grece">Grèce</option>
                    <option value="grenade">Grenade</option>
                    <option value="groenland">Groenland</option>
                    <option value="guadeloupe">Guadeloupe</option>
                    <option value="guam">Guam</option>
                    <option value="guatemala">Guatemala</option>
                    <option value="guinee">Guinée</option>
                    <option value="guinee-equatoriale">Guinée équatoriale</option>
                    <option value="guinee-bissau">Guinée-Bissau</option>
                    <option value="guyane">Guyane</option>
                    <option value="guyane-francaise">Guyane française</option>
                    <option value="haiti">Haïti</option>
                    <option value="honduras">Honduras</option>
                    <option value="hong-kong">Hong Kong</option>
                    <option value="hongrie">Hongrie</option>
                    <option value="ile-bouvet">Ile Bouvet</option>
                    <option value="ile-christmas">Ile Christmas</option>
                    <option value="ile-norfolk">Île Norfolk</option>
                    <option value="ile-pitcairn">Île Pitcairn</option>
                    <option value="iles-aland">Iles Aland</option>
                    <option value="iles-cayman">Iles Cayman</option>
                    <option value="iles-cocos-keeling">Iles Cocos (Keeling)</option>
                    <option value="iles-cook">Iles Cook</option>
                    <option value="iles-feroe">Îles Féroé</option>
                    <option value="iles-heard-et-macdonald">Îles Heard-et-MacDonald</option>
                    <option value="iles-malouines">Îles Malouines</option>
                    <option value="iles-mariannes-du-nord">Îles Mariannes du Nord</option>
                    <option value="iles-marshall">Îles Marshall</option>
                    <option value="iles-mineures-eloignees-des-etats-unis">Îles mineures éloignées des États-Unis
                    </option>
                    <option value="iles-salomon">Îles Salomon</option>
                    <option value="iles-turques-et-caiques">Îles Turques-et-Caïques</option>
                    <option value="iles-vierges-britanniques">Îles Vierges britanniques</option>
                    <option value="iles-vierges-des-etats-unis">Îles Vierges des États-Unis</option>
                    <option value="inde">Inde</option>
                    <option value="indonesie">Indonésie</option>
                    <option value="iraq">Iraq</option>
                    <option value="irlande">Irlande</option>
                    <option value="islande">Islande</option>
                    <option value="israel">Israël</option>
                    <option value="italie">Italie</option>
                    <option value="jamahiriya-arabe-libyenne">Jamahiriya arabe libyenne</option>
                    <option value="jamaique">Jamaïque</option>
                    <option value="japon">Japon</option>
                    <option value="jordanie">Jordanie</option>
                    <option value="kazakhstan">Kazakhstan</option>
                    <option value="kenya">Kenya</option>
                    <option value="kirghizistan">Kirghizistan</option>
                    <option value="kiribati">Kiribati</option>
                    <option value="koweit">Koweït</option>
                    <option value="lesotho">Lesotho</option>
                    <option value="lettonie">Lettonie</option>
                    <option value="liban">Liban</option>
                    <option value="liberia">Libéria</option>
                    <option value="liechtenstein">Liechtenstein</option>
                    <option value="lituanie">Lituanie</option>
                    <option value="luxembourg">Luxembourg</option>
                    <option value="macao">Macao</option>
                    <option value="madagascar">Madagascar</option>
                    <option value="malaisie">Malaisie</option>
                    <option value="malawi">Malawi</option>
                    <option value="maldives">Maldives</option>
                    <option value="mali">Mali</option>
                    <option value="malte">Malte</option>
                    <option value="maroc">Maroc</option>
                    <option value="martinique">Martinique</option>
                    <option value="maurice">Maurice</option>
                    <option value="mauritanie">Mauritanie</option>
                    <option value="mayotte">Mayotte</option>
                    <option value="mexique">Mexique</option>
                    <option value="monaco">Monaco</option>
                    <option value="mongolie">Mongolie</option>
                    <option value="montserrat">Montserrat</option>
                    <option value="mozambique">Mozambique</option>
                    <option value="myanmar">Myanmar</option>
                    <option value="namibie">Namibie</option>
                    <option value="nauru">Nauru</option>
                    <option value="nepal">Népal</option>
                    <option value="nicaragua">Nicaragua</option>
                    <option value="niger">Niger</option>
                    <option value="nigeria">Nigéria</option>
                    <option value="niue">Niué</option>
                    <option value="norvege">Norvège</option>
                    <option value="nouvelle-caledonie">Nouvelle-Calédonie</option>
                    <option value="nouvelle-zelande">Nouvelle-Zélande</option>
                    <option value="oman">Oman</option>
                    <option value="ouganda">Ouganda</option>
                    <option value="ouzbekistan">Ouzbékistan</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="palaos">Palaos</option>
                    <option value="panama">Panama</option>
                    <option value="papouasie-nouvelle-guinee">Papouasie-Nouvelle-Guinée</option>
                    <option value="paraguay">Paraguay</option>
                    <option value="pays-bas">Pays-Bas</option>
                    <option value="perou">Pérou</option>
                    <option value="philippines">Philippines</option>
                    <option value="pologne">Pologne</option>
                    <option value="polynesie-francaise">Polynésie française</option>
                    <option value="porto-rico">Porto Rico</option>
                    <option value="portugal">Portugal</option>
                    <option value="province-chinoise-de-taiwan">Province chinoise de Taiwan</option>
                    <option value="qatar">Qatar</option>
                    <option value="republique-arabe-syrienne">République arabe syrienne</option>
                    <option value="republique-centrafricaine">République centrafricaine</option>
                    <option value="republique-de-coree">République de Corée</option>
                    <option value="republique-de-moldavie">République de Moldavie</option>
                    <option value="republique-democratique-du-congo">République démocratique du Congo</option>
                    <option value="republique-dominicaine">République dominicaine</option>
                    <option value="republique-islamique-d-iran">République islamique d'Iran</option>
                    <option value="republique-populaire-democratique-de-coree">République populaire démocratique de
                        Corée</option>
                    <option value="republique-populaire-du-laos">République Populaire du Laos</option>
                    <option value="republique-tcheque">République tchèque</option>
                    <option value="republique-unie-de-tanzanie">République-Unie de Tanzanie</option>
                    <option value="reunion">Réunion</option>
                    <option value="roumanie">Roumanie</option>
                    <option value="royaume-uni">Royaume-Uni</option>
                    <option value="russie">Russie</option>
                    <option value="rwanda">Rwanda</option>
                    <option value="sahara-occidental">Sahara occidental</option>
                    <option value="saint-christophe-et-nieves">Saint-Christophe-et-Niévès</option>
                    <option value="saint-marin">Saint-Marin</option>
                    <option value="saint-pierre-et-miquelon">Saint-Pierre-et-Miquelon</option>
                    <option value="saint-siege-cite-du-vatican">Saint-Siège (Cité du Vatican)</option>
                    <option value="saint-vincent-et-les-grenadines">Saint-Vincent-et-les Grenadines</option>
                    <option value="sainte-helene">Sainte-Hélène</option>
                    <option value="sainte-lucie">Sainte-Lucie</option>
                    <option value="samoa">Samoa</option>
                    <option value="samoa-americaines">Samoa américaines</option>
                    <option value="sao-tome-et-principe">Sao Tomé-et-Principe</option>
                    <option value="senegal">Sénégal</option>
                    <option value="serbie-et-montenegro">Serbie-et-Monténégro</option>
                    <option value="seychelles">Seychelles</option>
                    <option value="sierra-leone">Sierra Leone</option>
                    <option value="singapour">Singapour</option>
                    <option value="slovaquie">Slovaquie</option>
                    <option value="slovenie">Slovénie</option>
                    <option value="somalie">Somalie</option>
                    <option value="soudan">Soudan</option>
                    <option value="sri-lanka">Sri Lanka</option>
                    <option value="suede">Suède</option>
                    <option value="suisse">Suisse</option>
                    <option value="suriname">Suriname</option>
                    <option value="svalbard-et-jan-mayen">Svalbard et Jan Mayen</option>
                    <option value="swaziland">Swaziland</option>
                    <option value="tadjikistan">Tadjikistan</option>
                    <option value="tchad">Tchad</option>
                    <option value="territoire-britannique-de-l-ocean-indien">Territoire britannique de l'océan Indien
                    </option>
                    <option value="territoire-francais-du-sud">Territoire Francais du Sud</option>
                    <option value="territoires-palestiniens-occupes">Territoires palestiniens occupés</option>
                    <option value="thailande">Thaïlande</option>
                    <option value="timor-oriental">Timor oriental</option>
                    <option value="togo">Togo</option>
                    <option value="tokelau">Tokelau</option>
                    <option value="tonga">Tonga</option>
                    <option value="trinite-et-tobago">Trinité-et-Tobago</option>
                    <option value="tunisie">Tunisie</option>
                    <option value="turkmenistan">Turkménistan</option>
                    <option value="turquie">Turquie</option>
                    <option value="tuvalu">Tuvalu</option>
                    <option value="ukraine">Ukraine</option>
                    <option value="uruguay">Uruguay</option>
                    <option value="vanuatu">Vanuatu</option>
                    <option value="venezuela">Vénézuéla</option>
                    <option value="vietnam">Vietnam</option>
                    <option value="wallis-et-futuna">Wallis-et-Futuna</option>
                    <option value="yemen">Yémen</option>
                    <option value="zambie">Zambie</option>
                    <option value="zimbabwe">Zimbabwe</option>
                </select>
                <p class="birthplaceError error font-italic text-danger"><?=$error['birthplaceError'] ?? ''?></p>
            </div>
            <div class="col-md-4 mb-2">
                <label for="nationality">Nationalité *</label>
                <input type="text" class="form-control" name="nationality" id="nationality"
                    pattern="[A-Za-zéèàùûêâôëç' -]+" title="Uniquement des lettres, des -, des ' et des espaces"  value="<?=isset($_POST['nationality']) ? $_POST['nationality'] : ''?>">
                <p class="nationalityError font-italic text-danger"><?=$error['nationalityError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="address">Adresse *</label>
                <input type="text" class="form-control" name="address" id="address" pattern="[0-9A-Za-zéèàùûêâôëç' -]+"
                    title="Uniquement des lettres et des chiffres" value="<?=isset($_POST['address']) ? $_POST['address'] : ''?>">
                <p class="addressError font-italic text-danger"><?=$error['addressError'] ?? ''?></p>
            </div>
            <div class="col-md-2 mb-2">
                <label for="cp">Code postal *</label>
                <input type="text" class="form-control" name="cp" minlenght="5" maxlength="5" id="cp"
                    pattern="\d{2}?\d{3}" title="5 chiffres uniquement" value="<?=isset($_POST['cp']) ? $_POST['cp'] : ''?>">
                <p class="cpError font-italic text-danger"><?=$error['cpError'] ?? ''?></p>
            </div>
            <div class="col-md-4 mb-2">
                <label for="city">Ville *</label>
                <input type="text" class="form-control" name="city" id="city" pattern="[A-Za-zéèàùûêâôëç' -]+"
                    title="Uniquement des lettres, des -, des ' et des espaces" value="<?=isset($_POST['city']) ? $_POST['city'] : ''?>">
                <p class="cityError font-italic text-danger"><?=$error['cityError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="email">Email *</label>
                <input type="email" class="form-control" name="email" id="email"
                    pattern="[\w-\.]+@([\w-]+\.)+[\w-]{2,5}" title="Email au format xxx@xxx.xxx" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>">
                <p class="emailError font-italic text-danger"><?=$error['emailError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="phone">Téléphone *</label>
                <input type="text" class="form-control" name="phone" id="phone" minlength="10" maxlength="10"
                    pattern="[0-9]*" title="10 chiffres uniquement" value="<?=isset($_POST['phone']) ? $_POST['phone'] : ''?>">
                <p class="phoneError font-italic text-danger"><?=$error['phoneError'] ?? ''?></p>
            </div>
            <div class="col-md-6 mb-2">
                <label for="diplome">Diplôme *</label>
                <select class="form-control" name="diplome" id="diplome">
                    <option value=""></option>
                    <option value="Sans">Sans</option>
                    <option value="Bac">Bac</option>
                    <option value="Bac + 2">Bac + 2</option>
                    <option value="Bac + 3 ou superieur">Bac + 3 ou supérieur</option>
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
                <textarea name="hero" class="form-control" cols="30" rows="10" id="hero" ><?=isset($_POST['hero']) ? $_POST['hero'] : ''?></textarea>
                <p class="heroError font-italic text-danger"><?=$error['heroError'] ?? ''?></p>
            </div>
            <div class="col-md-12 mb-2">
                <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou
                    informatique) *</label>
                <textarea name="hacks" class="form-control" cols="30" rows="10" id="hacks" ><?=isset($_POST['hacks']) ? $_POST['hacks'] : ''?></textarea>
                <p class="hacksError font-italic text-danger"><?=$error['hacksError'] ?? ''?></p>
            </div>
            <div class="col-md-12 mb-2">
                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce
                    formulaire ? *</p>
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