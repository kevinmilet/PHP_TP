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

// nettoie les string sans + (garde les espaces - ')
function sanitizeString($data) {
    $data = filter_var($data, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    return $data;
}

// Valide les string sans +
function regStrTest($data) {
    $data = preg_match(REGTEXT, $data);
    return $data;
}
