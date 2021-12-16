<?php


var_dump($_POST);

// nous verifions si input submit est présent dans $_GET
if (isset($_POST["submit"])) {

    



    // je controle que le tableau d'erreur est vide 
    if (empty($arrayErrors)) {

        // je protege et je stock dans $name la valeur de l'input nom
        $name = htmlspecialchars($_POST['nom']);
        $firstname = htmlspecialchars($_POST['prenom']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $sujet = htmlspecialchars($arraySubjects[$_POST["sujet"]]);
        $demande = htmlspecialchars($_POST['demande']);

        // j'effectue une redirection avec comme parametre url nom=$name
        header("Location: info.php?nom=$name&prenom=$firstname&pseudo=$pseudo&sujet=$sujet&demande=$demande");
    }
}
