<?php

// initialisation du tableau d'erreurs et appel des regex
$error = array();
include 'regexp.php';
// include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // on récupére les values des champs et les nettoies
    $civility = trim(filter_input(INPUT_POST, 'civility', FILTER_SANITIZE_STRING));
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    $age = intval(trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING))); // on converti l'age en entier
    $society = trim(filter_input(INPUT_POST, 'society', FILTER_SANITIZE_STRING));

    // validation du champs civilité
    if (empty($civility)) {
        // si le champs est vide on affiche une erreur (champs obligatoire)
        $errors['civError'] = 'Ce champs est requis';

        } elseif  ($civility != 'Mr' && $civility != 'Mme') {
            // si le champs est rempli on teste la valeur avec une regex
            $errors['civError'] = 'Uniquement Mr ou Mme';
    }

    // validation du champs nom
    if(empty($lastname)) {
        // si le champs est vide on affiche une erreur (champs obligatoire)
        $errors['lastnameError'] = 'Ce champs est requis';

        } elseif (!preg_match(REGSTR, $lastname)) {
            // si le champs est rempli on teste la valeur avec une regex
            $errors['lastnameError'] = 'Uniquement des lettres, des espaces, - et \'';
    }

    // validation du champs prénom
    if(empty($firstname)) {
        // si le champs est vide on affiche une erreur (champs obligatoire)
        $errors['firstnameError'] = 'Ce champs est requis';

        } elseif (!preg_match(REGSTR, $firstname)) {
            // si le champs est rempli on teste la valeur avec une regex
            $errors['firstnameError'] = 'Uniquement des lettres, des espaces, - et \'';
    }

    // validation du champs age
    if(empty($age)) {
        // si le champs est vide on affiche une erreur (champs obligatoire)
        $errors['ageError'] = 'Ce champs est requis';

        } else {
            if (!preg_match(REGAGE, $age) || ($age > 120 || $age < 18)) {
                // si le champs est rempli on teste la valeur avec une regex
                //(!(!preg_match(REGAGE, $age) && ($age < 120 && $age > 18)))
                $errors['ageError'] = 'Uniquement un nombre entre 18 et 120';
        }
    }

    // validation du champs société
    if (!preg_match(REGSOC, $society) && !empty($society)) {
        // on teste la valeur avec une regex
        $errors['societyError'] = 'Uniquement des lettres, des espaces, -, & et \'';    
    }
}