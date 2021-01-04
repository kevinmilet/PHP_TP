<?php

$error = array(
    // 'lastnameError' => '',
    // 'firstnameError' => '',
    // 'birthdayError' => '',
    // 'birthcountryError' => '',
    // 'nationalityError' => '',
    // 'adressError' => '',
    // 'cpError' => '',
    // 'cityError' => '',
    // 'emailError' => '',
    // 'phoneError' => '',
    // 'diplomeError' => '',
    // 'peError' => '',
    // 'badgesError' => '',
    // 'urlError' => '',
    // 'heroError' => '',
    // 'hacksError' => '',
    // 'experienceError' => '',
);


// $firstnameError = '';
// $lastnameError = '';
// $birthdayError = '';
// $birthcountryError = '';
// $nationalityError = '';
// $adressError = '';
// $cpError = '';
// $cityError = '';
// $emailError = '';
// $phoneError = '';
// $diplomeError = '';
// $poleEmploiError = '';
// $badgesError = '';
// $codecademyError = '';
// $heroError = '';
// $hacksError = '';
// $experienceError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['birthday']) && isset($_POST['birthcountry']) && isset($_POST['nationality']) && isset($_POST['adress']) && isset($_POST['cp']) && isset($_POST['city']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['diplome']) && isset($_POST['poleEmploi']) && isset($_POST['badges']) && isset($_POST['codecademy']) && isset($_POST['hero']) && isset($_POST['hacks']) && isset($_POST['experience'])) {
        $firstname = test_input($_POST['firstname']);
        $lastname = test_input($_POST['lastname']);
        $birthday = test_input($_POST['birthday']);
        $birthcountry = test_input($_POST['birthcountry']);
        $nationality = test_input($_POST['nationality']);
        $adress = test_input($_POST['adress']);
        $cp = test_input($_POST['cp']);
        $city = test_input($_POST['city']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $diplome = test_input($_POST['diplome']);
        $poleEmploi = test_input($_POST['poleEmploi']);
        $badges = test_input($_POST['badges']);
        $codecademy = test_input($_POST['codecademy']);
        $hero = test_input($_POST['hero']);
        $hacks = test_input($_POST['hacks']);
        $experience = test_input($_POST['experience']);
    }

    if (empty($firstname) || !isText($firstname)) {
        $error['firstnameError'] = 'Ce champs est requis';
    }

    if (empty($lastname) || !isText($lastname)) {
        $error['lastnameError'] = 'Ce champs est requis';
    }

    if (validDate($birthday) || empty($birthday)) {
        $error['birthdayError'] = 'Ce champs est requis';
    }

    if (empty($birthcountry)) {
        $error['birthcountryError'] = 'Ce champs est requis';
    }

    if (empty($nationality) || !isText($nationality)) {
        $error['nationalityError'] = 'Ce champs est requis';
    }

    if (empty($adress)) {
        $error['adressError'] = 'Ce champs est requis';
    }

    if (!isCp($cp) || empty($cp)) {
        $error['cpError'] = 'Code postal non valide';
    }

    if (empty($city) || !isText($city)) {
        $error['cityError'] = 'Ce champs est requis';
    }

    if (!isEmail($email)) {
        $error['emailError'] = 'Ceci n\'est pas un email valide';
    }

    if (!isPhone($phone) || empty($phone)) {
        $error['phoneError'] = 'Que des chiffres et des espaces';
    }

    if ($diplome == null) {
        $error['diplomeError'] = 'Ce champs est requis';
    }

    if (!isPoleEmploi($poleEmploi) || empty($poleEmploi)) {
        $error['peError'] = 'Ceci n\'est pas un numéro Pôle Emploi';
    }

    if (empty($badges)) {
        $error['badgesError'] = 'Ce champs est requis';
    }

    if (!isUrl($codecademy)) {
        $error['urlError'] = 'Ceci n\'est pas un lien valide';
    }

    if (empty($hero)) {
        $error['heroError'] = 'Ce champs est requis';
    }

    if (empty($hacks)) {
        $error['hacksError'] = 'Ce champs est requis';
    }

    if (empty($experience)) {
        $error['experienceError'] = 'Ce champs est requis';
    }
}

function isEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isPhone($phone)
{
    return preg_match('/^[0-9 ]*$/', $phone);
}

function isPoleEmploi($poleEmploi)
{
    return preg_match('/^[0-9]{8}[A-Z]{2}$/', $poleEmploi);
}

function isUrl($codecademy)
{
    return preg_match('/^(http[s]?:\/\/)?([^:\/\s]+)(:([^\/]*))?(\/\w+\.)*([^#?\s]+)(\?([^#]*))?(#(.*))?$/', $codecademy);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validDate($birthday)
{
    $tab = array_map('intval', explode('/', $birthday));
    if (count($tab) != 3 || !checkdate($tab[0], $tab[1], $tab[2])) {
        return false;
    }

}

function isText($data)
{
    return preg_match('/^[a-zA-Zéèàùûêâôëç \'-]+$/', $data);
}

function isCp($cp)
{
    return preg_match('/^\d{2}[ ]?\d{3}$/', $cp);
}
