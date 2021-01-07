<?php

// initialisation du tableau d'erreurs et appel des regex
$error = array();
include 'regexp.php';
include 'functions.php';

// teste si le formulaire est posté et si les champs sont remplis, sinon affiche une erreur
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['lastname'])) {
        $lastname = test_input($_POST['lastname']);
        if (empty($lastname) || !isText($lastname)) {
            $error['lastnameError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['firstname'])) {
        $firstname = test_input($_POST['firstname']);
        if (empty($firstname) || !isText($firstname)) {
            $error['firstnameError'] = 'Ce champs est requis';
        }
    }
    
    if (isset($_POST['birthday'])) {
        $birthday = test_input($_POST['birthday']);

        if (empty($birthday) || !isDate($birthday)) {
            $error['birthdayError'] = 'Ce champs est requis';
        } else {
            // conversion de la date du format Y-m-d au format d-m-Y
            $timestamp = strtotime($birthday);
            $birthday = date('d-m-Y', $timestamp);
        }
    }

    if (isset($_POST['birthplace'])) {
        $birthplace = test_input($_POST['birthplace']);
        if (empty($birthplace) || $birthplace == '' || !isText($birthplace)) {
            $error['birthplaceError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['nationality'])) {
        $nationality = test_input($_POST['nationality']);
        if (empty($nationality) || !isText($nationality)) {
            $error['nationalityError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['address'])) {
        $address = test_input($_POST['address']);
        if (empty($address) || !isAddress($address)) {
            $error['addressError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['cp'])) {
        $cp = test_input($_POST['cp']);
        if (!isCp($cp) || empty($cp)) {
            $error['cpError'] = 'Code postal non valide';
        }
    }

    if (isset($_POST['city'])) {
        $city = test_input($_POST['city']);
        if (empty($city) || !isText($city)) {
            $error['cityError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['email'])) {
        $email = test_input($_POST['email']);
        if (!isEmail($email)) {
            $error['emailError'] = 'Ceci n\'est pas un email valide';
        }
    }

    if (isset($_POST['phone'])) {
        $phone = test_input($_POST['phone']);
        if (!isPhone($phone) || empty($phone)) {
            $error['phoneError'] = 'Ce champs est requis (10 chiffres)';
        }
    }

    if (isset($_POST['diplome'])) {
        $diplome = test_input($_POST['diplome']);
        if (empty($diplome) || $diplome == '' || !isDiplome($diplome)) {
            $error['diplomeError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['poleEmploi'])) {
        $poleEmploi = test_input($_POST['poleEmploi']);
        if (!isPoleEmploi($poleEmploi) && !empty($poleEmploi)) {
            $error['peError'] = 'Ceci n\'est pas un numéro Pôle Emploi';
        }
    }

    if (isset($_POST['badges'])) {

        $badges = test_input($_POST['badges']);
        
        if (empty($badges) || isText($badges)) {
            $badges = 0;
        } else {
            $badges = intval($badges);
        }
    }

    if (isset($_POST['codecademy'])) {
        $codecademy = test_input($_POST['codecademy']);
        if (!isUrl($codecademy) && !empty($codecademy)) {
            $error['urlError'] = 'Ceci n\'est pas un lien valide';
        }
    }

    if (isset($_POST['hero'])) {
        $hero = test_input($_POST['hero']);
        if (empty($hero)) {
            $error['heroError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['hacks'])) {
        $hacks = test_input($_POST['hacks']);
        if (empty($hacks)) {
            $error['hacksError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['exp'])) {
        $exp = test_input($_POST['exp']);
        if (empty($exp)) {
            $error['expError'] = 'Ce champs est requis';
        }
    }
} // fin de condition sur $_SERVER