<?php

// initialisation du tzbeau d'erreurs
$error = array();

// teste si le formulaire est remplis et si les champs sont remplis, sinon affiche une erreur
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
        if (empty($birthday)) {
            $error['birthdayError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['birthplace'])) {
        $birthplace = test_input($_POST['birthplace']);
        if (empty($birthplace)) {
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
        $email = test_input(sanitizeEmail($_POST['email']));
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
        if ($diplome == null) {
            $error['diplomeError'] = 'Ce champs est requis';
        }
    }

    if (isset($_POST['poleEmploi'])) {
        $poleEmploi = test_input($_POST['poleEmploi']);
        if (!isPoleEmploi($poleEmploi) && !empty($poleEmploi)) {
            $error['peError'] = 'Ceci n\'est pas un numéro Pôle Emploi';
        }
    }

    // if (isset($_POST['badges'])) {
    //     $badges = test_input($_POST['badges']);
    //     if (empty($badges) || $badges < 0) {
    //         $error['badgesError'] = 'Ce champs est requis';
    //     }
    // }
    
    if (isset($_POST['codecademy'])) {
        $codecademy = test_input(sanitizeUrl($_POST['codecademy']));
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

//vérifie l'email
function isEmail($email)
{
    return $email = filter_var($email, FILTER_VALIDATE_EMAIL);
}

// nettoye l'email
function sanitizeEmail($data)
{
    return filter_var($data, FILTER_SANITIZE_EMAIL);
}

// vérifie le numéro de téléphone
function isPhone($phone)
{
    return preg_match('/^[0-9]*$/', $phone);
}

// vérifie le numéro pôle emploi
function isPoleEmploi($poleEmploi)
{
    return preg_match('/^[0-9]{8}[A-Z]{2}$/', $poleEmploi);
}

// vérifie le len codecademy
function isUrl($codecademy)
{
    // return preg_match('/^(http[s]?:\/\/)?([^:\/\s]+)(:([^\/]*))?(\/\w+\.)*([^#?\s]+)(\?([^#]*))?(#(.*))?$/', $codecademy);
    return $codecademy = filter_var($codecademy, FILTER_VALIDATE_URL);
}

// nettoye l'url
function sanitizeUrl($data)
{
    return filter_var($data, FILTER_SANITIZE_URL);
}

// traite le données du formulaire pour retirer les espaces avant et après
// supprimer les slashes et convertir les entitées html
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// vérifie la date de naissance
// function validDate($birthday)
// {
//     $tab = array_map('intval', explode('/', $birthday));
//     if (count($tab) != 3 || !checkdate($tab[0], $tab[1], $tab[2])) {
//         return false;
//     }

// }

// vérifie les champs text
function isText($data)
{
    return preg_match('/^[a-zA-Zéèàùûêâôëç \'-]+$/', $data);
}

// vérifie l'addresse postale
function isAddress($address)
{
    return preg_match('/^[0-9a-zA-Zéèàùûêâôëç \'-]+$/', $address);
}

// verifie le champs code postal
function isCp($cp)
{
    return preg_match('/^\d{2}?\d{3}$/', $cp);
}

?>





