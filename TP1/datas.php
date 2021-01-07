<?php
$page = 'datas.php';
?>

<h2>Identité</h2>
<div class="data-div">
    <p><span class="data-title">Nom :</span> <?=$lastname?></p>
    <p><span class="data-title">Prénom :</span> <?=$firstname?></p>
    <p><span class="data-title">Date de naissance :</span> <?=$birthday?></p>
    <p><span class="data-title">Pays de naissance :</span> <?=$birthplace?></p>
    <p><span class="data-title">Nationalité :</span> <?=$nationality?></p>
</div>

<h2>Coordonnées</h2>
<div class="data-div">
    <p><span class="data-title">Adresse :</span> <?=$address.' '.$cp.' '.$city?></p>
    <p><span class="data-title">Email :</span> <?=$email?></p>
    <p><span class="data-title">Téléphone :</span> <?=$phone?></p>
</div>

<h2>Scolarité et emploi</h2>
<div class="data-div">
    <p><span class="data-title">Diplôme :</span> <?=$diplome?></p>
    <p><span class="data-title">Numéro Pôle emploi :</span> <?=$poleEmploi?></p>
    <p><span class="data-title">Badges :</span> <?=$badges?></p>
    <p><span class="data-title">Lien Codecademy :</span> <?=$codecademy?></p>
</div>

<h2>Informations complémentaires</h2>
<div class="data-div">
    <p><span class="data-title">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? :</span></p><br>
    <p><?=$hero?></p>
    <p><span class="data-title">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</span></p><br>
    <p><?=$hacks?></p>
    <p><span class="data-title">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? :</span> <?=$exp?></p>
</div>

