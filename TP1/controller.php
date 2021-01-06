<?php

// initialisation du tableau d'erreurs et appel des regex
$error = array();
include 'regexp.php';

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
            $error['phoneError'] = 'Que des chiffres et des espaces';
        }
    }

    if (isset($_POST['diplome'])) {
        $diplome = test_input($_POST['diplome']);
        if (empty($diplome) || $diplome == '' || !isText($diplome)) {
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
        if (empty($badges) || $badges < 0) {
            $badges = 0;
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

// traite le données du formulaire pour retirer les espaces avant et après
// supprimer les slashes et convertir les caractères spéciaux en entitées html
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// nettoie et vérifie l'email
function isEmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $email;
}

// nettoie et vérifie le numéro de téléphone
function isPhone($phone)
{
    $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    $phone = preg_match(REGPHONE, $phone);
    return $phone;
}

// nettoie et vérifie le numéro pôle emploi
function isPoleEmploi($poleEmploi)
{
    $poleEmploi = filter_var($poleEmploi, FILTER_SANITIZE_STRING);
    $poleEmploi = preg_match(REGPOLEEMPLOI, $poleEmploi);
    return $poleEmploi;
}

// nettoie et vérifie les liens
function isUrl($url)
{
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = filter_var($url, FILTER_VALIDATE_URL);
    // $url = preg_match(REGURL, $url);
    return $url;
}

// nettoie et vérifie les champs text
function isText($data)
{
    $data = filter_var($data, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $data = preg_match(REGTEXT, $data);
    return $data;
}

// nettoie et vérifie l'addresse postale
function isAddress($address)
{
    $address = filter_var($address, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $address = preg_match(REGADDRESS, $address);
    return $address;
}

// nettoie et verifie le champs code postal
function isCp($cp)
{
    $cp = filter_var($cp, FILTER_SANITIZE_STRING);
    $cp = preg_match(REGCP, $cp);
    return $cp;
}

// nettoie et verifie la date
function isDate($date) {
    $date = filter_var($date, FILTER_SANITIZE_STRING);
    $date = preg_match(REGDATE, $date);
    return $date;
}