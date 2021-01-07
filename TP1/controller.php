<?php

// initialisation du tableau d'erreurs et appel des regex
$error = array();
include 'regexp.php';
include 'functions.php';

// teste si le formulaire est posté et si les champs sont remplis, sinon affiche une erreur
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Teste et valide le champ Nom
    if (isset($_POST['lastname'])) { // Teste si le champ existe
        $lastname = $_POST['lastname'];

        if (empty($lastname)) { // Teste si le champ est rempli
            $error['lastnameError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $lastname = test_input($lastname);
            $lastname = sanitizeString($lastname);

            //Teste que les données corresponde à la regex
            if (!regStrTest($lastname)) {
                $error['lastnameError'] = 'Que des lettres, des -, des \' ou des espaces';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }
    
    // Teste et valide le champ Prénnom
    if (isset($_POST['firstname'])) { // Teste si le champ existe
        $firstname = $_POST['firstname'];

        if (empty($firstname)) { // Teste si le champ est rempli
            $error['firstnameError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $firstname = test_input($firstname);
            $firstname = sanitizeString($firstname);

            //Teste que les données corresponde à la regex
            if (!regStrTest($firstname)) {
                $error['firstnameError'] = 'Que des lettres, des -, des \' ou des espaces';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }
    
    // Teste et valide le champ Date de naissance
    if (isset($_POST['birthday'])) { // Teste si le champ existe
        $birthday = $_POST['birthday'];

        if (empty($birthday)) { // Teste si le champ est rempli
            $error['birthdayError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $birthday = test_input($birthday);
            $birthday= filter_var($birthday, FILTER_SANITIZE_STRING);

            //Teste que les données corresponde à la regex
            if (!preg_match(REGDATE, $birthday)) {
                $error['birthdayError'] = 'Que des chiffres séparés d\'un tiret';
            } else {

                //conversion de la date du format Y-m-d au format d-m-Y
                $timestamp = strtotime($birthday);
                $birthday = date('d-m-Y', $timestamp);
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Pays de naissance
    if (isset($_POST['birthplace'])) { // Teste si le champ existe
        $birthplace = $_POST['birthplace'];

        if (empty($birthplace) || $birthplace == '') { // Teste si le champ est rempli
            $error['birthplaceError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $birthplace = test_input($birthplace);
            $birthplace = sanitizeString($birthplace);

            //Teste que les données corresponde à la regex
            if (!regStrTest($birthplace)) {
                $error['birthplaceError'] = 'Que des lettres, des -, des \' ou des espaces';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Nationalité
    if (isset($_POST['nationality'])) { // Teste si le champ existe
        $nationality = $_POST['nationality'];

        if (empty($nationality)) { // Teste si le champ est rempli
            $error['nationalityError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $nationality = test_input($nationality);
            $nationality = sanitizeString($nationality);

            //Teste que les données corresponde à la regex
            if (!regStrTest($nationality)) {
                $error['nationalityError'] = 'Que des lettres, des -, des \' ou des espaces';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Adresse
    if (isset($_POST['address'])) { // Teste si le champ existe
        $address = $_POST['address'];

        if (empty($address)) { // Teste si le champ est rempli
            $error['addressError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $address = test_input($address);
            $address = sanitizeString($address);

            //Teste que les données corresponde à la regex
            if (!preg_match(REGADDRESS, $address)) {
                $error['addressError'] = 'Que des lettres, des chiffres, des -, des \' ou des espaces';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Code postal
    if (isset($_POST['cp'])) { // Teste si le champ existe
        $cp = $_POST['cp'];

        if (empty($cp)) { // Teste si le champ est rempli
            $error['cpError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $cp = test_input($cp);
            $cp = sanitizeString($cp);

            //Teste que les données corresponde à la regex
            if (!preg_match(REGCP, $cp)) {
                $error['cpError'] = '5 Chiffres uniquement';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Ville
    if (isset($_POST['city'])) { // Teste si le champ existe
        $city = $_POST['city'];

        if (empty($city)) { // Teste si le champ est rempli
            $error['cityError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $city = test_input($city);
            $city = sanitizeString($city);

            //Teste que les données corresponde à la regex
            if (!regStrTest($city)) {
                $error['cityError'] = 'Que des lettres, des chiffres, des -, des \' ou des espaces';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Email
    if (isset($_POST['email'])) { // Teste si le champ existe
        $email = $_POST['email'];

        if (empty($email)) { // Teste si le champ est rempli
            $error['emailError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $email = test_input($email);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            //Teste que les données corresponde à la regex
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['emailError'] = 'Format d\'email non valide';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Téléphone
    if (isset($_POST['phone'])) { // Teste si le champ existe
        $phone = $_POST['phone'];

        if (empty($phone)) { // Teste si le champ est rempli
            $error['phoneError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $phone = test_input($phone);
            $phone = sanitizeString($phone);

            //Teste que les données corresponde à la regex
            if (!preg_match(REGPHONE, $phone)) {
                $error['phoneError'] = '10 chiffres uniquement';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Diplômes
    if (isset($_POST['diplome'])) { // Teste si le champ existe
        $diplome = $_POST['diplome'];

        if (empty($diplome)) { // Teste si le champ est rempli
            $error['diplomeError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $diplome = test_input($diplome);
            $diplome = sanitizeString($diplome);

            //Teste que les données corresponde à la regex
            if (!preg_match(REGSTRING, $diplome)) {
                $error['diplomeError'] = 'Uniquement des lettres, chiffres et le signe +';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Pôle emploi
    if (isset($_POST['poleEmploi'])) { // Teste si le champ existe
        $poleEmploi = $_POST['poleEmploi'];

        if (empty($poleEmploi)) { // Teste si le champ est rempli
            $poleEmploi = '';
        } else {

            // Si il est rempli, on nettoie les données
            $poleEmploi = test_input($poleEmploi);
            $poleEmploi = sanitizeString($poleEmploi);

            //Teste que les données corresponde à la regex
            if (!preg_match(REGPOLEEMPLOI, $poleEmploi)) {
                $error['poleEmploiError'] = 'Uniquement des lettres, chiffres et le signe +';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Badges
    if (isset($_POST['badges'])) { // Teste si le champ existe
        $badges = $_POST['badges'];

        if (empty($badges)) { // Teste si le champ est rempli, si il est vide on lui assigne la valeur 0
            $badges = 0;
        } else {

            // Si il est rempli, on nettoie les données
            $badges = test_input($badges);
            $badges = sanitizeString($badges);
            $badges = intval($badges);

            //Teste que les données corresponde à la regex
            if (!filter_var($badges, FILTER_VALIDATE_INT)) {
                $error['badgesError'] = 'Uniquement des chiffres';
            } 
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Codecademy
    if (isset($_POST['codecademy'])) { // Teste si le champ existe
        $codecademy = $_POST['codecademy'];

        if (empty($codecademy)) { // Teste si le champ est rempli
            $codecademy = '';
        } else {

            // Si il est rempli, on nettoie les données
            $codecademy = test_input($codecademy);
            $codecademy = filter_var($codecademy, FILTER_SANITIZE_URL);

            //Teste que les données corresponde à la regex
            if (!filter_var($codecademy, FILTER_VALIDATE_URL)) {
                $error['codecademyError'] = 'Url non valide (format http://... ou https://...)';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Texte 1
    if (isset($_POST['hero'])) { // Teste si le champ existe
        $hero = $_POST['hero'];

        if (empty($hero)) { // Teste si le champ est rempli
            $error['heroError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $hero = test_input($hero);
            $hero = sanitizeString($hero);

        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    // Teste et valide le champ Texte 2
    if (isset($_POST['hacks'])) { // Teste si le champ existe
        $hacks = $_POST['hacks'];

        if (empty($hacks)) { // Teste si le champ est rempli
            $error['hacksError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $hacks = test_input($hacks);
            $hacks = sanitizeString($hacks);

        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }

    if (isset($_POST['exp'])) { // Teste si le champ existe
        $exp = $_POST['exp'];

        if (empty($exp)) { // Teste si le champ est rempli
            $error['expError'] = 'Ce champs est requis';
        } else {

            // Si il est rempli, on nettoie les données
            $exp = test_input($exp);
            $exp = sanitizeString($exp);

            //Teste que les données corresponde à la regex
            if (!regStrTest($exp)) {
                $error['expError'] = 'Choisissez Oui ou Non';
            }
        }
    } else {
        $error['formError'] = 'Problème lors de l\'envoi du formulaire';
    }
} // fin de condition sur $_SERVER