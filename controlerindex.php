<?php
$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,25}$/u";

$regexDemande = "/^.{1,200}$/u";

// Tableau vide qui va nous permettre de stocker les erreurs 
$arrayErrors = [];
$arraySubjects = [
    1 => "Information",
    7 => "Prix",
    3 => "Autre"
];

var_dump($_POST);

// nous verifions si input submit est présent dans $_GET
if (isset($_POST["submit"])) {

    // nous verifions si input nom est présent dans $_GET
    if (isset($_POST["nom"])) {

        // a l'aide de la fonction empty je verifie que l'input nom n'est pas vide 
        if (empty($_POST["nom"])) {

            // je crée une clef nom dans tableau d'erreur avec un message 
            $arrayErrors["nom"] = "Veuillez indiquer votre nom";

            // je verifie a l'aide de la fonction !preg_match() si l'input ne correspond pas
        } elseif (!preg_match($regexName, $_POST["nom"])) {

            // je crée une clef nom dans tableau d'erreur avec un message
            $arrayErrors["nom"] = "Format invalide";
        }
    }

    if (isset($_POST["prenom"])) {
        if (empty($_POST["prenom"])) {
            $arrayErrors["prenom"] = "Veuillez indiquer votre prenom";
        } elseif (!preg_match($regexName, $_POST["prenom"])) {
            $arrayErrors["prenom"] = "Format invalide";
        }
    }

    if (isset($_POST["sujet"])) {

        // nous controlons que la clef existe dans $_GET, si elle n'existe pas nous affichons un message d'erreur
        if (!array_key_exists($_POST["sujet"], $arraySubjects)) {
            $arrayErrors["sujet"] = "Veuillez choisir un sujet valide";
        }
    } else {
        $arrayErrors["sujet"] = "Veuillez indiquer votre sujet";
    }


    if (isset($_POST["pseudo"])) {
        if (empty($_POST["pseudo"])) {
            $arrayErrors["pseudo"] = "Veuillez indiquer votre pseudo";
        } elseif (!preg_match($regexName, $_POST["pseudo"])) {
            $arrayErrors["pseudo"] = "Format invalide";
        }
    }


    if (isset($_POST["demande"])) {
        if (empty($_POST["demande"])) {
            $arrayErrors["demande"] = "Veuillez indiquer votre demande";
        } elseif (!preg_match($regexDemande, $_POST["demande"])) {
            $arrayErrors["demande"] = "Format invalide";
        }
    }





    
}
