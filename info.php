<?php

require "controlerinfo.php";

// si nous n'avons de parametre URL nom/prenom/mail/sujet/demande nous retournons sur index.PHP
if (!isset($_GET['nom'], $_GET['prenom'], $_GET['mail'], $_GET['sujet'], $_GET['demande'])) {
    header("Location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <title>Formulaire</title>
</head>

<body>
    <div class="row justify-content-center text-white">

        <h1 class="col-lg-12 text-center pb-3 pt-3 bg-secondary">Infos</h1>

        <p class="col-lg-12 text-center pb-3 pt-3 bg-secondary">Votre demande à bien été prise en compte.</p>
    </div>

    <div class="row justify-content-center text-white">

        <div class="col-lg-2 text-center pb-3 pt-3 bg-secondary">

            <span class="p-2 border border-info">Recap : </span>


            <p class="mt-5">Nom : <br><?= htmlspecialchars($_GET['nom']) ?></p>
            <p class="mt-5">Prenom : <br><?= htmlspecialchars($_GET['prenom']) ?></p>
            <p class="mt-5">Pseudo : <br><?= htmlspecialchars($_GET['pseudo']) ?></p>
            <p class="mt-5">Sujet : <br><?= htmlspecialchars($_GET['sujet']) ?></p>
            <p class="mt-5">Demande : <br><?= htmlspecialchars($_GET['demande']) ?></p>


            <a href="index.php" type="submit" value="ok" class="mt-5 btn btn-outline-secondary ">Retour</a>

        </div>
    </div>
</body>

</html>