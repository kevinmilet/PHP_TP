<?php

$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function viewUser($array) {
    $user = '<div class="card" style="width: 18rem;">
                <img src="'.$array['portrait'].'" class="card-img-top" alt="Portrait de '.$array['name'].' '.$array['firstname'].'">
                <div class="card-body">
                    <h5 class="card-title">'.$array['name'].' '.$array['firstname'].'</h5>
                </div>
            </div>';
    return $user;
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP - TP 3</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?= viewUser($portrait1); ?>
            </div>
            <div class="col-md-6">
                <?= viewUser($portrait2); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= viewUser($portrait3); ?>
            </div>
            <div class="col-md-6">
                <?= viewUser($portrait4); ?>
            </div>
        </div>
    </div>
    
    


</body>
</html>