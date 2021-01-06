<?php
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