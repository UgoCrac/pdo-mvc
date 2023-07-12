<?php

$modeles = ModelePDO::getAll();
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['marque'])) {

    $modele = new Modele($_POST["id"], $_POST["marque"], $_POST["modele"], $_POST["carburant"]);

    $result = ModelePDO::insertOne($modele);

    if ($result == 1) {
        $message = "Les données ont été ajoutées avec succès.";
    } else {
        $message = "Une erreur s'est produite lors de l'ajout des données : ";
    }
}



echo $twig->render('modele.html.twig', [
    'modeles' => $modeles,
    'message' => $message
]);
