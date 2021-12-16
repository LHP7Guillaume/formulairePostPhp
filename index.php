<?php
require "controlerindex.php";
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
    <div class="row justify-content-center">
        <div class=" col-lg-4 mt-5">
            <h1 class="text-center">Contact</h1>
            <form class="mt-3" action="index.php" method="get" novalidate>
                <!-- nom -->
                <div class="m-1">
                    <label for="nom"> Nom :</label><span class="text-danger">
                        <!-- je verifie la clef nom dans mon tableau arrayErrors si oui je l'affiche -->
                        <?= $arrayErrors["nom"] ?? "" ?>
                    </span>
                    <div>
                        <!-- "><script>alert("boom")</script><img class=" -->
                        <!-- je test si input nom est present dans $_GET si oui je l'affiche en utilisant htmlspecialchars sinon je n'affiche rien -->
                        <input value="<?= isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "" ?>" type="text" id="nom" name="nom" required>
                    </div>
                </div>

                <!-- prenom -->
                <div class="m-1">
                    <label for="prenom"> prenom :</label><span class="text-danger">
                        <?= $arrayErrors["prenom"] ?? "" ?>
                    </span>
                    <div>
                        <input value="<?= isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "" ?>" type="text" id="prenom" name="prenom" required>
                    </div>
                </div>

                <!-- mail -->
                <div class="m-1">
                    <label for="pseudo"> Pseudo :</label><span class="text-danger">
                        <?= $arrayErrors["pseudo"] ?? "" ?>
                    </span>
                    <div>
                        <input value="<?= isset($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : "" ?>" type="text" id="pseudo" name="pseudo" required>
                    </div>
                </div>

                <!-- selection -->
                <div class="m-1">
                    <label for="sujet"> Sujet : </label><span class="text-danger">
                        <?= $arrayErrors["sujet"] ?? "" ?>
                    </span>
                    <select id="sujet" class="form-select" name="sujet" aria-label="permet de choisir son sujet">
                        <option selected disabled>--Menu--</option>
                        <?php foreach ($arraySubjects as $toto => $tata) { ?>
                            <option value="<?= $toto ?>" <?= isset($_GET["sujet"]) && $_GET["sujet"] == $toto ? "selected" : "" ?>><?= $tata ?></option>
                        <?php } ?>

                    </select>
                </div>


                <div class="m-1">
                    <label for="mail"> Votre demande :</label><span class="text-danger">
                        <?= $arrayErrors["demande"] ?? "" ?>
                    </span>
                    <textarea value="<?= isset($_GET["demande"]) ? htmlspecialchars($_GET["demande"]) : "" ?>" href="demande" name="demande" id="demande" class="form-control" aria-label="With textarea"></textarea>
                </div>


                <input type="submit" value="Envoyer" name="submit" class="btn btn-outline-secondary ">
            </form>
        </div>
    </div>
</body>

</html>