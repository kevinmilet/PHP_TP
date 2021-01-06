<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['birthday']) && !empty($_POST['birthplace']) && !empty($_POST['nationality']) && !empty($_POST['address']) && !empty($_POST['cp']) && !empty($_POST['city']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['diplome']) && !empty($_POST['hero']) && !empty($_POST['hacks']) && !empty($_POST['exp'])){

    
    ?>
                <div class="container py-3">

                    <p><strong>Nom : </strong><?=$lastname?></p>
                    <p><strong>Prénom : </strong><?=$firstname?></p>
                    <p><strong>Date de naissance : </strong><?=$birthday?></p>
                    <p><strong>Pays de naissance : </strong><?=$birthplace?></p>
                    <p><strong>Nationalité : </strong><?=$nationality?></p>
                    <p><strong>Adresse : </strong><?=$address.' '.$cp.' '.$city?></p>
                    <p><strong>Email : </strong><?=$email?></p>
                    <p><strong>Téléphone : </strong><?=$phone?></p>
                    <p><strong>Diplôme : </strong><?=$diplome?></p>
                    <p><strong>Numéro Pôle emploi : </strong><?=$poleEmploi?></p>
                    <p><strong>Badges : </strong><?=$badges?></p>
                    <p><strong>Lien Codecademy : </strong><?=$codecademy?></p>
                    <p><strong>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? : </strong></p><br>
                    <p><?=$hero?></p>
                    <p><strong>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </strong></p><br>
                    <p><?=$hacks?></p>
                    <p><strong>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? : </strong><?=$exp?></p>

                </div>
                
<?php
    }
}
?>
    